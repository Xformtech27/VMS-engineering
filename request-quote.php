<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Clinkers Inc.">

    <title>VMES - Request a Quote</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- <style>
        :root {
            --primary: #04a6d9;
 
            --primary-dark: #04a6d9;
            --primary-light: #e8f0fe;
            --dark: #0f172a;
            --dark-light: #1e293b;
            --gray: #64748b;
            --light-gray: #f1f5f9;
            --border: #e2e8f0;
            --white: #ffffff;
            --success: #10b981;
            --danger: #ef4444;
        }
        
        /* Modern Background */
        .section-padding {
            padding: 40px 0 !important;
            background: linear-gradient(135deg, #f0f4ff 0%, #e8edf5 100%) !important;
            min-height: 100vh;
        }
        
        .quote-wrapper {
            max-width: 860px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .quote-card {
            background: var(--white);
            border-radius: 16px;
            box-shadow: 0 20px 60px -15px rgba(0,0,0,0.15);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(44, 123, 229, 0.08);
        }
        
        .quote-card:hover {
            box-shadow: 0 30px 80px -20px rgba(44, 123, 229, 0.2);
            transform: translateY(-2px);
        }
        
        /* Modern Header */
        .quote-header {
            background: linear-gradient(135deg, var(--dark) 0%, var(--dark-light) 100%);
            padding: 30px 35px 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .quote-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(44, 123, 229, 0.12), transparent);
            border-radius: 50%;
            animation: floatGlow 6s ease-in-out infinite;
        }
        
        .quote-header::after {
            content: '';
            position: absolute;
            bottom: -40%;
            left: -10%;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(44, 123, 229, 0.08), transparent);
            border-radius: 50%;
            animation: floatGlow 8s ease-in-out infinite reverse;
        }
        
        @keyframes floatGlow {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(20px, -20px) scale(1.1); }
        }
        
        .quote-icon {
            width: 70px;
            height: 70px;
            background: rgba(255,255,255,0.08);
            border: 2px solid rgba(255,255,255,0.12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            position: relative;
            z-index: 1;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .quote-icon:hover {
            transform: scale(1.05) rotate(-5deg);
            background: rgba(255,255,255,0.15);
        }
        
        .quote-icon i {
            font-size: 30px;
            color: var(--white);
        }
        
        .quote-header h2 {
            font-size: 28px;
            font-weight: 800;
            color: var(--white);
            margin: 0 0 6px;
            position: relative;
            z-index: 1;
            letter-spacing: -0.5px;
        }
        
        .quote-header h2 span {
            background: linear-gradient(135deg, #60a5fa, #04a6d9 );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .quote-header p {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            margin: 0;
            position: relative;
            z-index: 1;
        }
        
        /* Modern Body */
        .quote-body {
            padding: 30px 35px 35px;
        }
        
        .form-section {
            margin-bottom: 20px;
            padding-bottom: 18px;
            border-bottom: 2px solid var(--light-gray);
        }
        
        .form-section:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        /* Section Title */
        .section-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }
        
        .section-icon {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(44, 123, 229, 0.25);
            flex-shrink: 0;
        }
        
        .section-icon i {
            font-size: 18px;
            color: var(--white);
        }
        
        .section-title h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark);
            margin: 0;
        }
        
        .section-title p {
            font-size: 12px;
            color: var(--gray);
            margin: 0;
        }
        
        /* Form Groups */
        .form-group {
            margin-bottom: 16px;
        }
        
        .form-group label {
            font-weight: 600;
            font-size: 13px;
            color: var(--dark);
            margin-bottom: 5px;
            display: block;
        }
        
        .form-group .required {
            color: var(--danger);
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid var(--border);
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: var(--white);
            height: 44px;
            color: var(--dark);
        }
        
        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 4px rgba(44, 123, 229, 0.1);
        }
        
        .form-control::placeholder {
            color: #94a3b8;
            font-size: 13px;
        }
        
        .form-control.error {
            border-color: var(--danger) !important;
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 80px;
            height: auto;
            padding: 10px 15px;
        }
        
        /* Captcha */
        .captcha-container {
            margin: 10px 0 12px;
            display: flex;
            justify-content: center;
            padding: 10px;
            background: var(--light-gray);
            border-radius: 10px;
            border: 2px dashed var(--border);
        }
        
        #captcha-error {
            font-size: 12px !important;
            font-weight: 500 !important;
            color: var(--danger) !important;
            text-align: center !important;
            display: block;
            margin-top: 4px;
        }
        
        /* Submit Button */
        .submit-btn {
            text-align: center;
            margin-top: 20px;
        }

        .theme-btn-s2 {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            border: none;
            padding: 14px 50px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px -8px rgba(44, 123, 229, 0.4);
            display: inline-block;
            letter-spacing: 0.3px;
            position: relative;
            overflow: hidden;
        }
        
        .theme-btn-s2::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
            transition: all 0.5s ease;
        }
        
        .theme-btn-s2:hover:not(:disabled)::before {
            left: 100%;
        }

        .theme-btn-s2:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px -10px rgba(44, 123, 229, 0.5);
        }

        .theme-btn-s2:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .theme-btn-s2 i {
            margin-left: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        
        .theme-btn-s2:hover:not(:disabled) i {
            transform: translateX(4px);
        }

        /* Response Message */
        #form-response-msg {
            margin-bottom: 16px;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            display: none;
        }
        
        #form-response-msg.show {
            display: block;
            animation: slideDown 0.4s ease;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .spinner {
            display: inline-block;
            width: 18px;
            height: 18px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 0.6s ease infinite;
            margin-right: 8px;
            vertical-align: middle;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Row */
        .row {
            margin-left: -8px;
            margin-right: -8px;
        }
        
        .row > [class*="col-"] {
            padding-left: 8px;
            padding-right: 8px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .section-padding { padding: 25px 0 !important; }
            .quote-header { padding: 25px 20px 20px; }
            .quote-body { padding: 20px; }
            .quote-header h2 { font-size: 24px; }
            .theme-btn-s2 { padding: 12px 35px; font-size: 14px; width: 100%; }
            .form-control { height: 40px; padding: 8px 12px; font-size: 13px; }
            textarea.form-control { min-height: 70px; }
            .quote-icon { width: 60px; height: 60px; }
            .quote-icon i { font-size: 26px; }
        }
        
        @media (max-width: 576px) {
            .section-padding { padding: 15px 0 !important; }
            .quote-header { padding: 20px 15px 15px; }
            .quote-body { padding: 15px; }
            .quote-header h2 { font-size: 20px; }
            .theme-btn-s2 { padding: 10px 25px; font-size: 13px; width: 100%; }
            .form-control { height: 36px; padding: 6px 10px; font-size: 12px; }
            textarea.form-control { min-height: 60px; padding: 6px 10px; }
            .form-group { margin-bottom: 12px; }
            .form-group label { font-size: 12px; }
            .section-title h3 { font-size: 16px; }
            .section-title p { font-size: 11px; }
            .section-icon { width: 36px; height: 36px; }
            .section-icon i { font-size: 15px; }
            .quote-icon { width: 50px; height: 50px; }
            .quote-icon i { font-size: 22px; }
            .captcha-container { padding: 6px; }
            .captcha-container .g-recaptcha { transform: scale(0.85); transform-origin: center; }
            .row { margin-left: -5px; margin-right: -5px; }
            .row > [class*="col-"] { padding-left: 5px; padding-right: 5px; }
        }
        
        .quote-card {
            animation: fadeInUp 0.5s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style> -->
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>

        <?php $page = 'request-quote'; ?>
        <?php include 'header.php'; ?>

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
                    Request Quote
                </li>
            </ol>
        </nav>
    </div>
</div>
        <section class="section-padding">
            <div class="container">
                <div class="quote-wrapper">
                    <div class="quote-card">
                        <div class="quote-header">
                            <div class="quote-icon">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                            <h2>Get a <span>Free Quote</span></h2>
                            <p>We'll respond within 24 hours</p>
                        </div>
                        
                        <div class="quote-body">
                            <div id="form-response-msg"></div>

                            <form id="contactForm" method="POST" action="send-quote.php">
                                <input type="text" name="honeypot" id="honeypot" style="display: none !important;" tabindex="-1" autocomplete="off">

                                <div class="form-section">
                                    <div class="section-title">
                                        <div class="section-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div>
                                            <h3>Contact Details</h3>
                                            <p>Fill in your information</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="name">Full Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="email">Email Address <span class="required">*</span></label>
                                                <input type="email" class="form-control" name="email" id="email"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="phone">Phone Number <span class="required">*</span></label>
                                                <input type="tel" class="form-control" name="phone" id="phone" pattern="^[0-9]{10}$" maxlength="10"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="project">Project / Company</label>
                                                <input type="text" class="form-control" name="project" id="project" placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="message">Project Requirements <span class="required">*</span></label>
                                                <textarea name="message" id="message" class="form-control" rows="3" placeholder="Describe your requirements, capacity, timeline..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-section">
                                    <div class="captcha-container">
                                        <div class="g-recaptcha" data-sitekey="6LeHWBktAAAAANoD0RVGxGrodIlhuMsh5WSjCdgt"></div>
                                    </div>
                                    <span id="captcha-error">Please verify that you are not a robot.</span>
                                </div>
                                
                                <div class="submit-btn">
                                    <button type="submit" class="theme-btn-s2" id="submitBtn">
                                        Submit Request <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/script.js"></script>
    
 
</body>
</html>