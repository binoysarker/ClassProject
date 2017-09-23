<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{--bootstrap stylesheet section--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"  crossorigin="anonymous">
    <script src="{{asset('js/jquery-3.1.1.slim.min.js')}}"  crossorigin="anonymous"></script>
    <script src="{{asset('js/tether.min.js')}}"  crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>
</head>
<body>
    {{--navbar section--}}
    @include('partials.topnavbar')

    {{--main content section--}}
    @yield('content')
    {{--footer section--}}
    @include('partials.footer')
</body>
</html>