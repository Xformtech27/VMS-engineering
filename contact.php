<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VMES-Contact</title>        
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
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url('img/home-slider.jpg');">
        <div class="container py-5 text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb" class="animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="text-primary">Send Your Message</h4>
                            
                            <form id="contactForm" method="POST" action="<?php echo BASE_URL; ?>/contact-sent.php">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="project" class="form-control" placeholder="Project / Requirement">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
                                    </div>
                                    <!-- Honeypot -->
                                    <input type="text" name="honeypot" value="" style="display:none;">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3" id="submitBtn">
                                            Send Message
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <div id="formMessage" style="display:none;"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="rounded h-100">
                        <iframe class="rounded h-100 w-100"
                            style="height: 400px;"
                            src="https://maps.google.com/maps?q=Nirmal%20Market%20Plot%20No%2035%20CDC%20PCNTDA%20Purnanagar%20Near%20TATA%20MOTORS%20Chinchwad%20Pune%20411019&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

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

    <!-- Contact Form AJAX Script -->
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $submitBtn = $('#submitBtn');
            var $messageDiv = $('#formMessage');
            
            // Show loading state
            $submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
            $submitBtn.prop('disabled', true);
            $messageDiv.hide();
            
            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                dataType: 'text',
                success: function(response) {
                    if (response.trim() === 'success') {
                        $messageDiv.html('<div class="alert alert-success">Your message has been sent successfully! We will get back to you soon.</div>');
                        $messageDiv.show();
                        $form[0].reset();
                    } else {
                        $messageDiv.html('<div class="alert alert-danger">' + response + '</div>');
                        $messageDiv.show();
                    }
                },
                error: function() {
                    $messageDiv.html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    $messageDiv.show();
                },
                complete: function() {
                    $submitBtn.html('Send Message');
                    $submitBtn.prop('disabled', false);
                }
            });
        });
    });
    </script>

</body>
</html>