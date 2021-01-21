<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.png in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- header begin -->
    <header>
     
        <!-- menu-area -->
        <div class="header-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-5 d-flex align-items-center">
                        <div class="logo logo-circle pos-rel">
                            <a href="/"><img src="img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="header-right f-right">
                            <div class="header-lang f-right pos-rel d-none d-lg-block">
                                <div class="lang-icon">
                                    <img src="img/icon/lang.png" alt="">
                                    <span>EN</span>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="header__menu f-right">
                        <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">Home +</a></li>

                                    <li><a href="/about">About Us +</a> </li>

                                    <li><a href="/service">Service +</a></li>

                                    <li><a href="/rate_insurance">Rates & Insurances +</a></li>

                                    <li><a href="/contact">Contact +</a></li>

                                 

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->



    <?php echo $__env->yieldContent('content'); ?>


    <footer>
            <div class="footer-top theme-bg pt-100">
                <div class="container">
                    <div class="footer-top-form mb-60">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="footer-logo-2">
                                    <img src="img/logo/logo-2.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 d-none d-lg-block d-xl-block">
                                <div class="footer-subscribe-title">
                                    <span>Subscribe to Our Newsletter</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-8">
                                <form class="footer-newsletter" action="" method="post">
                                    <input type="text" placeholder="Your Email Address....">
                                    <button class="btn">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="footer-mid pb-60">
                        <div class="row">
                            <div class="col-xl-8 col-lg-6 col-md-6">
                                <div class="footer-widget mb-40">
                                    <div class="footer-contact-info-2">
                                        <div class="f-contact-info-box fix mb-30">
                                            <div class="footer-co-icon f-left">
                                                <img src="img/icon/footer-co-icon-1.png" alt="">
                                            </div>
                                            <div class="footer-co-content">
                                                <span>Mon to Fri : 9am - 5pm</span>
                                                <h4>Address: 4171 Marietta St, Powder Springs, GA 30127, USA</h4>
                                                <h4>TEL: <a href="tel:+1 (678) 504-5686">+1 (678) 504-5686</a></h4>
                                                <h4>FAX: 844-273-2473</h4>
                                            </div>
                                        </div>
                                        <div class="f-contact-info-box fix mb-30">
                                            <div class="footer-co-icon f-left">
                                                <img src="img/icon/footer-co-icon-2.png" alt="">
                                            </div>
                                            <div class="footer-co-content">
                                                <span>do you have a question?</span>
                                                <h4><a href="mailto:info@allwellhealthcarega.com">info@allwellhealthcarega.com</a></h4>
                                            </div>
                                        </div>
                                        <div class="f-contact-info-box fix mb-30">
                                            <div class="footer-co-icon f-left">
                                                <img src="img/icon/footer-co-icon-2.png" alt="">
                                            </div>
                                            <div class="footer-co-content">
                                                <span>socials network</span>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="footer-widget mb-40">
                                    <div class="footer-title">
                                        <h3>Departments</h3>
                                    </div>
                                    <div class="footer-menu footer-menu-2 fix">
                                        <ul>
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a href="/service">Services</a></li>
                                            <li><a href="/direction">Direction</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                   
                        </div>
                    </div>
                    <div class="footer-bottom-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copyright-area text-center">
                                    <p class="white-color">Copyright ©<?php echo e(date('Y')); ?> <strong><a class="white-color" href="#">AllWell Health Georgia. </a></strong> All rights reserved. Designed by <strong><a style="color:red;" href="https://www.animoplasty.com" target="_blank">Animoplasty</a></strong> </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

     <!-- JS here -->
     <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html><?php /**PATH /Users/salamisamuel/hospitalCaleb/resources/views/layouts/master.blade.php ENDPATH**/ ?>