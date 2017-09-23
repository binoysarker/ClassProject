@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    {{--main nav section--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{--slider section--}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            {{--sidebar section--}}
                            <div id="carouselId" class="carousel slide " data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselId" data-slide-to="1"></li>
                                    <li data-target="#carouselId" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{asset('img/slider/BRAC-Onnesha-deployment.jpg')}}"  alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('img/slider/BRACU-new-Campus -1.jpg')}}"  alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('img/slider/ICBM-2017-BRACU-banner3.jpg')}}"  alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            {{--card section--}}
                            <div class="card-deck-wrapper ">
                                <div class="card-deck">
                                    <div class="card card-inverse card-info">
                                        <img class="card-img-top img-fluid" src="{{asset('img/background/bracu-thumb-1.jpg')}}" alt="">
                                        <div class="card-block">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                    <div class="card card-inverse card-info">
                                        <img class="card-img-top card-inverse img-fluid" src="{{asset('img/background/bracu-thumb-2.jpg')}}" alt="">
                                        <div class="card-block">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                    <div class="card card-inverse card-info">
                                        <img class="card-img-top img-fluid" src="{{asset('img/background/bracu-thumb-3.jpg')}}" alt="">
                                        <div class="card-block">
                                            <h4 class="card-title">Title</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--newsContent Section--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-group ">
                    <div class="card bgColor border-0">
                        <div class="card-block ">
                            <div class="card-header bgColor">
                                <h2>HEADING1</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card bgColor border-0">
                        <div class="card-block ">
                            <div class="card-header bgColor">
                                <h2>HEADING1</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card bgColor border-0">
                        <div class="card-block ">
                            <div class="card-header bgColor">
                                <h2>HEADING1</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">link</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">link</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">link</a>
                                    <p>some text</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card bgColor border-0">
                        <div class="card-block ">
                            <div class="card-header bgColor">
                                <h2>HEADING1</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>
                                <li>
                                    <a href="">item1</a>
                                    <p>some text</p>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection