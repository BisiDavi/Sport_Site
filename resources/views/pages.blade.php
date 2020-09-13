
@section('title')
Blog
@endsection

@section('content')
  <div class="container mt-4">
		<div class="row">
		  <div class="d-flex mt-5">
			 @foreach($pages as $page)
          <div class="blogpost col-md-3">
            <a href="/page/{{ $page->slug }}">
              <img src="{{ Voyager::image( $page->image ) }}" style="width:100%">
              <span>
                <h3 class="text-center m-2" >
                {{ $page->title }}
                </h3>
              </span>
            </a>
          </div>
        @endforeach
      </div>  
    </div>
  </div>
@endsection