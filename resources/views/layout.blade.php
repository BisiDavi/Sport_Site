<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- include link page -->
    @include('head-links')
    @yield('link')        
</head>

<body>
    <!-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> -->

    <!-- include the header -->
    @include('header')

    @yield('content')

   <!-- include the footer -->
   @include('footer')
  
   <a href="#" style="background-color: #7F2AA7;" class="back-to-top">
    <i class="icofont-simple-up"></i>
   </a>

   @include('footer-links')

<!-- @yield('preloader-js') -->
</body>
</html>
