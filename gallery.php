<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VMES-Service - Gallery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

    <style>
        /* ===== GALLERY STYLES - NO HOVER EFFECTS ===== */
        
        /* Gallery Container */
        .gallery-container {
            padding: 30px 0;
        }

        /* Gallery Item - Static, No Hover */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            background: #f8f9fa;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        /* Gallery Image - Static */
        .gallery-item img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
        }

        /* Lightbox Icon - Always Visible */
        .gallery-item .zoom-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            background: rgba(13, 110, 253, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            transition: none;
            z-index: 2;
        }

        .gallery-item .zoom-icon:hover {
            background: #0d6efd;
            color: #fff;
        }

        /* Image Counter Badge - Static */
        .gallery-item .image-count {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        /* Load More Button */
        .load-more-btn {
            padding: 15px 50px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: none;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .gallery-item img {
                height: 280px;
            }
        }

        @media (max-width: 992px) {
            .gallery-item img {
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .gallery-item img {
                height: 260px;
            }
            
            .gallery-container {
                padding: 20px 0;
            }
        }

        @media (max-width: 576px) {
            .gallery-item img {
                height: 220px;
            }
            
            .load-more-btn {
                padding: 12px 35px;
                font-size: 14px;
            }

            .gallery-item .zoom-icon {
                width: 35px;
                height: 35px;
                font-size: 14px;
                top: 10px;
                right: 10px;
            }
        }

        /* Animation Delay Classes */
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        .delay-6 { animation-delay: 0.6s; }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- ===== HEADER START ===== -->
    <?php include 'header.php'; ?>
    <!-- ===== HEADER END ===== -->

    <!-- ===== PAGE HEADER START ===== -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url('img/home-slider.jpg');">
        <div class="container py-5 text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
            <nav aria-label="breadcrumb" class="animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ===== PAGE HEADER END ===== -->

    <!-- ===== GALLERY SECTION START ===== -->
    <div class="container-fluid gallery-container">
        <div class="container">
            
            <!-- Gallery Grid -->
            <div class="row g-4">
                
                <!-- Image 1 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-1">
                    <div class="gallery-item">
                        <img src="img/service/amc-and-maintenance-services.jpg" alt="AMC Services">
                        <a href="img/service/amc-and-maintenance-services.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">01</span>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-2">
                    <div class="gallery-item">
                        <img src="img/service/pre-treatment-and-filtration.jpg" alt="Pre-Treatment">
                        <a href="img/service/pre-treatment-and-filtration.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">02</span>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-3">
                    <div class="gallery-item">
                        <img src="img/service/ro-plant-design.jpg" alt="RO Plant">
                        <a href="img/service/ro-plant-design.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">03</span>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-4">
                    <div class="gallery-item">
                        <img src="img/gallery/wastewater-1.jpg" alt="Wastewater">
                        <a href="img/gallery/wastewater-1.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">04</span>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-5">
                    <div class="gallery-item">
                        <img src="img/gallery/ro-plant-2.jpg" alt="RO Plant">
                        <a href="img/gallery/ro-plant-2.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">05</span>
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-6">
                    <div class="gallery-item">
                        <img src="img/gallery/filtration-2.jpg" alt="Filtration">
                        <a href="img/gallery/filtration-2.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">06</span>
                    </div>
                </div>

                <!-- Image 7 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-1">
                    <div class="gallery-item">
                        <img src="img/gallery/installation-2.jpg" alt="Installation">
                        <a href="img/gallery/installation-2.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">07</span>
                    </div>
                </div>

                <!-- Image 8 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-2">
                    <div class="gallery-item">
                        <img src="img/gallery/wastewater-2.jpg" alt="Wastewater">
                        <a href="img/gallery/wastewater-2.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">08</span>
                    </div>
                </div>

                <!-- Image 9 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-3">
                    <div class="gallery-item">
                        <img src="img/gallery/ro-plant-3.jpg" alt="RO Plant">
                        <a href="img/gallery/ro-plant-3.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">09</span>
                    </div>
                </div>

                <!-- Image 10 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-4">
                    <div class="gallery-item">
                        <img src="img/gallery/installation-3.jpg" alt="Installation">
                        <a href="img/gallery/installation-3.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">10</span>
                    </div>
                </div>

                <!-- Image 11 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-5">
                    <div class="gallery-item">
                        <img src="img/gallery/filtration-3.jpg" alt="Filtration">
                        <a href="img/gallery/filtration-3.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">11</span>
                    </div>
                </div>

                <!-- Image 12 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-6">
                    <div class="gallery-item">
                        <img src="img/gallery/wastewater-3.jpg" alt="Wastewater">
                        <a href="img/gallery/wastewater-3.jpg" data-lightbox="gallery" class="zoom-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                        <span class="image-count">12</span>
                    </div>
                </div>

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.3s">
                <a href="#" class="btn btn-primary load-more-btn">
                    <i class="fas fa-sync me-2"></i> Load More
                </a>
            </div>

        </div>
    </div>
    <!-- ===== GALLERY SECTION END ===== -->

    <!-- ===== FOOTER START ===== -->
    <?php include 'footer.php'; ?>
    <!-- ===== FOOTER END ===== -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Gallery Script -->
    <script>
        $(document).ready(function() {
            // Initialize WOW.js
            new WOW().init();

            // Load more functionality
            $('.load-more-btn').on('click', function(e) {
                e.preventDefault();
                
                var $btn = $(this);
                var originalText = $btn.html();
                $btn.html('<i class="fas fa-spinner fa-spin me-2"></i> Loading...');
                $btn.prop('disabled', true);

                setTimeout(function() {
                    $btn.html(originalText);
                    $btn.prop('disabled', false);
                    alert('More images will load here. Add your AJAX logic.');
                }, 1500);
            });
        });
    </script>

</body>

</html>