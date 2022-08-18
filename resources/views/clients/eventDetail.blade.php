@extends('layouts/clients')
@section('event-detail')
<div class="container">
    <div class="title-event">
        <span>Sự kiện 1</span>
    </div>
    <div class="event-detail">
        <div class="event-description">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 description-1">
                            <img src="{{asset('assets/clients/img/rectangle11898-0h8e-300h.png')}}" alt="" class="event-4">
                            <i class="fa fa-calendar"></i>
                            <span class="event-date ">30/05/2021-1/6/2021</span><br/>
                            <span class="event-address ">Đầm sen park</span>
                            <div class="event-price ">25000 VNĐ</div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet nihil consectetur iure impedit vitae. Dolores eligendi ab est amet quaerat? Cum veritatis suscipit quasi ullam fugiat blanditiis doloribus consequuntur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore illum laudantium suscipit adipisci maxime, debitis quaerat sint ullam impedit dolor. Ea rem id numquam sapiente eos, placeat soluta doloribus vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="{{asset('assets/clients/img/rectangle11265-a1co-300h.png')}}" alt="" class="event-1">
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error voluptas in sunt eos quos itaque nobis, id minima dolore fugiat impedit blanditiis nemo dolor, esse, ipsa perspiciatis alias pariatur omnis!</span>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error voluptas in sunt eos quos itaque nobis, id minima dolore fugiat impedit blanditiis nemo dolor, esse, ipsa perspiciatis alias pariatur omnis!</span>
                            <img src="{{asset('assets/clients/img/rectangle11265-a1co-300h.png')}}" alt="" class="event-1">
                        </div>
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
@endsection
