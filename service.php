<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
<title>VMES-Service</title>        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
             <?php include 'header.php'; ?>
            <!-- Header End -->
              <!-- Carousel Start -->
       <div class="container-fluid page-header py-5 mb-5" style="background-image: url('img/home-slider.jpg');">    <div class="container py-5 text-center">
        <h1 class="display-3 text-white mb-3 animated slideInDown">
            About Us
        </h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    About Us
                </li>
            </ol>
        </nav>
    </div>
</div>
        <!-- Carousel End -->

       <!-- Services Start -->
<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-5 mb-4">Complete Water Treatment Solutions</h1>
            <p class="mb-0">VME Solutions provides end-to-end water treatment services including design, engineering, manufacturing, installation, and maintenance of RO plants, pre-treatment systems, and wastewater management solutions for industrial and commercial applications.</p>
        </div>
        <div class="row g-4">
            
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service/ro-plant-design.jpg" class="img-fluid rounded-top w-100" alt="RO Plant Design">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">RO Plant Design & Engineering</a>
                        <p class="mb-4">We design and engineer custom Reverse Osmosis water treatment plants with high-rejection TFC membranes, automated controls, and corrosion-resistant construction for maximum efficiency and reliability.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service/pre-treatment-and-filtration.jpg" class="img-fluid rounded-top w-100" alt="Pre-Treatment Systems">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Pre-Treatment & Filtration</a>
                        <p class="mb-4">We provide complete pre-treatment solutions including media filtration vessels, multiport valves, antiscalant dosing systems, and carbon filters to protect RO membranes and ensure long system life.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service/amc-and-maintenance-services.jpg" class="img-fluid rounded-top w-100" alt="AMC Services">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">AMC & Maintenance Services</a>
                        <p class="mb-4">We offer comprehensive annual maintenance contracts (AMC) including membrane cleaning, chemical dosing, system audits, spare parts supply, and 24/7 technical support to keep your plant running smoothly.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 4 (New) -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Wastewater Treatment">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Wastewater Treatment Solutions</a>
                        <p class="mb-4">We design and install wastewater treatment systems including effluent treatment plants (ETP), sewage treatment plants (STP), and zero liquid discharge (ZLD) systems for environmentally responsible water management.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 5 (New) -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-5.jpg" class="img-fluid rounded-top w-100" alt="Automation & Controls">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Automation & Control Systems</a>
                        <p class="mb-4">We provide PLC-based automation, HMI touchscreen interfaces, SCADA integration, and remote monitoring solutions for complete control and real-time data visualization of your water treatment plant.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service 6 (New) -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/service-6.jpg" class="img-fluid rounded-top w-100" alt="Consulting & Audits">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Consulting & System Audits</a>
                        <p class="mb-4">We offer water quality analysis, system design consulting, energy efficiency audits, and performance optimization services to ensure your water treatment plant operates at peak efficiency.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Services End -->

     

        <!-- Footer Start -->
         <?php include 'footer.php'; ?>

        <!-- <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.php" class="p-0">
                                <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Stocker</h4> -->
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            <!-- </a>
                            <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                            <div class="d-flex">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">123 Street New York.USA</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+012) 3456 7890</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fab fa-firefox-browser text-primary me-3"></i>
                                <p class="text-white mb-0">Yoursite@ex.com</p>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <!-- <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body"> -->
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <!-- Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Copyright End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>    -->

        
        <!-- JavaScript Libraries -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
        

        <!-- Template Javascript -->
        <!-- <script src="js/main.js"></script> -->
    </body>

</html>