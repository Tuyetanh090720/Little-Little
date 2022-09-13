@extends('layouts/clients')
@section('event-detail')
<div class="container">
    <div class="title-event">
        <span>Sự kiện 1</span>
    </div>
    <div class="event-detail">
        <div class="event-description">
            <div class="row">
                <div class="col-lg-4 col-md-4 description-1">
                    <img src="{{asset('assets/clients/img/rectangle11898-0h8e-300h.png')}}" alt="" class="detail-img">
                    <i class="fa fa-calendar"></i>
                    <span class="event-date ">{{$eventD->start_at}} >> {{$eventD->end_at}}</span><br/>
                    <span class="event-address ">Đầm sen park</span>
                    <div class="event-price ">{{$eventD->money}} VNĐ</div>
                </div>
                <div class="col-lg-8 col-md-8 event-p" style="column-count: {{$column}};">
                    <p>{{$eventD->eventDetail}}</p>
                    <img width="100" src="{!! asset("storage/img/$eventD->eventId.jpg") !!}">
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
@endsection
