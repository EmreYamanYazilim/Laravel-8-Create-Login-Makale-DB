<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    @yield('css')


    <title>
        @yield('title')
    </title>




</head>
<body>

@include('front.navbar')

<div class="container min-vh-100">
    @yield('content')
</div>


<footer class="container-fluid bg-primary">
    <p class="text-center text-white">
         &copy; {{ date('Y') }}   Tüm Hakları Saklıdır...
    </p>
</footer>


<script src="{{asset('assets/js/jquery.min.js')}}" ></script>
<script scr="{{asset('assets/js/bootstrap.min.js')}}" ></script>
<script scr="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
@yield('js')


</body>
</html>
