<section id="banner">
    <div class="container-fluid">
        <div class="row">
            <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:550px;">
                <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:550px;height:550px;">
                    <ul>	
                        @forelse ($sliders as  $slider)
                        <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-thumb="{{asset('images/'.$slider->image)}}"  data-saveperformance="off"  data-title="Slide">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/'.$slider->image)}}"  alt="slider-img2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                         
                            <div class="tp-caption excerpt sft tp-resizeme"
                                 data-x="-3"
                                 data-y="179"
                                 data-speed="800"
                                 data-start="1300"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"
                                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">{!! $slider->title !!}
                            </div>
									<div class="tp-caption excerpt-big sft tp-resizeme"
                                    data-x="-2"
                                    data-y="230"
                                    data-speed="800"
                                    data-start="1900"
                                    data-easing="Power3.easeInOut"
                                    data-splitin="chars"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    data-endspeed="300"
                                    style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">{!! $slider->content !!}
                               </div>
                            <div class="tp-caption excerpt sfb tp-resizeme"
                                 data-x="1"
                                 data-y="332"
                                 data-speed="800"
                                 data-start="2700"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="300"

                                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                            </div>
                        </li>
                        @empty
                        @endforelse
                    </ul>
                    <div class="tp-bannertimer"></div>	</div>

                    @section('scripts')
                <script type="text/javascript">


                    /******************************************
                     -	PREPARE PLACEHOLDER FOR SLIDER	-
                     ******************************************/


                    var setREVStartSize = function() {
                        var	tpopt = new Object();
                        tpopt.startwidth = 960;
                        tpopt.startheight = 550;
                        tpopt.container = jQuery('#rev_slider_2_1');
                        tpopt.fullScreen = "off";
                        tpopt.forceFullWidth="off";
                        tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
                    };
                    setREVStartSize();
                    var tpj=jQuery;
                    tpj.noConflict();
                    var revapi2;
                    tpj(document).ready(function() {
                        if(tpj('#rev_slider_2_1').revolution == undefined){
                            revslider_showDoubleJqueryError('#rev_slider_2_1');
                        }else{
                            revapi2 = tpj('#rev_slider_2_1').show().revolution(
                                    {

                                        dottedOverlay:"none",
                                        delay:9000,
                                        startwidth:960,
                                        startheight:550,
                                        hideThumbs:200,

                                        thumbWidth:100,
                                        thumbHeight:50,
                                        thumbAmount:2,

                                        simplifyAll:"off",
                                        navigationType:"bullet",
                                        navigationArrows:"solo",
                                        navigationStyle:"preview1",
                                        touchenabled:"on",
                                        onHoverStop:"off",
                                        nextSlideOnWindowFocus:"off",

                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        drag_block_vertical: false,

                                        panZoomDisableOnMobile:"on",

                                        keyboardNavigation:"off",

                                        navigationHAlign:"center",
                                        navigationVAlign:"bottom",
                                        navigationHOffset:0,
                                        navigationVOffset:20,

                                        soloArrowLeftHalign:"left",
                                        soloArrowLeftValign:"center",
                                        soloArrowLeftHOffset:20,
                                        soloArrowLeftVOffset:0,

                                        soloArrowRightHalign:"right",
                                        soloArrowRightValign:"center",
                                        soloArrowRightHOffset:20,
                                        soloArrowRightVOffset:0,

                                        shadow:0,
                                        fullWidth:"on",
                                        fullScreen:"off",

                                        spinner:"off",

                                        stopLoop:"off",
                                        stopAfterLoops:-1,
                                        stopAtSlide:-1,

                                        shuffle:"off",

                                        autoHeight:"off",
                                        forceFullWidth:"off",



                                        hideThumbsOnMobile:"on",
                                        hideBulletsOnMobile:"on",
                                        hideArrowsOnMobile:"on",
                                        hideThumbsUnderResolution:0,

                                        hideSliderAtLimit:0,
                                        hideCaptionAtLimit:0,
                                        hideAllCaptionAtLilmit:0,
                                        startWithSlide:0,
                                        isJoomla: true
                                    });



                        }
                    });	/*ready*/

                </script>
                @endsection
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</section>