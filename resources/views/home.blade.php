@extends('layout')

@section('link')
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/home-slider.css">
@endsection

@section('content')
    
    @include('home-slider')
    
    <div class="container-fluid" id="main">
      <div class="row about-academy" id="about-academy">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">                      
          <h1 data-aos="fade-up" class="text-center pb-5">ABOUT THE ACADEMY</h1>
          <div class="about-us-image d-flex"  data-aos="fade-up" data-aos-delay="100">
            <div class="abt">
              <img class="img-background" src="{{asset('assets/img/Rectangle 16.png')}}">
              <img class="volleyball" src="{{asset('assets/img/about 1.png')}}">
            </div>
                      
            <div class="academy-text data-aos="fade-up" data-aos-delay="100">              
              <p data-aos="fade-up" data-aos-delay="100">
                  Authentic African Sports Academy is an independent residential sports college for boys
                  and girls. It combines education with sports along with a special focus on football
                      development.
              </p>
                  
              <p class="d-none d-lg-block data-aos="fade-up" data-aos-delay="100""> Academy is designed to help aspiring players hone their football skills,
                      place them in lime light, and facilitate their discovery and recruitment into the big clubs
                      to play alongside football stars of their dreams
              </p>

                <button  class="btn" type="button" href="#" style="color:white;background: #7F2AA7;border: 1px solid #7F2AA7;box-sizing: border-box;">Read More</button>
            </div>
          </div>
          <h1 class="text-center m-5">Upcoming Events</h1>
          <div class="events container">
            <div class="row d-flex p-1">
              <div class="card">
                <img style="width:20vw;" src="assets/img/banner7.jpg" alt="">
              </div>
              <div class="card">
                <img style="width:20vw;" src="assets/img/banner9.jpg" alt="">
              </div>
              <div class="card">
                <img style="width:25vw;" src="assets/img/Banner1.png" alt="">
              </div>
            </div>
          </div>           
        </div>    
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="card shadow-lg p-3 mb-3 bg-white rounded">
            <h1 class="text-center">Blog</h1>
            <div class="row">
              <div class="d-flex">
                <img  class="w-75 h-75 p-3"src="assets/img/Rectangle 21.png"/>
                <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>            
              </div>              
                <a style="margin-left:75%;" href="#">Read More</a>              
            </div>
            <div class="border border-gray m-3"></div>

            <div class="row d-flex">
              <div class="d-flex">
                <img  class="w-75 h-75 p-3"src="assets/img/Rectangle 21.png"/>
                <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>            
              </div>
              <a style="margin-left:75%;" href="#">Read More</a> 
            </div>
            <div class="border border-gray m-3"></div>

            <div class="row d-flex">
              <div class="d-flex">
                <img  class="w-75 h-75 p-3"src="assets/img/Rectangle 21.png"/>
                <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>            
              </div>
              <a style="margin-left:75%;" href="#">Read More</a> 
            </div>
            <div class="border border-gray m-3"></div>

            <div class="row d-flex">
              <div class="d-flex">
                <img  class="w-75 h-75 p-3"src="assets/img/Rectangle 21.png"/>
                <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>            
              </div>
              <a style="margin-left:75%;" href="#">Read More</a> 
            </div>
                             
          </div>          
        </div>
      </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/banner9.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/banner8.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Aperiores voluptates</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Veritatis natus nisi</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Aliquam veritatis</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Partners</h2>
    </div>
    <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
        <img src="{{asset('assets/img/fifa.png')}}" alt="">
        <img src="{{asset('assets/img/lagos')}}" alt="">
        <img src="{{asset('assets/img/fifa.png')}}" alt="">
        <img src="{{asset('assets/img/lagos.png')}}" alt="">
        <img src="{{asset('assets/img/fifa.png')}}" alt="">
        <img src="{{asset('assets/img/lagos.png')}}" alt="">
        <img src="{{asset('assets/img/fifa.png')}}" alt="">
    </div>
    </div>
</section>
    <!-- End Clients Section -->
</div>

@endsection
