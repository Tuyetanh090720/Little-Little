<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little-Little</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
</head>
<body>
    {{-- navigation --}}
    @include('clients.navigation')
    <div class="wrapper" style="background-image: url('{{asset('assets/clients/img/background.jpg')}}')">
        @yield('home')
        @yield('event')
        @yield('event-detail')
        @yield('contactus')
        @yield('payment')
        @yield('paymentSuccess')
    </div>

</body>
</html>


