@extends('home')

@section('home-slider-content')

<link rel="stylesheet" href="css/home-slider.css">

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/background image.PNG" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/background-image-2.PNG" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script src="assets/js/home-slider.js"></script>

@endsection
