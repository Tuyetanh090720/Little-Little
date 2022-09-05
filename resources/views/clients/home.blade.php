@extends('layouts.clients')
@section('home')
<div class="container">
    <div class="logo-item row">
        <div class="col-lg-4 col-md-4">
            <img src="{{asset('assets/clients/img/image21942-n56s-200h.png')}}" alt="">
        </div>
        <div class="col-lg-8 col-md-8">
            <span>Đầm Sen Park</span>
        </div>
    </div>
    <div class="content-item">
        <div class="row">
            <div class="infomation background-block col-lg-8 col-md-8">
                <div class="information-detail border-block">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Sapiente officia earum consequatur nemo ullam id ea illo voluptatum voluptas.</p>
                    <p>Nisi totam enim soluta minus voluptas, magni, alias adipisci sit harum consequatur ut necessitatibus nostrum facilis ex quam nulla aliquid distinctio nihil!</p>
                    <p>
                        <span>
                            <i class="fa fa-star first-icon"></i>
                            <i class="fa fa-star second-icon"></i>
                        </span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </p>
                    <p>
                        <span>
                            <i class="fa fa-star first-icon"></i>
                            <i class="fa fa-star second-icon"></i>
                        </span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </p>
                    <p>
                        <span>
                            <i class="fa fa-star first-icon"></i>
                            <i class="fa fa-star second-icon"></i>
                        </span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </p>
                    <p>
                        <span>
                            <i class="fa fa-star first-icon"></i>
                            <i class="fa fa-star second-icon"></i>
                        </span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </p>
                </div>
            </div>
            <div class="reservation background-block col-lg-4 col-md-4">
                <div class="reservation-content border-block">
                    <div class="callout badge badge-curve">
                        <div class="badge-inner on-sale">
                            <span class="title-ticket">Vé của bạn</span>
                        </div>
                    </div>
                    <div class="reserve-form">
                        <form name="reservation" action="/payment" method="POST">
                            @csrf
                            <div class="package-dropdown">
                                <select name="package" id="package-option" class="package-option">
                                    @foreach ($ticketTypeList as $key => $item)
                                    <option value="{{$item->ticketTypeName}}">{{$item->ticketTypeName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" class="quantity" name="quantity" placeholder="Số lượng vé" required/>
                            <input type="datetime" class="date" name="date" id="date" placeholder="Ngày sử dụng" required/>
                            <a id="btn-calendar"><i class="fa fa-calendar"></i></a>
                            <input type="text" class="fullname" name="fullname" placeholder="Họ và tên" required/>
                            <input type="text" class="phone" name="phone" placeholder="Số điện thoại" required/>
                            <input type="email" class="email" name="email" placeholder="Địa chỉ mail" required/>
                            <button type="submit" class="reserve">Đặt vé</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decord-item">
        <img src="{{asset('assets/clients/img/image18451converted0211942-tri5-200w.png')}}" alt="" class="image-1">
        <img src="{{asset('assets/clients/img/image18451converted0311942-qfyi-300h.png')}}" alt="" class="image-2">
        <img src="{{asset('assets/clients/img/image18451converted0321942-wfx-300h.png')}}" alt="" class="image-3">
        <img src="{{asset('assets/clients/img/image18451converted0411942-nrl-200w.png')}}" alt="" class="image-4">
        <img src="{{asset('assets/clients/img/image18451converted0511942-0b39-200w.png')}}" alt="" class="image-5">
        <img src="{{asset('assets/clients/img/image18451converted0611944-d6dt-300h.png')}}" alt="" class="image-6">
        <img src="{{asset('assets/clients/img/lisaarnoldlaydof231944-a1wz-500w.png')}}" alt="" class="image-7">
        <img src="{{asset('assets/clients/img/renderfixhair11942-8g6p-500h.png')}}" alt="" class="image-8">
    </div>
    @include('clients.calendar')
</div>
<script src="{{asset('assets/clients/js/calendar.js')}}"></script>

@endsection
