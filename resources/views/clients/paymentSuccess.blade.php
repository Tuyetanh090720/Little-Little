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
                                @if ($quantity == 1)
                                    <div class="slide" id="slide" style="width: 30%">
                                        @foreach ($orderDetailList as $item)
                                        <div class="col-md-{{12/$quantity}} col-sm-6 sol-xs-6 pro-loop">
                                            <div class="block">
                                                <div class="event-img qr-img image-resize view view-third ">
                                                    <a href=" ">
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate('.'$item->orderDetailId'.')) !!}">
                                                    </a>
                                                </div>
                                                <div class="ticket-information">
                                                    <h3 class="ticket-name ">ALT{{$item->orderDetailId}}</h3>
                                                    <span class="ticket-type ">Vé cổng</span><br/>
                                                    <span>---</span><br/>
                                                    <span class="ticket-date ">Ngày sử dụng: {{$item->validate}}</span><br/>
                                                    <i class="fa fa-check-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                @endif
                                @if ($quantity < 4 && $quantity > 1)
                                    <div class="slide" id="slide" style="width: 50%">
                                        @foreach ($orderDetailList as $item)
                                        <div class="col-md-{{12/$quantity}} col-sm-6 sol-xs-6 pro-loop">
                                            <div class="block">
                                                <div class="event-img qr-img image-resize view view-third ">
                                                    <a href=" ">
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate('.'$item->orderDetailId'.')) !!} ">                                                    </a>
                                                </div>
                                                <div class="ticket-information">
                                                    <h3 class="ticket-name ">ALT{{$item->orderDetailId}}</h3>
                                                    <span class="ticket-type ">Vé cổng</span><br/>
                                                    <span>---</span><br/>
                                                    <span class="ticket-date ">Ngày sử dụng: {{$item->validate}}</span><br/>
                                                    <i class="fa fa-check-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                @endif
                                @if($quantity >= 4 )
                                    <div class="slide" id="slide" style="width: 100%">
                                        @foreach ($orderDetailList as $item)
                                        <div class="col-md-3 col-sm-6 sol-xs-6 pro-loop">
                                            <div class="block">
                                                <div class="event-img qr-img image-resize view view-third ">
                                                    <a href=" ">
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate('.'$item->orderDetailId'.')) !!} ">
                                                    </a>
                                                </div>
                                                <div class="ticket-information">
                                                    <h3 class="ticket-name ">ALT{{$item->orderDetailId}}</h3>
                                                    <span class="ticket-type ">Vé cổng</span><br/>
                                                    <span>---</span><br/>
                                                    <span class="ticket-date ">Ngày sử dụng: {{$item->validate}}</span><br/>
                                                    <i class="fa fa-check-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                @endif
                                <button class="arrow left-arrow" id="left-arrow">
                                <i class="fa fa-chevron-left"></i>
                                </button>
                                <button class="arrow right-arrow" id="right-arrow">
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
        <button class="down-ticket">
            <a href="{{route('clients.download', ['flag'=>'pdf', 'quantity'=>$quantity, 'orderId'=>$orderId, 'customerEmail'=>$customerEmail])}}">Tải về</a>
        </button>
        <button class="mail-ticket">
            <a href="{{route('clients.download', ['flag'=>'email', 'quantity'=>$quantity, 'orderId'=>$orderId, 'customerEmail'=>$customerEmail])}}">Gửi mail</a>
        </button>
    </div>
    <div class="decord-item">
        <img src="{{asset('assets/clients/img/alvinarnoldvotay112351-zko9-600w.png')}}" alt="" class="payment-image">
    </div>
</div>
<script src="{{asset('assets/clients/js/slide.js')}}"></script>
@endsection
