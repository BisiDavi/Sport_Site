@extends('layout')

@section('title')
Blog
@endsection


@section('content')

<div class="container-fluid">
    <div class="row top-banner">
        <img src="{{asset('assets/img/banner.png')}}" class="top-banner" alt="banner" style="width:50%">

        <div class="container mt-5 mb-5">          
            <!-- <div class="row"> -->
                @foreach($posts as $post)
                    <div class="col-md-3">
                        <a href="/post/{{ $post->slug }}">
                            <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                            <span>{{ $post->title }}</span>
                        </a>
                    </div>
                @endforeach
            <!-- </div> -->
	    </div>
        
    </div>
</div>
@endsection