<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="VMES Solutions">

    <title>VMES - Request a Quote</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="page-wrapper">
        <?php $page = 'request-quote'; ?>
        <?php include 'header.php'; ?>

        <!-- Page Header -->
        <div class="container-fluid bg-dark text-white py-5 mb-5">
            <div class="container py-5 text-center">
                <h1 class="display-3 text-white mb-3">Request a Quote</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 bg-transparent">
                        <li class="breadcrumb-item">
                            <a href="<?php echo BASE_URL; ?>" class="text-white">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Request Quote
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <!-- Quote Form Section -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-dark text-white text-center py-4">
                                <div class="display-4 mb-2">
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                                <h2 class="mb-0">Get a <span class="text-primary">Free Quote</span></h2>
                                <p class="text-white-50 mb-0">We'll respond within 24 hours</p>
                            </div>
                            
                            <div class="card-body p-4">
                                <div id="form-response-msg" class="alert" style="display:none;"></div>

                                <form id="contactForm" method="POST" action="send-quote.php">
                                    <!-- Honeypot for spam protection -->
                                    <input type="text" name="honeypot" id="honeypot" style="display: none !important;" tabindex="-1" autocomplete="off">

                                    <div class="mb-4">
                                        <h5 class="border-bottom pb-2">
                                            <i class="fa fa-user text-primary me-2"></i> Contact Details
                                        </h5>
                                        <p class="text-muted small">Fill in your information</p>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label fw-bold">
                                                        Full Name <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label fw-bold">
                                                        Email Address <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label fw-bold">
                                                        Phone Number <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="tel" class="form-control" name="phone" id="phone" pattern="^[0-9]{10}$" maxlength="10" placeholder="Enter 10-digit phone number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="project" class="form-label fw-bold">
                                                        Company Name
                                                    </label>
                                                    <input type="text" class="form-control" name="project" id="project" placeholder="Enter your company name (optional)">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="message" class="form-label fw-bold">
                                                        Project Requirements <span class="text-danger">*</span>
                                                    </label>
                                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Describe your requirements, capacity, timeline..." required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">
                                            Submit Request <i class="fa fa-paper-plane ms-2"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AJAX Form Submission -->
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $submitBtn = $('#submitBtn');
            var $messageDiv = $('#form-response-msg');
            
            // Show loading state
            $submitBtn.html('<span class="spinner-border spinner-border-sm me-2"></span> Sending...');
            $submitBtn.prop('disabled', true);
            $messageDiv.hide().removeClass('alert-success alert-danger');
            
            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                dataType: 'text',
                success: function(response) {
                    if (response.trim() === 'success') {
                        $messageDiv
                            .addClass('alert-success')
                            .html('✅ Your quote request has been sent successfully! We will get back to you soon.')
                            .show();
                        $form[0].reset();
                    } else {
                        $messageDiv
                            .addClass('alert-danger')
                            .html('❌ ' + response)
                            .show();
                    }
                },
                error: function() {
                    $messageDiv
                        .addClass('alert-danger')
                        .html('❌ An error occurred. Please try again later.')
                        .show();
                },
                complete: function() {
                    $submitBtn.html('Submit Request <i class="fa fa-paper-plane ms-2"></i>');
                    $submitBtn.prop('disabled', false);
                }
            });
        });
    });
    </script>
</body>
</html>