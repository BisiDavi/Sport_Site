@extends('layout')

@section('title', 'Contact us')


@section('content')

    <div class="container-fluid">
        <div class="row top-banner">
            <img src="{{ asset('assets/img/banner.png') }}" class="top-banner" alt="banner" style="width:100%">
            <h3>Contact</h3>
        </div>
    </div>

    <div class="container">
        <div class="form-title">
            <h1 class="mt-3 mb-3">Contact</h1>
            <p>Please fill in the information below, make sure all information given are very accurate.</p>
            <h3>Personal Information</h3>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong>
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ session()->get('message') }}
            </div>
        @endif

        @if (!session()->has('message'))
            <form action="contact" method="POST">
                <div class="form-group">
                    <div class="d-block">
                        <label for="surname">Fullname</label>
                        <input type="text" name="fullname" value="{{ old('') }}" class="form-control" id="inputEmail4"
                            placeholder="Fullname">
                        <p class="text-danger"> {{ $errors->first('fullname') }} </p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="surname">Email</label>
                        <input type="text" name="your_email" value="{{ old('your_email') }}" class="form-control"
                            id="inputEmail4" placeholder="Email">
                        <p class="text-danger"> {{ $errors->first('your_email') }} </p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="address">Phone Number</label>
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control"
                            placeholder="Phone Number">
                        <p class="text-danger"> {{ $errors->first('phone_number') }} </p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="surname">Message</label>
                        <textarea type="text" name="message" value="{{ old('message') }}" class="form-control" rows='5'
                            id="inputEmail4" placeholder="Message"></textarea>
                        <p class="text-danger"> {{ $errors->first('message') }}</p>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

                @csrf
            </form>

    </div>
@endsection
