@extends('layout')

@section('title', 'Admission')

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/css/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admissionModal.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row top-banner">
            <img src="{{ asset('assets/img/banner.png') }}" alt="banner" class="top-banner" style="width:100%">
            <h3>Admission</h3>
        </div>
    </div>


    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong>
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ session()->get('message') }}
            </div>
        @endif

        <h1 class="mt-5 mb-3">APPLICATION FORM</h1>
        <p>Please fill in the below information and please make sure all information given are very accurate.
        </p>

        <div class="form-title">
            <h3>Personal Information</h3>
        </div>

        @if (!session()->has('message'))
            <form class="php-email-form" action="admission" method="POST">
                <div class="form-row align-items-stretch aos-init aos-animate">
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname" value="{{ old('surname') }}" name="surname"
                                placeholder="Surname">
                            <p class="text-danger">{{ $errors->first('surname') }}</p>

                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="other-name">Other Name</label>
                            <input type="text" name="other_name" class="form-control" value="{{ old('other_name') }}"
                                id="inputPassword4" placeholder="Other Name">
                            <p class="text-danger">{{ $errors->first('other_name') }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                id="inputEmail4" placeholder="Email">
                            <p class="text-danger">{{ $errors->first('email') }}</p>

                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="inputPassword4">Phone Number</label>
                            <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control"
                                placeholder="Phone Number">
                            <p class="text-danger">{{ $errors->first('phone_number') }}</p>

                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="inputEmail4">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}"
                                id="date" placeholder="Date of Birth">
                            <p class="text-danger">{{ $errors->first('date_of_birth') }}</p>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="inputPassword4">Current City</label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control"
                                placeholder="Current City">
                            <p class="text-danger">{{ $errors->first('city') }}</p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="d-block">
                            <label for="address">Home Address</label>
                            <input type="text" name="home_address" value="{{ old('home_address') }}" class="form-control"
                                placeholder="Home Address">
                            <p class="text-danger">{{ $errors->first('home_address') }}</p>

                        </div>
                    </div>
                </div>

                <div class="form-title">
                    <h3>Education Background</h3>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="school-name">Name of School</label>
                            <input type="text" name="name_of_school" class="form-control"
                                value="{{ old('name_of_school') }}" placeholder="Name of School">
                            <p class="text-danger">{{ $errors->first('name_of_school') }}</p>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="d-block">
                            <label for="qualification">Qualification</label>
                            <input type="text" name="qualification" class="form-control" value="{{ old('qualification') }}"
                                placeholder=" Qualification">
                            <p class="text-danger">{{ $errors->first('qualification') }}</p>
                        </div>
                    </div>
                </div>

                <button type="submit" href="#lightbox-1" rel="lightbox" class="btn btn-primary">Submit</button>

                @csrf
            </form>
        @endif

        <p class="admission-note">
            Two customized bibs will be prepared for you and the cost of the two is two thousand naira (N2,000) which you
            will pay for and pick on your arrival. You are NOT allowed to exchange bibs because
            the number on it is what scouts and coaches will use to identify you.<br>
            The sum of two thousand two hundred naira (N2,200) will also be paid on arrival for your medical examination. It
            is compulsory before you are allowed to start playing.<br>
            Note also to come with a pair of boots, stockings (socks), shin-guards, hand gloves (for goalkeepers), bed
            sheets and pillowcase.<br>
            Accommodation is free<br>
            Feeding: pay as you eat, although the price of food will be subsidized.
        </p>

    </div>
@endsection
