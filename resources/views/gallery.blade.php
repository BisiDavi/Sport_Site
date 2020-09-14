@extends('layout')

@section('title', 'Our Gallery')


@section('link')
  <link rel="stylesheet" href="assets/css/gallery.css">
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row top-banner">
      <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">
      <h3>Gallery</h3>
    </div>

    <!-- <div class="container video m-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <img src="{{ asset('assets/img/video.png') }}" alt="video">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <img src="{{ asset('assets/img/video.png') }}" alt="video">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <img src="{{ asset('assets/img/video.png') }}" alt="video">
                            </div>
                        </div>
                    </div>

                    <div class="containerfluid gallery">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-3 mt-2 mb-2">
                                <img src="{{ asset('assets/img/players-picture.png') }}" alt="players-picture">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-3 mt-2 mb-2">
                                <img src="{{ asset('assets/img/players-picture.png') }}" alt="players-picture">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-3 mt-2 mb-2">
                                <img src="{{ asset('assets/img/players-picture.png') }}" alt="players-picture">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <img src="{{ asset('assets/img/players-picture.png') }}" alt="players-picture">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <img src="{{ asset('assets/img/players-picture.png') }}" alt="players-picture">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <img src="{{ asset('assets/img/players-picture.png') }}" alt="players-picture">
                            </div>
                        </div>
                    </div> -->

    <div class="container">
      <div class="wrap">
        <div class="gallery">
          <figure class="gallery__item gallery__item--1">
            <a href="#img1">
              <img src="assets/img/banner5.jpg">
            </a>
            <div class="lightbox" id="img1">
              <img src="assets/img/banner5.jpg">
              <a href="#_" class="btn-close">&times;</a>
            </div>
          </figure>

          <figure class="gallery__item gallery__item--2">
            <a href="#img2">
              <img src="assets/img/banner8.jpg" alt="02" class="gallery__img">
            </a>
            <div class="lightbox" id="img2">
              <img src="assets/img/banner8.jpg" alt="">
              <a href="#_" class="btn-close">&times;</a>
            </div>
          </figure>

          <figure class="gallery__item gallery__item--3">
            <a href="#img3">
              <img src="assets/img/banner9.jpg" alt="03" class="gallery__img">
            </a>
            <div class="lightbox" id="img3">
              <img src="assets/img/banner9.jpg" alt="">
              <a href="#_" class="btn-close">&times;</a>
            </div>
          </figure>

          <figure class="gallery__item gallery__item--4">
            <a href="#img4">
              <img src="assets/img/banner3.jpg" alt="04" class="gallery__img">
            </a>
            <div class="lightbox" id="img4">
              <img src="assets/img/banner3.jpg" alt="">
              <a href="#_" class="btn-close">&times;</a>
            </div>
          </figure>

          <figure class="gallery__item gallery__item--5">
            <a href="#img5">
              <img src="assets/img/banner2.jpg" alt="05" class="gallery__img">
            </a>
            <div class="lightbox" id="img5">
              <img src="assets/img/banner2.jpg" alt="">
              <a href="#_" class="btn-close">&times;</a>
            </div>
          </figure>

          <figure class="gallery__item gallery__item--6">
            <a href="#img6">
              <img src="assets/img/banner4.jpg" alt="06" class="gallery__img">
            </a>
            <div class="lightbox" id="img6">
              <img src="assets/img/banner4.jpg" alt="">
              <a href="#" class="btn-close">&times;</a>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
@endsection
