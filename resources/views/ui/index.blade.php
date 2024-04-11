@extends('ui-layouts.app')
@section('lottie')
    <svg style="width: 0; height: 0; position: absolute;" aria-hidden="true" focusable="false">
        <linearGradient id="my-cool-gradient" x1="0%" y1="50%" x2="100%" y2="50%">
            <stop offset="0%" style="stop-color: #9f0d7f; stop-opacity: 1" />
            <stop offset="32%" style="stop-color: #9f0d7f; stop-opacity: 1" />
            <stop offset="68%" style="stop-color: #241468; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #241468; stop-opacity: 1" />
        </linearGradient>
    </svg>
@endsection
@section('lottie-header')
    <header class="slider simpl fixed-slider bg-img valign">
        <div class="row no-gutters landing-elmnt" style="width: 100%">
            <div class="col-xl-6 col-sm-6 col-12 custom-margin-landing">
                <lottie-player src="{{ asset('ui/json/launch.json') }}" background="#FFFFFF" speed="1"
                    class="lottie-dime" loop autoplay></lottie-player>
            </div>
            <div class="col-xl-6 col-sm-6 col-12 custom-margin-landing2">
                <div class="col-12">
                    <div class="text-fader">
                        <div class="text-content">
                            <span class="line">Welcome to <span class="colour">Coralbeach Studios</span></span>
                            <span class="line">Crafting <span class="colour">Dreams,</span></span>
                            <span class="line">Designing <span class="colour">Realities.</span></span>
                        </div>

                        <div class="text-content">
                            <span class="line">Video Production</span>
                            <span class="line"><span class="colour">Branding</span></span>
                            <span class="line">2D/3D Graphics</span>
                            <span class="line"><span class="colour">Advertising</span></span>
                            <span class="line">Photography</span>
                        </div>

                        <div class="text-content">
                            <span class="line">Driven by <span class="colour">art</span></span>
                            <span class="line">mixed with <span class="colour">passion,</span></span>
                            <span class="line">and a lot of <span class="colour">colors.</span></span>
                        </div>

                        <div class="text-content">
                            <span class="line">We create</span>
                            <span class="line">stunning <span class="colour">contents</span></span>
                            <span class="line">that elevate</span>
                            <span class="line">your <span class="colour">business</span></span>
                            <span class="line">to the next level.</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 custom_mt524">
                    <section class="contact">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="cont-info" style="text-align: center;">
                                        <div class="social soc-ico-mt">
                                            <a href="https://www.facebook.com/coralbeachstudios" class="icon">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="https://www.instagram.com/coralbeachstudios/" class="icon">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="https://www.youtube.com/@roadbuddies9870" class="icon">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                            <a href="https://www.youtube.com/@bigmongerpromotions7933" class="icon">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- <div id="container">
      <span id="text1"></span>
      <span id="text2"></span>
    </div> -->

        <!-- <div id="indx4">Photography</div>
      <div id="indx5">Business promotions</div> -->

        <!-- <svg id="filters">
      <defs>
        <filter id="threshold">
          <feColorMatrix
            in="SourceGraphic"
            type="matrix"
            values="1 0 0 0 0
            0 1 0 0 0
            0 0 1 0 0
            0 0 0 255 -140"
          />
        </filter>
      </defs>
    </svg> -->

        <!-- <spline-viewer
      loading-anim
      url="https://prod.spline.design/LbfU37v2KQaU7uHk/scene.splinecode"
      style="height: 500px"
    ></spline-viewer> -->
    </header>
@endsection
@section('content')
    <div class="main-content">
        <!-- ==================== Start Works ==================== -->

        <section
            class="work-carousel section-padding caroul simpl sub-bg position-re custom-padding-t50 custom-padding-b65">
            <div class="container-fluid">
                <div class="sec-head custom-font text-center custom-margin-b40">
                    <h6 class="wow fadeIn" data-wow-delay=".5s">Portfolio</h6>
                    <h3 class="wow" data-splitting>Featured</h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content wow fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago" style="background-position: center;"
                                            data-background="{{ asset('ui/img/portfolio/curs/stories_retold.jpg') }}">
                                        </div>
                                        <div class="cont">
                                            <h6><a href="#0">art & culture</a></h6>
                                            <h4>
                                                <a
                                                    href="https://www.instagram.com/reel/CrL2drfO6k6/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==">Thirra</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago" style="background-position: center;"
                                            data-background="{{ asset('ui/img/portfolio/curs/nexon_detour.jpg') }}"></div>
                                        <div class="cont">
                                            <h6><a href="#0">automotive</a></h6>
                                            <h4>
                                                <a href="https://youtu.be/Ta2Fwvsx5IU">Nexon Detour</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago" style="background-position: center;"
                                            data-background="{{ asset('ui/img/portfolio/curs/honda_city.jpg') }}"></div>
                                        <div class="cont">
                                            <h6><a href="#0">automotive</a></h6>
                                            <h4>
                                                <a href="https://youtu.be/sihPHcXXbEM">Honda City Cinematic</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago" style="background-position: center;"
                                            data-background="{{ asset('ui/img/portfolio/curs/kodai.jpg') }}"></div>
                                        <div class="cont">
                                            <h6><a href="#0">travel</a></h6>
                                            <h4>
                                                <a href="https://youtu.be/193vqqgHiJ4">Kodaikanal</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider setting -->
                            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                <i class="ion-ios-arrow-right"></i>
                            </div>
                            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                <i class="ion-ios-arrow-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Works ==================== -->

        <!-- ==================== Start clients Brands ==================== -->

        <section class="clients section-padding client-bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign">
                        <div class="sec-head custom-font mb-0">
                            <h6 style="color: white">Clients</h6>
                            <h3 style="color: white">
                                Our <br />
                                Clients.
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="row bord glassmorph1">
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/oregano.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Vazhakkad,
                                                Malappuram</a>
                                            <!-- <p class="link">Belly Gym, Kozhikode</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".6s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/indo.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Pushpa
                                                Junction, Calicut</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".8s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/belly.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Nadakkavu,
                                                Calicut</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/villade.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Mahe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row bord glassmorph1">
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".4s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/hoowa.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Calicut</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".7s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/ohlala.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Areacode</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".5s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/portugal.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Ernakulam</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="{{ asset('ui/img/clients/brands/mallus.png') }}"
                                                alt="coralbeachstudios clients" />
                                            <a href="#0" class="link"
                                                style="margin-bottom: 18px; font-size: 10px;" data-splitting>Dubai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End clients Brands ==================== -->

        <!-- ==================== Start Services ==================== -->

        <section class="services section-padding bord-top">
            <div class="container">
                <div class="sec-head custom-font text-center">
                    <h6>Best Features</h6>
                    <h3>Services.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                            <span class="icon pe-7s-video"></span>
                            <h6>Video Production</h6>
                            <p>
                                Unleash creativity! Elevate your brand with expert video production. Engage audiences
                                effectively.
                            </p>
                            <div class="cus-flex-base">
                                <button class="cus-serv-btn" onclick="window.location.href = '{{url('/services')}}';">
                                    Learn More
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                            <span class="icon pe-7s-speaker"></span>
                            <h6>Ads</h6>
                            <p>
                                Drive sales with impactful ads. Reach your audience effectively. Let your brand stand out.
                                Unlock
                                success today!
                            </p>
                            <div class="cus-flex-base">
                                <button class="cus-serv-btn" onclick="window.location.href = '{{url('/services')}}';">
                                    Learn More
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                        <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                            <span class="icon pe-7s-ribbon"></span>
                            <h6>Branding</h6>
                            <p>
                                Stand out distinctively! Enhance your brand with our expert branding services. Ignite
                                success now!
                            </p>
                            <div class="cus-flex-base">
                                <button class="cus-serv-btn" onclick="window.location.href = '{{url('/services')}}';">
                                    Learn More
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row custom_mt30">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                            <span class="icon pe-7s-vector"></span>
                            <h6>Graphics Design</h6>
                            <p>
                                Visualize brilliance! Elevate your brand with captivating graphics design. Unlock creativity
                                today!
                            </p>
                            <div class="cus-flex-base">
                                <button class="cus-serv-btn" onclick="window.location.href = '{{url('/services')}}';">
                                    Learn More
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                            <span class="icon pe-7s-graph1"></span>
                            <h6>Photography</h6>
                            <p>
                                In order to achieve the highest aesthetics, our photographic style is a culmination of years
                                of expertise and research.
                            </p>
                            <div class="cus-flex-base">
                                <button class="cus-serv-btn" onclick="window.location.href = '{{url('/services')}}';">
                                    Learn More
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                        <div class="item simpl" style="padding-bottom: 44px;">
                            <span class="icon pe-7s-browser"></span>
                            <h6>Websites</h6>
                            <p>
                                Digital presence amplified! Expert website development for your success. Connect with us now
                            </p>
                            <div class="cus-flex-base">
                                <button class="cus-serv-btn" onclick="window.location.href = '{{url('/services')}}';">
                                    Learn More
                                    <div class="arrow-wrapper">
                                        <div class="arrow"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->

        <!-- ==================== Start Services ==================== -->

        <section class="simpl-intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 offset-lg-1 md-mb50">
                        <!-- <div class="img">
                    <img src="img/intro/b1.jpg" alt="" />

                    <div class="vid-icon">
                      <a class="vid" href="https://vimeo.com/127203262">
                        <div class="vid-butn">
                          <span class="icon">
                            <i class="fas fa-play"></i>
                          </span>
                        </div>
                      </a>
                    </div>
                  </div> -->
                        <video width="100%" height="1000px" loop>
                            <source src="{{ asset('ui/video/branding/cb_vid.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-sm-5 offset-lg-1 valign">
                        <div class="cont">
                            <div class="sub-title">
                                <h6>Who We Are ?</h6>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <h3 class="mb-30 fw-700">
                                Investing in <br />
                                the digital future.
                            </h3>
                            <p>
                                In the rapidly evolving digital landscape, businesses must prioritize content to engage
                                their target audience effectively and stay competitive. Coralbeach Studios, recognized as
                                one of the best marketing agency in Calicut, offers a comprehensive suite of content
                                services, including Video Production, Ads, Branding, Graphics Design, Business Promotions,
                                and Website Development, enabling you to leverage the full potential of digital marketing.
                            </p>
                            <p>
                                Our client-centric approach, team of experts, and SEO optimization ensure that we are your
                                gateway to the digital future. Invest in Coralbeach Studios to propel your business to new
                                heights through our impactful content services. Contact us today for a consultation and
                                experience the transformative effect our services can have on your brand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->

        <!-- ==================== Start testimonials ==================== -->

        {{-- <section class="testim-box section-padding">
            <div class="container">
                <div class="sec-head custom-font text-center">
                    <h6 class="wow fadeIn" data-wow-delay=".5s">What Peapole Says?</h6>
                    <h3 class="wow" data-splitting>Testimonials.</h3>
                    <span class="tbg">Testimonials</span>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container bg-img" data-background="{{ asset('ui/img/testimonial_bg.jpg') }}"
                            data-overlay-dark="7">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-10">
                                            <div class="item">
                                                <h6>Alex Regelman</h6>
                                                <span>Co-founder, Colabrio</span>
                                                <p>Working with Avo digital agency to support our organic and paid
                                                    social media activity has
                                                    extended the marketing activities we are able to achieve platform
                                                    has made collaboration
                                                    easy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-10">
                                            <div class="item">
                                                <h6>Alex Regelman</h6>
                                                <span>Co-founder, Colabrio</span>
                                                <p>Working with Avo digital agency to support our organic and paid
                                                    social media activity has
                                                    extended the marketing activities we are able to achieve platform
                                                    has made collaboration
                                                    easy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-10">
                                            <div class="item">
                                                <h6>Alex Regelman</h6>
                                                <span>Co-founder, Colabrio</span>
                                                <p>Working with Avo digital agency to support our organic and paid
                                                    social media activity has
                                                    extended the marketing activities we are able to achieve platform
                                                    has made collaboration
                                                    easy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="controls">
                                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination custom-font"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- ==================== End testimonials ==================== -->
    </div>
@endsection
@section('script')
    <script>
        // Index page text animation start
        //setup colour change
        $(".text-fader .text-content .colour").each(function() {
            var textSplit = $(this).text().split("");
            var returnHTML = "";
            $.each(textSplit, function(intIndex, objValue) {
                returnHTML += '<span class="letter">' + objValue + "</span>";
            });
            $(this).html(returnHTML);
        });

        $(".text-fader .text-content:first-child").addClass("in");
        var textFaderDelay = 6000;
        var textFaderAnimationSpeed = 1000;
        var colourChangeDelay = 2000;

        function nextText($current) {
            if ($current.next(".text-fader .text-content").length > 0) {
                var hasNext = true;
            } else {
                var hasNext = false;
            }

            setTimeout(function() {
                $current.find(".colour").addClass("go");
            }, colourChangeDelay);

            setTimeout(function() {
                $current.removeClass("in").addClass("out");
                setTimeout(function() {
                    $current.find(".colour").removeClass("go");
                    $current.removeClass("out");
                    if (hasNext) {
                        $current.next(".text-fader .text-content").addClass("in");
                    } else {
                        $(".text-fader .text-content:first-child").addClass("in");
                    }
                    nextText($(".text-fader .text-content.in"));
                }, textFaderAnimationSpeed);
            }, textFaderDelay);
        }
        nextText($(".text-fader .text-content.in"));
        // Index page text animation end
    </script>
    <script>
        function playPauseVideo() {
            let videos = document.querySelectorAll("video");
            videos.forEach((video) => {
                // We can only control playback without insteraction if video is mute
                video.muted = true;
                // Play is a promise so we need to check we have it
                let playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.then((_) => {
                        let observer = new IntersectionObserver(
                            (entries) => {
                                entries.forEach((entry) => {
                                    if (
                                        entry.intersectionRatio !== 1 &&
                                        !video.paused
                                    ) {
                                        video.pause();
                                    } else if (video.paused) {
                                        video.play();
                                    }
                                });
                            }, {
                                threshold: 0.2
                            }
                        );
                        observer.observe(video);
                    });
                }
            });
        }

        // And you would kick this off where appropriate with:
        playPauseVideo();
    </script>
@endsection
