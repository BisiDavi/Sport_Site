@extends('layout')
@section('content')
    <h1>Gallery Page</h1>
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('img/banner.png')}}" alt="banner" style="width:100%">
        </div>

        <div class="row">
        <div class="academy-pictures">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{asset('img/video.png')}}" alt="video">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{asset('img/video.png')}}" alt="video">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{asset('img/video.png')}}" alt="video">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="{{asset('img/players-picture.png')}}" alt="players-picture">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="{{asset('img/players-picture.png')}}" alt="players-picture">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="{{asset('img/players-picture.png')}}" alt="players-picture">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="{{asset('img/players-picture.png')}}" alt="players-picture">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="{{asset('img/players-picture.png')}}" alt="players-picture">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="{{asset('img/players-picture.png')}}" alt="players-picture">
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
