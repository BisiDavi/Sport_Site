@extends('layout')

@section('content')
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/home-slider.css">
<link rel="stylesheet" href="assets/js/home-slider.js">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="row">
          <div class="home-banner col-md-12 col-sm-12 col-xs-12">
                <img src="img/home-banner-1.png" class="img-fluid animated"alt="banner" style="width:100%;margin-left:0% !important;padding-left:0%;">
                <div class="text-content" style="text-align:left">
                    <h1 class="">Africa Sport <br><span style="color: #7F2AA7;"> Academy</span></h1>
                    <p>
                        The Soccer Academies Preparing African Children for Division I Competition.
                        A rising number of academies are opening across the continent with ..
                    </p>
                </div>
            </div>
        </div>

        <div class="row about-academy mt-3 mb-5" id="about-academy">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 images" data-aos="fade-up" data-aos-delay="100">
                <img class="img-background" src="{{asset('img/Rectangle 16.png')}}">
                <img class="volleyball" src="{{asset('img/about 1.png')}}">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 academy-text" data-aos="fade-up" data-aos-delay="100">
                <h1 data-aos="fade-up">ABOUT THE ACADEMY</h1>
                <p data-aos="fade-up" data-aos-delay="100">
                    Authentic African Sports Academy is an independent residential sports college for boys
                    and girls. It combines education with sports along with a special focus on football
                        development.
                </p>
                        <br>
                <p class="d-none d-lg-block data-aos="fade-up" data-aos-delay="100""> Academy is designed to help aspiring players hone their football skills,
                        place them in limelight, and facilitate their discovery and recruitment into the big clubs
                        to play alongside football stars of their dreams
                </p>

                <button  class="btn" type="button" href="#" style="color:white;background: #7F2AA7;border: 1px solid #7F2AA7;box-sizing: border-box;">Read More</button>
            </div>
        </div>


    <section id="news" class="news section-bg">
    <div class="container my-auto">
        <div class="section-title" data-aos="fade-up">
            <h2>News & Blog</h2>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card shadow-lg p-3 mb-5 rounded">
                        <img class="card-img-top" src="{{asset('img/players-picture.png')}}">
                        <div class="card-block">
                            <figure class="profile">
                                <img src="{{asset('img/players-picture.png')}}"   class="profile-avatar" alt="">
                            </figure>
                            <h4 class="card-title mt-3">1st At National football compertition</h4>
                            <div class="meta">
                                <a>Friends</a>
                            </div>
                            <div class="card-text">
                            Authentic African Sports Academy is an independent residential sports college for boys
                                    and gAuthentic African Sports Academy is an independent residential...
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>Last updated 3 mins ago</small>
                            <button class="btn btn-secondary float-right btn-sm">show</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 align-items-stretch mt-4 d-none d-lg-block" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card shadow-lg p-3 mb-5  rounded">
                        <img class="card-img-top" src="{{asset('img/players-picture.png')}}">
                        <div class="card-block">
                            <figure class="profile">
                                <img src="{{asset('img/players-picture.png')}}"   class="profile-avatar" alt="">
                            </figure>
                            <h4 class="card-title mt-3">1st At National football compertition</h4>
                            <div class="meta">
                                <a>Friends</a>
                            </div>
                            <div class="card-text">
                            Authentic African Sports Academy is an independent residential sports college for boys
                                    and gAuthentic African Sports Academy is an independent residential...
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>Last updated 3 mins ago</small>
                            <button class="btn btn-secondary float-right btn-sm">show</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card shadow-lg p-3 mb-5  rounded">
                        <img class="card-img-top" src="{{asset('img/players-picture.png')}}">
                        <div class="card-block">
                            <figure class="profile">
                                <img src="{{asset('img/players-picture.png')}}"   class="profile-avatar" alt="">
                            </figure>
                            <h4 class="card-title mt-3">1st At National football compertition</h4>
                            <div class="meta">
                                <a>Friends</a>
                            </div>
                            <div class="card-text">
                            Authentic African Sports Academy is an independent residential sports college for boys
                                    and gAuthentic African Sports Academy is an independent residential...
                            </div>
                        </div>
                        <div class="card-footer">
                            <small>Last updated 3 mins ago</small>
                            <button class="btn btn-secondary float-right btn-sm">show</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>



    <div class="container my-auto">
        <h1 style="text-align: center" class="m-5">Upcoming Events</h1>
            <div class="event ">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p>June 22, 2020</p>
                        <small>8am - 10am</small>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <p>Table Tennis Tournament</p>
                        <small>Abuja National Stadium</small>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 m-2">
                                <button class="btn btn-primary" role="button">Details</button>
                            </div>
                            <div class="col-lg-2 col-md-2 m-2">
                                <button class="btn btn-light" role="button">Attend</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="event d-none d-sm-block">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p>June 22, 2020</p>
                        <small>8am - 10am</small>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <p>Table Tennis Tournament</p>
                        <small>Abuja National Stadium</small>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 m-2">
                                <button class="btn btn-primary" role="button">Details</button>
                            </div>
                            <div class="col-lg-2 col-md-2 m-2">
                                <button class="btn btn-light" role="button">Attend</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="event d-none d-sm-block">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p>June 22, 2020</p>
                        <small>8am - 10am</small>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <p>Table Tennis Tournament</p>
                        <small>Abuja National Stadium</small>
                    </div>

                    <div class="col-lg-4 col-md-4 float:right">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 m-2">
                                <button class="btn btn-primary" role="button">Details</button>
                            </div>
                            <div class="col-lg-2 col-md-2 m-2">
                                <button class="btn btn-light" role="button">Attend</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
    </div>

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Partners</h2>
            </div>

            <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('img/fifa.png')}}" alt="">
                <img src="{{asset('img/lagos')}}" alt="">
                <img src="{{asset('img/fifa.png')}}" alt="">
                <img src="{{asset('img/lagos.png')}}" alt="">
                <img src="{{asset('img/fifa.png')}}" alt="">
                <img src="{{asset('img/lagos.png')}}" alt="">
                <img src="{{asset('img/fifa.png')}}" alt="">
            </div>

            </div>
        </section>
        <!-- End Clients Section -->
    </div>
<script src="assets/js/home-slider.js"></script>
@endsection
