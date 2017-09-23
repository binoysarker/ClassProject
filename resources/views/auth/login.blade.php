@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--main Content section--}}
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card ">
                <div class="card-block text-xs-left">
                    <h5 class="alert-info">Latest Events</h5>
                    <img class="card-img-top img-fluid float-left " style="width: 10rem" src="{{asset('img/background/bracu-thumb-1.jpg')}}" alt="">
                    <h4 class="card-title ">Title</h4>
                    <p class="card-text ">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit,
                        eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh.</p>
                </div>
                <div class="card-block text-xs-left">
                    <img class="card-img-top img-fluid float-left " style="width: 10rem" src="{{asset('img/background/bracu-thumb-1.jpg')}}" alt="">
                    <h4 class="card-title ">Title</h4>
                    <p class="card-text ">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit,
                        eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh.</p>
                </div>
                <div class="card-block text-xs-left">
                    <img class="card-img-top img-fluid float-left " style="width: 10rem" src="{{asset('img/background/bracu-thumb-1.jpg')}}" alt="">
                    <h4 class="card-title ">Title</h4>
                    <p class="card-text ">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit,
                        eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh.</p>
                </div>
            </div>


        </div>
        <div class="col-lg-6">
            <div class="card ">
                <div class="card-block text-xs-left">
                    <legend class="alert-info">Academic Calender</legend>
                    <table class="table hover">
                        <thead>
                        <tr>
                            <th>Ocation</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Convocation</td>
                            <td>today</td>
                            <td>today</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
