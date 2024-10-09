  @extends('ui-layouts.app')
  @section('style')
      <style>
          .glassmorph1 .brands .item {
              background: rgba(255, 255, 255, 0.7);
          }

          .serviceImg {
              opacity: 0;
              /* Initially hidden */
              transform: translateY(25%);
              /* Positioned off-screen */
              transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
              /* Transition for smooth animation */
          }

          .animate-image {
              opacity: 1;
              /* Make the image visible */
              transform: translateY(0);
              /* Slide it up to its original position */
          }

          .text li {
              list-style-type: '◼';
              padding-inline-start: 1ch;
          }

          .text li ul li {
              list-style-type: '◼';
              padding-inline-start: 1ch;
          }
      </style>
  @endsection
  @section('content')
      <!-- ==================== Services Cards ==================== -->
      <section class="services section-padding bord-top">
          <div class="container">
              <div class="sec-head custom-font text-center">
                  <h6>Best Features</h6>
                  <h3>Services.</h3>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4">
                      <div class="htit services-img-width">
                          <div class="wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/1.gif')}}" style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/videoproduction.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 mb-30 services_bg_img">
                      <div class="item simpl glassmorph_services">
                          <div class="text">
                              <h5>Video Production</h5>
                              <p>
                              <ul>
                                  <li>We are backed up by excellent filmmakers and content creators from Calicut, who help
                                      us
                                      release
                                      outstanding products by guiding and screening all aspects of our creative endeavours.
                                  </li>
                                  <li>Over time, we have gained considerable expertise in photographing each detail and
                                      angle
                                      with
                                      perfection to tell your stories in the most engaging way.</li>
                                  <li>Your important events will be recorded to perfection and ingenuity with the help of
                                      cutting-edge
                                      filmmaking gear, giving you unforgettable and intriguing footage to cherish.</li>
                                  <li>Our area of expertise:
                                      <ul style="margin-left: 30px;">
                                          <li>Travelogues</li>
                                          <li>Product Shoots</li>
                                          <li>Retails Shops and other Services</li>
                                          <li>Event Coverage</li>
                                          <li>Documentaries</li>
                                          <li>Life Stories</li>
                                          <li>Startup Stories</li>
                                      </ul>
                                  </li>
                              </ul>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 ser-mob">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/marketing.png')}}" style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/ads.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 mb-30 services_bg_img">
                      <div class="item simpl glassmorph_services">
                          <div class="text">
                              <h5>Ads</h5>
                              <p>
                              <ul>
                                  <li>Advertisement is a very critical facet of your business without which you cannot
                                      convey
                                      your
                                      uniqueness to the masses.</li>
                                  <li>People are very much attracted to audio and visual media which triggers their desire
                                      to
                                      buy a product
                                      or service. We scientifically create a combination of words, colours and designs which
                                      triggers their
                                      senses on the spot.</li>
                                  <li>If you are in Calicut, we say look no further, we can provide out-of-the-box ideas for
                                      your ad
                                      requirement in the form of,
                                      <ul style="margin-left: 30px;">
                                          <li>Videos</li>
                                          <li>Photos</li>
                                          <li>Graphics(2d and 3d)</li>
                                          <li>Music and Voice Overs</li>
                                      </ul>
                                  </li>
                              </ul>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 ser-desk">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/marketing.png')}}" style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/ads.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/branding.png')}}" style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/branding.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 mb-30 services_bg_img">
                      <div class="item simpl glassmorph_services">
                          <div class="text">
                              <h5>Branding</h5>
                              <p>
                              <ul>
                                  <li>If you want your business to stand out among the competition, there should be
                                      uniqueness
                                      in everything
                                      you promote. Whether it be products or services, everything should have your footprint
                                      on
                                      it in terms of
                                      quality and delivery.</li>
                                  <li>Branding involves making every aspect of your business process a unique experience for
                                      your clients by
                                      means of visual and audio tools.</li>
                                  <li>Our team works closely with you to help your brand stand out through things like logo
                                      designs, digital
                                      marketing, and holistic branding strategies.</li>
                                  <li>If you decide to work with us as your branding company in Calicut, you are essentially
                                      making a
                                      long-term investment in the growth and popularisation of your brand. Partner with us
                                      and
                                      let your brand
                                      thrive.</li>
                                  <li>We have a broader capacity for not only traditional branding strategies but also
                                      digital
                                      and online
                                      strategies for amplifying the visibility of your corporation in today’s market. We
                                      bring
                                      out the best
                                      skills possible for your valuable business to stand out with our
                                      <ul style="margin-left: 30px;">
                                          <li>Ads</li>
                                          <li>Websites</li>
                                          <li>Logos</li>
                                          <li>Exceptional slogans and exceptional catchy phrases</li>
                                      </ul>
                                  </li>
                              </ul>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 ser-mob">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/graphics.png') }}"
                                  style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/graphics.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 mb-30 services_bg_img">
                    <div class="item simpl glassmorph_services">
                      <div class="text">
                          <h5>Graphics Designing</h5>
                          <p>
                          <ul>
                              <li>One of the top graphic designing company in Kerala with best graphic designers in Calicut
                                  elevating
                                  your brand.</li>
                              <li>Our team boasts exceptional graphic designers located in Calicut specializing in
                                  enchanting designs
                                  such as Logo
                                  design and full Branding solutions.</li>
                              <li>Though not a teaching institution, our reputation for outstanding excellence is deserved
                                  enough. In
                                  fact, we are best in graphic design in Calicut</li>
                              <li>Discover our exceptional graphic designs that rank us as the best destination for logo
                                  design
                                  and meaningful graphics.</li>
                          </ul>
                          </p>
                      </div>
                  </div>
                  </div>
                  <div class="col-lg-3 col-md-4 ser-desk">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/graphics.png') }}"
                                  style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/graphics.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/buz.png') }}"
                                  style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/photography.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 mb-30 services_bg_img">
                    <div class="item simpl glassmorph_services">
                      <div class="text">
                          <h5>Photography</h5>
                          <p>
                          <ul>
                              <li>Our style of photography reflects years of experience and scientific study to produce the
                                  best
                                  aesthetics possible.
                              </li>
                              <li>We pay close attention to the lighting, aspect ratio, colours, and tones that draw the
                                  viewer's
                                  attention directly into your photographs.</li>
                              <li>Our branding methods revolve around photographs, which we also employ for large-scale
                                  printing and the
                                  creation of both static and motion posters for advertisements.
                              </li>
                              <li>Our photography interest covers,
                                  <ul style="margin-left: 30px;">
                                      <li>Event Coverages</li>
                                      <li>Product Photography</li>
                                      <li>Landscape Photography</li>
                                      <li>Architectural Photography (interior and exterior)
                                      </li>
                                      <li>Personal Portraits
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                          </p>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 ser-mob">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/websites.png') }}"
                                  style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/website.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 mb-30 services_bg_img">
                    <div class="item simpl glassmorph_services">
                      <div class="text">
                          <h5>Websites</h5>
                          <p>
                          <ul>
                              <li>Since its beginnings, the Internet has advanced significantly, and as of 2023, 65.7% of
                                  people
                                  worldwide are expected to be online users, according to an independent survey. The
                                  internet is driving
                                  and promoting so many politicians, celebrities, and businesses that it has reached a point
                                  where the
                                  economy will undoubtedly collapse without it.</li>
                              <li>How do you submit your data to the internet? via internet resources. Social media
                                  platforms, made
                                  possible by modern technologies, aid in spreading the word about your websites to every
                                  corner of the
                                  globe.</li>
                              <li>Consequently, it is incredibly irrational and senseless to scale or even survive in some
                                  markets
                                  without a digital presence. Calicut, being a commerce hub in Malabar, is fast
                                  transitioning to digital
                                  trends.</li>
                              <li>Our website building strategy provides you with the best vocabulary, image optimization,
                                  and UI
                                  experience. These are all part of the processes that emphasise content optimization for
                                  better traffic
                                  on your website. We build
                                  <ul style="margin-left: 30px;">
                                      <li>Static Websites</li>
                                      <li>Website with Content Management Systems (Dynamic) which include,
                                          <ul style="margin-left: 30px;">
                                              <li
                                                  style="list-style-type: '◼';
                                padding-inline-start: 1ch;">
                                                  Ecommerce websites</li>
                                              <li
                                                  style="list-style-type: '◼';
                                padding-inline-start: 1ch;">
                                                  ERP systems for various business</li>
                                              <li
                                                  style="list-style-type: '◼';
                                padding-inline-start: 1ch;">
                                                  Mobile devices compatibility</li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                          </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 ser-desk">
                      <div class="htit services-img-width">
                          <div class="serviceImg wow imago animated" data-wow-delay=".3s"
                              style="visibility: visible; animation-delay: 0.3s;">
                              {{-- <img src="{{ asset('ui/img/services/websites.png') }}"
                                  style="position: relative;
              object-fit: cover;" alt=""> --}}
                              <video width="100%" height="100%" autoplay loop muted>
                                  <source src="{{ asset('ui/img/services/website.mp4') }}" type="video/mp4">
                              </video>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Video Production</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-video fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
              <!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Video Production</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-video fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Ads</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-speaker fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Branding</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-ribbon fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
              <!-- </div> -->
              <!-- <div class="row custom_mt30">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Graphics Design</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-vector fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
              <!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Graphics Design</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-vector fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
              <!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Business Promotions</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-graph1 fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                                          <div class="custom-card-container">
                                            <div class="box md-mb50">
                                              <span class="title">Websites</span>
                                              <div class="cus-flex-base">
                                                <button class="cus-serv-btn">
                                                  Learn More
                                                  <div class="arrow-wrapper">
                                                    <div class="arrow"></div>
                                                  </div>
                                                </button>
                                                <span class="icon pe-7s-browser fz-70"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
              <!-- </div> -->
          </div>
      </section>

      <!-- ==================== Services Cards End ==================== -->
  @endsection
  @section('script')
      <script>
          // Create a condition that targets viewports at least 768px wide
          const mediaQuery1 = window.matchMedia('(max-width: 480px)')
          const mediaQuery2 = window.matchMedia('(min-width: 480px)')

          function handleTabletChange1(e) {
              // Check if the media query is true
              if (e.matches) {
                  // Then log the following message to the console
                  //console.log('Media Query Matched!')
                  $(".ser-desk").css("display", "none");
                  $(".ser-mob").css("display", "block");
              }
          }

          function handleTabletChange2(e) {
              // Check if the media query is true
              if (e.matches) {
                  // Then log the following message to the console
                  //console.log('Media Query Matched!')
                  $(".ser-mob").css("display", "none");
                  $(".ser-desk").css("display", "block");
              }
          }

          // Register event listener
          mediaQuery1.addListener(handleTabletChange1)
          mediaQuery2.addListener(handleTabletChange2)

          // Initial check
          handleTabletChange1(mediaQuery1)
          handleTabletChange2(mediaQuery2)

          const imageObserver = new IntersectionObserver(entries => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      entry.target.classList.add('animate-image');
                      observer.unobserve(entry.target); // Stop observing after animation starts
                  }
              });
          });

          const imageContainers = document.querySelectorAll('.serviceImg');
          imageContainers.forEach(container => {
              imageObserver.observe(container);
          });
      </script>
  @endsection
