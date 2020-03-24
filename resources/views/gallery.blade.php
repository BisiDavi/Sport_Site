@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row top-banner">
        <img src="{{asset('assets/img/banner.png')}}" class="top-banner" alt="banner" style="width:100%">
        <h3>Gallery</h3>
    </div>

    <div class="container video m-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="{{asset('assets/img/video.png')}}" alt="video">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="{{asset('assets/img/video.png')}}" alt="video">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="{{asset('assets/img/video.png')}}" alt="video">
            </div>
        </div>
    </div>

    <div class="containerfluid gallery">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-3 mt-2 mb-2">
                <img src="{{asset('assets/img/players-picture.png')}}" alt="players-picture">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-3 mt-2 mb-2">
                <img src="{{asset('assets/img/players-picture.png')}}" alt="players-picture">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-3 mt-2 mb-2">
                <img src="{{asset('assets/img/players-picture.png')}}" alt="players-picture">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <img src="{{asset('assets/img/players-picture.png')}}" alt="players-picture">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <img src="{{asset('assets/img/players-picture.png')}}" alt="players-picture">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <img src="{{asset('assets/img/players-picture.png')}}" alt="players-picture">
            </div>
        </div>
    </div>
</div>
@endsection
