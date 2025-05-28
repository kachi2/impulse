  <section class="slider-area">
                <div class="slider-active">
                  @foreach($sliders as $slider)
                    <div class="single-slider slider-bg" data-background="{{asset('images/'.$slider->image)}}">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <div class="slider-content">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".3s">{{$slider->title}}</span>
                                        <h2 class="" data-animation="fadeInUp" data-delay=".6s" style="color:#fff">{!! $slider->content !!}</h2>
                                        <div class="slider-btn">
                                            {{-- <a href="{{$slider->links}}" class="btn" data-animation="fadeInLeft" data-delay=".9s">Start a Project</a> --}}
                                            {{-- <a href="{{$slider->links}}" class="btn btn-two" data-animation="fadeInRight" data-delay=".9s"><span>Discover More</span></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  

                </div>
            </section>