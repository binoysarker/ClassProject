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
    {{--header secction--}}
    <div class="container-fluid" style="background-color: #92B7C3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-group">
                        <div class="card text-left border-0" style="background-color: #92B7C3">
                            <img class="card-img-top " style="width:5rem;" src="{{asset('img/Logo.png')}}" alt="Card image cap">
                        </div>
                        <div class="card text-right border-0" style="background-color: #92B7C3">
                            <div class="card-block">
                                <h4 class="card-title text-white">BRAC UNIVERSITY</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--main Content section--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
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
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="" id="" class="form-control"
                           placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>

        </div>
    </div>
</body>
</html>