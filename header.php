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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ============================================
           NAVBAR - RIGHT SIDE SLIDING MENU
           ============================================ */

        /* ---------- BASE STYLES ---------- */

        
        .navbar {
            transition: all 0.3s ease;
            padding: 0;
           color: #000;
            
        }

        .navbar-brand img {
            max-height: 70px;
            width: auto;
            transition: all 0.3s ease;
        }

        /* ---------- DESKTOP (992px+) ---------- */
        @media (min-width: 992px) {
            .navbar-light .navbar-nav .nav-link {
                color: #242c33;
                font-weight: 600;
                padding: 0.5rem 1rem;
                transition: all 0.3s ease;
                position: relative;
                font-size: 15px;
            }

            .navbar-light .navbar-nav .nav-link:hover,
            .navbar-light .navbar-nav .nav-link.active {
                color:  #459e41;
            }
          

            .navbar-light .navbar-nav .nav-link::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 50%;
                width: 0;
                height: 3px;
                background: #5aa1cd;
                transition: all 0.3s ease;
                transform: translateX(-50%);
                border-radius: 2px;
            }

            .navbar-light .navbar-nav .nav-link:hover::after,
            .navbar-light .navbar-nav .nav-link.active::after {
                width: 70%;
            }

            .btn-profile {
                margin-left: 15px;
                padding: 8px 25px;
                border-radius: 50px;
                font-weight: 600;
                font-size: 14px;
                background: #5aa1cd;
                color: #fff;
                border: none;
                transition: all 0.3s ease;
            }

            .btn-profile:hover {
                background: #e04700;
                color: #459e41;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(90, 161, 205, 0.3);
            }

            /* Mega Menu Desktop */
            .mega-dropdown {
                position: static !important;
            }

            .mega-menu {
                width: 100%;
                left: 0;
                right: 0;
                margin-top: 0;
                border-radius: 0 0 12px 12px;
                display: none;
                padding: 30px 40px;
                border-top: 3px solid #5aa1cd;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.12);
                background: #ffffff;
            }

            .mega-dropdown:hover .mega-menu {
                display: block !important;
            }

            .mega-title {
                color: #242c33;
                font-size: 16px;
                font-weight: 700;
                margin-bottom: 15px;
                padding-bottom: 8px;
                border-bottom: 2px solid #5aa1cd;
                display: inline-block;
            }

            .mega-menu .dropdown-item {
                padding: 6px 0;
                color: #555;
                font-size: 14px;
                background: none;
                border-bottom: 1px solid transparent;
                transition: all 0.3s ease;
            }

            .mega-menu .dropdown-item:hover {
                color: #5aa1cd;
                padding-left: 10px;
                background: none;
                border-bottom-color: rgba(90, 161, 205, 0.1);
            }

            .mega-menu .row {
                margin: 0 -15px;
            }

            .mega-menu .col-lg-3 {
                padding: 0 15px;
            }
        }

        /* ============================================
           TABLET & MOBILE - RIGHT SIDE SLIDING MENU
           ============================================ */
        @media (max-width: 991px) {
            /* Navbar container */
            .navbar.navbar-expand-lg {
                background: #ffffff !important;
                box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
                padding: 10px 15px !important;
                position: relative;
                z-index: 999;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            /* Logo */
            .navbar-brand img {
                max-height: 45px;
            }

            /* ---- SIMPLE HAMBURGER TOGGLE (NO ANIMATION, NO X) ---- */
            .navbar-toggler {
                border: none;
                padding: 8px 10px;
                background: transparent;
                transition: all 0.3s ease;
                position: relative;
                z-index: 1001;
                cursor: pointer;
            }

            .navbar-toggler:focus {
                outline: none;
                box-shadow: none;
            }

            .navbar-toggler .fa-bars {
                font-size: 24px;
                color: #242c33;
                transition: all 0.3s ease;
            }

            /* Hide the default Bootstrap toggle icon */
            .navbar-toggler-icon {
                display: none;
            }

            /* When menu is open - hide the hamburger icon */
            .navbar-toggler[aria-expanded="true"] .fa-bars {
                display: none;
            }

            /* ---- SLIDING MENU - RIGHT SIDE ---- */
            .navbar-collapse {
                position: fixed !important;
                top: 0;
                right: -100%;
                width: 300px;
                max-width: 80%;
                height: 100vh;
                background: #ffffff;
                padding: 70px 20px 30px;
                box-shadow: -10px 0 40px rgba(0, 0, 0, 0.15);
                transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                overflow-y: auto;
                z-index: 1000;
                display: block !important;
                border-left: 1px solid rgba(0, 0, 0, 0.05);
            }

            /* Show menu when open */
            .navbar-collapse.show {
                right: 0;
            }

            /* ---- ONLY ONE CLOSE BUTTON (X) - WHITE ---- */
            .menu-close-btn {
                position: absolute;
                top: 18px;
                right: 18px;
                width: 40px;
                height: 40px;
                border: none;
                background: rgba(0, 0, 0, 0.3);
                border-radius: 50%;
                font-size: 20px;
                color: #ffffff;
                cursor: pointer;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
            }

            .menu-close-btn:hover {
                background: rgba(0, 0, 0, 0.5);
                transform: rotate(90deg);
            }

            .menu-close-btn i {
                color: #ffffff;
                font-size: 18px;
            }

            /* Nav items in slide menu - NO ICONS */
            .navbar-nav {
                padding: 0;
                width: 100%;
                display: flex;
                flex-direction: column;
            }

            .navbar-nav .nav-item {
                width: 100%;
                border-bottom: 1px solid rgba(0, 0, 0, 0.04);
            }

            .navbar-nav .nav-item:last-child {
                border-bottom: none;
            }

            .navbar-light .navbar-nav .nav-link {
                padding: 14px 15px;
                color: #242c33 !important;
                font-size: 16px;
                font-weight: 500;
                display: block;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .navbar-light .navbar-nav .nav-link:hover,
            .navbar-light .navbar-nav .nav-link.active {
                color: #459e41 !important;
                background: rgba(90, 161, 205, 0.06);
                padding-left: 22px;
            }

            .navbar-light .navbar-nav .nav-link::after {
                display: none !important;
            }

            /* Profile button in slide menu */

            .btn-profile-slide {
                margin-top: 20px;
                padding: 12px 20px;
                width: 100%;
                text-align: center;
                border-radius: 50px;
                font-weight: 600;
                background:  #459e41;
                color: #fff;
                border: none;
                transition: all 0.3s ease;
                display: inline-block;
                text-decoration: none;
                font-size: 15px;
            }

            .btn-profile-slide:hover {
                background: #e04700;
                color: #fff;
            }

            /* ===== MEGA MENU IN SLIDE ===== */
            .mega-dropdown {
                position: relative !important;
            }

            .mega-dropdown > a {
                position: relative;
                cursor: pointer;
                user-select: none;
            }

            .mega-dropdown > a::after {
                font-family: "Font Awesome 6 Free";
                content: "\f078";
                font-weight: 900;
                font-size: 12px;
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                transition: all 0.3s ease;
                color: #999;
            }

            .mega-dropdown > a.open::after {
                transform: translateY(-50%) rotate(180deg);
                color: #5aa1cd;
            }

            .mega-menu {
                position: static !important;
                width: 100% !important;
                padding: 10px 15px 15px !important;
                border: none !important;
                box-shadow: none !important;
                background: #f8f9fa !important;
                border-radius: 10px !important;
                margin: 5px 0 10px !important;
                display: none !important;
                float: none !important;
            }

            .mega-menu.show {
                display: block !important;
            }

            .mega-title {
                font-size: 13px;
                font-weight: 700;
                color: #5aa1cd;
                margin: 12px 0 6px;
                padding: 0 5px;
                display: block;
            }

            .mega-title:first-of-type {
                margin-top: 5px;
            }

            .mega-menu .dropdown-item {
                padding: 8px 15px !important;
                font-size: 14px;
                color: #444 !important;
                border-bottom: 1px solid rgba(0, 0, 0, 0.04);
                border-radius: 6px;
                transition: all 0.3s ease;
                display: block;
            }

            .mega-menu .dropdown-item:last-child {
                border-bottom: none;
            }

            .mega-menu .dropdown-item:hover {
                color: #5aa1cd !important;
                background: rgba(90, 161, 205, 0.06) !important;
                padding-left: 20px !important;
            }

            .mega-menu .row {
                margin: 0;
                display: block;
            }

            .mega-menu .col-lg-3,
            .mega-menu .col-md-6 {
                padding: 0;
                width: 100%;
                max-width: 100%;
                flex: 0 0 100%;
                display: block;
            }

            .dropdown-toggle::after {
                display: none !important;
            }

            /* Scrollbar styling */
            .navbar-collapse::-webkit-scrollbar {
                width: 4px;
            }

            .navbar-collapse::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .navbar-collapse::-webkit-scrollbar-thumb {
                background: #5aa1cd;
                border-radius: 10px;
            }

            .navbar-collapse::-webkit-scrollbar-thumb:hover {
                background: #e04700;
            }
        }

        /* ============================================
           TABLET LANDSCAPE (768px - 991px)
           ============================================ */
        @media (min-width: 768px) and (max-width: 991px) {
            .navbar-collapse {
                width: 350px;
                max-width: 70%;
                padding: 80px 25px 30px;
            }

            .navbar-brand img {
                max-height: 50px;
            }

            .navbar-light .navbar-nav .nav-link {
                font-size: 17px;
                padding: 16px 18px;
            }

            .mega-menu .dropdown-item {
                padding: 10px 18px !important;
                font-size: 15px;
            }

            .mega-title {
                font-size: 15px;
                margin: 15px 0 8px;
            }

            .menu-close-btn {
                width: 44px;
                height: 44px;
                font-size: 22px;
                top: 20px;
                right: 20px;
            }

            .menu-close-btn i {
                font-size: 20px;
            }

            .navbar-toggler .fa-bars {
                font-size: 26px;
            }
        }

        /* ============================================
           SMALL PHONES (576px and below)
           ============================================ */
        @media (max-width: 576px) {
            .navbar.navbar-expand-lg {
                padding: 8px 12px !important;
            }

            .navbar-brand img {
                max-height: 35px;
            }

            .navbar-collapse {
                width: 280px;
                max-width: 85%;
                padding: 60px 15px 25px;
            }

            .navbar-light .navbar-nav .nav-link {
                padding: 12px 14px;
                font-size: 15px;
            }

            .mega-menu {
                padding: 8px 10px 12px !important;
            }

            .mega-menu .dropdown-item {
                padding: 6px 12px !important;
                font-size: 13px;
            }

            .mega-title {
                font-size: 12px;
                margin: 10px 0 5px;
            }

            .btn-profile-slide {
                padding: 10px 15px;
                font-size: 14px;
            }

            .menu-close-btn {
                width: 36px;
                height: 36px;
                font-size: 18px;
                top: 14px;
                right: 14px;
            }

            .menu-close-btn i {
                font-size: 16px;
            }

            .navbar-toggler .fa-bars {
                font-size: 20px;
            }
        }

        /* ============================================
           EXTRA SMALL (360px and below)
           ============================================ */
        @media (max-width: 360px) {
            .navbar.navbar-expand-lg {
                padding: 5px 8px !important;
            }

            .navbar-brand img {
                max-height: 28px;
            }

            .navbar-collapse {
                width: 250px;
                max-width: 90%;
                padding: 50px 12px 20px;
            }

            .navbar-light .navbar-nav .nav-link {
                padding: 10px 12px;
                font-size: 14px;
            }

            .mega-menu .dropdown-item {
                padding: 5px 10px !important;
                font-size: 12px;
            }

            .menu-close-btn {
                width: 32px;
                height: 32px;
                font-size: 16px;
                top: 12px;
                right: 12px;
            }

            .menu-close-btn i {
                font-size: 14px;
            }

            .navbar-toggler .fa-bars {
                font-size: 18px;
            }
        }

        /* ============================================
           FIX: Prevent duplicate navbars
           ============================================ */
        .navbar.navbar-expand-lg ~ .navbar.navbar-expand-lg {
            display: none !important;
        }

        /* ============================================
           TOPBAR RESPONSIVE
           ============================================ */
        @media (max-width: 991px) {
            .topbar {
                display: none !important;
            }
        }

        /* ============================================
           BODY OVERLAY FOR MOBILE MENU
           ============================================ */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Prevent body scroll when menu is open */
        body.menu-open {
            overflow: hidden;
        }
    </style>
</head>

<body>

    <!-- Overlay -->
    <div class="menu-overlay" id="menuOverlay"></div>

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location
                    </a>
                    <a href="tel:+01234567890" class="text-muted small me-4">
                        <i class="fas fa-phone text-primary me-2"></i>+91 9146557049
                    </a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0">
                        <i class="fas fa-envelope text-primary me-2"></i>vmesolutions33gmail.com
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- Dashboard dropdown here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- ===== NAVBAR ===== -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            
            <!-- Logo -->
            <a href="<?php echo BASE_URL; ?>/index.php" class="navbar-brand p-0">
                <img src="<?php echo BASE_URL; ?>/img/logo.png" alt="Logo">
            </a>
            
            <!-- Hamburger Toggle Button - Simple bars, NO X -->
            <button class="navbar-toggler" type="button" id="menuToggle" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Navbar Collapse - Right Side Sliding Menu -->
            <div class="navbar-collapse" id="navbarCollapse">
                
                <!-- ONLY ONE CLOSE BUTTON (X) - WHITE -->
              
                  <!-- <button class="menu-close-btn" id="menuCloseBtn">
                    <i class="fas fa-times"></i>
                </button> -->
                <!-- Nav Items - NO ICONS -->
                <div class="navbar-nav ms-auto py-0">

                    <!-- Home -->
                    <a href="<?php echo BASE_URL; ?>/index.php"
                        class="nav-item nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                        Home
                    </a>

                    <!-- About -->
                    <a href="<?php echo BASE_URL; ?>/about.php"
                        class="nav-item nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                        About
                    </a>

                    <!-- Services -->
                    <a href="<?php echo BASE_URL; ?>/service.php"
                        class="nav-item nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
                        Services
                    </a>

                    <!-- Components with Mega Menu -->
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

                            </div>
                        </div>
                    </li>
                     
                     <a href="<?php echo BASE_URL; ?>/gallery.php"
                        class="nav-item nav-link <?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>">
                        Gallery
                    </a>

                    <!-- Contact Us -->
                    <a href="<?php echo BASE_URL; ?>/contact.php"
                        class="nav-item nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                        Contact Us
                    </a>

                </div>

                <!-- Profile Button -->
                 <button class="btn btn-primary"  type="button">
                                     <a href="  "style="color: #fff; ">
                                    Profile</a>
                                </button>
            </div>

        </nav>
    </div>
    <!-- Navbar End -->

    <!-- jQuery & Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script>
        (function($) {
            'use strict';

            // ===== Mobile Menu Toggle =====
            var $menuToggle = $('#menuToggle');
            var $navbarCollapse = $('#navbarCollapse');
            var $menuOverlay = $('#menuOverlay');
            var $menuCloseBtn = $('#menuCloseBtn');
            var $body = $('body');

            function openMenu() {
                $navbarCollapse.addClass('show');
                $menuOverlay.addClass('active');
                $body.addClass('menu-open');
                $menuToggle.attr('aria-expanded', 'true');
            }

            function closeMenu() {
                $navbarCollapse.removeClass('show');
                $menuOverlay.removeClass('active');
                $body.removeClass('menu-open');
                $menuToggle.attr('aria-expanded', 'false');
                
                // Close mega menus
                $('.mega-menu').removeClass('show');
                $('.mega-dropdown > a').removeClass('open');
            }

            // Toggle menu
            $menuToggle.on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                if ($navbarCollapse.hasClass('show')) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });

            // Close button
            $menuCloseBtn.on('click', function(e) {
                e.preventDefault();
                closeMenu();
            });

            // Overlay click
            $menuOverlay.on('click', function(e) {
                e.preventDefault();
                closeMenu();
            });

            // Close on escape key
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeMenu();
                }
            });

            // ===== Mobile Mega Menu Toggle =====
            function initMobileMenu() {
                if (window.innerWidth <= 991) {
                    $('.mega-dropdown > a').off('click').on('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        var $parent = $(this).closest('.mega-dropdown');
                        var $menu = $parent.find('.mega-menu');
                        var $link = $(this);
                        
                        // Close other open mega menus
                        $('.mega-dropdown .mega-menu').not($menu).removeClass('show');
                        $('.mega-dropdown > a').not($link).removeClass('open');
                        
                        // Toggle current
                        $menu.toggleClass('show');
                        $link.toggleClass('open');
                    });
                }
            }

            // ===== Close menu on link click =====
            function closeMenuOnLinkClick() {
                if (window.innerWidth <= 991) {
                    $('.navbar-nav .nav-link:not(.mega-dropdown > a)').on('click', function() {
                        closeMenu();
                    });
                }
            }

            // ===== Initialize =====
            $(document).ready(function() {
                initMobileMenu();
                closeMenuOnLinkClick();
            });

            // ===== Handle resize =====
            $(window).on('resize', function() {
                if (window.innerWidth > 991) {
                    closeMenu();
                    $('.mega-menu').removeClass('show');
                    $('.mega-dropdown > a').removeClass('open');
                } else {
                    initMobileMenu();
                    closeMenuOnLinkClick();
                }
            });

        })(jQuery);
    </script>

</body>

</html>