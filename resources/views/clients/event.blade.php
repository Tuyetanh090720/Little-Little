@extends('layouts/clients')
@section('event')
<div class="container">
    <div class="title-event">
        <span>Sự kiện nổi bật</span>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-8">
            <div class="main-content">
                <div class="event-list">
                    <div class="row content-event">
                        @if ($length == 1)
                            <div class="slide" id="slide">
                                @foreach ($eventList as $item)
                                    <div class="col-md-{{12/$length}} col-sm-6 sol-xs-6 pro-loop">
                                        <div class="block">
                                            <div class="event-img image-resize view view-third ">
                                                <a href=" ">
                                                    <img src="{!! asset("storage/img/$item->eventId.png") !!}" alt="" class="event-1">
                                                </a>
                                            </div>
                                            <div class="event-information">
                                                <h3 class="event-name ">Sự kiện {{$count++}}</h3>
                                                <span class="event-address ">Đầm sen park</span><br/>
                                                <i class="fa fa-calendar"></i>
                                                <span class="event-date ">{{$item->start_at}}-{{$item->end_at}}</span>
                                                <div class="event-price ">25000 VNĐ</div>
                                                <div class="detail">
                                                    <a href="/event/{{$item->eventId}}" >Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if ($length < 4 && $length > 1)
                        <div class="slide" id="slide">
                            @foreach ($eventList as $item)
                                <div class="col-md-{{12/$length}} col-sm-6 sol-xs-6 pro-loop">
                                    <div class="block">
                                        <div class="event-img image-resize view view-third ">
                                            <a href=" ">
                                                <img src="{!! asset("storage/img/$item->eventId.jpg") !!}" alt="" class="event-1">
                                            </a>
                                        </div>
                                        <div class="event-information">
                                            <h3 class="event-name ">Sự kiện {{$count++}}</h3>
                                            <span class="event-address ">Đầm sen park</span><br/>
                                            <i class="fa fa-calendar"></i>
                                            <span class="event-date ">30/05/2021-1/6/2021</span>
                                            <div class="event-price ">25000 VNĐ</div>
                                            <div class="detail">
                                                <a href="/event/{{$item->eventId}}" >Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                        @if ($length >= 4)
                        <div class="slide" id="slide">
                            @foreach ($eventList as $item)
                                <div class="col-md-{{12/$length}} col-sm-6 sol-xs-6 pro-loop">
                                    <div class="block">
                                        <div class="event-img image-resize view view-third ">
                                            <a href=" ">
                                                <img src="{!! asset("storage/img/$item->eventId.jpg") !!}" alt="" class="event-1">
                                            </a>
                                        </div>
                                        <div class="event-information">
                                            <h3 class="event-name ">Sự kiện {{$count++}}</h3>
                                            <span class="event-address ">Đầm sen park</span><br/>
                                            <i class="fa fa-calendar"></i>
                                            <span class="event-date ">{{$item->start_at}} >> {{$item->end_at}}</span>
                                            <div class="event-price ">{{$item->money}} VNĐ</div>
                                            <div class="detail">
                                                <a href="/event/{{$item->eventId}}" >Xem chi tiết</a>
                                            </div>
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
    <div class="decord-event">
        <img src="{{asset('assets/clients/img/ribbon-left.png')}}" alt="" class="event-img-1">
        <img src="{{asset('assets/clients/img/ribbon-right.png')}}" alt="" class="event-img-2">
        <img src="{{asset('assets/clients/img/firework.png')}}" alt="" class="event-img-3">

    </div>
</div>
<script src="{{asset('assets/clients/js/slide.js')}}"></script>

@endsection
