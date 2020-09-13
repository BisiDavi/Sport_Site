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

<h1>My Customers </h1>


<div class="container m-auto">
    <form class="form-group w-25" action="customers" method="POST">
    <div class="d-flex">
        <label class="mr-2" for="name">Name </label>
        <input type="text" placeholder="Name" class="input-group mb-2" name="name"> 
    </div>
    <div class="d-flex">
        <label class="mr-2" for="email">Email</label>
        <input type="email" placeholder="Email" class="input-group mb-2" name="email"> 
    </div>
    <div class="text-danger"> 
        {{$errors->first('name')}} 
    </div>

        <button class="btn btn-primary" type="submit">Submit</button>
        @csrf
    </form>
</div>

<ul>
    @foreach($myCustomers as $customer)
    <li>
        <div>
          <span class="text-primary"> Name: {{ $customer->name}} </span> 
          <span class="text-secondary"> Email : 
          {{ $customer->email}} </span>
        </div>
    </li>
    @endforeach
</ul>
@endsection