<?php
/**
 * SECTION 1: BACKEND PHP PROCESSING
 * -------------------------------------------------------------------------
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    $subject = "New Contact Form Enquiry";
 
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit();
    }
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address. Please try again.";
        exit();
    }
 
    if (preg_match('/http|www|href/i', $message)) {
        echo "Links are not allowed in the message to prevent spam.";
        exit();
    }
 
    
    require_once 'class-phpmailer.php';
    require_once 'class-smtp.php';
 
    $mail = new PHPMailer();
 
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 587;
 
    $mail->Username   = 'xformtech27@gmail.com';
    $mail->Password   = 'mout vlbd boul bsdg'; // Your 16-digit Google App Password
 
    $mail->setFrom('xformtech27@gmail.com', $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress('kalyanibhor2004@gmail.com');
       
    $mail->isHTML(true);
    $mail->Subject = "Contact Form: " . $subject;
 
    $mail->Body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 10px; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #ffffff; border: 1px solid #dddddd; border-radius: 5px; }
            .header { background-color: #f4f4f4; padding: 15px; text-align: center; border-bottom: 2px solid #e2e2e2; }
            .content { padding: 20px; }
            .field { margin-bottom: 15px; border-bottom: 1px solid #f2f2f2; padding-bottom: 10px; }
            .label { font-weight: bold; color: #333333; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px; }
            .value { margin-top: 5px; color: #555555; font-size: 14px; line-height: 1.5; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'><h2 style='margin:0; color:#333;'>New Website Enquiry</h2></div>
            <div class='content'>
                <div class='field'><div class='label'>Name:</div><div class='value'>" . htmlspecialchars($name) . "</div></div>
                <div class='field'><div class='label'>Email:</div><div class='value'>" . htmlspecialchars($email) . "</div></div>
                <div class='field'><div class='label'>Phone:</div><div class='value'>" . htmlspecialchars($phone) . "</div></div>
                <div class='field' style='border-bottom: none;'><div class='label'>Message:</div><div class='value'>" . nl2br(htmlspecialchars($message)) . "</div></div>
            </div>
        </div>
    </body>
    </html>";
 
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $mail->SMTPDebug = 0;
 
    if ($mail->send()) {
        echo "success";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Action Hub Component</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
   
    <style>
    html, body {
        background: transparent !important;
        margin: 0;
        padding: 0;
        overflow: hidden !important;
    }
 
    /* Outer Wrapper Container - Set to side flex layout */
    .floating-hub-container {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: flex-end;
        background: transparent !important;
        padding: 5px;
        position: fixed;
        bottom: 5px;
        right: 5px;
        z-index: 1050;
        gap: 15px;
    }
 
    /* The Vertical Capsule Body */
    .vertical-capsule {
        background-color: #ffffff;
        padding: 16px 12px;
        border-radius: 50px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.12);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 18px;
        border: 1px solid rgba(0, 0, 0, 0.04);
    }
 
    .capsule-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background-color: #ffffff;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        border: 1px solid #f0f0f0;
        cursor: pointer;
    }
 
    .capsule-btn.whatsapp i { color: #25d366; font-size: 30px; }
    .capsule-btn.call i { color: #0275d8; font-size: 24px; }
    .capsule-btn.quote i { color: #f0ad4e; font-size: 24px; }
 
    .capsule-btn:hover {
        transform: scale(1.15);
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        background-color: #ffffff;
    }
 
    .capsule-btn .tooltip-text {
        position: absolute;
        right: 70px;
        background: #1e293b;
        color: #ffffff;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 500;
        white-space: nowrap;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.2s, transform 0.2s;
        transform: translateX(10px);
        pointer-events: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
 
    .capsule-btn:hover .tooltip-text {
        visibility: visible;
        opacity: 1;
        transform: translateX(0);
    }
 
    /* EXPANDED INLINE FORM PANEL - Height configured to stay fully visible inside iframe */
    .inline-form-panel {
        width: 310px;
        height: 410px;
        background: #ffffff;
        border-radius: 14px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.18);
        border: 1px solid rgba(0,0,0,0.08);
        display: none;
        flex-direction: column;
        overflow-y: auto !important;
    }
    .panel-header {
        background: #f8f9fa;
        padding: 12px 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #eee;
        border-radius: 14px 14px 0 0;
    }
    .panel-body {
        padding: 15px;
    }
    .form-group-compact {
        margin-bottom: 10px;
    }
    .form-group-compact .form-label {
        font-size: 12px;
        font-weight: 600;
        color: #495057;
        margin-bottom: 3px;
    }
    .form-group-compact .form-control {
        font-size: 13px;
        padding: 6px 10px;
    }
 
    @media (max-width: 480px) {
        .capsule-btn { width: 46px; height: 46px; }
        .capsule-btn.whatsapp i { font-size: 24px; }
        .capsule-btn.call i, .capsule-btn.quote i { font-size: 18px; }
        .inline-form-panel { width: 280px; height: 380px; }
    }
    </style>
</head>
<body>
 
<div class="floating-hub-container" id="hubContainer">
    
    <!-- Inline Form Panel (Hidden by default) -->
    <div class="inline-form-panel" id="formPanel">
        <div class="panel-header">
            <span class="fw-bold text-dark" style="font-size: 13px;"><i class="fas fa-file-alt text-warning me-2"></i>Quick Enquiry</span>
            <button type="button" class="btn-close" style="font-size: 10px;" onclick="hideForm()"></button>
        </div>
        <form id="hubContactForm" method="POST" action="">
            <div class="panel-body">
                <div id="formResponse" class="alert d-none py-1 px-2 small mb-2" style="font-size: 12px;"></div>
                <div class="form-group-compact">
                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group-compact">
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group-compact">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group-compact">
                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2 py-2 fw-bold" id="submitBtn" style="font-size: 13px;">Send Request</button>
            </div>
        </form>
    </div>

    <div class="vertical-capsule" id="capsuleGroup">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/+918605060625" class="capsule-btn whatsapp" id="whatsappBtn" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>
            <span class="tooltip-text">WhatsApp Us</span>
        </a>
        
        <!-- Call Button -->
        <a href="tel:+918605060625" class="capsule-btn call" id="callBtn" target="_parent">
            <i class="fas fa-phone-alt"></i>
            <span class="tooltip-text">Call Helpline</span>
        </a>

        <!-- Quote Button - OPENS SEPARATE PAGE request-quote.php -->
        <a href="request-quote.php" target="_blank" class="capsule-btn quote" id="quoteTrigger">
            <i class="fas fa-file-alt"></i>
            <span class="tooltip-text">Request a Quote</span>
        </a>
    </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const panel = document.getElementById('formPanel');
    const quoteTrigger = document.getElementById('quoteTrigger');
    const whatsappBtn = document.getElementById('whatsappBtn');
    const callBtn = document.getElementById('callBtn');
    
    let hideTimeout;
    
    function showForm() {
        if (!panel) return;
        clearTimeout(hideTimeout);
        panel.style.display = 'flex';
        try {
            window.parent.postMessage('openForm', '*');
        } catch(e) {}
    }
 
    function hideForm() {
        if (!panel) return;
        panel.style.display = 'none';
        try {
            window.parent.postMessage('closeForm', '*');
        } catch(e) {}
    }
    
    function scheduleHideForm() {
        clearTimeout(hideTimeout);
        hideTimeout = setTimeout(hideForm, 300);
    }
 
    // For the inline quote button (if you want hover to show form)
    // Note: This is separate from the "Request a Quote" button that opens new page
    if (quoteTrigger) {
        // For the quote button that opens separate page - no hover form
        // This button now opens request-quote.php in new tab, so no form panel interaction
    }
 
    // Hide form when interacting with WhatsApp or Call buttons
    if (whatsappBtn) {
        whatsappBtn.addEventListener('mouseenter', hideForm);
        whatsappBtn.addEventListener('click', hideForm);
    }
    
    if (callBtn) {
        callBtn.addEventListener('mouseenter', hideForm);
        callBtn.addEventListener('click', hideForm);
    }
    
    // Form panel mouse events
    if (panel) {
        panel.addEventListener('mouseleave', scheduleHideForm);
        panel.addEventListener('mouseenter', function() {
            clearTimeout(hideTimeout);
        });
    }
 
    // Handle form submission
    const contactForm = document.getElementById('hubContactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
           
            const form = this;
            const submitBtn = document.getElementById('submitBtn');
            const responseDiv = document.getElementById('formResponse');
           
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
           
            const formData = new FormData(form);
           
            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                responseDiv.classList.remove('d-none', 'alert-success', 'alert-danger');
               
                if(data.trim() === 'success') {
                    responseDiv.classList.add('alert-success');
                    responseDiv.innerText = 'Submitted successfully!';
                    form.reset();
                    setTimeout(() => {
                        hideForm();
                        responseDiv.classList.add('d-none');
                    }, 2000);
                } else {
                    responseDiv.classList.add('alert-danger');
                    responseDiv.innerText = data;
                }
            })
            .catch(error => {
                responseDiv.classList.remove('d-none', 'alert-success', 'alert-danger');
                responseDiv.classList.add('alert-danger');
                responseDiv.innerText = 'Transmission error occurred.';
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Send Request';
            });
        });
    }
</script>
</body>
</html>