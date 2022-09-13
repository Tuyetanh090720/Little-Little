<?php

namespace App\Http\Controllers\clients;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticketType;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\customer;
use DB;
use QrCode;
use Carbon\Carbon;
use PDF;
use Mail;
use App\Mail\SendMail;

class PaymentController extends Controller
{
    public function showPayment(Request $rq){
        $rq -> validate(
            [
                'quantity' => 'required|integer|min:1',
                'date' => 'required|after:tomorrow',
                'fullname' => 'required|min:4|max:50',
                'phone' => 'required|numeric',
                'email' => 'required|email',
            ],
            [
                'required' => 'Vui lòng nhập dữ liệu',
                'quantity.min' => 'Số lượng lớn hơn 0',
                'fullname.min' => 'Tên phải dài hơn 4 ký tự',
                'fullname.max' => 'Tên phải ngắn hơn 50 ký tự',
                'after' => 'Phải nhập sau ngày hôm nay',
                'numeric' => 'Phải nhập số',
                'email' => 'Phải nhập email',
            ]
        );

        // Lay thong tin POST
        $quantity = $rq->quantity;
        $package = $rq->package;
        $ticketType = new ticketType();
        $ticketTypeList = $ticketType->getAllTicketTypes();

        foreach($ticketTypeList as $item){
            if($package == $item->ticketTypeName){
                $money = $item->money;
            }
        }

        $fullname = $rq->input('fullname');
        $phone = $rq->input('phone');
        $email = $rq->input('email');
        $date = $rq->date;

        return view('clients.payment', compact('package', 'quantity', 'money', 'date', 'fullname', 'phone', 'email'));
    }

    // $rq -> validate(
    //     [
    //         'quantity' => 'required|integer|min:1',
    //         'date' => 'required|after:tomorrow',
    //         'customerName' => 'required|min:6|max:50',
    //         'customerPhone' => 'required|numeric',
    //         'customerEmail' => 'required|email',
    //         'cardNumber' => 'required|numeric|digits:12|digits:19',
    //         'cardName' => 'required|min:4|max:50',
    //         'date' => 'required',
    //         'CVC' => 'required|digits:4',
    //     ],
    //     [
    //         'required' => 'Vui lòng nhập dữ liệu',
    //         'quantity.min' => 'Số lượng lớn hơn 0',
    //         'customerName.min' => 'Tên phải dài hơn 4 ký tự',
    //         'customerName.max' => 'Tên phải ngắn hơn 50 ký tự',
    //         'cardName.min' => 'Tên phải dài hơn 4 ký tự',
    //         'cardName.max' => 'Tên phải ngắn hơn 50 ký tự',
    //         'cardNumber.digits' => 'Số tài khoản phải 12 hoặc 19 ký tự',
    //         'CVC.digits' => 'CVC phải 4 ký tự',
    //         'after' => 'Phải nhập sau ngày hôm nay',
    //         'numeric' => 'Phải nhập số',
    //         'email' => 'Phải nhập email',
    //     ]
    // );

    public function payment(Request $rq){
        $customer = new customer();
        $order = new order();
        $orderDetail = new orderDetail();
        $ticketType = new ticketType();


        $package = $rq->package;
        $quantity = $rq->quantity;
        $date = $rq->date;

        $arrdate = ['updated_at' => date('Y-m-d'), 'created_at' => date('Y-m-d')];

        // thêm khách hàng và lấy id khách hàng đó
        $customerData = array_merge($rq->only('customerName', 'customerPhone', 'customerEmail'), $arrdate);
        $customerId = $customer->insertGetId($customerData);
        $customerEmail = $customer->getCustomer($customerId)->customerEmail;

        // lấy id loại vé đã chọn
        $ticketTypeId = $ticketType->getTicketTypeID($package);
        $arrayCT = ['customerId'=>$customerId, 'ticketTypeId'=>$ticketTypeId];

        // thêm order và lấy id order đó
        $a = explode('/',$rq->expiration);
        $dt = Carbon::create($a[2], $a[1], $a[0], 0);
        $expiration = $dt->toDateString();

        $arrayO = ['expiration' => $expiration, 'CVC' => $rq->CVC, 'paymentStatus' => "Chưa thanh toán"];
        $orderData = array_merge($arrayCT, $rq->only('totalMoney', 'quantity', 'cardNumber', 'cardName'), $arrayO, $arrdate);
        $orderId =  $order->insertGetId($orderData);

        // thêm orderDetail
        $ticketStatus = "Chưa sử dụng";

        $v = explode('-',$rq->validate);
        $vd = Carbon::create($v[2], $v[1], $v[0], 0);
        $validate = $vd->toDateString();

        $arrayOD = ['orderId'=>$orderId,'validate' => $validate, 'ticketStatus'=>$ticketStatus];
        $orderDTData = array_merge($arrayOD, $arrdate);

        for($i = 0; $i < $quantity; $i++){
            $orderDetailId = $orderDetail->addOrderDetails($orderDTData);
            $orderDetailList = $orderDetail->getOrderDetails($orderId);
        }

        return view('clients.paymentSuccess', compact('orderDetailList', 'quantity', 'orderId', 'customerEmail'));
    }

    public function download($flag=null, $quantity=null, $orderId=null, $customerEmail=null){
        $pdf = \App::make('dompdf.wrapper');
        $orderDetail = new orderDetail();

        for($i = 0; $i < $quantity; $i++){
            $orderDetailList = $orderDetail->getOrderDetails($orderId);
        }

        $a = view('clients.ticket', compact('quantity', 'orderDetailList', 'orderId', 'customerEmail'));

        if($flag == "pdf"){
            $pdf = PDF::loadHTMl($a)
            ->setOptions(['defaultFont' => 'Montserrat'])
            ->setPaper('f4', 'potrait')
            ->setWarnings(false)
            ->save('ticket.pdf', 'UTF-8');
            return $pdf->stream('ticket.pdf');
        }
        if($flag == "email"){
            $mailable = new SendMail($quantity, $orderDetailList, $orderId, $customerEmail);

            Mail::to($customerEmail)->send($mailable);

            return view('clients.paymentSuccess', compact('orderDetailList', 'quantity', 'orderId', 'customerEmail'));
        }
    }
}
