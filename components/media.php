<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMES-Media </title>

    <meta name="description"
        content="Explore premium Media systems and FRP Vessels. Designed for industrial water treatment, media filtration, and chemical processing applications.">
    <meta name="keywords" content="Media, FRP Vessels, Media Filtration, Fiberglass Reinforced Plastic, FRP Tanks, Industrial Vessels, Water Treatment Vessels">

    <link href="../img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">

    <style>
        /* ============================================================
           MEDIA - PAGE SPECIFIC STYLES
           ============================================================ */

        /* ===== FADE IN ANIMATIONS ===== */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.9s ease forwards;
        }

        .fade-in-1 { animation-delay: 0.1s; }
        .fade-in-2 { animation-delay: 0.2s; }
        .fade-in-3 { animation-delay: 0.3s; }
        .fade-in-4 { animation-delay: 0.4s; }
        .fade-in-5 { animation-delay: 0.5s; }
        .fade-in-6 { animation-delay: 0.6s; }
        .fade-in-7 { animation-delay: 0.7s; }
        .fade-in-8 { animation-delay: 0.8s; }
        .fade-in-9 { animation-delay: 0.9s; }
        .fade-in-10 { animation-delay: 1.0s; }
        .fade-in-11 { animation-delay: 1.1s; }
        .fade-in-12 { animation-delay: 1.2s; }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== SCALE ON HOVER ===== */
        .hover-scale {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15) !important;
        }

        /* ===== SLIDE IN FROM LEFT ===== */
        .slide-in-left {
            opacity: 0;
            transform: translateX(-30px);
            animation: slideInLeft 0.7s ease forwards;
        }

        .slide-in-left-1 { animation-delay: 0.1s; }
        .slide-in-left-2 { animation-delay: 0.2s; }
        .slide-in-left-3 { animation-delay: 0.3s; }
        .slide-in-left-4 { animation-delay: 0.4s; }
        .slide-in-left-5 { animation-delay: 0.5s; }
        .slide-in-left-6 { animation-delay: 0.6s; }
        .slide-in-left-7 { animation-delay: 0.7s; }
        .slide-in-left-8 { animation-delay: 0.8s; }

        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-30px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ===== SLIDE IN FROM RIGHT ===== */
        .slide-in-right {
            opacity: 0;
            transform: translateX(30px);
            animation: slideInRight 0.7s ease forwards;
        }

        .slide-in-right-1 { animation-delay: 0.1s; }
        .slide-in-right-2 { animation-delay: 0.2s; }
        .slide-in-right-3 { animation-delay: 0.3s; }
        .slide-in-right-4 { animation-delay: 0.4s; }
        .slide-in-right-5 { animation-delay: 0.5s; }
        .slide-in-right-6 { animation-delay: 0.6s; }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(30px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ===== ZOOM IN ===== */
        .zoom-in {
            opacity: 0;
            transform: scale(0.85);
            animation: zoomIn 0.8s ease forwards;
        }

        .zoom-in-1 { animation-delay: 0.2s; }
        .zoom-in-2 { animation-delay: 0.4s; }
        .zoom-in-3 { animation-delay: 0.6s; }
        .zoom-in-4 { animation-delay: 0.8s; }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0.85);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* ===== STAGGER LIST ITEMS ===== */
        .stagger-list li {
            opacity: 0;
            transform: translateX(-15px);
            animation: staggerIn 0.5s ease forwards;
        }

        .stagger-list li:nth-child(1) { animation-delay: 0.05s; }
        .stagger-list li:nth-child(2) { animation-delay: 0.10s; }
        .stagger-list li:nth-child(3) { animation-delay: 0.15s; }
        .stagger-list li:nth-child(4) { animation-delay: 0.20s; }
        .stagger-list li:nth-child(5) { animation-delay: 0.25s; }
        .stagger-list li:nth-child(6) { animation-delay: 0.30s; }
        .stagger-list li:nth-child(7) { animation-delay: 0.35s; }
        .stagger-list li:nth-child(8) { animation-delay: 0.40s; }
        .stagger-list li:nth-child(9) { animation-delay: 0.45s; }
        .stagger-list li:nth-child(10) { animation-delay: 0.50s; }
        .stagger-list li:nth-child(11) { animation-delay: 0.55s; }
        .stagger-list li:nth-child(12) { animation-delay: 0.60s; }

        @keyframes staggerIn {
            0% {
                opacity: 0;
                transform: translateX(-15px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ===== PULSE ICON ===== */
        .pulse-icon {
            animation: pulse 2.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.12);
            }
        }

        /* ===== FLOATING ANIMATION ===== */
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        /* ===== GLOW ON HOVER ===== */
        .glow-hover {
            transition: box-shadow 0.4s ease, transform 0.4s ease;
        }

        .glow-hover:hover {
            box-shadow: 0 0 25px rgba(0, 123, 255, 0.3) !important;
            transform: translateY(-5px);
        }

        /* ===== TABLE ROW SLIDE ===== */
        .table-row-slide {
            opacity: 0;
            transform: translateX(-20px);
            animation: tableSlide 0.6s ease forwards;
        }

        .table-row-slide-1 { animation-delay: 0.1s; }
        .table-row-slide-2 { animation-delay: 0.2s; }
        .table-row-slide-3 { animation-delay: 0.3s; }
        .table-row-slide-4 { animation-delay: 0.4s; }
        .table-row-slide-5 { animation-delay: 0.5s; }
        .table-row-slide-6 { animation-delay: 0.6s; }

        @keyframes tableSlide {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* ===== TECHNICAL SPECIFICATION TABLE HOVER EFFECTS ===== */
        .tech-table tr {
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }

        .tech-table tr:hover {
            background-color: #d4edff !important;
            transform: scale(1.01);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
        }

        .tech-table tr th {
            transition: color 0.3s ease;
            font-weight: 600;
        }

        .tech-table tr:hover th {
            color: #0056b3;
        }

        .tech-table tr td {
            transition: color 0.3s ease;
        }

        .tech-table tr:hover td {
            color: #004080;
        }

        /* ===== BREADCRUMB FADE ===== */
        .breadcrumb-fade li {
            opacity: 0;
            animation: breadFade 0.6s ease forwards;
        }

        .breadcrumb-fade li:nth-child(1) { animation-delay: 0.2s; }
        .breadcrumb-fade li:nth-child(2) { animation-delay: 0.4s; }

        @keyframes breadFade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* ===== ROTATE ON HOVER ===== */
        .rotate-hover {
            transition: transform 0.5s ease;
        }

        .rotate-hover:hover {
            transform: rotate(5deg) scale(1.03);
        }

        /* ===== SECTION DIVIDER ANIMATION ===== */
        .section-divider {
            width: 80px;
            height: 4px;
            background: #007bff;
            margin: 15px auto;
            border-radius: 2px;
            animation: expandWidth 1s ease forwards;
            transform: scaleX(0);
            transform-origin: center;
        }

        .section-divider-left {
            margin-left: 0;
        }

        @keyframes expandWidth {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }

        /* ===== CARD HOVER EFFECTS FOR FEATURES, APPLICATIONS, KEY FEATURES ===== */
        .feature-card {
            transition: transform 0.4s ease, box-shadow 0.4s ease, background-color 0.4s ease;
            cursor: default;
            border-radius: 8px;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12) !important;
            background-color: #ffffff !important;
        }

        .feature-card .list-group-item {
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            border-left: 3px solid transparent;
        }

        .feature-card:hover .list-group-item {
            background-color: #f0f8ff !important;
            border-left-color: #007bff;
            transform: translateX(5px);
        }

        .feature-card .list-group-item:hover {
            background-color: #d4edff !important;
            color: #0056b3;
            transform: translateX(8px);
        }

        /* ===== SECTION HEADER HOVER ===== */
        .section-header-hover {
            transition: color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }

        .section-header-hover:hover {
            color: #0056b3;
            transform: scale(1.02);
        }

        .section-header-hover i {
            transition: transform 0.4s ease;
        }

        .section-header-hover:hover i {
            transform: rotate(15deg) scale(1.1);
        }

        /* ===== APPLICATIONS & KEY FEATURES LIST HOVER ===== */
        .app-list .list-group-item {
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease, padding-left 0.3s ease;
            border-left: 3px solid transparent;
            cursor: default;
        }

        .app-list .list-group-item:hover {
            background-color: #d4edff !important;
            color: #0056b3;
            transform: translateX(8px);
            border-left-color: #007bff;
            padding-left: 25px;
        }

        .app-list .list-group-item::before {
            content: "▸ ";
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .app-list .list-group-item:hover::before {
            opacity: 1;
            color: #007bff;
        }
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
    <?php include '../header.php'; ?>

    <!-- ===== PAGE HEADER ===== -->
    <div class="container-fluid page-header py-5 mb-5 fade-in fade-in-1">
        <div class="container py-5 text-center">
            <h1 class="display-3 text-white mb-3 float-animation">
                Media
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 breadcrumb-fade">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Media
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- ===== PRODUCT DETAIL ===== -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 fade-in fade-in-2">
                <img src="../img/images/frp-vessels.jpg"
                class="img-fluid rounded w-100 hover-scale rotate-hover"
                alt="Media Vessels">
            </div>

            <div class="col-lg-6 fade-in fade-in-3">
                <h2 class="mb-4">Media</h2>
                <div class="section-divider section-divider-left"></div>

                <p class="slide-in-right slide-in-right-1">
                    We are counted among the prominent manufacturers, suppliers and traders of an
                    extensive array of Media systems and FRP Vessels. Manufactured using high-quality
                    materials, our vessels are designed to deliver consistent performance while
                    meeting stringent international quality standards. Our range includes advanced
                    Media systems, ideal for water treatment, media filtration, and industrial applications.
                </p>

                <ul class="stagger-list">
                    <li>High-quality Media systems for industrial applications</li>
                    <li>Engineered to meet international quality standards</li>
                    <li>Durable construction with corrosion-resistant materials</li>
                    <li>Suitable for chemical storage, water treatment, and media filtration</li>
                    <li>Custom sizes and shapes available</li>
                    <li>Low maintenance</li>
                    <li>Easy installation</li>
                    <li>Custom-built designs, including Media configurations</li>
                    <li>Premium quality FRP Vessels for industrial applications</li>
                    <li>Corrosion-resistant FRP tanks and storage solutions</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ===== TECHNICAL SPECIFICATIONS ===== -->
    <div class="container py-5" style="background-color: #e8f4f8;">
        <h3 class="mb-4 fade-in fade-in-4">Technical Specifications – Media</h3>
        <div class="section-divider section-divider-left"></div>

        <div class="table-responsive zoom-in zoom-in-2">
            <table class="table table-bordered tech-table">
                <tbody>
                    <tr class="table-row-slide table-row-slide-1">
                        <th>Capacity</th>
                        <td>100 to 50,000 Liters (Media custom capacities available)</td>
                    </tr>
                    <tr class="table-row-slide table-row-slide-2">
                        <th>Material</th>
                        <td>FRP Composite</td>
                    </tr>
                    <tr class="table-row-slide table-row-slide-3">
                        <th>Construction</th>
                        <td>Filament Winding / Hand Lay-up / Media Molding</td>
                    </tr>
                    <tr class="table-row-slide table-row-slide-4">
                        <th>Resin Types</th>
                        <td>Isophthalic / Vinyl Ester / Epoxy</td>
                    </tr>
                    <tr class="table-row-slide table-row-slide-5">
                        <th>Temperature Range</th>
                        <td>-20°C to 120°C</td>
                    </tr>
                    <tr class="table-row-slide table-row-slide-6">
                        <th>Features</th>
                        <td>Corrosion Resistant, Lightweight, Durable, Media compatible designs</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== PRODUCT HIGHLIGHTS ===== -->
    <div class="container py-5">
        <div class="text-center mb-5 fade-in fade-in-5">
            <h2 class="fw-bold">Media – Product Highlights</h2>
            <div class="section-divider"></div>
            <p class="text-muted slide-in-right slide-in-right-2">
                Our Media systems are engineered for reliable, safe, and efficient
                water treatment, media filtration, and storage across various industrial applications.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3 fade-in fade-in-6">
                <div class="border rounded text-center p-4 h-100 shadow-sm hover-scale glow-hover">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3 pulse-icon"></i>
                    <h5>Corrosion Resistant</h5>
                    <p class="mb-0">Excellent resistance to chemicals and corrosive environments, ideal for Media applications.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-in fade-in-7">
                <div class="border rounded text-center p-4 h-100 shadow-sm hover-scale glow-hover">
                    <i class="fas fa-weight-hanging fa-3x text-primary mb-3 pulse-icon" style="animation-delay: 0.3s;"></i>
                    <h5>Lightweight & Strong</h5>
                    <p class="mb-0">High strength-to-weight ratio for easy handling and installation, even in Media setups.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-in fade-in-8">
                <div class="border rounded text-center p-4 h-100 shadow-sm hover-scale glow-hover">
                    <i class="fas fa-cogs fa-3x text-primary mb-3 pulse-icon" style="animation-delay: 0.6s;"></i>
                    <h5>Low Maintenance</h5>
                    <p class="mb-0">Robust construction with corrosion-resistant materials for long service life, reducing Media downtime.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-in fade-in-9">
                <div class="border rounded text-center p-4 h-100 shadow-sm hover-scale glow-hover">
                    <i class="fas fa-industry fa-3x text-primary mb-3 pulse-icon" style="animation-delay: 0.9s;"></i>
                    <h5>Industrial Grade</h5>
                    <p class="mb-0">Suitable for chemical plants, water treatment, and various industries, including Media process lines.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== FEATURES SECTION (Premium Quality Solutions) ===== -->
    <div class="container py-5" style="background-color: #e8f4f8;">
        <div class="row">
            <div class="col-lg-12 fade-in fade-in-5">
                <h3 class="mb-4 section-header-hover">
                    <i class="fas fa-star text-primary me-2"></i>Media – Premium Quality Solutions
                </h3>
                <div class="section-divider section-divider-left"></div>
                <p class="slide-in-right slide-in-right-3">
                    We specialize in manufacturing high-quality Media systems and FRP Vessels (Fiberglass Reinforced Plastic) 
                    for various industrial applications. Our systems are designed to provide excellent 
                    corrosion resistance, durability, and long service life. The Media 
                    variants are crafted for high-precision filtration and media treatment requirements.
                </p>
                <div class="row mt-4">
                    <div class="col-md-4 slide-in-left slide-in-left-1">
                        <div class="feature-card p-0 shadow-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Corrosion-resistant construction</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>High strength-to-weight ratio</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Custom sizes and shapes, including Media designs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 slide-in-left slide-in-left-3">
                        <div class="feature-card p-0 shadow-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Chemical storage tanks</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Water treatment vessels</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Process equipment (Media-ready)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 slide-in-left slide-in-left-5">
                        <div class="feature-card p-0 shadow-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Industrial containers</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Wastewater treatment vessels</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i>Custom industrial solutions, including Media integration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== APPLICATIONS & KEY FEATURES ===== -->
    <div class="container py-5" style="background-color: #e8f4f8;">
        <div class="row">
            <!-- Applications -->
            <div class="col-lg-6 slide-in-left slide-in-left-2">
                <h3 class="mb-4 section-header-hover">
                    <i class="fas fa-cubes text-primary me-2"></i>Applications – Media
                </h3>
                <div class="section-divider section-divider-left"></div>
                <ul class="list-group app-list">
                    <li class="list-group-item"><i class="fas fa-water text-primary me-2"></i>Media Filtration Plants</li>
                    <li class="list-group-item"><i class="fas fa-factory text-primary me-2"></i>Water Treatment Facilities</li>
                    <li class="list-group-item"><i class="fas fa-pills text-primary me-2"></i>Pharmaceutical Industry</li>
                    <li class="list-group-item"><i class="fas fa-utensils text-primary me-2"></i>Food Processing Equipment</li>
                    <li class="list-group-item"><i class="fas fa-oil-can text-primary me-2"></i>Petrochemical Storage</li>
                    <li class="list-group-item"><i class="fas fa-recycle text-primary me-2"></i>Waste Management Systems</li>
                    <li class="list-group-item"><i class="fas fa-tools text-primary me-2"></i>Custom Industrial Solutions (including Media process vessels)</li>
                </ul>
            </div>

            <!-- Key Features -->
            <div class="col-lg-6 slide-in-right slide-in-right-4">
                <h3 class="mb-4 section-header-hover">
                    <i class="fas fa-key text-primary me-2"></i>Key Features – Media
                </h3>
                <div class="section-divider section-divider-left"></div>
                <ul class="list-group app-list">
                    <li class="list-group-item"><i class="fas fa-shield-alt text-primary me-2"></i>Corrosion-resistant construction</li>
                    <li class="list-group-item"><i class="fas fa-weight-hanging text-primary me-2"></i>High strength-to-weight ratio</li>
                    <li class="list-group-item"><i class="fas fa-ruler-combined text-primary me-2"></i>Custom sizes and shapes available</li>
                    <li class="list-group-item"><i class="fas fa-flask text-primary me-2"></i>Excellent chemical resistance</li>
                    <li class="list-group-item"><i class="fas fa-thermometer-half text-primary me-2"></i>Wide temperature range operation</li>
                    <li class="list-group-item"><i class="fas fa-wrench text-primary me-2"></i>Low maintenance requirements</li>
                    <li class="list-group-item"><i class="fas fa-clock text-primary me-2"></i>Long service life</li>
                    <li class="list-group-item"><i class="fas fa-sync-alt text-primary me-2"></i>Media compatible designs</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include '../footer.php'; ?>

</body>
</html>