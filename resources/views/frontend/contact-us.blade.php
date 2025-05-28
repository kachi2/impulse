   @extends('layouts.app')
@section('contents')
   <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('frontend/img/bg/breadcrumb_bg.jpg')}}">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h3 class="title">Contact Us</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                     <div class="col-lg-7">
                            <div class="contact-form-wrap">
                                <h2 class="title">Keep in touch</h2>
                                {{-- <p>There are many variations of passages of Lorem Ipsum available but the majority a have suffered alteration</p> --}}
                                <form action="#">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="form-grp">
                                        <input type="email" placeholder="Email*">
                                    </div>
                                    <div class="form-grp">
                                        <input type="text" placeholder="Subject*">
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="message" placeholder="Message*"></textarea>
                                    </div>
                                    <button type="submit" class="btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="contact-info-wrap">
                                <h2 class="title">Contact Information</h2>
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-volume"></i>
                                        </div>
                                        <div class="content">
                                            <span><a href="tel:{{$settings->site_phone}}">{{$settings->site_phone}}</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fal fa-paper-plane"></i>
                                        </div>
                                        <div class="content">
                                            <span><a href="mailto:{{$settings->site_email}}">{{$settings->site_email}}</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <span>{{$settings->address}}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
          
                </div>
            </section>
            <!-- contact-area-end -->
            @endsection