@extends('layouts/clients')
@section('contactus')
<div class="container">
    <div class="title-event">
        <span>Liên hệ</span>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-7 contact background-block">
            <div class="contact-form border-block">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis at dolor optio totam voluptate aut, sapiente neque, quas deserunt iste? Eligendi labore quae laudantium animi minus. Quo, illo culpa.</p>
                <form>
                    <input type="text" class="name-contact" name="name-contact" placeholder="Tên" />
                    <input type="email" class="email-contact" name="email-contact" placeholder="Địa chỉ mail" />
                    <input type="text" class="phone-contact" name="phone-contact" placeholder="Số điện thoại" />
                    <input type="text" class="address-contact" name="address" placeholder="Địa chỉ" />
                    <textarea name="message" class="message-contact" cols="45" rows="8" placeholder="Lời nhắn"></textarea>
                    <button type="submit" class="send">Gửi liên hệ</button>
                </form>
            </div>
        </div>
        <div class="col-lg-5 col-md-5">
            <div class="background-block">
                <div class="address-cor border-block contact-cor">
                    <div>
                        <img src="{{asset('assets/clients/img/address-cor.png')}}" alt="">
                    </div>
                    <div>
                        <span>Địa chỉ:</span><br/>
                        <span>86/33 Âu Cơ, Phường 9, Q.Tân Bình, TP. Hồ Chí Minh</span>
                    </div>
                </div>
            </div>
            <div class="background-block">
                <div class="email-cor border-block contact-cor">
                    <div>
                        <img src="{{asset('assets/clients/img/email-cor.png')}}" alt="">
                    </div>
                    <div>
                        <span>Email:</span><br/>
                        <span>investigate@your-site.com</span>
                    </div>
                </div>
            </div>
            <div class="background-block">
                <div class="phone-cor border-block contact-cor">
                    <div>
                    <img src="{{asset('assets/clients/img/phone-cor.png')}}" alt="">
                    </div>
                    <div>
                        <span>Phone:</span><br/>
                        <span>+84 145 689 798</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decord-contact">
        <img src="{{asset('assets/clients/img/alexarlaydoshadow11941-fuc-500w.png')}}" alt="" class="contact-img-1">
    </div>
</div>
@endsection
