@extends('ui-layouts.app')
@section('content')
<!-- ==================== Start Contact ==================== -->

  <section class="contact cont-cus-margin-top cont-cus-margin-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="form md-mb50">

            <h4 class="extra-title mb-50">Get In Touch.</h4>

            <form id="contact-form" method="post" action="contact.php">

              <div class="messages"></div>

              <div class="controls">

                <div class="form-group">
                  <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                </div>

                <div class="form-group">
                  <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                </div>

                <div class="form-group">
                  <textarea id="form_message" style="border-radius: 12px;" name="message" placeholder="Message" rows="4"
                    required="required"></textarea>
                </div>

                <button type="submit" class="btn-curve btn-lit"><span>Send Message</span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="cont-info">
            <h4 class="extra-title mb-50">Contact Info.</h4>
            <h3 class="custom-font wow" data-splitting>Let's Talk.
            </h3>
            <div class="item mb-40">
              <h5><a href="#0">coralbeachstudios@gmail.com</a></h5>
              <h5>+91 85 90 99 80 80</h5>
            </div>
            <h3 class="custom-font wow" data-splitting>Our nexus
            </h3>
            <div class="item">
              <h6>2nd Floor, Tower 1
                <br>Hilite Business Park
                <br>Calicut - 673014
              </h6>
            </div>
            <div class="social mt-50">
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

  <!-- ==================== End Contact ==================== -->
  @endsection