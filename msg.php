<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Chat Symbol Link</title>
   
    <style>
    /* Absolute overlay container in the bottom right corner - Strictly Transparent Base */
    .floating-widget-wrapper {
        position: fixed;
        bottom: 10px;
        right: 10px;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 10px;
        background: transparent !important;
    }
 
    /**
     * REPLICATED CHAT WIDGET SYMBOL
     */
    .chat-bubble-widget {
        width: 65px;
        height: 65px;
        background-color: #459e41; /* Changed to #459e41 */
        border: 2px solid #2d7a2a; /* Darker shade of #459e41 */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        transition: all 0.25s ease-in-out;
    }
 
    .chat-bubble-widget::before {
        content: '';
        width: 28px;
        height: 24px;
        background-color: transparent;
        border: 2.5px solid #ffffff; /* White for contrast */
        border-radius: 12px 12px 0 12px;
        position: absolute;
        transform: rotate(-10deg);
    }
 
    .chat-bubble-widget::after {
        content: '';
        position: absolute;
        width: 12px;
        height: 2px;
        background-color: #ffffff; /* White for contrast */
        box-shadow: 0 4px 0 #ffffff; /* White for contrast */
        top: 29px;
        left: 26px;
    }
 
    .chat-bubble-widget:hover {
        transform: scale(1.1);
        background-color: #3a8a37; /* Darker shade on hover */
        border-color: #2d7a2a;
    }
   
    .chat-bubble-widget:active {
        transform: scale(0.95);
    }
 
    /**
     * DYNAMIC IFRAME CONTAINER WIDGET
     */
    .message-form-container {
        width: 95px;
        height: 250px;
        background: transparent;
        overflow: visible;
        display: block;
        visibility: hidden;
        pointer-events: none;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease, width 0.2s ease, height 0.2s ease;
    }
 
    .message-form-container.show {
        visibility: visible;
        pointer-events: auto;
        opacity: 1;
        transform: translateY(0);
    }
 
    /* EXPANDED SYSTEM BOUNDARIES - Increased height to ensure button visibility */
    .message-form-container.expanded-view {
        width: 410px;
        height: 460px;
    }
 
    .message-form-container iframe {
        width: 100%;
        height: 100%;
        border: none;
        background: transparent;
    }
 
    @media (max-width: 480px) {
        .message-form-container.expanded-view {
            width: 320px;
            height: 430px;
        }
        .floating-widget-wrapper {
            right: 10px;
            bottom: 10px;
        }
    }
    </style>
</head>
<body>
 
    <div class="floating-widget-wrapper" id="widgetHub">
       
        <div class="message-form-container" id="formWrapper">
            <iframe src="<?php echo BASE_URL; ?>/message.php" id="widgetIframe" title="Message Form Interface"></iframe>
        </div>
        <div class="chat-bubble-widget" id="widgetTrigger" title="Open Message Panel">
        </div>
 
    </div>
 
    <script>
    const formWrapper = document.getElementById('formWrapper');
    const widgetHub = document.getElementById('widgetHub');
    const widgetTrigger = document.getElementById('widgetTrigger');
 
    function openWidget() {
        formWrapper.classList.add('show');
    }
    function closeWidget() {
        formWrapper.classList.remove('show');
        formWrapper.classList.remove('expanded-view');
    }
 
    // Toggle capsule group view on message icon click
    widgetTrigger.addEventListener('click', function(e) {
        e.stopPropagation();
        if(formWrapper.classList.contains('show')) { closeWidget(); } else { openWidget(); }
    });
 
    // Toggle capsule group view on message icon hover
    widgetTrigger.addEventListener('mouseenter', openWidget);
    widgetHub.addEventListener('mouseleave', closeWidget);
 
    // Viewport resizing adjustments based on child iframe updates
    window.addEventListener('message', function(event) {
        if (event.data === 'openForm') {
            formWrapper.classList.add('expanded-view');
        } else if (event.data === 'closeForm') {
            formWrapper.classList.remove('expanded-view');
        }
    });
    </script>
 
</body>
</html>