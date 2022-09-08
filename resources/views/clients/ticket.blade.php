<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    <style>
        * { font-family: 'Times New Roman', Times, serif !important; }
        .block {
            position: relative;
            border-color: transparent;
            border-style: solid;
            border-width: 1px;
            background-color: #fff;
            border-radius: 20px;
            text-align: center;
            top: 100px;
        }
        h3 {
            margin-top: -100px;
            color: #23221F;
            font-weight: 1000;
            font-size: 50px;
        }

        span {
            color: #6C7272;
            font-family: Montserrat;
            font-weight: 700;
            font-size: 25px;
        }

    </style>
</head>
<div class="container">
    <div class="content-item background-block">
        <div class="border-block">
            <div class="main-content">
                <div class="ticket-list">
                    <div class="row">
                        @foreach ($orderDetailList as $item)
                            <div class="col-md-6 col-sm-12 sol-xs-12 pro-loop" style="margin-bottom:30px;">
                                <div class="block" >
                                    <div class="event-img qr-img image-resize view view-third ">
                                        <a href=" ">
                                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate('{{$item->orderDetailId}}')) !!}">
                                        </a>
                                    </div>
                                    <div class="ticket-information">
                                        <h3 class="ticket-name ">ALT{{$item->orderDetailId}}</h3>
                                        <span class="ticket-type ">Ve cong</span><br/>
                                        <span>---</span><br/>
                                        <span class="ticket-date ">Ngay su dung: {{$item->validate}}</span><br/>
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

