 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Oh yeah, it's good to have you onboard! </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" style="background-color:#7F2AA7;" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top" style="background:rgba(83, 84, 97, 0.77);">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 d-sm-none d-sm-block d-xs-none d-xs-block footer-contact" data-aos="fade-up" data-aos-delay="100">
                <div class="logo-bottom mr-auto d-flex mb-2 mt-2">
                    <a href="/"><img src="{{asset('assets/img/codepen footer.png')}}" alt="logo" class="img-fluid mr-2"></a>
                <h1><a href="/">{{ setting('site.title')}}</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                </div>
                <p>
                    Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development. The academy is designed to help aspiring players hone their football skills, place them in the limelight, and facilitate their discovery and recruitment
                    into the big clubs to play alongside football stars of their dreams.The academy is subdivided into two viz
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 d-none d-sm-block footer-links" data-aos="fade-up" data-aos-delay="200">
                <h1 class="ml-5">Additional Link</h1>
                <ul>
                    <li><a href="#location">Our Location</a></li>
                    <li><a href="#Scholarship">Scholarship</a></li>
                    <li><a href="#Curriculum">Curriculum</a></li>
                    <li><a href="#Benefits">Benefits</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 footer-links" data-aos="fade-up" data-aos-delay="300">
                <h1>Contact the Academy</h1>
                <form>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Fullname">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12" style="margin-left:-5%;">
                        <textarea type="text" class="form-control" placeholder="Message" rows="3"></textarea>
                    </div>

                    <button class="btn btn-secondary"  type="submit">Send</button>
                </form>
            </div>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
      &copy; Copyright <strong><span>{{ setting('site.title') }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>
  <!-- End Footer -->
