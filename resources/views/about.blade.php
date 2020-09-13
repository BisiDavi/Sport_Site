@extends('layout')

@section('title','about us')


@section('content')

<link rel="stylesheet" href="{{asset('assets/css/about.css')}}">

    <div class="container-fluid">

        <div class="row about-banner">
            <img src="{{asset('assets/img/banner.png')}}" class="top-banner" alt="banner" style="width:100%">
            <h3>ABOUT De Skyballers</h3>
        </div>

        <div class="container-fluid">
            <div class="row px-3 py-3">
                <div class="who-are-we">
                    <h1>Who Are We</h1>
                    <p>
                        Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development. The academy is designed to help aspiring players hone their football skills, place them in the limelight, and facilitate their discovery and recruitment
                        into the big clubs to play alongside football stars of their dreams.The academy is subdivided into two viz
                    </p>
                </div>
                <div class="student-academy">
                    <h4>Student Academy</h4>
                    <p>
                        Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development. The academy is designed to help aspiring players hone their football skills, place them in the limelight, and facilitate their discovery and recruitment
                        into the big clubs to play alongside football stars of their dreams. The academy is subdivided into two viz
                    </p>
                </div>
                <div class="football-development">
                    <h4>Professional Footbal Development</h4>
                    <p>
                        Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development. The academy is designed to help aspiring players hone their football skills, place them in the limelight, and facilitate their discovery and recruitment
                        into the big clubs to play alongside football stars of their dreams.The academy is subdivided into two viz
                    </p>
                </div>
            </div>

            <div class="row culture">
                <div class="container-fluid d-flex">
                <div class="core-values vision d-flex mr-3 col-md-6 col-sm-6 col-xs-12">
                    <img src="{{asset('assets/img/vision-img.png')}}" class="m-auto  h-100 pr-3" alt="vision image">
                    <div class="m-auto">
                        <h1>Vision</h1>
                        <p>
                            To have sports industry that is profitable, well-organized and competitive on international stage and operates with progressive, modern standard and sustainable policies.                         
                        </p>
                    </div>
            </div>
                <div class="core-values d-flex ml-3  mr-3 col-md-6 col-sm-6 col-xs-12">
                        <img src="{{asset('assets/img/mission-img.png')}}" class="m-auto h-100 pr-3" alt="mission image">
                    <div class="m-auto">
                        <h1>Mission</h1>
                        <p>
                            To promote sports by setting up platforms and programs that enhances the discovery and harnessing of talents across every age and region while adopting international best practices.
                        </p>
                    </div>
                </div>
                </div>
                <div class="core-values col-12 mt-3 mb-4">
                    <div class="row mb-3">
                        <h1 class="text-center m-auto">
                        Core Values</h1>
                    </div>   
                    <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <img src="{{asset('assets/img/core-values-img.png')}}" class="mb-3" alt="core values image">
                    </div>
                    <ul class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                        <div class="col">
                            <li><h4>Commitment</h4></li>
                            We have the resolve to show commitment in all we set out to do; we are committed to our goals, services to our clients and loyalty to our vision.
                        </div>
                        <div  class="col">
                            <li><h4>Dynamism</h4></li>
                            We are dynamic in all we do so that we can achieve the best result possible while maximizing opportunities.
                        </div>  
                        </div>
                        <div class="row">
                        <div  class="col">
                            <li><h4>Team Work</h4></li>
                            We believe in efficiency and product that can be achieved from working together, identifying each other’s weaknesses while acknowledging our strengths.
                        </div>
                        <div  class="col">
                            <h4><li>Integrity</h4></li>
                            We earn the trust and confidence of our clients and followers by maintaining high level integrity.
                        </div>
                        </div>
                    </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
