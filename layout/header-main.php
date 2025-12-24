<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags  <link rel="shortcut icon" href="/favicon.ico" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="DryVeggie - Your trusted partner for high-quality dry vegetables, fruits, and dehydrated food products. Specializing in export and import solutions. Discover our range of healthy, nutritious, and convenient dry produce.">

    <link href="image/favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/tooltipster.min.css">
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <link rel="stylesheet" href="css/revolution/navigation.css">
    <link rel="stylesheet" href="css/revolution/settings.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preload" as="image" href="/image/tombann.jpg">
    <link rel="preload" as="image" href="/image/ginger.jpg">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800|Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
 <!-- Main Header with Logo + Navigation -->
  
<header class="site-header header-with-topbar" id="header">
  <div class="top-header-area d-xs-none">
    <div class="container">
      <div class="row position-relative">
        <div class="col-lg-3 col-md-4 col-sm-4 position-relative pe-0 d-flex d-sm-block justify-content-around">
          Welcome To Dry Veggie
        </div>
        <div class="col-lg-9 col-md-8 col-sm-8 text-end d-none d-sm-block position-relative ps-0">
          <a href="#" class="font-13 whitecolor hover-default" title="Visit">
            <i class="fas fa-map-marker-alt me-2"></i>Nashik, Maharashtra, India
          </a>
          <div class="bg-transparent d-inline-block position-relative me-2 ms-2"></div>
          <a href="mailto:info@dryveggie.co.in" class="font-13 whitecolor hover-default" title="Mail">
            <i class="far fa-envelope me-2"></i>export@dryveggie.com
          </a>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg static-nav" style="background-color: #ffffff;">
    <div class="container d-flex justify-content-between align-items-center">

      <!-- Logo -->
      <a class="navbar-brand" href="index.php">
        <img src="image/wkbg.png" alt="logo" class="logo-default" width="218" height="60" loading="lazy">
        <img src="image/wkbg.png" alt="logo" class="logo-scrolled"  width="150" height="45" loading="lazy">
      </a>

      <!-- Navigation -->
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto me-auto">
          <!-- <ul class="navbar-nav mx-auto ms-xl-auto me-xl-0">-->
          <li class="nav-item"><a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?= ($currentPage == 'about.php' || $currentPage == 'about.html') ? 'active' : '' ?>" href="about.php">About Us</a></li>

          <li class="nav-item dropdown static">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Products</a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6">
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-red-white-pink-onion-powder.php') ? 'active' : '' ?>" href="dehydrated-red-white-pink-onion-powder.php">Dehydrated Red, White, Pink Onion Powder</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-beetroot-powder.php') ? 'active' : '' ?>" href="dehydrated-beetroot-powder.php">Dehydrated Beetroot Powder</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-green-chilli-powder.php') ? 'active' : '' ?>" href="dehydrated-green-chilli-powder.php">Dehydrated Green Chilli Powder</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-red-white-onion-flakes.php') ? 'active' : '' ?>" href="dehydrated-red-white-onion-flakes.php">Dehydrated Red, White Onion Flakes</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-onion-fried-flakes.php') ? 'active' : '' ?>" href="dehydrated-onion-fried-flakes.php">Dehydrated Onion Fried Flakes</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-green-chilli-flakes.php') ? 'active' : '' ?>" href="dehydrated-green-chilli-flakes.php">Dehydrated Green Chilli Flakes</a>
                    </div>
                    <div class="col-lg-6">
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-beetroot-minced.php') ? 'active' : '' ?>" href="dehydrated-beetroot-minced.php">Dehydrated Beetroot Minced</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-garlic-powder.php') ? 'active' : '' ?>" href="dehydrated-garlic-powder.php">Dehydrated Garlic Powder</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-ginger-powder.php') ? 'active' : '' ?>" href="dehydrated-ginger-powder.php">Dehydrated Ginger Powder</a>
                      <a class="dropdown-item <?= ($currentPage == 'dehydrated-tomato-powder.php') ? 'active' : '' ?>" href="dehydrated-tomato-powder.php">Dehydrated Tomato Powder</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          
          <li class="nav-item"><a class="nav-link <?= ($currentPage == 'contact.php' || $currentPage == 'contact.html') ? 'active' : '' ?>" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link " href="assets/DryVeggie.pdf" target="__BLANK">Catalogue</a></li>
        </ul>
       <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp me-1" data-wow-delay="300ms">
                
       
       <li><a href="https://www.facebook.com/people/DryVeggie/61558993462982/?mibextid=ZbWKwL" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                
                
       <li><a href="https://www.linkedin.com/company/dryveggie/" target="_blank"><i class="fab fa-linkedin-in" aria-label="LinkedIn"></i> </a> </li>
            <li><a href="https://www.instagram.com/dryveggie" target="_blank"><i class="fab fa-instagram" aria-label="Instagram"></i></a></li>
      </ul>
      </div>
  
      <!-- Side menu open button -->
      <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle" aria-label="Open Side Menu">
        <span class="gradient-bg"></span>
        <span class="gradient-bg"></span>
        <span class="gradient-bg"></span>
      </a>
    </div>
  </nav>

  <!-- Side menu -->
  <div class="side-menu opacity-0 gradient-bg">
    <div class="overlay"></div>
    <div class="inner-wrapper">
      <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
      <nav class="side-nav w-100">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?= ($currentPage == 'about.php' || $currentPage == 'about.html') ? 'active' : '' ?>" href="about.php">About Us</a></li>
         

          <li class="nav-item">
            <a class="nav-link collapsePagesSideMenu" data-bs-toggle="collapse" href="#sideNavPages">
              Products <i class="fas fa-chevron-down"></i>
            </a>
            <div id="sideNavPages" class="collapse sideNavPages">
              <ul class="navbar-nav mt-2">
                <?php
                $products = [
                  'dehydrated-red-white-pink-onion-powder.php',
                  'dehydrated-beetroot-powder.php',
                  'dehydrated-green-chilli-powder.php',
                  'dehydrated-red-white-onion-flakes.php',
                  'dehydrated-onion-fried-flakes.php',
                  'dehydrated-green-chilli-flakes.php',
                  'dehydrated-beetroot-minced.php',
                  'dehydrated-garlic-powder.php',
                  'dehydrated-ginger-powder.php',
                  'dehydrated-tomato-powder.php'
                ];
                foreach ($products as $product) {
                  echo '<li class="nav-item"><a class="nav-link ' . ($currentPage == $product ? 'active' : '') . '" href="' . $product . '">' . ucwords(str_replace(['-', '.php'], [' ', ''], $product)) . '</a></li>';
                }
                ?>
              </ul>
            </div>
          </li>
           <li class="nav-item"><a class="nav-link <?= ($currentPage == 'contact.php' || $currentPage == 'contact.html') ? 'active' : '' ?>" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link " href="assets/DryVeggie.pdf" target="__BLANK">Catalogue</a></li>
        </ul>
      </nav>

      <div class="side-footer w-100">
        <ul class="social-icons-simple white top40">
          <li><a href="https://www.facebook.com/people/DryVeggie/61558993462982/?mibextid=ZbWKwL" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.linkedin.com/company/dryveggie/" target="_blank"><i class="fab fa-linkedin" aria-label="LinkedIn"></i></a></li>
          <li><a href="https://www.instagram.com/dryveggie" target="_blank"><i class="fab fa-instagram" aria-label="Instagram"></i></a></li>
        </ul>
        <p class="whitecolor">&copy; <span id="year"></span> Trax. Made With Love by ThemesIndustry</p>
      </div>
    </div>
  </div>

  <div id="close_side_menu" class="tooltip"></div>
  <!-- End side menu -->
</header>
<!-- header -->


<!-- Main Slider -->
<section id="main-banner-area" class="position-relative">
  <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
    <div id="vertical-bullets" class="rev_slider fullwidthabanner white" data-version="5.4.1">
      <ul>
        <!-- SLIDE 1 -->
        <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
          <img src="image/tombann.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <div class="overlay overlay-dark opacity-6"></div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="-130"
               data-width="none" data-height="none" data-type="text"
               data-textAlign="center" data-responsive_offset="on" data-start="1000"
               data-frames='[{"from":"y:[100%]","mask":"x:0px;y:[100%]","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"}]'>
            <h1 class="text-capitalize font-xlight whitecolor text-center">Packed with</h1>
          </div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="-70"
               data-width="auto" data-height="none" data-type="text"
               data-textAlign="center" data-responsive_offset="on" data-start="1200"
               data-frames='[{"from":"y:[100%]","mask":"x:0px;y:[100%]","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"}]'>
            <h1 class="text-capitalize font-bold whitecolor text-center">vitamins , minerals</h1>
          </div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="-20"
               data-width="none" data-height="none" data-type="text"
               data-textAlign="center" data-responsive_offset="on" data-start="1400"
               data-frames='[{"from":"y:[100%]","mask":"x:0px;y:[100%]","speed":1500,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"}]'>
            <h1 class="text-capitalize font-bold whitecolor text-center">and</h1>
          </div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="40"
               data-width="none" data-height="none" data-type="text"
               data-textAlign="center"
               data-responsive_offset="on" data-start="1600"
               data-frames='[{"from":"y:[100%];opacity:0;","mask":"x:0px;y:[100%]","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"}]'>
            <h1 class="text-capitalize font-bold whitecolor text-center">antioxidants</h1>
          </div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="90"
               data-width="600" data-height="none" data-whitespace="normal"
               data-type="text"
               data-textAlign="center"
               data-responsive_offset="on" data-start="2000"
               data-frames='[{"from":"y:[100%];opacity:0;","mask":"x:0px;y:[100%]","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"}]'>
            <h4 class="whitecolor font-xlight text-center">
              Made from the finest, sun-ripened tomatoes, delivering a burst of authentic taste.
            </h4>
          </div>
        </li>

        <!-- SLIDE 2 -->
        <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
          <img src="image/ginger.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <div class="overlay overlay-dark opacity-6"></div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="-130"
               data-width="none" data-height="none" data-type="text"
               data-textAlign="center" data-responsive_offset="on" data-start="1000"
               data-frames='[{"from":"y:[100%]","mask":"x:0px;y:[100%]","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"}]'>
            <h1 class="text-capitalize font-xlight whitecolor text-center">A Touch Of</h1>
          </div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="-70"
               data-width="none" data-height="none" data-type="text"
               data-textAlign="center" data-responsive_offset="on" data-start="1000"
               data-frames='[{"from":"y:[100%]","mask":"x:0px;y:[100%]","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"}]'>
            <h1 class="text-capitalize font-bold whitecolor text-center">Health</h1>
          </div>

          <div class="tp-caption tp-resizeme"
               data-x="center" data-hoffset="0"
               data-y="middle" data-voffset="10"
               data-width="600" data-height="none" data-whitespace="normal"
               data-type="text"
               data-textAlign="center" data-responsive_offset="on" data-start="2000"
               data-frames='[{"from":"y:[100%]","mask":"x:0px;y:[100%]","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"}]'>
            <h4 class="whitecolor font-xlight text-center">
              Sourced from the finest ginger roots, ensuring maximum flavor and potency
            </h4>
          </div>
        </li>
      </ul>
    </div>
  </div>

</section>
<!-- Main Slider ends -->
