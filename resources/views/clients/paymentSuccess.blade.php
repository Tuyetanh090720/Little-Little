@extends('layouts.clients')
@section('payment')
<div class="container">
    <div class="title-event">
        <span>Thanh toán thành công</span>
    </div>
    <div class="content-item background-block">
        <div class="border-block">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-8">
                    <div class="main-content">
                        <div class="ticket-list">
                            <div class="row">
                                <div class="slide" id="slide">
                                    <div class="col-md-3 col-sm-6 sol-xs-6 pro-loop">
                                        <div class="block">
                                            <div class="event-img qr-img image-resize view view-third ">
                                                <a href=" ">
                                                    <img src="{{asset('assets/clients/img/image31905-573-200w.png')}}" alt="" class="event-1">
                                                </a>
                                            </div>
                                            <div class="ticket-information">
                                                <h3 class="ticket-name ">ALT20210501</h3>
                                                <span class="ticket-type ">Vé cổng</span><br/>
                                                <span>---</span><br/>
                                                <span class="ticket-date ">Ngày sử dụng: 31/05/2021</span><br/>
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 sol-xs-6 pro-loop">
                                        <div class="block">
                                            <div class="event-img qr-img image-resize view view-third ">
                                                <a href=" ">
                                                    <img src="{{asset('assets/clients/img/image31906-350l-200w.png')}}" alt="" class="event-1">
                                                </a>
                                            </div>
                                            <div class="ticket-information">
                                                <h3 class="ticket-name ">ALT20210501</h3>
                                                <span class="ticket-type ">Vé cổng</span><br/>
                                                <span>---</span><br/>
                                                <span class="ticket-date ">Ngày sử dụng: 31/05/2021</span><br/>
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 sol-xs-6 pro-loop">
                                        <div class="block">
                                            <div class="event-img qr-img image-resize view view-third ">
                                                <a href=" ">
                                                    <img src="{{asset('assets/clients/img/image31906-te1-200w.png')}}" alt="" class="event-1">
                                                </a>
                                            </div>
                                            <div class="ticket-information">
                                                <h3 class="ticket-name ">ALT20210501</h3>
                                                <span class="ticket-type ">Vé cổng</span><br/>
                                                <span>---</span><br/>
                                                <span class="ticket-date ">Ngày sử dụng: 31/05/2021</span><br/>
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 sol-xs-6 pro-loop">
                                        <div class="block">
                                            <div class="event-img qr-img image-resize view view-third ">
                                                <a href=" ">
                                                    <img src="{{asset('assets/clients/img/image31906-z5e3-200w.png')}}" alt="" class="event-1">
                                                </a>
                                            </div>
                                            <div class="ticket-information">
                                                <h3 class="ticket-name ">ALT20210501</h3>
                                                <span class="ticket-type ">Vé cổng</span><br/>
                                                <span>---</span><br/>
                                                <span class="ticket-date ">Ngày sử dụng: 31/05/2021</span><br/>
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="deal-arrow deal-left-arrow">
                                <i class="fa fa-chevron-left"></i>
                                </button>
                                <button class="deal-arrow deal-right-arrow">
                                <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="get-ticket">
        <button class="down-ticket"><a href="">Tải về</a></button>
        <button class="mail-ticket"><a href="">Gửi mail</a></button>
    </div>
    <div class="decord-item">
        <img src="{{asset('assets/clients/img/alvinarnoldvotay112351-zko9-600w.png')}}" alt="" class="payment-image">
    </div>
</div>
@endsection
