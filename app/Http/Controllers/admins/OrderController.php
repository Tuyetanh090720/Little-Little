<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\customer;
use App\Models\orderDetail;
use App\Models\ticketType;

class OrderController extends Controller
{
    public function index()
    {
        $orders = new order();
        $orderDetails = new orderDetail();

        $ordersList = $orders->getAllOdersNDetails();
        $orderDetailList = $orderDetails->getAllOrderDetails();

        return view('admins.orders.lists', compact('ordersList', 'orderDetailList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $orders = new order();
        $customers = new customer();
        $orderDetails = new orderDetail();
        $ticketTypes = new ticketType();

        $order = $orders->getOdersNDetails($id);

        $orderDetail = $orderDetails->getOneOrderDetail($id);

        $ticketTypeList = $ticketTypes->getAllTicketTypes();

        return view('admins.orders.edit', compact('order', 'orderDetail', 'ticketTypeList'));
    }

    public function update(Request $request, $orderId)
    {
        $orders = new order();
        $customers = new customer();
        $orderDetails = new orderDetail();

        $update_at = ['updated_at' => date('Y-m-d')];

        // gán dữ liệu gửi lên vào biến data
        $dataO = array_merge($request->only('customerId', 'ticketTypeId', 'quantity', 'cardNumber', 'cardName', 'expiration', 'CVC', 'paymentStatus',  'created_at'), $update_at);

        $dataC = array_merge($request->only('customerName', 'customerPhone', 'customerEmail', 'created_at'), $update_at);

        $dataOD = array_merge($request->only('orderId', 'validate', 'ticketStatus', 'created_at'), $update_at);

        $updateOrder = $orders->updateOrder($dataO, $orderId);

        $customerId = $orders->getOrder($orderId)->customerId;
        $updateCustomer = $customers->updateCustomer($dataC, $customerId);

        $orderDetailId = $orderDetails->getOneOrderDetail($orderId)->orderDetailId;
        $updateOD = $orderDetails->updateOrderDetail($dataOD, $orderDetailId);

        return redirect()->route('admins.orders.lists');
    }

    public function delete($id)
    {
        $orders = new order();
        $orderDetails = new orderDetail();

        $deleteO = $orders->deleteOrder($id);
        $deleteOD = $orderDetails->deleteOrderDetail($id);

        return redirect()->route('admins.orders.lists');
    }
}
