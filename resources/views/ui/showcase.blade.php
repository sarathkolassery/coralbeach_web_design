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
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/title.png">
                        
                    </div>
                </div>
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
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/skssf.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Kuwait Kerala Islamic Council, Kuwait</h5>
                                    <a href="https://kuwaitskssf.com/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/finarch.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Finarch, UAE</h5>
                                    <a href="https://www.finarchuae.com/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/mahis.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Mahis Marine, Mumbai</h5>
                                    <a href="https://www.mahismarine.com/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/malabarworld.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Malabar World Tours and Travels, Calicut, Kerala</h5>
                                    <a href="https://malabarworld.com/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/cinetrax.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Cinetrax, Calicut, Kerala</h5>
                                    <a href="https://cinetrax.in/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/yathrawayanad.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Yathra Holidays, Wayanad, Kerala</h5>
                                    <a href="https://www.yathrawayanad.com/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/brilliance.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: Brilliance Academy, Calicut, Kerala</h5>
                                    <a href="https://www.brillianceacademy.in/">Visit site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="ui/img/portfolio/full/amseva.png">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 centered-bottom">
                                    <h5>Client: AM SEVA KENDRA, Calicut, Kerala</h5>
                                    <a href="https://amsevakendra.com/">Visit site</a>
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
