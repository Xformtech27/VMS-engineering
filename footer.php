<?php
// define('BASE_URL', 'http://localhost/stocker');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
</head>
<body>

   

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="<?php echo BASE_URL; ?>/index.php" class="navbar-brand p-0">
                <h1 class="text-primary">
                    <i class="fas fa-search-dollar me-3"></i>VMS Engineering
                </h1>
                <!-- <img src="<?php echo BASE_URL; ?>/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo BASE_URL; ?>/index.php" class="nav-item nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
<a href="<?php echo BASE_URL; ?>/about.php" class="nav-item nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
    About
</a>                    
<a href="<?php echo BASE_URL; ?>/service.php"
   class="nav-item nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
    Services
</a>

  <li class="nav-item dropdown position-static">
    <a href="<?php echo BASE_URL; ?>/components.php"
           class="nav-link <?php echo ($current_page == 'components.php') ? 'active' : ''; ?>">
            Components
        </a>

    <div class="dropdown-menu mega-menu p-4">
        <div class="row">

            <div class="col-lg-6">
                <h5>RO Plant & Water Treatment Plant</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/frp-vessel.php">FRP Vessel</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/mpv.php">MPV</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/ro-membrane.php">RO Membrane</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/media.php">Media</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/pressure-gauge.php">Pressure Gauge</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/ro-membrane-housing.php">RO Membrane Housing</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/rota-meter.php">Rota Meter</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/control-panel.php">Control Panel</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/raw-water-pump.php">Raw Water Pump</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/high-pressure-pump.php">High Pressure Pump</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/cartridge-filter.php">Cartridge Filter</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/cartridge-filter-housing.php">Cartridge Filter Housing</a>
            </div>
            

            <div class="col-lg-6">
                <h5>Waste Water Plant Components</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/blower.php">Blower</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/diffuser.php">Diffuser</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/oil-skimmer.php">Oil Skimmer</a>
            </div>
            

        </div>
    </div>
</li>
          
  <!-- <a href="<?php echo BASE_URL; ?>/components.php" class="nav-item nav-link">Components</a> -->


                    <!-- <a href="<?php echo BASE_URL; ?>/blog.php" class="nav-item nav-link">Blogs</a> -->

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Pages</span>
                        </a>
                        <div class="dropdown-menu m-0">
                           <a href="<?php echo BASE_URL; ?>/pages/feature.php" class="dropdown-item">Our Features</a>
                            <a href="<?php echo BASE_URL; ?>/pages/team.php" class="dropdown-item">Our team</a>
                            <a href="<?php echo BASE_URL; ?>/pages/testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="<?php echo BASE_URL; ?>/pages/offer.php" class="dropdown-item">Our offer</a>
                            <a href="<?php echo BASE_URL; ?>/pages/FAQ.php" class="dropdown-item">FAQs</a>
                            <a href="<?php echo BASE_URL; ?>/pages/404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
<a href="<?php echo BASE_URL; ?>/contact.php"
   class="nav-item nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
    Contact Us
</a>                </div>
          <a href="<?php echo BASE_URL; ?>/get-started.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Profile</a>

            </div>
        </nav>

       
    </div>
    <!-- Navbar & Hero End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="<?php echo BASE_URL; ?>/index.php" class="p-0">
                                           <h1 class="text-primary">
                    <i class="fas fa-search-dollar me-3"></i>VMS Engineering
                </h1>
                            <!-- <img src="<?php echo BASE_URL; ?>/img/logo.png" alt="Logo"> -->
                        </a>
                        <p class="mb-4">
                            
                        </p>
                        <!-- <div class="d-flex">
                            <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on the</small>
                                    <h6 class="text-white">App Store</h6>
                                </div>
                            </a>
                            <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                <i class="fas fa-play text-primary"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get it on</small>
                                    <h6 class="text-white">Google Play</h6>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item" style="color:aliceblue;">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="<?php echo BASE_URL; ?>/about.php">
                            <i class="fas fa-angle-right me-2"></i> About Us
                        </a>
                        <!-- <a href="<?php echo BASE_URL; ?>/pages/feature.php">
                            <i class="fas fa-angle-right me-2"></i> Feature
                        </a>
                        <a href="#">
                            <i class="fas fa-angle-right me-2"></i> Attractions
                        </a>
                        <a href="<?php echo BASE_URL; ?>/tickets.php">
                            <i class="fas fa-angle-right me-2"></i> Tickets
                        </a>-->
                        <a href="<?php echo BASE_URL; ?>/components.php">
                            <i class="fas fa-angle-right me-2"></i>Components
                        </a> 
                        <a href="<?php echo BASE_URL; ?>/contact.php">
                            <i class="fas fa-angle-right me-2"></i> Contact us
                        </a>
                         <a href="<?php echo BASE_URL; ?>/FAQ.php">
                            <i class="fas fa-angle-right me-2"></i> FAQ
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Services</h4>
                        <!-- <a href="<?php echo BASE_URL; ?>/privacy-policy.php">
                            <i class="fas fa-angle-right me-2"></i> Privacy Policy
                        </a>
                        <a href="<?php echo BASE_URL; ?>/terms-conditions.php">
                            <i class="fas fa-angle-right me-2"></i> Terms & Conditions
                        </a>
                        <a href="<?php echo BASE_URL; ?>/disclaimer.php">
                            <i class="fas fa-angle-right me-2"></i> Disclaimer
                        </a>
                        <a href="<?php echo BASE_URL; ?>/support.php">
                            <i class="fas fa-angle-right me-2"></i> Support
                        </a>
                        <a href="<?php echo BASE_URL; ?>/pages/FAQ.php">
                            <i class="fas fa-angle-right me-2"></i> FAQ
                        </a>
                        <a href="<?php echo BASE_URL; ?>/help.php">
                            <i class="fas fa-angle-right me-2"></i> Help
                        </a> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">Nirmal Market Plot No 35,CDC PCNTDA,Purnanagar Near TATA MOTORS,Chinchwad,Pune 411019</p>
                        </div>
                        <div class="d-flex align-items-center">
    <i class="fas fa-envelope text-primary me-3"></i>
    <a href="mailto:vmesolutions33@gmail.com" class="text-white mb-0" style="text-decoration: none;">
        vmesolutions33@gmail.com
    </a>
</div>


                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">9146557049</p>
                        </div>
                        <!-- <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser text-primary me-3"></i>
                            <p class="text-white mb-0">Yoursite@ex.com</p>
                        </div> -->
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#">
                                <i class="fab fa-instagram text-white"></i>
                            </a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body">
                        <a href="<?php echo BASE_URL; ?>/index.php" class="border-bottom text-white">
                            <i class="fas fa-copyright text-light me-2"></i>Your Site Name
                        </a>, All right reserved.
                    </span>
                </div> -->
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author's credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author's credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
             All right reserved | Designed By <a class="border-bottom text-white" href="https://www.xform.in/">Xform Technologies</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo BASE_URL; ?>/js/main.js"></script>

</body>
</html>