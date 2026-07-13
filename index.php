<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
<title>VMES-Home</title>        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        .feature{
    background: #f8fbff;
}

.feature-item{
    background: #fff;
    padding:30px;
    border-radius:12px;
    height:100%;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.feature-item:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 30px rgba(0,0,0,.12);
}

.feature-title{
    display:flex;
    align-items:center;
    gap:12px;
    font-size:22px;
    font-weight:700;
    margin-bottom:18px;
    color: #222;
}

.feature-title i{
    width:55px;
    height:55px;
    border-radius:50%;
    background:  #459e41;
    color:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:22px;
    flex-shrink:0;
}

.feature-text{
    color: #666;
    line-height:1.8;
    margin-bottom:0;
}

.feature-item:hover .feature-title i{
    background: #198754;
    transform:rotate(8deg);
    transition:.3s;
}
        
    </style>

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
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="<?php echo BASE_URL; ?>/img/home-slider.jpg" class="img-fluid w-100" alt="Image">
                <div class="row gy-0 gx-5">
                    <div class="col-lg-0 col-xl-5"></div>
                    <div class="col-xl-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To VME Solutions</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">Invest your money with higher return</h1>
                            <!-- <p class="mb-5 fs-5">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy...
                            </p> -->
                            <!-- <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#">
                                    <i class="fas fa-play-circle me-2"></i> Watch Video
                                </a>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                            </div> -->
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="<?php echo BASE_URL; ?>/img/home.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h1 class="text-primary text-uppercase fw-bold mb-4 " >Welcome To VME Solutions</h1>
                                    <!-- <h1 class="display-4 text-uppercase text-white mb-4">Invest your money with higher return</h1> -->
                                   <p class="mb-5 fs-5 text-white">
    At VME Solutions, we are dedicated to providing high-quality mechanical and electrical components and tailored solutions for a variety of industries.
</p>
                                    <!-- <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#">
                                            <i class="fas fa-play-circle me-2"></i> Watch Video
                                        </a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div> -->
                                    <!-- <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="text-white me-2">Follow Us:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Abvout Start -->
    <!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <!-- <h4 class="text-primary">About Us</h4> -->
                    <h1 class="display-5 mb-4">Committed to Clean Water Solutions</h1>
                    <p class="mb-4">VME Solutions is a trusted name in water treatment and purification systems. With years of experience, we provide innovative RO plants, water filtration systems, and wastewater management solutions for industries, commercial establishments, and communities across India.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-water fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Water Treatment</h4>
                                    <p>Advanced RO systems and water purification solutions for all your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-recycle fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Wastewater Management</h4>
                                    <p>Sustainable wastewater treatment and recycling solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
    <a href="<?php echo BASE_URL; ?>/components.php" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Explore Water Solutions</a>
</div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">+91 9146557049</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="<?php echo BASE_URL; ?>/img/about.jpg" class="img-fluid rounded w-100" alt="About VME Solutions">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

        <!-- Services Start -->
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
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="service.html">Read More</a> -->
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
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="service.html">Read More</a> -->
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
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="service.html">Read More</a> -->
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- View All Services Button -->
        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.8s">
            <a class="btn btn-primary rounded-pill py-3 px-5" href="service.php">
                View All Services <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
        
    </div>
</div>
<!-- Services End -->
        <!-- Services End -->

        <!-- Features Start -->

        <!-- Features Start -->
<div class="container-fluid feature py-5">
    <div class="container">

        <!-- Section Heading -->
       
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width:800px;">
    <h5 class="text-primary fw-bold">Our Features</h5>
    <h1 class="display-5 mb-4">
        Complete Water Treatment Plant Engineered for Performance & Reliability
    </h1>
    <p>
        VME Solutions delivers a fully integrated, skid-mounted water treatment system featuring
        pre-filtration, Reverse Osmosis, and wastewater handling. Our solutions are designed for
        fully automated operation, maximum membrane life, and corrosion-resistant construction,
        ensuring long-term durability and efficient performance in demanding industrial applications.
    </p>
</div>

        <div class="row g-4">

            <!-- Feature 1 -->
            <div class="col-lg-6 col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item">
                    <h4 class="feature-title">
                        <i class="fas fa-cubes"></i>
                        Complete Integration
                    </h4>

                    <p class="feature-text">
                        Fully skid-mounted system including filtration, RO membranes, pumps,
                        piping, dosing systems, CIP unit, and storage tanks for quick
                        installation and easy maintenance.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-6 col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item">
                    <h4 class="feature-title">
                        <i class="fas fa-robot"></i>
                        Smart Automation
                    </h4>

                    <p class="feature-text">
                        PLC & HMI controlled operation with automatic filtration, backwash,
                        RO production, chemical dosing, alarms, and safety shutdown for
                        reliable performance.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-6 col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item">
                    <h4 class="feature-title">
                        <i class="fas fa-water"></i>
                        High Efficiency
                    </h4>

                    <p class="feature-text">
                        Advanced pre-treatment and premium RO membranes deliver high water
                        recovery, excellent salt rejection, reduced scaling, and longer
                        membrane life.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-lg-6 col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item">
                    <h4 class="feature-title">
                        <i class="fas fa-shield-alt"></i>
                        Durable Construction
                    </h4>

                    <p class="feature-text">
                        Manufactured using FRP, SS316, and Schedule 80 PVC materials for
                        corrosion resistance, leak-proof operation, and continuous industrial
                        performance.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Features End -->
         
   
        <!-- Features End -->


        <!-- benifit Start -->
       <div class="container-fluid offer-section pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Why Choose Us</h4>
            <h1 class="display-5 mb-4">Why Choose VME Solutions Water Treatment Plant</h1>
            <p class="mb-0">VME Solutions delivers a fully integrated, skid-mounted water treatment system featuring pre-filtration, Reverse Osmosis, and wastewater handling. Our solutions are designed for fully automated smart operation, maximum membrane life, and robust corrosion-resistant construction to ensure long-term durability and efficiency in the most demanding industrial environments.</p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="nav nav-pills bg-light rounded p-5">
                    <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                        <h5 class="mb-0">Cost Savings & Operational Efficiency</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                        <h5 class="mb-0">Superior Water Quality & Purity</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                        <h5 class="mb-0">24/7 Reliability & Long Equipment Life</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
                        <h5 class="mb-0">Eco-Friendly & Sustainable Operation</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
                        <h5 class="mb-0">Zero Contamination Risk</h5>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="tab-content">
                    <!-- Tab 1 -->
                    <div id="collapseOne" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-one.jpg" class="img-fluid w-100 rounded" alt="Cost Savings">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Reduce Operating Costs & Maximize ROI</h1>
                                <p class="mb-4">Multi-stage pre-treatment and anti-scalant dosing protect RO membranes from fouling, extending membrane life by 30-50%. High-efficiency pumps with VFD drives optimize power usage, cutting electricity costs significantly while precise chemical dosing minimizes operational expenses.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab 2 -->
                    <div id="collapseTwo" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-two.jpg" class="img-fluid w-100 rounded" alt="Water Quality">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">High-Purity Water with Consistent Quality</h1>
                                <p class="mb-4">High-rejection TFC membranes (up to 99% salt rejection) deliver consistent, high-purity permeate suitable for industrial, commercial, or potable applications. Automated PLC control ensures stable water quality regardless of feed water fluctuations, with zero contamination risk.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab 3 -->
                    <div id="collapseThree" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-three.jpg" class="img-fluid w-100 rounded" alt="Reliability">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Uninterrupted 24/7 Operation & Durability</h1>
                                <p class="mb-4">Heavy-duty pumps and corrosion-resistant construction (FRP, 316 SS, Schedule 80 PVC) are designed for decades of reliable operation in harsh industrial environments. Automated backwash and CIP cleaning cycles reduce manual intervention and minimize downtime.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab 4 -->
                    <div id="collapseFour" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-four.jpg" class="img-fluid w-100 rounded" alt="Sustainability">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Environmentally Responsible Water Management</h1>
                                <p class="mb-4">High recovery rates (up to 75-85%) minimize wastewater discharge, conserving precious water resources. Energy-efficient pumps and automation reduce carbon footprint, while optimized chemical dosing minimizes environmental impact.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab 5 - Fixed ID -->
                    <div id="collapseFive" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="img/offer-five.jpg" class="img-fluid w-100 rounded" alt="Risk">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">Zero Contamination Risk</h1>
                                <p class="mb-4">Zero contamination risk ensures that the treated water remains completely pure and free from any external or internal impurities throughout the treatment process. With VME Solutions, zero contamination risk is guaranteed through the use of food-grade, corrosion-resistant materials, leak-proof sealing, closed-loop design, and rigorous CIP sanitization—ensuring your water is always pure, safe, and compliant with international standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      


        <!-- FAQs Start -->
    <div class="container-fluid faq-section pb-5">
    <div class="container pb-5 overflow-hidden">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">FAQs</h4>
            <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
            <p class="mb-0">Find answers to the most common questions about VME Solutions water treatment plants, RO systems, and our comprehensive services.</p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                    
                    <!-- FAQ 1 -->
                    <div class="accordion-item rounded-top">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is a Reverse Osmosis (RO) Water Treatment Plant?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">A Reverse Osmosis (RO) Water Treatment Plant is a system that uses high-pressure pumps and semi-permeable membranes to remove dissolved salts, impurities, and contaminants from water. It produces high-purity permeate suitable for industrial, commercial, and potable applications with up to 99% salt rejection.</div>
                        </div>
                    </div>
                    
                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What components are included in a VME Solutions water treatment plant?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">VME Solutions provides a complete integrated system including media filtration vessels, multiport valves (MPV), high-rejection RO membranes, FRP membrane housings, high-pressure pumps, PLC-based automation, CIP cleaning systems, chemical dosing units, piping, instrumentation, and finished water storage tanks—all pre-engineered and skid-mounted.</div>
                        </div>
                    </div>
                    
                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How long do RO membranes last in your system?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">With proper pre-treatment (media filtration + antiscalant dosing) and regular CIP cleaning, RO membranes in VME Solutions systems typically last 3 to 5 years. Our multi-stage pre-treatment protects membranes from scaling and fouling, extending membrane life by 30-50% compared to standard systems.</div>
                        </div>
                    </div>
                    
                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                What is the water recovery rate of your system?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">VME Solutions water treatment plants achieve a high recovery rate of 75-85%, depending on feed water quality and system configuration. This means minimal wastewater discharge, conserving precious water resources and reducing operational costs.</div>
                        </div>
                    </div>
                    
                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Is the system fully automated and easy to operate?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Yes, our systems feature PLC-based control with a user-friendly HMI touchscreen that automates all cycles—filtration, backwash, RO production, CIP cleaning, and chemical dosing. Real-time monitoring with auto-alarms and safety shutdown makes operation simple even for non-technical staff.</div>
                        </div>
                    </div>
                    
                    <!-- FAQ 6 -->
                    <div class="accordion-item rounded-bottom">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                What makes VME Solutions different from other water treatment companies?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">VME Solutions stands out with end-to-end integrated skid-mounted systems, corrosion-resistant construction (FRP, 316 SS, Schedule 80 PVC), fully automated smart operation, maximum membrane life through advanced pre-treatment, and zero contamination risk. We deliver complete turnkey solutions with faster installation and lower operating costs.</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded">
                    <img src="img/faq.jpg" class="img-fluid w-100" alt="Water Treatment Plant">
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- FAQs End -->


       

        <!-- Testimonial Start -->
      <div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonials</h4>
            <h1 class="display-5 mb-4">What Our Clients Say About VME Solutions</h1>
            <p class="mb-0">VME Solutions has successfully delivered water treatment plants across various industries. Here's what our satisfied clients have to say about our reliable, efficient, and cost-effective water treatment solutions.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            
            <!-- Testimonial 1 -->
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" class="img-fluid" alt="Client">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0" style="text-align: justify;">VME Solutions delivered a fully automated RO plant for our facility with excellent water quality and reliability.</p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Plant Manager</h4>
                        <p class="mb-0">Pharmaceutical Industry</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" class="img-fluid" alt="Client">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0" style="text-align: justify;">The skid-mounted design and PLC automation saved us time and reduced our manpower requirements significantly.</p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Operations Director</h4>
                        <p class="mb-0">Beverage Industry</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/testimonial-3.jpg" class="img-fluid" alt="Client">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0" style="text-align: justify;">Corrosion-resistant materials and heavy-duty pumps have made this system reliable with zero downtime since installation.</p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Maintenance Head</h4>
                        <p class="mb-0">Steel Manufacturing Industry</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" class="img-fluid" alt="Client">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0" style="text-align: justify;">The turnkey solution from VME Solutions provided excellent water recovery and reduced our wastewater discharge significantly.</p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Environmental Manager</h4>
                        <p class="mb-0">Chemical Industry</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            
            <!-- Testimonial 5 -->
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" class="img-fluid" alt="Client">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0" style="text-align: justify;">The CIP system and anti-scalant dosing have kept our membranes in excellent condition with low maintenance requirements.</p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Technical Director</h4>
                        <p class="mb-0">Water Treatment Industry</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            
        </div>
    </div>
</div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <?php include 'footer.php'; ?>

       
    </body>

</html>