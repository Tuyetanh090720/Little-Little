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
                            <span class="title-ticket">Vé cổng - Vé gia đình</span>
                        </div>
                    </div>
                    <div class="payment-form">
                        <form class="row">
                            <div class="form-group col-lg-5 col-md-5">
                                <label for="money">Số tiền thanh toán</label><br/>
                                <input type="text" class="money" name="money" Value="600000" />
                            </div>
                            <div class="form-group col-lg-3 col-md-3">
                                <label for="quantity">Số lượng vé</label><br/>
                                <input type="text" class="quantity" name="quantity" value="4" />
                                <span>Vé</span>
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="date">Ngày sử dụng</label><br/>
                                <input type="datetime" class="date" name="date" value="30/5/2021" />
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="fullname">Thông tin liên hệ</label><br/>
                                <input type="text" class="fullname" name="fullname" value="Nguyễn Thị Ngọc Tuyền" />
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="phone">Điện thoại</label><br/>
                                <input type="text" class="phone" name="phone" value="012456789" />
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="email">Email</label><br/>
                                <input type="email" class="email" name="email" value="example@gmail.com" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="background-block col-lg-4 col-md-4">
                <div class="information-detail border-block">
                    <div class="callout badge badge-curve">
                        <div class="badge-inner on-sale">
                            <span class="title-ticket">Vé của bạn</span>
                        </div>
                    </div>
                    <div class="payment-information">
                        <form>
                            <div class="form-group">
                                <label for="card-number">Số thẻ</label><br/>
                                <input type="text" class="card-number" name="card-number" Value="3641 4513 4369 7895" />
                            </div>
                            <div class="form-group">
                                <label for="namecard">Họ tên chủ thẻ</label><br/>
                                <input type="text" class="namecard" name="namecard" Value="NGUYEN THI NGOC HUYEN" />
                            </div>
                            <div class="form-group">
                                <label for="expiry-date">Ngày hết hạn</label><br/>
                                <input type="text" class="expiry-date" name="expiry-date" Value="05/2025" />
                                <a id="btn-calendar"><i class="fa fa-calendar"></i></a>
                            </div>
                            <div class="form-group">
                                <label for="CVC">CVV/CVC</label><br/>
                                <input type="text" class="CVC" name="CVC" Value="***" />
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
