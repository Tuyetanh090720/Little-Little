@extends('layouts.admins')
@section('lists-orders')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Danh Sách Đơn Mua Vé</h1>
        <ol class="breadcrumb mb-g4">
            <li class="breadcrumb-item active"><a href="{{route('admins.')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admins.orders.lists')}}">Đơn mua vé</a></li>
            <li class="breadcrumb-item">Danh sách</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách đơn mua vé
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>orderId</th>
                                <th>customerName</th>
                                <th>customerPhone</th>
                                <th>customerEmail</th>
                                <th>ticketTypeName</th>
                                <th>money</th>
                                <th>quantity</th>
                                <th>totalMoney</th>
                                <th>validate</th>
                                <th>cardNumber</th>
                                <th>cardName</th>
                                <th>cardExpiryMonth</th>
                                <th>cardExpiryYear</th>
                                <th>paymentStatus</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($ordersList))
                                @foreach ($ordersList as $item)
                                <tr>
                                    <td>{{$item->orderId}}</td>
                                    <td>{{$item->customerName}}</td>
                                    <td>{{$item->customerPhone}}</td>
                                    <td>{{$item->customerEmail}}</td>
                                    <td>{{$item->ticketTypeName}}</td>
                                    <td>{{$item->money}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->totalMoney}}</td>
                                    @foreach ($orderDetailList as $rel)
                                        @if ($rel->orderId == $item->orderId)
                                            <td>{{$rel->validate}}</td>
                                            @break
                                        @endif
                                    @endforeach
                                    <td>{{$item->cardNumber}}</td>
                                    <td>{{$item->cardName}}</td>
                                    <td>{{$item->cardExpiryMonth}}</td>
                                    <td>{{$item->cardExpiryYear}}</td>
                                    <td>{{$item->paymentStatus}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="/admins/orders/edit/{{$item->orderId}}">Edit</a></td>
                                    <td><a href="/admins/orders/delete/{{$item->orderId}}">Delete</a></td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="4">Không có đơn hàng</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
