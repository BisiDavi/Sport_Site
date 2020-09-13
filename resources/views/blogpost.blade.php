@extends('layout')

@section('title', 'Blog')


@section('content')
	<div class="container mt-4">
		<div class="row">
			<div class="d-flex mt-5">
			@foreach($posts as $post)
				<div class="blogpost col-md-3">
					<a href="/{{ $post->slug }}">
						<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
						<span>
							<h3 class="text-center m-2" >
							{{ $post->title }}
							</h3>
						</span>
					</a>
				</div>
			@endforeach
			</div>
		</div>
	</div>

@endsection