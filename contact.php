<?php include_once("header.php") ?>
    <!--================Header Menu Area =================-->


 
 <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Contact</h2>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="contact.php">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="mail.php" method="post">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->



        <!--================ Start Brands Area =================-->
        <section class="brands-area background_one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="owl-carousel brand-carousel">
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/1.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/2.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/3.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/4.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/5.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Brands Area =================-->

<!-- start footer Area -->
       <?php include_once("footer.php") ?>