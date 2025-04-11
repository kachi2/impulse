<!--Footer upper-->
<div style="background: #fff; height:100px">

</div>
<section id="footer-upper" class="space">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 footer-block">
                <a href="index.html" class="logo">
                    <img src="{{asset('/assets/white_'.$settings->logo)}}" alt="logo" style="width:140px">
                </a>
                <p>{{$settings->about}}</p>
                <ul class="contact">
                    <li><a href="mailto:info@primax.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$settings->site_email}}</a></li>
                    <li><a href="tel:{{$settings->site_phone}}"><i class="fa fa-phone" aria-hidden="true"></i>  {{$settings->site_phone}}</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$settings->address}}</li>
                </ul>
                {{-- <ul class="corporate-social">
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                    <li><a target="_blank" href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fa fa-behance"></i></a></li>
                </ul> --}}
            </div>
            <div class="col-sm-3 footer-block">
                <h3>Latest Blogs</h3>
                <div class="recent-post">
                   @forelse($site_blogs as $blog)
                    <div class="post-block">
                        <div class="post-image">
                            <img src="{{asset('images/'.$blog->image)}}" alt="post">
                        </div>
                        <div class="post-content">
                            <h5><a href="#">{{$blog->title}}</a> </h5>
                        </div>
                    </div>
                    @empty 
                    @endforelse

                </div>
            </div>
            <div class="col-sm-3 footer-block">
                <div class="tags">
                    <h3>Useful Links</h3>
                    <ul class="tagspopular">
                        @foreach ($menus as $menu )
                        <li > 
                        @if($menu->name == 'Home') <a  href="{{route('index')}}">{{$menu->name}}</a> @else <a  href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                       </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
            <div class="col-sm-3 footer-block">
                <div class="newsletter">
                    <h3>Newsletter </h3>
                    <p>Enter your mailing address for our mailing list to keep you yourself updated. </p>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address">
                            <button type="submit" class="sppb-btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center copyrights">
                {{$settings->site_copyright}}
            </div>
        </div>
    </div>
</footer>
</div>
</section>
<!--Offcanvas-->
<div class="offcanvas-menu">
<a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
<div class="offcanvas-inner">
<div class="sp-module ">
    <div class="sp-module-content">
        <ul class="nav menu">
            <li class="active deeper parent">
                @foreach ($menus as $menu )
                <li > 
                @if($menu->name == 'Home') <a  href="{{route('index')}}">{{$menu->name}}</a> @else <a  href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
               </li>
                @endforeach
        </ul>
    </div>
</div>
</div>
</div>
<!--All Script-->
<script src="{{asset('/frontend/js/bootstrap.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('/frontend/js/appear.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<script src="{{asset('/frontend/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/smoothscroll.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/sp-flickr-gallery.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/spsimpleportfolio.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/featherlight.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/jquery.shuffle.modernizr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/morphext.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/count-down.js')}}" type="text/javascript"></script>
<script src="{{asset('/frontend/js/main.js')}}" type="text/javascript"></script>
</body>
</html>