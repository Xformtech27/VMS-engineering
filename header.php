<?php
define('BASE_URL', 'http://localhost/vmsengeering');
$current_page = basename($_SERVER['PHP_SELF']);
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

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location
                    </a>
                    <a href="tel:+01234567890" class="text-muted small me-4">
                        <i class="fas fa-phone-alt text-primary me-2"></i>+91 9146557049
                    </a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0">
                        <i class="fas fa-envelope text-primary me-2"></i>vmesolutions33gmail.com
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- <a href="<?php echo BASE_URL; ?>/register.php">
                        <small class="me-3 text-dark">
                            <i class="fa fa-user text-primary me-2"></i>Register
                        </small>
                    </a> -->
                    <!-- <a href="<?php echo BASE_URL; ?>/login.php">
                        <small class="me-3 text-dark">
                            <i class="fa fa-sign-in-alt text-primary me-2"></i>Login
                        </small>
                    </a> -->
                    <!-- <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                            <small>
                                <i class="fa fa-home text-primary me-2"></i> My Dashboard
                            </small>
                        </a>
                        <div class="dropdown-menu rounded">
                            <a href="<?php echo BASE_URL; ?>/profile.php" class="dropdown-item">
                                <i class="fas fa-user-alt me-2"></i> My Profile
                            </a>
                            <a href="<?php echo BASE_URL; ?>/inbox.php" class="dropdown-item">
                                <i class="fas fa-comment-alt me-2"></i> Inbox
                            </a>
                            <a href="<?php echo BASE_URL; ?>/notifications.php" class="dropdown-item">
                                <i class="fas fa-bell me-2"></i> Notifications
                            </a>
                            <a href="<?php echo BASE_URL; ?>/settings.php" class="dropdown-item">
                                <i class="fas fa-cog me-2"></i> Account Settings
                            </a>
                            <a href="<?php echo BASE_URL; ?>/logout.php" class="dropdown-item">
                                <i class="fas fa-power-off me-2"></i> Log Out
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="<?php echo BASE_URL; ?>/index.php" class="navbar-brand p-0">
                <!-- <h1 class="text-primary">
                    <i class="fas fa-search-dollar me-3"></i>VMS Engineering
                </h1> -->
                <img src="<?php echo BASE_URL; ?>/img/logo.png" alt="Logo">
                
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">

                    <a href="<?php echo BASE_URL; ?>/index.php"
                        class="nav-item nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                        Home
                    </a>

                    <a href="<?php echo BASE_URL; ?>/about.php"
                        class="nav-item nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                        About
                    </a>


                    <a href="<?php echo BASE_URL; ?>/service.php"
                        class="nav-item nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
                        Services
                    </a>

<li class="nav-item dropdown position-static mega-dropdown">
    <a href="<?php echo BASE_URL; ?>/components.php"
           class="nav-link <?php echo ($current_page == 'components.php') ? 'active' : ''; ?>">
            Components
        </a>

    <div class="dropdown-menu mega-menu shadow border-0 p-4">
        <div class="row">

            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">RO Plant & Water Treatment</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/frp-vessels.php">FRP Vessel</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/mpv.php">MPV</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/ro-membrane.php">RO Membrane</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/media.php">Media</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/pressure-gauge.php">Pressure Gauge</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/ro-membrane-housing.php">RO Membrane Housing</a>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">More RO Components</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/rotameter.php">Rota Meter</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/control-panel.php">Control Panel</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/raw-water-pump.php">Raw Water Pump</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/high-pressure-pump.php">High Pressure Pump</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/cartridge-filter.php">Cartridge Filter</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/cartridge-filter-housing.php">Cartridge Filter Housing</a>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">Waste Water Plant</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/blower.php">Blower</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/diffuser.php">Diffuser</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/oil-skimmer.php">Oil Skimmer</a>
            </div>

            <!-- Column 4 -->
            <!-- <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">Quick Links</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components.php">All Components</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/services.php">Services</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/contact.php">Contact Us</a>
            </div> -->

        </div>
    </div>
</li>


                    
                   
                    

                


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
                    </div>  -->

                    <a href="<?php echo BASE_URL; ?>/contact.php" class="nav-item nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"> Contact Us
                    </a>
                </div>
                <a href="<?php echo BASE_URL; ?>/get-started.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Profile</a>
                
            </div>

        </nav>


        
        


  
    </div>
       <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="<?php echo BASE_URL; ?>/index.php" class="navbar-brand p-0">
                <!-- <h1 class="text-primary">
                    <i class="fas fa-search-dollar me-3"></i>VMS Engineerin
                </h1> -->
                <img src="<?php echo BASE_URL; ?>/img/logo.png" alt="Logo">
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

 <li class="nav-item dropdown position-static mega-dropdown">
    <a href="<?php echo BASE_URL; ?>/components.php"
           class="nav-link <?php echo ($current_page == 'components.php') ? 'active' : ''; ?>">
            Components
        </a>

    <div class="dropdown-menu mega-menu shadow border-0 p-4">
        <div class="row">

            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">RO Plant & Water Treatment</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/frp-vessels.php">FRP Vessels</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/mpv.php">MPV</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/ro-membrane.php">RO Membrane</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/media.php">Media</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/pressure-gauge.php">Pressure Gauge</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/ro-membrane-housing.php">RO Membrane Housing</a>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">More RO Components</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/rotameter.php">Rota Meter</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/control-panel.php">Control Panel</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/raw-water-pump.php">Raw Water Pump</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/high-pressure-pump.php">High Pressure Pump</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/cartridge-filter.php">Cartridge Filter</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/cartridge-filter-housing.php">Cartridge Filter Housing</a>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">Waste Water Plant</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/blower.php">Blower</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/diffuser.php">Diffuser</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components/oil-skimmer.php">Oil Skimmer</a>
            </div>

            <!-- Column 4 -->
            <!-- <div class="col-lg-3 col-md-6">
                <h5 class="mega-title">Quick Links</h5>

                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/components.php">All Components</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/services.php">Services</a>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/contact.php">Contact Us</a>
            </div> -->

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
    <!-- Nav
     
    
    
    ar & Hero End -->

</body>

</html>