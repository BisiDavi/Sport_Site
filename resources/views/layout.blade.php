<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- include link page -->
    @include('head-links')
    @yield('link')        
</head>

<body>   
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
