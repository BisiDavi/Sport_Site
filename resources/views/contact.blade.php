@extends('layout')

@section('title')
Contact us
@endsection
 
@section('content')

<div class="container-fluid">
    <div class="row top-banner">
        <img src="{{asset('assets/img/banner.png')}}" class="top-banner" alt="banner" style="width:100%">
        <h3>Contact</h3>
    </div>
</div>

    <div class="container">
        <div class="form-title">
            <h1 class="mt-3 mb-3">Contact</h1>
            <p>Please fill in the below information in block letters only and please make sure all information given are very accurate.</p>
            <h3>Personal Information</h3>
        </div>


        <form action="contact" method="POST">
            <div class="form-group">
            <label for="surname">Fullname</label>
            <input type="text" name="fullname"  class="form-control form-control-lg" id="inputEmail4" placeholder="Fullname">
            </div>

            <div class="form-group">
            <label for="surname">Email</label>
            <input type="text"  name="email"
             class="form-control form-control-lg" id="inputEmail4" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="address">Phone Number</label>
                <input type="text" name="phone_number"  class="form-control form-control-lg" placeholder="Phone Number">
            </div>

            <div class="form-group">
            <label for="surname">Message</label>
            <textarea type="text"  name="message" class="form-control" rows='5' id="inputEmail4" placeholder="Message"></textarea>
            </div>

            <div class="error-alert">
                <p class="text-danger"> {{$errors->first('fullname')}} </p>
                <p class="text-danger"> {{$errors->first('email')}} </p>
                <p class="text-danger"> {{$errors->first('phone_number')}} </p>
                <p class="text-danger"> {{$errors->first('message')}}</p>                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            @csrf
        </form>

    </div>
@endsection
