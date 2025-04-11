    <section class="wrapper off-canvas-menu-wrap">
        <div class="body-innerwrapper">
            <!--Top bar-->
            <section id="topbar">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-sm-12 text-right topbar-block">
                            <ul class="sp-contact-info">
                                <li class="sp-contact-phone">
                                    <i class="fa fa-phone"></i>&nbsp; Phone: &nbsp;<a href=" {{$settings->site_phone}}"> {{$settings->site_phone}}</a>
                                </li>
                                <li class="sp-contact-email">
                                    <i class="fa fa-envelope-o"></i>&nbsp; Email:&nbsp; <a href="mailto: {{$settings->site_email}}"> {{$settings->site_email}}</a>
                                </li>
                                <li class="sp-contact-time">
                                    <i class="fa fa-clock-o"></i>&nbsp; Office Time: &nbsp;<a>{{$settings->opening_hours}}</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!--Header-->
            <header id="sp-header" class="menu-fixed-out header-3" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <div class="row">
                        <div id="sp-logo" class="col-xs-8 col-sm-3 col-md-3">
                            <h1 class="logo">
                                <a href="{{route('index')}}"><img class="sp-default-logo" src="{{asset('assets/'.$settings->logo)}}" alt="{{$settings->logo}}" style="width: 130px"></a>
                            </h1>
                        </div>
                        <div id="sp-menu" class="col-xs-4 col-sm-7 col-md-7">
                            <div class="sp-column ">
                                <div class="sp-megamenu-wrapper">
                                    <a id="offcanvas-toggler" class="visible-sm visible-xs" href="#"><i class="fa fa-bars"></i></a>
                                    <ul class="sp-megamenu-parent menu-slide-down hidden-sm hidden-xs">
                                        @foreach ($menus as $menu )
                                        <li class="sp-menu-item @if($menu->has_child) sp-has-child @endif">
                                            <a href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a>
                                            @if(count($menu->subMenu) > 0)
                                            <div class="sp-dropdown sp-dropdown-main sp-menu-right">
                                                <div class="sp-dropdown-inner">
                                                    <ul class="sp-dropdown-items">
                                                        @forelse ($menu->subMenu as $sub ) 
                                                        <li><a href="{{route('subpages', encrypt($sub->id))}}">{{$sub->name}}</a></li>   
                                                        @empty
                                                        @endforelse
                                                </div>
                                            </div>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="sp-column col-sm-2 col-xs-12  social-one social-two">
                            <ul class="social-icons">
                                <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </header>