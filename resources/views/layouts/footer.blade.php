     <footer>
            <div class="footer-area " style="background: #211d1d">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <div class="fw-logo p-2" style="background: #fff">
                                        <a href="{{route('index')}}" ><img src="{{asset('/assets/'.$settings->logo)}}" alt=""></a>
                                    </div>
                                    <div class="footer-content">
                                        <p>{{$settings->about}}</p>
                                        <ul class="list-wrap">
                                            <li><a href="{{$settings->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$settings->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$settings->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Our Services</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul class="list-wrap">
                                           @foreach ($sidebar_services as $menu_ft )
                                                <li><a href="{{route('subpages', encrypt($menu_ft->id))}}">{{$menu_ft->name}}</a></li>
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Links</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul class="list-wrap">
                                         <ul class="list list-6">
                                        @foreach ($menus as $menu )
                                  
                                        <li > 
                                        @if($menu->name == 'Home') <a href="{{route('index')}}">{{$menu->name}}</a>
                                         @else 
                                         <a href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> 
                                         @endif
                                        </li>
                                        @endforeach
                                
                                        </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Support</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul class="list-wrap">
                                        <p><i class="fa fa-map-marker"></i> {{$settings->address}}.</p>
                                        <p><i class="fa fa-phone"></i>  {{$settings->site_phone}}</p>
                                        <p><i class="fa fa-envelope-o"></i>  {{$settings->site_email}}</p>
                                        <p><i class="fa fa-clock-o"></i>  {{$settings->opening_hours}}</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="copyright-text">
                                        {!! $settings->site_copyright !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


      
      
      <script src="{{asset('/frontend/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('/frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/frontend/js/jquery.odometer.min.js')}}"></script>
        <script src="{{asset('/frontend/js/jquery.appear.js')}}"></script>
        <script src="{{asset('/frontend/js/slick.min.js')}}"></script>
        <script src="{{asset('/frontend/js/ajax-form.js')}}"></script>
        <script src="{{asset('/frontend/js/wow.min.js')}}"></script>
        <script src="{{asset('/frontend/js/gsap.js')}}"></script>
        <script src="{{asset('/frontend/js/ScrollTrigger.js')}}"></script>
        <script src="{{asset('/frontend/js/SplitText.js')}}"></script>
        <script src="{{asset('/frontend/js/gsap-animation.js')}}"></script>
        <script src="{{asset('/frontend/js/main.js')}}"></script>