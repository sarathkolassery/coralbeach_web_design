@extends('ui-layouts.app')
@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="{{ asset('ui/img/slid/bg1.jpg')}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>About Us</h1>
                        <div class="path">
                            <a href="{{ url('/')}}">Home</a><span>/</span><a href="{{url('/about')}}" class="active">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    <section class="min-area sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img">
                        <!-- <video width="100%" height="1000px" loop="" autoplay muted>
                                <source src="video/branding/coralad1.mp4" type="video/mp4">
                              </video> -->
                        <img src="{{ asset('ui/img/aboutpic1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content">
                        <h4 class="wow custom-font" data-splitting style="margin-top: 20px;">About us.</h4>
                        <!-- <p class="wow txt" data-splitting>Our creative Ad agency is ranked among the finest in
                                the US. We cultivate smart ideas for start-ups and seasoned players.
                            </p> -->
                        <ul class="feat">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <h6><span>1</span>Founding - 2019 </h6>
                                <p>Being artists to the core, we cannot help but notice the wonders created by esteemed
                                    personalities. Be it movies, architecture, sculptures, paintings, and so forth. Whether
                                    you agree with it or not, nature is the inspiration for these amazing man-made marvels.
                                    If you look close, you can see the intricacies, ratios, constants, and equations we
                                    apply to accentuate the beauty of our creations. One trip to Coorg was all that took us
                                    to realize that we should start recording the visuals that trip rewarded us with. Hence,
                                    our first video and an idea for a video production studio were born.</p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6><span>2</span>Initial Struggles</h6>
                                <p>Starting with a point and shoot camera, which you will refer to as a potato if you have
                                    seen the first video. We began reviewing the content we produced and took measures to
                                    improve the upcoming videos. And the learning curve was extremely beneficial, as we are
                                    Hollywood fans and have been seeing good films since childhood. We slowly and gradually
                                    added more tools to our arsenal and pushed ourselves to the limit. Our initial passion
                                    was travelogues and road trips, which we thoroughly enjoyed. We later considered
                                    branching out into other fields of filmmaking.</p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <h6><span>3</span>Starting Commercial Contents</h6>
                                <p>We realized that we had opportunities in the branding and advertising space of corporate
                                    businesses and started looking for prospective clients. Fortunately we met some good
                                    clients, but we had to cut short on budget. Having said that, we never sacrificed the
                                    production's quality. We have worked day and night on several projects for various kinds
                                    of businesses. Since we were practising a lot, our contents never disappointed, and
                                    clients were more than happy.</p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s" style="margin-bottom: 25px;">
                                <h6><span>4</span>Current Status</h6>
                                <p>Since we are very particular in post-production, editing, colour grading, and voice
                                    scripts, it takes a lot of time before releasing a video, especially travelogues. Not to
                                    mention the pre-production planning and scripting. But we are happy to see that we have
                                    come a long way in improving the production quality. At the moment, our branding
                                    initiatives, advertisements, Instagram and Facebook content, and Youtube channels take
                                    precedence. Though there are a thousand things to accomplish, we intend to take our time
                                    and get things done.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
