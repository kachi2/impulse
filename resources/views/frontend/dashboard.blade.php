
@extends('layouts.app')
@section('contents')
@include('frontend.slider.slider')

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
                                    <span class="sub-title tg-element-title">Cutting Edge Enterprise Solutions</span>
                                </div>
                                <p>Entities of all scales encounter constantly changing obstacles. We recognize the necessity for flexible and robust tools to enhance processes and optimize effectiveness. Our extensive range of enterprise solutions is crafted to enable your organization to reach its utmost capabilities.

                                  Our offerings are built to be both scalable and versatile, effortlessly merging with your current systems while providing the adaptability to expand in accordance with your aspirations.

                                  Regardless of whether your priority lies in refining workflows, boosting productivity, strengthening security, or leveraging the benefits of data analysis, our enterprise solutions equip you with the resources and knowledge required to attain operational superiority..</p>
                                  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- choose-area -->
            <section class="choose-area fix choose-bg pt-5 pb-20">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="section-title text-center mb-40 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Our Solutions</span>
                                <h4 class="titlement-">Discover how we can help you.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                          @forelse ($services as $service)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="choose-icon">
                                    {{-- <img src="{{asset('images/repair.gif')}}"> --}}
                                <img  style="" src="{{asset('images/'.$service->image)}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html"> {{$service->name}}</a></h6>
                                    <p> {{$service->title}}</p>
                                   <a href="{{route('subpages', encrypt($service->id))}}" > Read More</a>
                                </div>
                            </div>
                        </div>
                        @empty @endforelse
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->

           <section class="support-area fix pt-115 pb-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="support-img-wrap">
                                <img src="{{asset('images/image9.jpg')}}" alt="" class="wow fadeInDown" data-wow-delay=".2s">
                                <img src="{{asset('images/image7.jpg')}}" alt="" class="wow fadeInRight" data-wow-delay=".3s">
                                <img src="{{asset('images/image8.jpg')}}" alt="" class="wow fadeInLeft" data-wow-delay=".4s">
                                <img src="{{asset('images/image6.jpg')}}" alt="" class="wow fadeInUp" data-wow-delay=".5s">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="support-content wow fadeInLeft" data-wow-delay=".2s">
                                <div class="section-title mb-25 tg-heading-subheading animation-style2">
                                    <span class="sub-title tg-element-title"></span>
                                    <h2 class="title tg-element-title">Helping Government Achieve its Objectives through Digitization</h2>
                                </div>
                                <p>Impulse Technologies can play a significant role in helping the government achieve 
                                    its objectives through digitization. Here are some potential areas of focus:</p>
                                <div class="support-list">
                                    <ul class="list-wrap">
                                        <p><span style="color:darkblue">  <i class="fas fa-check-circle"></i> Digital Infrastructure Development: </span>
                                          Impulse can help design and deploy digital infrastructure, such as data centers, 
                                            cloud services, and network infrastructure, to support government operations.</p>
                                      <p> <span style="color:darkblue"> <i class="fas fa-check-circle"></i> E-Government Services: </span>Impulse can assist in developing and implementing e-government services, such as online 
                                                portals, digital payment systems, and electronic document management.</p>
                                              <p> <span style="color:darkblue"> <i class="fas fa-check-circle"></i>Data Analytics and Insights: </span> can provide data analytics and insights to help the government make informed 
                                                    decisions, track progress, and optimize resources.</p>
                                              <p> <span style="color:darkblue"> <i class="fas fa-check-circle"></i> Cybersecurity:</span> Impulse can help strengthen the government's cybersecurity posture through vulnerability 
                                                            assessments, penetration testing, and incident response planning/p>
                                              <p> <span style="color:darkblue"> <i class="fas fa-check-circle"></i> </span> Impulse can help Talent Hunt Young Brilliant Nigerians through testing and cbt.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-area -->

               <section class="mission-area pt-120 pb-85" style="background: #eff">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mission-content wow fadeInUp" data-wow-delay=".2s">
                                <h2 class="title">Impulse Technologies can partner with 
                                            global companies to place trained Nigerian youths in remote jobs, such as</h2>
                            </div>
                        </div>
                    <div class="col-lg-8">
                    <div class="row">

                        @forelse($experties as $expert)
                        <div class="col-lg-4 col-md-6">
                            <div class="mission-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="mission-thumb">
                                     <img  style="" src="{{asset('images/'.$expert->image)}}">
                                </div>
                                <div class="content">
                                    <h2 class="title">{{$expert->name}}</h2>
                                         <p> {{$expert->title}}</p>
                                </div>
                            </div>
                        </div>
                        @empty 
                        @endforelse
                   
                        
                    </div>
                    </div>
                     </div>
                </div>
            </section>

            {{-- <section class="blog-area fix pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="section-title text-center mb-40 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Blog Updates</span>
                                <h6 class="">Interesting Articles and Blogs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                         @forelse ($blogs as  $blog)
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="blog-post-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="blog-post-thumb">
                                          <a href="{{route('blog.details', encrypt($blog->id))}}"><img src="{{asset('images/'.$blog->image)}}" alt="Post"/></a>
                                </div>
                                <div class="blog-post-content">
                                      <h2 class="title"><a href="{{route('blog.details', encrypt($blog->id))}}">{{$blog->title}}</a></h2>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i>By <a href="{{route('blog.details', encrypt($blog->id))}}">Admin</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                            @empty
                                
                            @endforelse 
                    </div>
                </div>
            </section> --}}

            <section class="team-area inner-team-area fix pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="section-title text-center mb-40 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Our Team</span>
                                <h2 class="title tg-element-title">Meet the Teem of <br> Innovators!</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        @forelse($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="team-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="team-thumb">
                                    <a href=""><img src="{{asset('images/'.$team->image)}}" alt=""></a>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html"></a> {{$team->name}}</h2>
                                    <span>{{$team->position}}</span>
                                </div>
                            </div>
                        </div>
                        @empty 
                        @endforelse
                      
                    </div>
                </div>
            </section>
            <!-- team-area-end -->







@endsection
