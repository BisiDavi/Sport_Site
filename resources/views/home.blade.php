@extends('layout')

@section('content')
<link rel="stylesheet" href="css/home.css">
    <div class="container-fluid">
        <div class="row">
            <div class="home-banner col-md-12 col-sm-12 col-xs-12">
                <img src="{{asset('img/home-banner-background.png')}}" alt="banner" style="width:100%;">
                <div class="text-content" style="text-align:left">
                    <h1>Africa Sport Academy</h1>
                    <p>
                        The Soccer Academies Preparing African Children for Division I Competition.
                        A rising number of academies are opening across the continent with ..
                    </p>
                </div>
                <div class="image-content" style="text-align:right">
                    <img src="{{asset('img/sport-img.png')}}" alt="sport-image">
                </div>
            </div>
        </div>
        <h1>About the Academy</h1>
        <div class="row about-academy">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <img src="{{asset('img/home-about-img.png')}}" alt="about us image">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p>
                    Authentic African Sports Academy is an independent residential sports college for boys
                    and girls. It combines education with sports along with a special focus on football
                        development.The academy is designed to help aspiring players hone their football skills,
                        place them in limelight, and facilitate their discovery and recruitment into the big clubs
                        to play alongside football stars of their dreams
                </p>

                <button  class="btn" type="button" href="#" style="background-color:rgba(127, 42, 167, 0.21);  border:1px solid #7F2AA7; border-radius:10px">Read More</button>
            </div>
        </div>

        <h1>News and Blog</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="card">
                    <div class="card-body shadow">
                    <img src="{{asset('img/players-picture.png')}}" alt="">
                        <div class="text-content" style="text-align:left">
                            <h1>1st At National football compertition</h1>
                            <p>
                                Authentic African Sports Academy is an independent residential sports college for boys
                                and gAuthentic African Sports Academy is an independent residential
                                sports college for boys and g.....
                            </p>
                            <button class="btn" href="#">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="card">
                    <div class="card-body shadow">
                    <img src="{{asset('img/players-picture.png')}}" alt="">
                        <div class="text-content">
                            <h1>1st At National football compertition</h1>
                            <p>
                                Authentic African Sports Academy is an independent residential sports college for boys
                                and gAuthentic African Sports Academy is an independent residential
                                sports college for boys and g.....
                            </p>
                            <button class="btn" href="#">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="card">
                    <div class="card-body shadow">
                    <img src="{{asset('img/players-picture.png')}}" alt="">
                        <div class="text-content">
                            <h1>1st At National football compertition</h1>
                            <p>
                                Authentic African Sports Academy is an independent residential sports college for boys
                                and gAuthentic African Sports Academy is an independent residential
                                sports college for boys and g.....
                            </p>
                            <button class="btn" href="#">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container my-auto">
        <h1>Upcoming Events</h1>
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
            <div class="event">
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
            <div class="event">
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

@endsection
