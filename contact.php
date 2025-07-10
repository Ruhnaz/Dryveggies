
<?php 
$page_title = "Contact Us - DryVeggie";

// Google Maps JS only for this page:
/*$page_js = '
<script defer src="https://maps.googleapis.com/maps/api/js?key=key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw"></script>
<script defer src="js/map.js"></script>';*/

include 'layout/header-page.php'; ?>

  <!--Page Header-->
 <section id="main-banner-page" class="position-relative page-header contact-header parallax section-nav-smooth">
     <div class="overlay overlay-dark opacity-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-bold"> Contact Us</h2>
                    <h3 class="font-light py-3">We'd Love To Here From You.</h3>
                    
                   
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-start">Contact Us</h3>
                    <ul class="breadcrumb top10 bottom10 float-end">
                        <li class="breadcrumb-item hover-light"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item hover-light">Contact Us</li>
                    </ul>
                </div>
              
                
            </div>
        </div>
    </div>
</section>


<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding noshadow">
    <div class="container whitebox">
        <div class="widget py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Get in touch</span> 
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <p>Discover the superior quality of our Dehydrated Beetroot Powder. Connect with DryVeggie today for prompt and friendly support.</p>
                    </div>
                </div>

                <!-- Centered Form -->
                <div class="col-md-6 col-sm-8">
                    <div class="heading-title wow fadeInUp" data-wow-delay="300ms">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" id="contactForm">
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12" id="result1"></div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        
                                        <input class="form-control" id="name1" type="text" placeholder="Name:" required name="userName">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" id="email1" placeholder="Email:" name="email1">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message1" placeholder="Message:" required name="message1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="button" id="submit_btn1" class="button gradient-btn w-100">Send</button>
                                   

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Updated Contact Details Row -->
         <div class="row justify-content-center equal-height">
  <div class="col-lg-3 col-md-4">
    <div class="widget text-center top60 w-100">
      <div class="contact-box">
        <span class="icon-contact defaultcolor"><i class="fas fa-map-marker-alt"></i></span>
        <h5 class="darkcolor hrbottom">Registered Address</h5>
        <p>01, Sai Leela Tower</p>
        <p>Hanumanwadi, Panchavati</p>
        <p>Nashik – 422003. Maharashtra, India</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-4">
    <div class="widget text-center top60  w-100">
      <div class="contact-box">
        <span class="icon-contact defaultcolor"><i class="fas fa-map-marker-alt"></i></span>
        <h5 class="darkcolor hrbottom">Admin Office</h5>
        
        <p>07, Krushna Pride</p>
        <p>Behind Toyota Showroom, Mauli Nagari, Wasan Nagar</p>
        <p>Nashik – 422009. Maharashtra, India</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-4">
    <div class="widget text-center top60  w-100">
      <div class="contact-box">
        <span class="icon-contact defaultcolor"><i class="far fa-envelope"></i></span>
        <h5 class="darkcolor hrbottom">Email Us</h5>
        <p><a href="mailto:export@dryveggie.com">export@dryveggie.com</a></p>
        <p><a href="mailto:sagar@dryveggie.com">sagar@dryveggie.com</a></p>
      </div>
    </div>
  </div>
</div>

       
        
    </div>
</section>
<!-- Contact US ends -->

<!-- map -->
<div class="w-100">
    <div id="map" class="full-map"></div>
</div>
<!-- map end -->

<!-- Contact US ends -->

 <?php include 'layout/footer.php'; ?>