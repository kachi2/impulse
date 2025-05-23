
@extends('layouts.app')
@section('contents')
@include('frontend.slider.slider')
            <section class="support-area fix pt-115 pb-10">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 order-0 order-lg-2">
                            <div class="support-img-wrap ">
                                <div class="support-shape">
                                    <img src="{{asset('/frontend/img/images/support_shape.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
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
            <!-- support-area-end -->

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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="choose-icon">
                                    <img src="{{asset('images/repair.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Information, Communication, and Technology (ICT) Projects</a></h6>
                                    <p>We design, implement and manage ICT projects that meet the unique needs of our clients.</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="choose-icon">
                                    <img src="{{asset('images/artificial-intelligence.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Artificial Intelligence and Data Science</a></h6>
                                    <p>Our team offers consulting services in AI and data science to help organizations make data-driven decisions.</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="choose-icon">
                                    <img src="{{asset('images/network.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Network Infrastructure:</a></h6>
                                    <p>Our team designs and deploys satellite, LAN, wireless, and private virtual network infrastructure solutions.</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="choose-icon">
                                      <img src="{{asset('images/server.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Cloud Services</a></h6>
                                    <p>We partner with Amazon and Microsoft to deploy cloud 
                                      edge front, provision cloud infrastructure, and set up VPC 
                                      solutions..</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="choose-icon">
                                   <img src="{{asset('images/virtual-lab.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Security Systems</a></h6>
                                     <p>We design and implement bespoke security systems, 
                                    including CCTV, digital surveillance, cybernetic technology, 
                                    monitoring, and reporting.</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="choose-icon">
                                    <img src="{{asset('images/no-data.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Data Hosting:</a></h6>
                                    <p>We offer secure data hosting services, both on-site and in the cloud.</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="choose-item wow fadeInUp" data-wow-delay=".8s">
                                <div class="choose-icon">
                                  <img src="{{asset('images/vlogger.gif')}}">
                                </div>
                                <div class="choose-content">
                                    <h6 class=""><a href="why-choose-us.html">Technology Training:</a></h6>
                                    <p>As accredited trainers, we provide training services to 
                                      enhance human capacity development in all aspects 
                                      of technology.</p>
                                    <a href="why-choose-us.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->

            <!-- services-area -->
            <section class="services-area fix pt-115 pb-95">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title title-style-two text-center mb-40 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Our Services</span>
                                <h2 class="title tg-element-title">We Deal with the Aspects of Professional IT Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="services-icon">
                                    <div class="icon-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.75 79.75">
                                            <path d="M464.285,1599.46l-0.015,3.06a36.82,36.82,0,0,1-.178,73.64h-0.183a36.864,36.864,0,0,1-36.639-37l-3.059-.02a39.93,39.93,0,0,0,39.684,40.08h0.2a39.88,39.88,0,0,0,14.445-77.05l-1.647-.6a39.56,39.56,0,0,0-12.606-2.11"  transform="translate(-424.219 -1599.47)" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.062 29.06">
                                        <path d="M478.541,2770.61v2.77a2.254,2.254,0,0,1-2.252,2.25h-1.06a11.908,11.908,0,0,1-.719,1.74l0.75,0.75a2.142,2.142,0,0,1,.554,1.15H475.12c-0.034-.04-0.068-0.07-0.1-0.11l-2.308-2.31a9.967,9.967,0,0,0,.959-2.35,0.909,0.909,0,0,1,.88-0.68h1.742a0.439,0.439,0,0,0,.434-0.44v-2.77a0.437,0.437,0,0,0-.434-0.43h-1.742a0.909,0.909,0,0,1-.88-0.68,10.041,10.041,0,0,0-1.065-2.57,0.9,0.9,0,0,1,.14-1.1l1.233-1.24a0.426,0.426,0,0,0,.127-0.3,0.431,0.431,0,0,0-.127-0.31l-1.957-1.96a0.453,0.453,0,0,0-.614,0l-1.233,1.24a0.916,0.916,0,0,1-1.106.14,9.871,9.871,0,0,0-2.566-1.07,0.9,0.9,0,0,1-.681-0.88v-1.74a0.431,0.431,0,0,0-.435-0.43h-2.767a0.431,0.431,0,0,0-.434.43v1.74a0.9,0.9,0,0,1-.681.88,9.857,9.857,0,0,0-2.566,1.07,0.916,0.916,0,0,1-1.106-.14l-1.233-1.24a0.453,0.453,0,0,0-.614,0l-1.958,1.96a0.434,0.434,0,0,0-.126.31,0.429,0.429,0,0,0,.126.3l1.234,1.24a0.9,0.9,0,0,1,.14,1.1,10.006,10.006,0,0,0-1.065,2.57,0.91,0.91,0,0,1-.88.68h-1.742a0.437,0.437,0,0,0-.434.43v2.77a0.439,0.439,0,0,0,.434.44h1.742a0.91,0.91,0,0,1,.88.68,9.94,9.94,0,0,0,1.065,2.56,0.915,0.915,0,0,1-.14,1.11l-1.234,1.23a0.444,0.444,0,0,0,0,.62l1.958,1.95a0.433,0.433,0,0,0,.614,0l1.233-1.23a0.934,0.934,0,0,1,.643-0.27,0.962,0.962,0,0,1,.462.13,10.288,10.288,0,0,0,2.568,1.07,0.9,0.9,0,0,1,.68.88v1.74a0.431,0.431,0,0,0,.434.43h2.767a0.431,0.431,0,0,0,.435-0.43v-1.74a0.9,0.9,0,0,1,.68-0.88,10.421,10.421,0,0,0,2.355-.96l2.307,2.3a0.957,0.957,0,0,0,.111.11v0.69a2.152,2.152,0,0,1-1.15-.55l-0.752-.75a13.23,13.23,0,0,1-1.733.72v1.06a2.254,2.254,0,0,1-2.252,2.25h-2.767a2.254,2.254,0,0,1-2.251-2.25v-1.06a13.243,13.243,0,0,1-1.734-.72l-0.75.75a2.25,2.25,0,0,1-3.184,0l-1.958-1.96a2.248,2.248,0,0,1,0-3.18l0.751-.75a11.908,11.908,0,0,1-.719-1.74h-1.06a2.254,2.254,0,0,1-2.252-2.25v-2.77a2.254,2.254,0,0,1,2.252-2.25h1.06a12.263,12.263,0,0,1,.719-1.73l-0.751-.75a2.248,2.248,0,0,1,0-3.18l1.958-1.96a2.307,2.307,0,0,1,3.184,0l0.75,0.75a10.97,10.97,0,0,1,1.734-.72v-1.06a2.254,2.254,0,0,1,2.251-2.25h2.767a2.254,2.254,0,0,1,2.252,2.25v1.06a10.921,10.921,0,0,1,1.733.72l0.751-.75a2.307,2.307,0,0,1,3.184,0l1.957,1.96a2.245,2.245,0,0,1,0,3.18l-0.75.75a12.263,12.263,0,0,1,.719,1.73h1.06A2.254,2.254,0,0,1,478.541,2770.61Zm-4.811,11.12a0.9,0.9,0,0,1-1.285,0l-3.994-3.99a7.328,7.328,0,1,1,1.285-1.29l3.994,3.99A0.914,0.914,0,0,1,473.73,2781.73Zm-4.277-9.73c0-.19-0.01-0.37-0.028-0.56a5.477,5.477,0,0,0-4.868-4.87c-0.183-.01-0.369-0.02-0.557-0.02s-0.374.01-.557,0.02a5.476,5.476,0,0,0-4.868,4.87c-0.018.19-.028,0.37-0.028,0.56s0.01,0.37.028,0.56a5.457,5.457,0,0,0,4.868,4.86,5.186,5.186,0,0,0,1.114,0,5.458,5.458,0,0,0,4.868-4.86C469.443,2772.37,469.453,2772.19,469.453,2772Zm-9.088.91a0.911,0.911,0,0,0,.909-0.91,2.734,2.734,0,0,1,2.726-2.73,0.91,0.91,0,0,0,0-1.82,4.552,4.552,0,0,0-4.544,4.55A0.911,0.911,0,0,0,460.365,2772.91Z"
                                            transform="translate(-449.469 -2757.47)" />
                                    </svg>
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Analytic Solutions</a></h2>
                                    <p>It uses an dictionary over rursus mal suada lisis dolarorit ametion the as consectetur the elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="services-icon">
                                    <div class="icon-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.75 79.75">
                                            <path d="M464.285,1599.46l-0.015,3.06a36.82,36.82,0,0,1-.178,73.64h-0.183a36.864,36.864,0,0,1-36.639-37l-3.059-.02a39.93,39.93,0,0,0,39.684,40.08h0.2a39.88,39.88,0,0,0,14.445-77.05l-1.647-.6a39.56,39.56,0,0,0-12.606-2.11" transform="translate(-424.219 -1599.47)" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.906 30.24">
                                        <path d="M864.084,2756.86c-0.149,0-.3.01-0.447,0.01a13.285,13.285,0,0,0-1.535.14,13.515,13.515,0,0,0-8.7,21.59,0.4,0.4,0,0,0,.3.14,0.368,0.368,0,0,0,.3-0.14l0.814-.96a0.391,0.391,0,0,0,.012-0.48,11.5,11.5,0,0,1,8.332-18.25c0.321-.03.639-0.04,0.954-0.04a11.5,11.5,0,0,1,9.648,17.66,0.394,0.394,0,0,0,.045.48l0.876,0.91a0.391,0.391,0,0,0,.282.12,0.383,0.383,0,0,0,.317-0.17,13.509,13.509,0,0,0-11.194-21.01m0.005,4.61a8.854,8.854,0,0,0-2.175.26,9.212,9.212,0,0,0-6.981,9.22,9.069,9.069,0,0,0,1.108,4.07,0.435,0.435,0,0,0,.39.24,0.457,0.457,0,0,0,.335-0.16l0.972-1.16a0.447,0.447,0,0,0,.06-0.47,6.827,6.827,0,0,1-.6-2.59,6.873,6.873,0,0,1,6.9-7.14,6.794,6.794,0,0,1,2.143.34,6.907,6.907,0,0,1,4.315,8.97,0.439,0.439,0,0,0,.089.46l1.048,1.1a0.435,0.435,0,0,0,.315.13,0.444,0.444,0,0,0,.4-0.25,9.083,9.083,0,0,0,.839-4.14,9.2,9.2,0,0,0-7.573-8.74,8.385,8.385,0,0,0-1.582-.14m-0.017,8.69a1.4,1.4,0,0,0-1.028.48,1.5,1.5,0,0,0-.291,1.07v1.54l0.007,4.27c-0.027.13,0.053,3.1,0.053,3.1-0.258-.24-0.547-0.53-0.806-0.8a4.166,4.166,0,0,0-2.41-1.09,1.173,1.173,0,0,0-.184-0.01,1.066,1.066,0,0,0-.665.18l-0.172.17a1.214,1.214,0,0,0-.345,1.39,1.483,1.483,0,0,0,.52.43,3.671,3.671,0,0,1,1.089.76c0.594,0.72,1.969,2.31,2.81,3.16,0.171,0.09.541,0.44,0.713,0.53a6.437,6.437,0,0,1,1.1.76,5.026,5.026,0,0,0,.8.45,5.106,5.106,0,0,0,2.481.58h0.209c1.139-.04,2.175,0,2.915-0.7h0.042l0.018-.05a3.8,3.8,0,0,0,1.168-2.84c-0.009-.27-0.042-1.27-0.048-1.46l-0.123-3.77a1.416,1.416,0,0,0-.821-1.35,1.281,1.281,0,0,0-.377-0.06,1.372,1.372,0,0,0-.574.14H870.09l-0.019.01a1.089,1.089,0,0,0-.929-0.83,1.238,1.238,0,0,0-.266-0.02,1.425,1.425,0,0,0-.9.3,1.194,1.194,0,0,0-1.134-.68c-0.069,0-.14.01-0.214,0.01a1.54,1.54,0,0,0-1.056.62l-0.106-3.22c-0.021-.63-0.063-1.26-0.063-1.89a1.333,1.333,0,0,0-1.326-1.18m0.017-2.91h-0.106a3.277,3.277,0,0,0-2.07,5.63v-1.34a2.163,2.163,0,0,1,4.266-.51,2.145,2.145,0,0,1,.063.51l0.008,1.4a3.3,3.3,0,0,0-2.161-5.69"
                                            transform="translate(-850.625 -2756.88)" />
                                    </svg>
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Business Planning</a></h2>
                                    <p>It uses an dictionary over rursus mal suada lisis dolarorit ametion the as consectetur the elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="services-icon">
                                    <div class="icon-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.75 79.75">
                                            <path d="M464.285,1599.46l-0.015,3.06a36.82,36.82,0,0,1-.178,73.64h-0.183a36.864,36.864,0,0,1-36.639-37l-3.059-.02a39.93,39.93,0,0,0,39.684,40.08h0.2a39.88,39.88,0,0,0,14.445-77.05l-1.647-.6a39.56,39.56,0,0,0-12.606-2.11" transform="translate(-424.219 -1599.47)" />
                                        </svg>
                                    </div>
                                    <svg viewBox="0 0 171 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M78.3121 132.347C81.0962 151.279 37.1769 151.836 33.488 123.229C15.4609 128.31 2.93243 110.84 11.7024 95.4578C1.26197 88.2888 1.40118 67.4776 12.3288 61.2134C3.97647 52.3042 14.1385 27.4561 34.2536 31.9107C28.755 11.9347 57.9185 -4.35232 78.3817 11.5867L78.3121 132.347Z" />
                                        <path d="M33.6968 27.4561C35.228 36.2956 43.0235 43.1862 51.9327 44.7871" />
                                        <path d="M51.8631 20.7742C49.775 33.9987 72.0478 39.5669 78.1033 31.0057" />
                                        <path d="M40.7962 40.3325C40.7266 44.9959 34.532 50.9121 31.0519 52.3042" />
                                        <path d="M27.0149 67.408C32.5135 70.1921 32.5831 78.1268 38.5689 79.9365C44.7636 81.8158 48.1741 74.9251 50.6798 70.1225C54.5079 62.8838 60.1457 59.8909 68.3589 61.2134C71.0734 61.631 75.7367 63.5103 77.268 64.2759" />
                                        <path d="M20.8203 66.9903C25.0661 72.2801 31.8871 64.4846 27.5022 59.8909" />
                                        <path d="M78.5209 94.553C72.6743 88.7064 63.6259 95.3186 61.6075 101.583C59.3106 109.03 66.3404 115.016 63.8347 122.255C62.3035 126.64 58.893 128.589 54.508 127.823" />
                                        <path d="M33.6968 126.988C26.8757 109.03 60.7722 114.111 46.1557 87.0359" />
                                        <path d="M11.424 96.2931C13.86 92.3258 19.6371 92.0473 23.8828 92.2561C27.711 92.465 32.0263 95.3883 33.6272 95.8059" />
                                        <path d="M166.707 86.9663L167.334 67.408L155.501 66.9904C154.805 62.9534 153.692 58.9861 152.16 55.2971L163.019 49.3113L153.622 32.1891L142.068 38.5229C139.562 35.5996 136.778 32.8851 133.785 30.5186L140.676 18.8253L123.832 8.87218L116.733 20.9134C113.253 19.6606 109.633 18.6861 105.944 18.1293V4H96.2696V145.781H105.944V137.011C109.633 136.384 113.183 135.479 116.594 134.227L120.77 142.092L138.031 132.904L133.646 124.691C136.848 122.116 139.841 119.192 142.486 116.06L150.629 121.28L161.139 104.785L152.369 99.2164C153.901 95.249 155.014 91.0729 155.71 86.6879L166.707 86.9663Z" />
                                        <path d="M96.3392 32.1195V45.6224C112.487 45.692 125.503 58.7773 125.503 74.9251C125.503 91.0729 112.487 104.158 96.3392 104.228V117.731C119.934 117.661 139.006 98.5204 139.006 74.9947C139.006 51.3298 119.865 32.1891 96.3392 32.1195Z" />
                                    </svg>
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">IT Management</a></h2>
                                    <p>It uses an dictionary over rursus mal suada lisis dolarorit ametion the as consectetur the elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="services-icon">
                                    <div class="icon-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.75 79.75">
                                            <path d="M464.285,1599.46l-0.015,3.06a36.82,36.82,0,0,1-.178,73.64h-0.183a36.864,36.864,0,0,1-36.639-37l-3.059-.02a39.93,39.93,0,0,0,39.684,40.08h0.2a39.88,39.88,0,0,0,14.445-77.05l-1.647-.6a39.56,39.56,0,0,0-12.606-2.11" transform="translate(-424.219 -1599.47)" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.031 27.03">
                                        <path d="M463.953,3098.75c-6.08-1.69-13.824-6.59-12.325-21.82-0.053-1.67,7.176-1.31,11.768-5.03a0.92,0.92,0,0,1,1.113,0c4.638,3.73,11.79,3.35,11.769,5.03C477.79,3092.15,470,3097.09,463.953,3098.75Zm-10.5-21.07c-1.187,12.43,4.344,17.32,10.5,19.22,6.147-1.86,11.707-6.88,10.5-19.22-1.929-.38-7.034-1.56-10.5-3.94C460.487,3076.12,455.382,3077.3,453.453,3077.68Zm10.5-.88h0c-2.712,2.08-7.628,2.88-7.628,2.88-0.963,9.72,3.75,12.83,7.628,13.98,3.9-1.17,8.584-4.26,7.627-13.98C471.58,3079.68,466.664,3078.88,463.953,3076.8Z"
                                            transform="translate(-451.438 -3071.72)" />
                                    </svg>
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">Data Security</a></h2>
                                    <p>It uses an dictionary over rursus mal suada lisis dolarorit ametion the as consectetur the elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="services-icon">
                                    <div class="icon-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.75 79.75">
                                            <path d="M464.285,1599.46l-0.015,3.06a36.82,36.82,0,0,1-.178,73.64h-0.183a36.864,36.864,0,0,1-36.639-37l-3.059-.02a39.93,39.93,0,0,0,39.684,40.08h0.2a39.88,39.88,0,0,0,14.445-77.05l-1.647-.6a39.56,39.56,0,0,0-12.606-2.11" transform="translate(-424.219 -1599.47)" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.407 23.94">
                                        <path d="M850.527,3075.11h25.066a1.711,1.711,0,0,1,1.644,1.31h-24.89a2.592,2.592,0,0,0-2.524,2.64v12.63a1.773,1.773,0,0,1-1.027-1.57v-13.29a1.736,1.736,0,0,1,1.731-1.72h0Zm1.82,2.23H877.56a1.7,1.7,0,0,1,1.643,1.72v13.28a1.7,1.7,0,0,1-1.643,1.72h-1.438l-0.588,5.01-6.839-5.01H852.347a1.682,1.682,0,0,1-1.644-1.72v-13.28a1.682,1.682,0,0,1,1.644-1.72h0Zm1.585,3.82h8.013v1.4h-8.013v-1.4Zm0,3.09h22.542v1.39H853.932v-1.39Zm0,2.4h22.542v1.42H853.932v-1.42Zm0,2.43h22.542v1.42H853.932v-1.42Z" transform="translate(-848.781 -3075.12)" />
                                    </svg>
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">IT Counsultancy</a></h2>
                                    <p>It uses an dictionary over rursus mal suada lisis dolarorit ametion the as consectetur the elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="services-item wow fadeInUp" data-wow-delay=".9s">
                                <div class="services-icon">
                                    <div class="icon-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.75 79.75">
                                            <path d="M464.285,1599.46l-0.015,3.06a36.82,36.82,0,0,1-.178,73.64h-0.183a36.864,36.864,0,0,1-36.639-37l-3.059-.02a39.93,39.93,0,0,0,39.684,40.08h0.2a39.88,39.88,0,0,0,14.445-77.05l-1.647-.6a39.56,39.56,0,0,0-12.606-2.11" transform="translate(-424.219 -1599.47)" />
                                        </svg>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                        <path d="M1267.1,3080.83h0l-1.83,3.12a1.719,1.719,0,0,0-1.04-.58l1.83-3.13h0l0.52-.29,0.52-.29v1.17Zm-3.09-10.84a15.005,15.005,0,1,1-15.01,15,15.031,15.031,0,0,1,15.01-15h0Zm0,2.21a12.79,12.79,0,1,1-12.79,12.79,12.795,12.795,0,0,1,12.79-12.79h0Zm10.34,6.45,0.13,0.19a12.267,12.267,0,0,1,1.7,6.25,12.062,12.062,0,0,1-2.87,7.84c-0.13-.16-0.26-0.29-0.39-0.45h0a1.551,1.551,0,0,1-.19-0.23l-0.2-.16v-0.03l-0.39-.39a10.458,10.458,0,0,0,2.38-6.68,10.69,10.69,0,0,0-1.37-5.24l-0.2-.29Zm-1.4.81a10.523,10.523,0,1,0-17.08,12.21l-0.39.39v0.03c-0.07.06-.13,0.1-0.2,0.16a1.551,1.551,0,0,1-.19.23h0c-0.13.16-.3,0.29-0.43,0.45a12.271,12.271,0,0,1-2.86-7.84c0-6.74,6.64-12.17,12.21-12.17s8.2,2.25,10.34,5.73Zm-7.03,5.53a1.92,1.92,0,1,0-3.84,0,1.92,1.92,0,1,0,3.84,0h0Zm-1.59-9.21h0v-1.17h-0.65v1.17h0l0.16,0.17,0.17,0.16,0.16-.16Zm2.38,0.39h0l0.29-1.1-0.62-.17-0.29,1.11h0l0.1,0.2,0.13,0.19,0.19-.13Zm2.18,1.01h0l0.58-1.01-0.55-.32-0.59,1.01h0l0.07,0.23,0.06,0.19,0.2-.06Zm1.85,1.53h0l0.82-.81-0.46-.46-0.81.82h0v0.45h0.45Zm1.4,1.96h0l1.01-.59-0.33-.55-1,.58h0l-0.07.23-0.03.2,0.19,0.06Zm0.85,2.24h0l1.1-.29-0.16-.62-1.11.29h0l-0.12.2-0.1.19,0.19,0.13Zm0.22,2.41h1.14v-0.65h-1.14l-0.16.16-0.16.16,0.16,0.17Zm-0.39,2.38h0l1.11,0.29,0.16-.62-1.1-.29h0l-0.2.1-0.19.13,0.1,0.19Zm-1,2.18h0l1,0.58,0.33-.55-1.01-.59h0l-0.23.07-0.19.06,0.03,0.2Zm-15.95-.56h0l-1.01.59,0.33,0.55,0.97-.58h0l0.07-.23,0.06-.2-0.23-.06Zm-0.85-2.24h0l-1.1.29,0.16,0.62,1.11-.29h0l0.09-.2,0.13-.19-0.19-.13Zm-0.23-2.41h-1.17v0.65h1.17l0.17-.16,0.16-.17-0.16-.16Zm0.4-2.38h0l-1.11-.29-0.16.62,1.1,0.29h0l0.2-.1,0.19-.13-0.13-.19Zm0.97-2.18h0l-0.97-.58-0.33.55,1.01,0.59h0l0.19-.07,0.23-.06-0.06-.2Zm1.53-1.85h0l-0.78-.82-0.45.46,0.81,0.81h0.45v-0.23Zm1.99-1.4h0l-0.59-1.01-0.55.32,0.58,1.01h0l0.23,0.04,0.2,0.06,0.06-.19Zm2.24-.85h0l-0.29-1.11-0.62.17,0.29,1.1h0l0.2,0.1,0.19,0.13,0.14-.19Zm2.93,8.98a0.858,0.858,0,0,0-.84-0.84,0.845,0.845,0,1,0,0,1.69,0.86,0.86,0,0,0,.84-0.85h0Z"
                                            transform="translate(-1249 -3070)" />
                                    </svg>
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="services-details.html">QA & Testing</a></h2>
                                    <p>It uses an dictionary over rursus mal suada lisis dolarorit ametion the as consectetur the elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->

            <!-- team-area -->
            <section class="team-area fix pt-115 pb-90">
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
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="team-item wow fadeInUp" data-wow-delay=".2s">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/team_img01.jpg" alt=""></a>
                                    <div class="team-social big-icon">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Robert Amplilian</a></h2>
                                    <span>President & CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="team-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/team_img02.jpg" alt=""></a>
                                    <div class="team-social big-icon">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Christina Torres</a></h2>
                                    <span>Chief Strategy Officer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="team-item wow fadeInUp" data-wow-delay=".6s">
                                <div class="team-thumb">
                                    <a href="team-details.html"><img src="assets/img/team/team_img03.jpg" alt=""></a>
                                    <div class="team-social big-icon">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h2 class="title"><a href="team-details.html">Robert Amplilian</a></h2>
                                    <span>President & CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection
