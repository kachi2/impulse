     {{-- <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div> --}}

                <header>
            <div id="header-fixed-height"></div>
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-7">
                            <div class="header-top-left">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{asset('assets/'.$settings->logo)}}" alt="Logo" style="width: 100px"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">

                                            <ul class="navigation">
                                            @foreach ($menus as $menu )
                                            <li class="@if($menu->has_child)    menu-item-has-children
                                                @else @endif ">@if($menu->name == 'Home') <a href="{{route('index')}}">{{$menu->name}}</a> 
                                                @else <a href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                                                @if(count($menu->subMenu) > 0)
                                                <ul class="sub-menu">
                                                    @forelse ($menu->subMenu as $sub ) 
                                                    <li><a href="{{route('subpages', encrypt($sub->id))}}">{{$sub->name}}</a></li>   
                                                    @empty
                                                    @endforelse
                                                </ul>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.svg" alt="Logo"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-close"><i class="fas fa-times"></i></div>
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">... Search Here ...</h2>
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Type keywords here">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-end -->
        </header>
          <main>