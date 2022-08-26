@extends('layouts.clients')
@section('payment')
<div class="container">
    <div class="title-event">
        <span>Thanh toán</span>
    </div>
    <div class="content-item">
        <div class="row">
            <div class="background-block col-lg-8 col-md-8">
                <div class="border-block">
                    <div class="callout badge badge-curve">
                        <div class="badge-inner on-sale">
                            <span class="title-ticket">Vé cổng - {{$package}}</span>
                        </div>
                    </div>
                    <div class="payment-form">
                        <form class="row" name="payment" action="">
                            @csrf
                            <div class="form-group col-lg-5 col-md-5">
                                <label for="money">Số tiền thanh toán</label><br/>
                                <input type="text" class="money" name="money" Value="{{$money}}" required/>
                            </div>
                            <div class="form-group col-lg-3 col-md-3">
                                <label for="quantity">Số lượng vé</label><br/>
                                <input type="text" class="quantity" name="quantity" value="{{$quantity}}" required/>
                                <span>Vé</span>
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="date">Ngày sử dụng</label><br/>
                                <input type="datetime" class="date" name="date" value="{{$date}}" required/>
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="fullname">Thông tin liên hệ</label><br/>
                                <input type="text" class="fullname" id="payname" name="fullname" value="{{$fullname}}" required/>
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="phone">Điện thoại</label><br/>
                                <input type="text" class="phone" name="phone" value="{{$phone}}" required/>
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="email">Email</label><br/>
                                <input type="email" class="email" name="email" value="{{$email}}" required/>
                            </div>
                        </form>
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
                        <form name="">
                            <div class="form-group">
                                <label for="card-number">Số thẻ</label><br/>
                                <input type="text" class="card-number" name="card-number" placeholder="1234 5678 9012 3456" required/>
                            </div>
                            <div class="form-group">
                                <label for="namecard">Họ tên chủ thẻ</label><br/>
                                <input type="text" class="namecard" name="namecard" placeholder="NGUYEN VAN A" required/>
                            </div>
                            <div class="form-group">
                                <label for="expiry-date">Ngày hết hạn</label><br/>
                                <input type="text" class="expiry-date" name="expiry-date" placeholder="05/2025" required/>
                                <a id="btn-calendar"><i class="fa fa-calendar"></i></a>
                            </div>
                            <div class="form-group">
                                <label for="CVC">CVV/CVC</label><br/>
                                <input type="text" class="CVC" name="CVC" placeholder="***" required/>
                            </div>
                            <button type="submit" class="payment"><a href="/paymentSuccess">Thanh toán</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decord-item">
        <img src="{{asset('assets/clients/img/Trini_Arnold_Votay1 2.png')}}" alt="" class="payment-image">
    </div>
    @include('clients.calendar')
</div>
<script src="{{asset('assets/clients/js/calendar.js')}}"></script>

@endsection
