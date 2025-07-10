<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $page_title; ?></title>
   
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
    <link rel="stylesheet" href="css/style_updated.css">
</head>
<body>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- Main Header with Logo + Navigation -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="image/wkbg.png" alt="logo" class="logo-default" style="width: 217px;">
                <img src="image/wkbg.png" alt="logo" class="logo-scrolled">
            </a>

            <!-- Navigation -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
                    </li>

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

                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact</a>
                    </li>
                   
                    <li class="nav-item"><a class="nav-link <?= ($currentPage == 'catalogue.php') ? 'active' : '' ?>" href="assets/DryVeggie.pdf" target="__BLANK">Catalogue</a></li>
                     
                </ul>
                <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp me-1" data-wow-delay="300ms">
                    <li><a href="https://www.facebook.com/people/DryVeggie/61558993462982/?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="https://www.linkedin.com/company/dryveggie/" target="_blank"><i class="fab fa-linkedin-in"></i> </a> </li>
                    <li><a href="https://www.instagram.com/dryveggie" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
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
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu " data-bs-toggle="collapse" href="#sideNavPages">
                            Products <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <?php
                                $productPages = [
                                    'dehydrated-red-white-pink-onion-powder.php',
                                    'dehydrated-beetroot-powder.php',
                                    'dehydrated-green-chilli-powder.php',
                                    'dehydrated-red-white-onion-flakes.php',
                                    'dehydrated-onion-fried-flakes.php',
                                    'dehydrated-green-chilli-flakes.php',
                                    'dehydrated-beetroot-minced.php',
                                    'dehydrated-garlic-powder.php',
                                    'dehydrated-ginger-powder.php',
                                    'dehydrated-tomato-powder.php',
                                ];
                                foreach ($productPages as $page) {
                                    $name = str_replace(['-', '.php'], [' ', ''], ucwords($page));
                                    echo '<li class="nav-item"><a class="nav-link ' . ($currentPage == $page ? 'active' : '') . '" href="' . $page . '">' . $name . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact</a>
                    </li>
                    
                    
                     <li class="nav-item"><a class="nav-link <?= ($currentPage == 'catalogue.php') ? 'active' : '' ?>" href="assets/DryVeggie.pdf" target="__BLANK">Catalogue</a></li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="https://www.facebook.com/people/DryVeggie/61558993462982/?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/dryveggie/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.instagram.com/dryveggie" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="whitecolor">&copy; <span id="year"></span> Trax. Made With Love by ThemesIndustry</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>

