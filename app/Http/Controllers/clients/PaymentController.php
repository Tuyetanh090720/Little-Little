<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticketType;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\customer;
use DB;
use QrCode;


class PaymentController extends Controller
{
    public function showPayment(Request $rq){
        // Lay thong tin POST

        $quantity = $rq->quantity;

        // Lay loai ve va gia tien tu db
        $package = $rq->package;
        $ticketType = new ticketType();
        $ticketTypeList = $ticketType->getAllTicketTypes();

        foreach($ticketTypeList as $item){
            if($package == $item->ticketTypeName){
                $money = $item->money;
            }
        }

        $date = $rq->date;
        $fullname = $rq->input('fullname');
        $phone = $rq->input('phone');
        $email = $rq->input('email');

        return view('clients.payment', compact('package', 'quantity', 'money', 'date', 'fullname', 'phone', 'email'));
    }

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

        // lấy id loại vé đã chọn
        $ticketTypeId = $ticketType->getTicketTypeID($package);
        $arrayCT = ['customerId'=>$customerId, 'ticketTypeId'=>$ticketTypeId];

        // thêm order và lấy id order đó
        $arrayO = ['expiration' => date_create($rq->expiration), 'CVC' => $rq->CVC, 'paymentStatus' => "Chưa thanh toán"];
        $orderData = array_merge($arrayCT, $rq->only('totalMoney', 'quantity', 'cardNumber', 'cardName'), $arrayO, $arrdate);
        $orderId =  $order->insertGetId($orderData);

        // thêm orderDetail
        $ticketStatus = "Chưa sử dụng";
        $arrayOD = ['orderId'=>$orderId,'validate' => date_create($rq->validate), 'ticketStatus'=>$ticketStatus];
        $orderDTData = array_merge($arrayOD, $arrdate);

        for($i = 0; $i < $quantity; $i++){
            $orderDetailId = $orderDetail->addOrderDetails($orderDTData);
            $orderDetailList = $orderDetail->getOrderDetails($orderId);
        }

        return view('clients.paymentSuccess', compact('orderDetailList', 'quantity'));
    }
}
