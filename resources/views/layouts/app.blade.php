<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    {{--bootstrap stylesheet section--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"  crossorigin="anonymous">
    <script src="{{asset('js/jquery-3.1.1.slim.min.js')}}"  crossorigin="anonymous"></script>
    <script src="{{asset('js/tether.min.js')}}"  crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
{{--header secction--}}
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="app">
                <nav class="navbar navbar-default navbar-static-top" style="background-color: #92B7C3">
                    <div class="container">
                        <div class="navbar-header">

                            <!-- Collapsed Hamburger -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Branding Image -->
                            <a class="navbar-brand navbar-left" href="{{ url('/') }}">
                                <img class="card-img " style="width:5rem;" src="{{asset('img/Logo.png')}}" alt="Card image cap">
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right visible-lg-inline">
                                <!-- Authentication Links -->
                                @guest
                                    <li ><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                            </ul>
                        </div>
                    </div>
                </nav>


                @yield('content')


            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
