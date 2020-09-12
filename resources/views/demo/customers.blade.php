<ul>
    <li><a href="/demo">Home</a></li>
    <li><a href="/demo/about">About</a></li>
    <li><a href="/demo/contact">Contact</a></li>
    <li><a href="/demo/customers">Customers</a></li>
    <li>
        <a href="/demo/emailsubscriber">Email Subscribers</a>
    </li>
</ul>

<h1>My Customers </h1>

<ul>
    @foreach($myCustomers as $customer)
    <li>{{ $customer}} </li>
    @endforeach
</ul>