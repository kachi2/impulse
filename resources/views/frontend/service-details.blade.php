   @extends('layouts.app')
   @section('contents')
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('images/'.$pages->metas)}}">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h3 class="title"> {{$pages->menu?$pages->Menu->name:$pages->subMenu->Menu->name}}</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$pages->title}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services-details-area pt-120 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-8 order-2 order-lg-0">
                            <aside class="services-sidebar">
                                <div class="services-widget">
                                    <h4 class="sw-title">{{$pages->menu?$pages->Menu->name:$pages->subMenu->Menu->name}}</h4>
                                    <div class="services-cat-list">
                                        <ul class="list-wrap">
                                              @foreach ($sidebar as $menu )
                                                <li><a href="{{route('subpages', encrypt($menu->id))}}">{{$menu->name}}</a></li>
                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-8">
                            <div class="services-details-wrap">
                                <div class="services-details-thumb">
                                    <img src="{{asset('images/'.$pages->metas)}}" alt="" style="max-width: 600px">
                                    <a href="{{asset('images/'.$pages->metas)}}" class="link-btn popup-image"><i class="flaticon-link"></i></a>
                                </div>
                                <div class="services-details-content">
                                    <h2 class="title">{{$pages->title}}</h2>
                                    <p class="info-one">   <p>{!! $pages->contents !!}</p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection