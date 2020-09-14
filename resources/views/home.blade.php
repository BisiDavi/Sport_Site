@extends('layout')

@section('title')
  Home
@endsection

@section('link')
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="assets/css/home-slider.css">
  <link rel="stylesheet" href="assets/css/preloader.css">
@endsection

@section('content')

  @include('HomeSlider')

  <div class="container-fluid" id="main">
    <div class="row about-academy" id="about-academy">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="section-titl">
          <h3 class="text-center pb-3">About De SkyBallers</h3>
        </div>
        <div class="about-us-image d-flex">
          <div class="abt">
            <img class="img-background" src="{{ asset('assets/img/Rectangle 16.png') }}">
            <img class="volleyball" src="{{ asset('assets/img/about 1.png') }}">
          </div>

          <div class="academy-text" data-aos="fade-up" data-aos-delay="100">
            <p data-aos="fade-up" data-aos-delay="100">
              At De SkyBallers, we promote sports by setting up platforms and programs that enhances the
              discovery and
              harnessing of talents across every age and region while adopting international best practices
            </p>

            <p class="d-none d-lg-block" data-aos="fade-up" data-aos-delay="100">
              We are well-organized and competitive on international stage.
              We operates with progressive, modern standard and sustainable policies.</p>

            <button class="btn" type="button" href="#"
              style="color:white;background: #7F2AA7;border: 1px solid #7F2AA7;box-sizing: border-box;">Read
              More</button>
          </div>
        </div>
        <div>
          <div class="section-titl text-center">
            <h3 class="text-center m-3 p-2">Upcoming Events</h3>
          </div>
          <div class="events container">
            <div class="row d-flex mx-auto">
              <div class="card shadow-lg mb-3 bg-white rounded new-event ">
                <img class="img-fluid" src="assets/img/upcoming_event.jpg" />
                <p></p>
              </div>
              <!-- <div class="card shadow-lg mb-3 bg-white rounded new-event">
                              <img class="img-fluid" src="assets/img/event.png" />
                            </div>
                            <div class="card shadow-lg mb-3 bg-white rounded  event-3">
                              <img class="img-fluid" src="assets/img/event.png" />
                            </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blogpost">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded blog-aside">
          <div class="section-title">
            <h3 class="text-center">Blog</h3>
          </div>
          <div style="display:grid; grid-template-rows:repeat(4,1fr)" class="blogcontainer">
            @foreach ($threePost as $post)
              <div id="blogcontent" class="row">
                <div class="blog-post">
                  <a href="/{{ $post->slug }}">
                    <img class="rounded img-fluid float-left p-3" src="{{ Voyager::image($post->image) }}"
                      style="width:400px;height:300px">
                    <span>
                      <h3 class="blogPostTitle text-center m-2">
                        {{ $post->title }}
                      </h3>
                    </span>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 blogpost">
                      <div class="card shadow-lg p-3 mb-3 bg-white rounded blog-aside">
                        <div class="section-title">
                          <h3 class="text-center">Blog</h3>
                        </div>
                        <div data-aos="fade-up" id="blogcontent"  data-aos-delay="200"  class="row">
                          <div class="d-flex blog-post">
                            <img  class="rounded img-fluid float-left p-3"src="assets/img/Rectangle 21.png"/>
                            <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>
                          </div>
                          <a  href="#"><i class="icofont-arrow-right float-right"></i>Read More</a>
                        </div>
                        <div class="border border-gray m-3"></div>

                        <div data-aos="fade-up" id="blogcontent" data-aos-delay="300"  class="row d-flex">
                          <div class="d-flex blog-post">
                            <img  class="rounded float-left p-3"src="assets/img/Rectangle 21.png"/>
                            <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>
                          </div>
                          <a  href="#"><i class="icofont-arrow-right float-right"></i>Read More</a>
                        </div>
                        <div class="border border-gray m-3"></div>

                        <div data-aos="fade-up" id="blogcontent" data-aos-delay="400"  class="row d-flex post-3">
                          <div class="d-flex blog-post">
                            <img  class="rounded float-left p-3"src="assets/img/Rectangle 21.png"/>
                            <p style="width:70%;padding:2px;">Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development</p>
                          </div>
                          <a  href="#"><i class="icofont-arrow-right float-right"></i>Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
             -->
      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container">
          <div class="section-title">
            <h3 data-aos="fade-in" class="text-center m-3 p-2">Services</h3>
            <h4 data-aos="fade-in">CONSULTANCY SERVICES</h4>
            <p data-aos="fade-in">We offer all round consultancy services in sports and sports related matters.
            </p>
          </div>

          <div class="row">
            <div class="service-1 col-md-6 col-sm-3 d-flex d-sm-none d-md-block align-items-stretch"
              data-aos="fade-right">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/malefitness.jpg" width="100%" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">HEALTH, WELLNESS AND FITNESS CAMPAIGN</a></h5>
                  <ul class="card-text">
                    <li>Dish out strategies that can help improve quality of life for people of various
                      ages and abilities.</li>
                    <li>Bring light to topics such as athletic injury management, sport and exercise
                      psychology, anatomy, biomechanics, wellness management strategies and many more.
                    </li>
                  </ul>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-2 col-md-6 col-sm-3 d-flex d-sm-none d-md-block align-items-stretch" data-aos="fade-left">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/femalefitness.jpg" width="100%" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">ACADEMY / TRAINING</a></h5>
                  <ul class="card-text">
                    <li>We have set up a professional and sustainable training platform where
                      sportsperson of all ages and levels will have the chance to attain their full
                      potential under the tutelage of passionate, disciplined and certified training
                      crew.</li>
                    <li>Our clients/athletes acquire individually streamed training programs and
                      sessions that are designed uniquely to enhance their talents, while developing
                      the skills and techniques of the athlete, group or team across a wide range of
                      sporting disciplines.</li>
                  </ul>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-3 col-md-6 col-sm-3 d-flex align-items-stretch" data-aos="fade-right">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/football.jpg" width="100%" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">SPORT FESTIVALS / TALENT HUNT SHOWS</a></h5>
                  <ul class="card-text">
                    <li>Several unique sport festivals are to be organized for various sports, age, sex,
                      regions of the country. These festivals come with our own unique concept and
                      programs.</li>
                    <li>We have a sustainable template that we follow which ensures ha the ultimate goal
                      of the festival is achieved. We partner with lots of organizations, firms, and
                      individuals etc. to ensure that each festival is a huge success</li>
                  </ul>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-4 col-md-6 col-sm-3 d-flex align-items-stretch" data-aos="fade-left">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/banner2.jpg" width="100%" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">ATHLETE MANAGEMENT</a></h5>
                  <ul class="card-text">
                    <li>This is what makes De skyballers international exceptional; we have set up a
                      beautiful and dynamic system that consists of seasoned and passionate
                      professionals that carries out standard and productive athlete management.</li>
                    <li>Our team ensures that every athlete grows not just in skills but in value. We
                      make all the moves, create the required environment, partnerships and attract
                      the best of deals to our athletes. We manage each athlete to stand out as a
                      personal brand that is sell-able anywhere in the world.</li>
                  </ul>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-5 col-md-6 col-sm-3 d-flex align-items-stretch" data-aos="fade-left">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/banner2.jpg" width="100%" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">SALES AND SUPPLY OF SPORTS MATERIALS</a></h5>
                  <ul class="card-text">
                    <li>We cover the whole ground in supply and sales of all types of sports materials.
                      We place premium on quality over quantity, we go for the best and that sets us
                      apart. We deliver to our clients even in bulk quantities.</li>
                    <li>We of course, partner with the best brands in the world to deliver on quality
                      sport materials.</li>
                  </ul>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-6 col-md-6 col-sm-3 d-flex align-items-stretch" data-aos="fade-left">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/banner2.jpg" width="100%" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">BOOT CAMPS/LIFESTYLE</a></h5>
                  <ul class="card-text">
                    <li>We believe in the power of influence, networks, and collaborations; hence, we
                      organize boot camps cities to create a sweet-sweet environment for athletes to
                      be influenced positively, network with big stars in the industry and collaborate
                      effectively to grow.</li>
                    <li>Our Lifestyle project is exceptional and plays a key role in the development
                      process. Celebrities, stars, big wigs in sports administration within the
                      country and beyond are all part this initiative.</li>
                  </ul>
                  <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Services Section -->


      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h3 class="text-center mb-5 p-2">Partners</h3>
          </div>
          <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/img/fifa.png') }}" alt="">
            <img src="{{ asset('assets/img/lagos') }}" alt="">
            <img src="{{ asset('assets/img/fifa.png') }}" alt="">
            <img src="{{ asset('assets/img/lagos.png') }}" alt="">
            <img src="{{ asset('assets/img/fifa.png') }}" alt="">
            <img src="{{ asset('assets/img/lagos.png') }}" alt="">
            <img src="{{ asset('assets/img/fifa.png') }}" alt="">
          </div>
        </div>
      </section>
      <!-- End Clients Section -->
    </div>
  @endsection

  @section('preloader-js')
    <script src="assets/js/preloader.js"></script>
  @endsection
