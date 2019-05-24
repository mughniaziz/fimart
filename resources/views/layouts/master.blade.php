<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
</head>
<body>

    @include('shared.header')

    <div class="jumbotron text-center">
        <h3 class="pt-4">FI Mart <i class="fas fa-shopping-cart"></i></h3>
        <strong>Solusi Cerdas Belanja Masa Kini</strong>
    </div>

    <div class="container" style="margin-top:30pt">
        @yield('content')
    </div>

    <div class="footer text-center">
        <p> &reg; FIMART &trade; 2019 &copy;</p>
    </div>

    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/fontwaesome.js')}}"></script>
</body>
</html>
