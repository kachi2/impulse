<footer class="footer p-5" style="background: #eee">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <p> <a href="{{route('index')}}"><img class="img-fluid" src="{{asset('assets/'.$settings->logo)}}" width="120px" alt="logo"></a></p>
          <div class="footer-link">
            <div class="row p-3">
                Then with that thing in mind, follow these simple steps. Step One: <br>
                Get yourself nice and relaxed and settled. Concentrate on your breathing,<br>
                 engage in the moment and spend some time being still, quiet and drift inside of your own mind.<br>
                  Hypnotize yourself here.
                  <br>
               <ul class="list-unstyled mb-0 social-icon">
                   <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                   <li><a href="#"><i class="fab fa-github"></i></a></li>
                 </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
          <h5 class="text-primary mb-2 mb-sm-4">The Company</h5>
          <div class="footer-link">
            <ul class="list-unstyled mb-0">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Our Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
          <h5 class="text-primary mb-2 mb-sm-4">Our Services</h5>
          <div class="footer-link">
            <ul class="list-unstyled mb-0">
              <li><a href="#">Forum Support</a></li>
              <li><a href="#">Help & FAQs</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Pricing And Plans</a></li>
              <li><a href="#">Cookies Policy</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="footer-contact-info">
            <h5 class="text-primary mb-3">Our Contact Details </h5>
            <div class="contact-address">
              <div class="contact-item">
                <label>Address:</label>
                <p>{{$settings->site_address}}</p>
              </div>
              <div class="contact-item">
                <label>Phone:</label>
                <h4 class="mb-0 fw-bold"><a href="#">{{$settings->site_phone}}</a></h4>
              </div>
              <div class="contact-item">
                <label>Email:</label>
                <a class="text-dark" href="#">{{$settings->site_email}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom py-sm-5 py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="mb-0">   {{$settings->site_copyright}}</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
 <script src="{{asset('/frontend/js/jquery-3.6.0.min.js')}}"></script>
 <script src="{{asset('/frontend/js/popper/popper.min.js')}}"></script>
 <script src="{{asset('/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
 <script src="{{asset('/frontend/js/jquery.appear.js')}}"></script>
 <script src="{{asset('/frontend/js/swiper/swiper.min.js')}}"></script>
 <script src="{{asset('/frontend/js/swiperanimation/SwiperAnimation.min.j')}}s"></script>
 <script src="{{asset('/frontend/js/counter/jquery.countTo.js')}}"></script>
 <script src="{{asset('/frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
 <script src="{{asset('/frontend/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

 <script src="{{asset('/frontend/js/custom.js')}}"></script>

</body>
</html>
