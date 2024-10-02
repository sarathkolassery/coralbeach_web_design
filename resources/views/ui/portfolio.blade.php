@extends('ui-layouts.app')
@section('content')
<!-- ==================== Start header ==================== -->

    <header class="works-header portfolio-height fixed-slider valign">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt mt-50">
                        <div class="parlx">
                            <h2 class="custom-font">Our amazing works</h2>
                            <p>Discover our creative world.</p>
                        </div>

                        <div class="bactxt custom-font valign">
                            <div class="shadow-title-cont">
                                <div class="shadow-title"><span>p</span><span>o</span><span>r</span><span>t</span><span>f</span><span>o</span><span>l</span><span>i</span><span>o</span></div>
                              </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="sec-head custom-font text-center" style="margin-top: 5%;">
                <h6>Our best works</h6>
                <h3>Portfolio.</h3>
            </div>
        </div>
    </header>

    <!-- ==================== End header ==================== -->





    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding pb-70 portfolio-mt" style="padding-top: 30px;">
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-right smplx col-12">
                    <div class="filter" style="margin-top: 55px;">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.travel'>Travel</span>
                        <span data-filter='.promotions'>Promotions</span>
                        <span data-filter='.photography'>Photography</span>
                        <span data-filter='.ads'>Ads</span>
                        <span data-filter='.motionposters'>Motion posters</span>
                        <span data-filter='.culture'>Culture</span>
                        <span data-filter='.fitness'>Fitness</span>
                        <span data-filter='.architecture'>Architecture</span>
                        <span data-filter='.automobile'>Automobile</span>
                        <span data-filter='.cinematic'>Cinematic</span>
                        <span data-filter='.3drender'>3D Render</span>
                        <span data-filter='.ai'>AI</span>
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items motionposters">
                        <div class="item-img fadeInUp">
                            <a href="https://www.instagram.com/reel/DAA9w36SCoA/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/tumbledry.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Tumbledry laundry - Motion poster</h6>
                            <span><a href="#0">Motion Poster</a>/<a href="#0">Reel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items fitness">
                        <div class="item-img fadeInUp">
                            <a href="https://www.instagram.com/reel/C7302F_vb5V/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/gym2.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Fitness supplement colaboration</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">Fitness</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items fitness">
                        <div class="item-img fadeInUp">
                            <a href="https://www.instagram.com/reel/C7RD-DdvhNR/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/gym1.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Gym colaboration</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">Fitness</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items culture">
                        <div class="item-img fadeInUp">
                            <a
                                href="https://www.instagram.com/reel/CrL6uN0IjPS/?utm_source=ig_web_copy_link&igsh=MjM0N2Q2NDBjYg==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/thira.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Theyyam - Stories Retold</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">Culture</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img fadeInUp">
                            <a href="https://www.youtube.com/watch?v=193vqqgHiJ4&t=813s">
                                <img src="{{ asset('ui/img/portfolio/thumbs/kodai.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Kodaikanal Travel Video</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items automobile">
                        <div class="item-img fadeInUp">
                            <a href="https://www.instagram.com/reel/C81_4SeozEj/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/dominar1.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Dominar cinematic reel</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">Automobile</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items 3drender">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/C3SdYsDIF5I/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/mclaren.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>McLaren - 3D Render</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">3D Render</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items architecture">
                        <div class="item-img">
                            <a
                                href="https://www.instagram.com/reel/C9CkOoyyX0z/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/nsa1.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>NijasSameer Associates</h6>
                            <span><a href="#0">Videos</a>/<a href="#0">Architecture</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items ai">
                        <div class="item-img">
                            <a
                                href="https://www.instagram.com/p/CyGMRIbJ9x9/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/ai1.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Concept car designs</h6>
                            <span><a href="#0">Graphics</a>/<a href="#0">AI</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items promotions">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://www.youtube.com/watch?v=9xjmG3kRM9g">
                                <img src="{{ asset('ui/img/portfolio/thumbs/woodlot.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Woodlot Furniture</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Promotions</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items automobile">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://www.youtube.com/watch?v=sihPHcXXbEM">
                                <img src="{{ asset('ui/img/portfolio/thumbs/city.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Honda city - Cinematic Showreel</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Automobile</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items photography">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="port-inner1.html">
                                <img src="{{ asset('ui/img/portfolio/thumbs/onam.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Onam Shoot</h6>
                            <span><a href="#0">Photography</a>/<a href="#0">Model photography</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items automobile">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://www.youtube.com/watch?v=Ta2Fwvsx5IU&t=89s">
                                <img src="{{ asset('ui/img/portfolio/thumbs/nexon_detour.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Nexon Detour</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Automobile</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://www.youtube.com/watch?v=RyaSwHNc1Ek&t=31s">
                                <img src="{{ asset('ui/img/portfolio/thumbs/yercaud.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Yercaud - Travel video</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://www.youtube.com/watch?v=AJyVJD-yv6A&t=33s">
                                <img src="{{ asset('ui/img/portfolio/thumbs/munnar.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Munnar - Travel video</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items ads">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/CqZot2JJaVq/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/fellah.png')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Fellah Gold, Narikkuni</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Ads</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/8PRynuBhlWU">
                                <img src="{{ asset('ui/img/portfolio/thumbs/pakkasuran.png')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Pakkasuran Mala, Tamil Nadu</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items ai">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/CuqlBSqodMi/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/sia.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Visualizing Sia's Unstoppable - By AI</h6>
                            <span><a href="#0">Video</a>/<a href="#0">AI</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items cinematic">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/CyxCfuVo69I/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/leo.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Bloody sweet</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Cinematic</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items photography">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/p/Crun_WeJOWk/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/save.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Save the date</h6>
                            <span><a href="#0">Photography</a>/<a href="#0">Save The Date</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items promotions">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/CrlduX-PYYl/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/oregano.png')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Oregano Roastery - Innauguration</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Promotions</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/ixYR8BnIoj0">
                                <img src="{{ asset('ui/img/portfolio/thumbs/chaliyar.png')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Chaliyar Mukku - ASMR</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/XD4omrEVkMo">
                                <img src="{{ asset('ui/img/portfolio/thumbs/kodai-teaser.png')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Kodaikanal - Teaser</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items promotions">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/tBWIxGHke4w">
                                <img src="{{ asset('ui/img/portfolio/thumbs/villade.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Villa De 1945, Mahe</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Promotions</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/DNdGDd8xp1g">
                                <img src="{{ asset('ui/img/portfolio/thumbs/kodanad.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Kodanad View Point</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items promotions">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/r3dszBi1dlc">
                                <img src="{{ asset('ui/img/portfolio/thumbs/minnus.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Minnu's Food Products</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Promotions</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items 3drender">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/CzQKhqsosB3/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/astro.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Astronaut in the ocean</h6>
                            <span><a href="#0">Video</a>/<a href="#0">3D Render</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items 3drender">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a
                                href="https://www.instagram.com/reel/CykF4iKoPTD/?utm_source=ig_web_copy_link&igsh=ZTcxMWMzOWQ1OA==">
                                <img src="{{ asset('ui/img/portfolio/thumbs/ship.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>Aliens in Kozhikode</h6>
                            <span><a href="#0">Video</a>/<a href="#0">3D Render</a></span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items travel">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="https://youtu.be/954dpkYXMtE">
                                <img src="{{ asset('ui/img/portfolio/thumbs/nelli.jpg')}}" alt="image">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>A Road Trip to Nelliyampathy</h6>
                            <span><a href="#0">Video</a>/<a href="#0">Travel</a></span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->
@endsection
