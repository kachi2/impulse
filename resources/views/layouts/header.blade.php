<header class="header default">
    <div class="topbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="me-4 d-inline-block py-1">
                  <a href="#"><i class="far fa-envelope me-2 fa-flip-horizontal text-primary"></i> {{$settings->site_email}}</a>
                </div>
                <div class="me-auto d-inline-block py-1">
                  <a href="tel:1-800-555-1234"><i class="fas fa-telephone-alt text-primary me-2"></i> {{$settings->site_phone}}</a>
                </div>
                <div class="d-inline-block py-1">
                  <ul class="list-unstyled">
                    <li><a href="">Blogs</a></li>
                    <li><a href="">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
      <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('assets/'.$settings->logo)}}"  class="img-fluid"  width="150px" height="30px" alt="Logo"/></a>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              @foreach ($menus as $menu )
              <li class="@if($menu->has_child) dropdown-navbar 
                  @else @endif ">@if($menu->name == 'Home') <a  class="nav-link" href="{{route('index')}}">{{$menu->name}}</a> 
                  @else <a  class="nav-link" href="{{route('pages', encrypt($menu->id))}}">{{$menu->name}}</a> @endif
                  @if(count($menu->subMenu) > 0)
                  <ul class="dropdown-nav">
                      @forelse ($menu->subMenu as $sub ) 
                      <li ><a  class="nav-link"  href="{{route('subpages', encrypt($sub->id))}}">{{$sub->name}}</a></li>   
                      @empty
                      @endforelse
                  </ul>
              </li>
              @endif
              @endforeach
          </ul>
        </div>
      </div>
    </nav>
  </header>