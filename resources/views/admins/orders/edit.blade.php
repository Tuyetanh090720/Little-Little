@extends('layouts.admins')
@section('edit-orders')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Sửa Khách hàng</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.orders.lists')}}">Liên hệ</a></li>
            <li class="breadcrumb-item">Sửa</li>
        </ol>
        <section class="content">
            <div class="container-fluid" id="edit">
                <form action="/admins/orders/edit/{{$order->orderId}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="orderId">ID đơn mua vé</label>
                            <input type="text" name="orderId" class="form-control" id="orderId" value="{{$order->orderId}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="customerName">Tên khách hàng</label>
                            <input type="text" name="customerName" class="form-control" id="customerName" value="{{$order->customerName}}">
                        </div>
                        <div class="form-group">
                            <label for="customerPhone">Số điện thoại khách hàng</label>
                            <input type="text" name="customerPhone" class="form-control" id="customerPhone" value="{{$order->customerPhone}}" >
                        </div>
                        <div class="form-group">
                            <label for="customerEmail">Email khách hàng</label>
                            <input type="text" name="customerEmail" class="form-control" id="customerEmail" value="{{$order->customerEmail}}" >
                        </div>
                        <div class="package-dropdown">
                            <label for="ticketTypeName">Loại vé</label>
                            <input type="text" name="ticketTypeName" class="form-control" id="ticketTypeName" value="{{$order->ticketTypeName}}" readonly >
                        </div>
                        <div class="form-group">
                            <label for="money">Số tiền</label>
                            <input type="text" name="money" class="form-control" id="money" value="{{$order->money}}" readonly >
                        </div>
                        <div class="form-group">
                            <label for="quantity">Số lượng vé</label>
                            <input type="text" name="quantity" class="form-control" id="quantity" value="{{$order->quantity}}" min='1' onchange="ChangeQuantity(event)" >
                        </div>
                        <div class="form-group">
                            <label for="totalMoney">Tổng tiền</label>
                            <input type="text" name="totalMoney" class="form-control" id="totalMoney" value="{{$order->totalMoney}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="validate">Ngày sử dụng</label>
                            <input type="text" name="validate" class="form-control" id="validate" value="{{$orderDetail->validate}}" >
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Số thẻ</label>
                            <input type="text" name="cardNumber" class="form-control" id="cardNumber" value="{{$order->cardNumber}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cardName">Tên thẻ</label>
                            <input type="text" name="cardName" class="form-control" id="cardName" value="{{$order->cardName}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cardExpiryMonth">Tháng hết hạn</label>
                            <input type="text" name="cardExpiryMonth" class="form-control" id="cardExpiryMonth" value="{{$order->cardExpiryMonth}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cardExpiryYear">Năm hết hạn</label>
                            <input type="text" name="cardExpiryYear" class="form-control" id="cardExpiryYear" value="{{$order->cardExpiryYear}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="paymentStatus">Trạng thái vé</label>
                            <input type="text" name="paymentStatus" class="form-control" id="expiration" value="{{$order->paymentStatus}}" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>
<script src="{{asset('assets/clients/js/money.js')}}"></script>
@endsection
