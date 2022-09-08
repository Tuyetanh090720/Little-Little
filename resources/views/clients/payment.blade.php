@extends('layouts.clients')
@section('payment')
<div class="container">
    <div class="title-event">
        <span>Thanh toán</span>
    </div>
    <div class="content-item">
        <form class="row" name="payment" action="/paymentSuccess" method="POST">
            @csrf
            <div class="background-block col-lg-8 col-md-8">
                <div class="border-block">
                    <div class="callout badge badge-curve">
                        <div class="badge-inner on-sale">
                            <span class="title-ticket">Vé cổng - {{$package}}
                                <input type="hidden" name="package" value="{{$package}}">
                            </span>
                        </div>
                    </div>
                    <div class="payment-form row">
                        <div class="form-group col-lg-5 col-md-5">
                            <label for="totalMoney">Số tiền thanh toán</label><br/>
                            <input type="hidden" class="money" name="money" id="money" value="{{$money}}"/>
                            <input type="text" class="totalMoney" name="totalMoney" id="totalMoney" value="{{$money * $quantity}}" readonly/>
                        </div>
                        <div class="form-group col-lg-3 col-md-3">
                            <label for="quantity">Số lượng vé</label><br/>
                            <input type="number" class="quantity" name="quantity" id="quantity" value="{{$quantity}}" min='1' onchange="ChangeQuantity(event)" required />
                            <span>Vé</span>
                            @error('quantity')
                                <span class="error"> *{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="date">Ngày sử dụng</label><br/>
                            <input type="datetime" class="date" name="date" id="date" value="{{$date}}" required/>
                            <a id="btn-calendar"><i class="fa fa-calendar"></i></a>
                            @error('date')
                                <span class="error"> *{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <label for="customerName">Thông tin liên hệ</label><br/>
                            <input type="text" class="customerName" id="payname" name="customerName" value="{{$fullname}}" required/>
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <label for="customerPhone">Điện thoại</label><br/>
                            <input type="text" class="customerPhone" name="customerPhone" value="{{$phone}}" required/>
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <label for="customerEmail">Email</label><br/>
                            <input type="email" class="customerEmail" name="customerEmail" value="{{$email}}" required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-block col-lg-4 col-md-4">
                <div class="information-detail border-block">
                    <div class="callout badge badge-curve">
                        <div class="badge-inner on-sale">
                            <span class="title-ticket">Thông tin thanh toán</span>
                        </div>
                    </div>
                    <div class="payment-information">
                        <div class="form-group">
                            <label for="card-number">Số thẻ</label><br/>
                            <input type="text" class="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required/>
                        </div>
                        <div class="form-group">
                            <label for="namecard">Họ tên chủ thẻ</label><br/>
                            <input type="text" class="cardName" name="cardName" placeholder="NGUYEN VAN A" required/>
                        </div>
                        <div class="form-group">
                            <label for="expiry-date">Ngày hết hạn</label><br/>
                            <input type="text" class="expiration" name="expiration" placeholder="05/2025" required/>
                        </div>
                        <div class="form-group">
                            <label for="CVC">CVV/CVC</label><br/>
                            <input type="password" class="CVC" name="CVC" placeholder="***" required/>
                        </div>
                        <button type="submit" class="payment">Thanh toán</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="decord-item">
        <img src="{{asset('assets/clients/img/Trini_Arnold_Votay1 2.png')}}" alt="" class="payment-image">
    </div>
    @include('clients.calendar')
</div>
<script src="{{asset('assets/clients/js/calendar.js')}}"></script>
<script src="{{asset('assets/clients/js/money.js')}}"></script>


@endsection
