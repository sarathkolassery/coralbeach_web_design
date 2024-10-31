@extends('ui-layouts.app')
@section('style')
    <style>
        .centered-bottom {
            position: absolute;
            bottom: 12%;
            width: 100%;
            background-color: black;
            border-radius: 15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .centered-bottom h5 {
            color: white;
        }

        .centered-bottom a {
            color: white;
            text-align: center;
        }

        .slider .parallax-slider .swiper-slide .bg-img {
            background-size: contain;
        }
    </style>
@endsection
@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="slider showcase-full" style="background-color: black;">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/elegancesalons.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Elegance Salons, Uk</h5>
                                    <a href="https://www.elegancesalons.co.uk/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/ledgerwell.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Ledgerwell, Dubai</h5>
                                    <a href="https://ledgerwelluae.com/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portfolio/full/3.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000">Modern</div> <span
                                                    data-swiper-parallax="-5000">Couch</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portfolio/full/5.jpg" data-overlay-dark="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption">
                                        <h1><a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000">Black</div> <span
                                                    data-swiper-parallax="-5000">Panther</span>
                                            </a></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/portfolio/full/6.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption">
                                        <h1>
                                            <a href="project-details2.html">
                                                <div class="stroke" data-swiper-parallax="-2000">Secret</div> <span
                                                    data-swiper-parallax="-5000">Office</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="txt-botm">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <div>
                        <span class=" custom-font">Next Slide</span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span class=" custom-font">Prev Slide</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination steps custom-font"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
@endsection
