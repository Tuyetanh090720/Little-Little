@extends('layouts.clients')
@section('payment')
<div class="container">
    <div class="title-event">
        <span>Thanh toán</span>
    </div>
    <div class="content-item">
        <form class="row require-validation" name="payment" action="/paymentSuccess" method="POST" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
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
                        </div>
                        <div class="form-group col-lg-4 col-md-4">
                            <label for="date">Ngày sử dụng</label><br/>
                            <input type="datetime" class="validate" name="validate" id="date" value="{{$date}}" required/>
                            <a id="btn-calendar"><i class="fa fa-calendar"></i></a>
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
                        <div class="form-group required">
                            <label for="card-number">Số thẻ</label><br/>
                            <input type="text" class="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456"  size='20' required/>
                        </div>
                        <div class="form-group">
                            <label for="namecard">Họ tên chủ thẻ</label><br/>
                            <input type="text" class="cardName" name="cardName" placeholder="NGUYEN VAN A" required/>
                        </div>
                        <div class="form-group expiration required">
                            <label for="expiry-date">Tháng hết hạn</label><br/>
                            <input type="text" class="cardExpiryMonth" name="cardExpiryMonth" placeholder="MM" required/>
                        </div>
                        <div class="form-group expiration required">
                            <label for="expiry-date">Năm hết hạn</label><br/>
                            <input type="text" class='cardExpiryYear' name="cardExpiryYear" placeholder='YYYY' size='4' required/>
                        </div>
                        <div class="form-group cvc required">
                            <label for="CVC">CVV/CVC</label><br/>
                            <input type="password" class="cardCVC" name="cardCVC" placeholder="****" size="4" required/>
                        </div>
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'></div>
                            </div>
                        </div>
                        <button type="submit" class="payment">Thanh toán</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="alert alert-error alert-payment hide">
        <div class="head-color">
            <button type="button" class="close" id="close" data-dismiss="modal">&times;</button>
            <img src="{{asset("assets/clients/img/sad emoji 1.png")}}">
        </div>
        <div class="alert-content">
            <span>Hình như đã có lỗi xảy ra khi thanh toán...
            <br/>Vui lòng kiểm tra lại thông tin liên hệ, thông tin thẻ và thử lại.</span>
        </div>
    </div>
    <div class="decord-item">
        <img src="{{asset('assets/clients/img/Trini_Arnold_Votay1 2.png')}}" alt="" class="payment-image">
    </div>
    @include('clients.calendar')
</div>
<script src="{{asset('assets/clients/js/alert.js')}}"></script>
<script src="{{asset('assets/clients/js/calendar.js')}}"></script>
<script src="{{asset('assets/clients/js/money.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
              }
            });

            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.cardNumber').val(),
                cvc: $('.cardCVC').val(),
                exp_month: $('.cardExpiryMonth').val(),
                exp_year: $('.cardExpiryYear').val()
              }, stripeResponseHandler);
            }

      });

      function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);

                $('.alert-error')
                .removeClass('hide')
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                console.log(token);
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
    </script>
@endsection
