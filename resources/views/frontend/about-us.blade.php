@extends('layouts.app')
@section('contents')

      <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('frontend/img/bg/breadcrumb_bg.jpg')}}">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h3 class="title">About Us</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- support-area -->
            <section class="support-area fix pt-115 pb-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="support-img-wrap">
                                <img src="{{asset('images/image1.webp')}}" alt="" class="wow fadeInDown" data-wow-delay=".2s">
                                <img src="{{asset('images/image2.jpg')}}" alt="" class="wow fadeInRight" data-wow-delay=".3s">
                                <img src="{{asset('images/image3.jpg')}}" alt="" class="wow fadeInLeft" data-wow-delay=".4s">
                                <img src="{{asset('images/image4.jpg')}}" alt="" class="wow fadeInUp" data-wow-delay=".5s">
                                <div class="work-experience wow zoomIn" data-wow-delay=".6s">
                                    <h2 class="title">30</h2>
                                    <span>YEAR’S EXPERIENCE</span>
                                </div>
                                <div class="support-shape">
                                    <img src="{{asset('/frontend/img/images/support_shape.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="support-content wow fadeInLeft" data-wow-delay=".2s">
                                <div class="section-title mb-25 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title">About Impulse Technologies</span>
                                </div>
                                <p>Impulse Technologies is a seasoned IT company with 
                                        over 30 years of experience in delivering cutting-edge 
                                        technology solutions. Established in the UK in 1996 and 
                                        later registered in Nigeria in 2001, we have built a 
                                        reputation for excellence in designing, implementing, 
                                        and managing innovative IT projects</p>
                                <div class="support-list">
                                    <ul class="list-wrap">
                                        <li><i class="fas fa-check-circle"></i>Data Analytics</li>
                                        <li><i class="fas fa-check-circle"></i>IT Consultancy</li>
                                        <li><i class="fas fa-check-circle"></i>Data security</li>
                                        <li><i class="fas fa-check-circle"></i>Our Technology Solution</li>
                                        <li><i class="fas fa-check-circle"></i>Design and Development</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- support-area-end -->

            <!-- mission-area -->
            <section class="mission-area pt-120 pb-85">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mission-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="mission-thumb">
                                    <img src="{{asset('frontend/img/images/mission-img.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h2 class="title">Our Mission</h2>
                                    <p>Our mission is to be a world-class IT company that 
                                        improves the digital economy of our clients and 
                                        provides first-class IT services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mission-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="mission-thumb">
                                    <img src="{{asset('frontend/img/images/vision_img.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h2 class="title">Our Core Values</h2>
                                   
                                       <p>  <strong> rofessionalism: </strong> P We maintain the highest level of 
                                        professionalism in our services and interactions.</p>  
                                          <p>    <strong>  Dedication: </strong>  Our team is committed to delivering 
                                        exceptional results and exceeding client expectations.</p>  
                                         <p>   <strong>   Integrity:</strong>  We operate with integrity, transparency, and 
                                        honesty in all our dealings.</p>  
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- mission-area-end -->

            <!-- brand-area -->
            <div class="brand-area">
                <div class="container">
                        <h3>Our Partners</h3>
                    <div class="brand-inner">
                     
                        <div class="row brand-active">
                            
                            @forelse($brands as $brand)
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{asset('images/'.$brand->image)}}" alt="" style="width: 100px"> 
                                </div>
                            </div>
                            @empty 
                            @endforelse
                       

                        </div>
                    </div>
                </div>
            </div>
        

           <section class="team-area inner-team-area fix pt-115 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-40 tg-heading-subheading animation-style2">
                    <span class="sub-title tg-element-title">Our Team</span>
                    <h2 class="title tg-element-title">Meet the Team of <br> Innovators!</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            @forelse($teams as $team)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="team-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-thumb">
                        <img src="{{ asset('images/' . $team->image) }}" alt="">
                    </div>
                    <div class="team-content">
                        <h2 class="title">{{ $team->name }}</h2>
                        <span>{{ $team->position }}</span>
                    </div>
                    <p>
                        {!! substr($team->about, 0, 100) !!}...
                        <button type="button" style="border: none; background:none; color:#000" data-bs-toggle="modal" data-bs-target="#aboutModal{{$team->id}}">
                        read more
                    </button>
                    </p>
                </div>
            </div>

            <div class="modal fade" id="aboutModal{{$team->id}}" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModalLabel">About {{$team->name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="aboutModalBody">
                      {!! substr($team->about, 0, 10000) !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
            @empty
                <p>No team members found.</p>
            @endforelse

        </div>
    </div>
</section>

@endsection