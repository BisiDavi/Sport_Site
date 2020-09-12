@extends('../layout')

@section('content')
<h1>My Email Subscriber List</h1>

<ul>
    @foreach($emailSubscriber as $subscriber)
    <li> {{$subscriber}} </li>
    @endforeach
</ul>
@endsection