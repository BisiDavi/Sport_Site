@extends('../layout')

@section('content')
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/customers">Customers</a></li>
    <li>
        <a href="/emailsubscriber">Email Subscribers</a>
    </li>
</ul>


<h1>My Email Subscriber List</h1>

<div class="container">
<form  
class="form-group" 
method="POST" 
action="emailsubscriber">
    <div class="d-flex">
        <label for="name" class="mr-2">Name</label>
        <input type="text" placeholder="Name" class="input group w-25 mb-2" name="name">
    </div>
    <div class="d-flex">
        <label for="email" class="mr-3">Email</label>
        <input type="email" placeholder="Email" class="input group w-25 mb-2" name="email">
    </div>   
    <div class="text-danger">
        {{$errors->first('name')}}
        {{$errors->first('email')}}
    </div>

    <button type="submit" class="btn btn-danger">Subscribe</button>
    @csrf
</form>
</div>

<ul>
    @foreach($emailSubscriber as $subscriber)
    <li>
        <div>
            <span class=
            "text-primary">Name: {{$subscriber->name}} </span>
            <span class=
            "text-secondary">Email: {{$subscriber->email}} </span>
        </div>
     </li>
    @endforeach
</ul>
@endsection