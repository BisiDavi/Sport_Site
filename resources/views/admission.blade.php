@extends('layout')

@section('title')
Admission
@endsection

@section('link')
<link rel="stylesheet" href="{{asset('assets/css/admission.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row top-banner">
        <img src="{{asset('assets/img/banner.png')}}" alt="banner" class="top-banner" style="width:100%">
        <h3>Admission</h3>
    </div>
</div>

<div class="container">
    <h1 class="mt-5 mb-3">APPLICATION FORM</h1>
    <p>Please fill in the below information in block letters only
        and please make sure all information given are very accurate.
    </p>

    <div class="form-title">
        <h3>Personal Information</h3>
    </div>

    <form class="php-email-form" action="admission" method="POST">
    <div class="form-row align-items-stretch aos-init aos-animate">
        <div class="form-group col-md-6">
        <label for="surname">Surname</label>
        <input type="text" class="form-control form-control-lg" id="inputEmail4" name="surname" placeholder="Surname">
        </div>
        <div class="form-group col-md-6">
        <label for="other-name">Other Name</label>
        <input type="text" name="other_name" class="form-control form-control-lg" id="inputPassword4" placeholder="Other Name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Phone Number</label>
        <input type="number" name="phone_number" class="form-control form-control-lg"  placeholder="Phone Number">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Date of Birth</label>
        <input type="date"  name="date_of_birth" class="form-control form-control-lg" id="date" placeholder="Date of Birth">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Current City</label>
        <input type="text" name="city" class="form-control form-control-lg"  placeholder="Current City">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="address">Home Address</label>
            <input type="text"  name="home_address" class="form-control form-control-lg" placeholder="Home Address">
        </div>
    </div>

    <div class="form-title">
        <h3>Education Background</h3>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="school-name">Name of School</label>
        <input type="text" name="name_of_school" class="form-control form-control-lg" placeholder="Name of School">
        </div>
        <div class="form-group col-md-6">
        <label for="qualification">Qualification</label>
        <input type="text" name="qualification" class="form-control form-control-lg"  placeholder="Qualification">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    <div class="error text-danger d-block">        
        <p>{{$errors->first('surname')}}</p>
        <p>{{$errors->first('other_name')}}</p>
        <p>{{$errors->first('email')}}</p>
        <p>{{$errors->first('phone_number')}}</p>
        <p>{{$errors->first('date_of_birth')}}</p>
        <p>{{$errors->first('home_address')}}</p>
        <p>{{$errors->first('city')}}</p>
        <p>{{$errors->first('name_of_school')}}</p>
        <p>{{$errors->first('qualification')}}</p>
    </div>

    @csrf
 </form>

 <p class="admission-note">
    Two customized bibs will be prepared for you and the cost of the two is two thousand naira (N2,000) which you will pay for and pick on your arrival.  You are NOT allowed to exchange bibs because
    the number on it is what scouts and coaches will use to identify you.<br>
    The sum of two thousand two hundred naira (N2,200) will also be paid on arrival for your medical examination. It is compulsory before you are allowed to start playing.<br>
    Note also to come with a pair of boots, stockings (socks), shin-guards, hand gloves (for goalkeepers), bed sheets and pillowcase.<br>
    Accommodation is free<br>
    Feeding: pay as you eat, although the price of food will be subsidized.
 </p>

</div>
@endsection
