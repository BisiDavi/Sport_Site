@extends('layout')

@section('title')
{{ $post->title }}
@endsection


@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<h1>{{ $post->title }}</h1>
				<div class="col-md-4">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				</div>
				<div class="col-md-8">
					<p>{!! $post->body !!}</p>
				</div>

			</div>
		</div>
	</div>
@endsection