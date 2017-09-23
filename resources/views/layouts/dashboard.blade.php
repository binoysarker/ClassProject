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
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"  crossorigin="anonymous">
    <script src="{{asset('js/jquery-3.1.1.slim.min.js')}}"  crossorigin="anonymous"></script>
    <script src="{{asset('js/tether.min.js')}}"  crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"  crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
{{--header secction--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="app">
                <nav class="navbar navbar-default navbar-static-top">
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
                            <a class="navbar-brand " href="{{ url('/') }}">
                                <img class="card-img " style="width: 16rem"  src="{{asset('img/dashboard/BracAcademia.gif')}}" alt="Card image cap">
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
                                                Welcome {{ Auth::user()->name }}
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





            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 " >
            <div class="card " >
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#list1">Student</button>
                    {{--list for student section--}}
                    <ul id="list1" class="collapse">
                        <li>
                            <span></span>
                            <a href="{{url('/StudentProfile')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> My Profile</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Registration Form</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Advising Payslip</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Change Profile</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Student Grade Sheet</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Show Class Schedule</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Show Course Details</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Pre Requisite Course</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Show Course Sequence</a>
                        </li>
                    </ul>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#list2">Advising</button>
                    {{--list for Advising section--}}
                    <ul id="list2" class="collapse">
                        <li>
                            <span></span>
                            <a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> My Profile</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Advising Panel</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Seat Status</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Class Schedule</a>
                        </li>
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Advised Course(s)</a>
                        </li>
                    </ul>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#list3">Student Accounts</button>
                    {{--list for Student Accounts section--}}
                    <ul id="list3" class="collapse">
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Download Advising Registration Form</a>
                        </li>
                    </ul>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#list4">Medical</button>
                    {{--list for Medical section--}}
                    <ul id="list4" class="collapse">
                        <li>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a href="">Student Medical Assessment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 pl-0">
            <div class="card-deck">
                <div class="card">
                    <div class="card-block card-danger">
                        <h4 class="card-title text-left float-left text-white">My Dashboard</h4>
                        <ul class="list-inline list-unstyled text-right">
                            <li><a href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                @yield('content')
                @yield('StudentContent')

            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
