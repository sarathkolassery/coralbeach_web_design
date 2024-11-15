  @extends('ui-layouts.app')
  @section('style')
      <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
      <style>
          .center {
              width: 150px;
              margin: 40px auto;

          }

          .static-bottom {
              position: fixed;
              bottom: 0;
              left: 0;
              width: 100%;
              /* Adjust as needed */
              z-index: 1000;
              /* Optional: Add a shadow for visibility */
          }
      </style>
  @endsection
  @section('content')
      <!-- ==================== Services Cards ==================== -->
      <section class="services section-padding bord-top">
          <div class="container">
              <div class="static-bottom">
                  <div class="item simpl" style="padding: 0px; background-color: white;">
                      <h3 style="margin-bottom: 0px;">TOTAL</h3>
                      <p id="sub-total"></p>
                      <div class="cus-flex-base" style="padding-top: 15px; padding-bottom: 15px;">
                          <button class="cus-serv-btn" onclick="window.location.href = '{{ url('/services') }}';">
                              Print quote
                              <div class="arrow-wrapper">
                                  <div class="arrow"></div>
                              </div>
                          </button>
                      </div>
                  </div>
              </div>
              <div class="sec-head custom-font text-center">
                  <h6>Customize your package</h6>
                  <h3>Cart</h3>
              </div>

              <div class="row">
                  <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                      <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                          <span class="icon pe-7s-video"></span>
                          <h4>Static Poster</h4>
                          <p>Price: ₹<span id="poster-total">500</span></p>
                          <div class="center">
                              <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" id="poster-decrement" class="btn btn-default btn-number"
                                          data-type="minus" data-field="poster-quant[1]">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <input type="text" id="poster-quantity" name="poster-quant[1]"
                                      class="form-control input-number" value="1" min="1" max="30">
                                  <span class="input-group-btn">
                                      <button type="button" id="poster-increment" class="btn btn-default btn-number"
                                          data-type="plus" data-field="poster-quant[1]">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                              </div>
                          </div>
                          <label for="customRange3" class="form-label">Reach per day (Boosting)</label>
                          <input type="range" value="2.5" class="form-range" min="1" max="5" step="0.5"
                              id="customRange3" oninput="this.nextElementSibling.value = this.value">
                              <output style="display: inline;">2.5</output><span>&nbsp;k</span>
                              <br>
                              <label for="customRange3" class="form-label">Number of days</label>
                          <input type="range" value="2" class="form-range" min="1" max="10" step="1"
                              id="customRange3" oninput="this.nextElementSibling.value = this.value">
                              <output style="display: inline;">2</output><span>&nbsp;days</span>
                      </div>
                  </div>
                  <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                      <div class="item simpl md-mb50" style="padding-bottom: 44px;">
                          <span class="icon pe-7s-video"></span>
                          <h4>Reels</h4>
                          <p>Price: ₹<span id="reel-total">1000</span></p>
                          <div class="center">
                              <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" id="reel-decrement" class="btn btn-default btn-number"
                                          data-type="minus" data-field="reel-quant[1]">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <input type="text" id="reel-quantity" name="reel-quant[1]"
                                      class="form-control input-number" value="1" min="1" max="30">
                                  <span class="input-group-btn">
                                      <button type="button" id="reel-increment" class="btn btn-default btn-number"
                                          data-type="plus" data-field="reel-quant[1]">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                              </div>
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
                              <button class="cus-serv-btn" onclick="window.location.href = '{{ url('/services') }}';">
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
                              <button class="cus-serv-btn" onclick="window.location.href = '{{ url('/services') }}';">
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
                              <button class="cus-serv-btn" onclick="window.location.href = '{{ url('/services') }}';">
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
                              <button class="cus-serv-btn" onclick="window.location.href = '{{ url('/services') }}';">
                                  Learn More
                                  <div class="arrow-wrapper">
                                      <div class="arrow"></div>
                                  </div>
                              </button>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
      <script>
          // Unit price per poster
          const posterUnitPrice = 500;
          const reelUnitPrice = 1000;

          // Elements
          const posterQuantityInput = document.getElementById("poster-quantity");
          const posterTotalDisplay = document.getElementById("poster-total");
          const posterIncrementButton = document.getElementById("poster-increment");
          const posterDecrementButton = document.getElementById("poster-decrement");

          const reelQuantityInput = document.getElementById("reel-quantity");
          const reelTotalDisplay = document.getElementById("reel-total");
          const reelIncrementButton = document.getElementById("reel-increment");
          const reelDecrementButton = document.getElementById("reel-decrement");

          const subTotalDisplay = document.getElementById("sub-total");

          // Function to calculate and display the total amount
          function CalculateTotal() {
              const posterQuantity = parseInt(posterQuantityInput.value);
              const reelQuantity = parseInt(reelQuantityInput.value);
              const posterTotal = posterUnitPrice * posterQuantity;
              const reelTotal = reelUnitPrice * reelQuantity;
              posterTotalDisplay.textContent = posterTotal;
              reelTotalDisplay.textContent = reelTotal;
              subTotalDisplay.textContent = posterTotal + reelTotal;
          }

          // Event listeners for increment and decrement buttons
          posterIncrementButton.addEventListener("click", () => {
              posterQuantityInput.value = parseInt(posterQuantityInput.value) + 1;
              CalculateTotal();
          });

          //reel calculation
          reelIncrementButton.addEventListener("click", () => {
              reelQuantityInput.value = parseInt(reelQuantityInput.value) + 1;
              CalculateTotal();
          });

          posterDecrementButton.addEventListener("click", () => {
              if (posterQuantityInput.value > 1) {
                  posterQuantityInput.value = parseInt(posterQuantityInput.value) - 1;
                  CalculateTotal();
              }
          });

          reelDecrementButton.addEventListener("click", () => {
              if (reelQuantityInput.value > 1) {
                  reelQuantityInput.value = parseInt(reelQuantityInput.value) - 1;
                  CalculateTotal();
              }
          });

          // Initial calculation
          calculateTotal();
      </script>
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
