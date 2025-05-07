<section class="banner">
    <div class="swiper-container">
      <div class="swiper-wrapper h-700 h-sm-500">

        @foreach ($sliders as $slider)
        <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-30" style="background-image:url('{{asset('images/'.$slider->image)}}'); background-size: cover; background-position: center center;">
          <div class="swipeinner container">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-10 text-center position-relative">
                <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">{{$slider->title}}</h1>
                <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">{{$slider->content}}</h6>
              </div>
            </div>
          </div>
        </div>
        @endforeach
     

      </div>
      <div class="swiper-button-prev"><i class="fas fa-arrow-left icon-btn"></i></div>
      <div class="swiper-button-next"><i class="fas fa-arrow-right icon-btn"></i></div>
    </div>
  </section>