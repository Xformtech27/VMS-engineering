<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">


    <title>Interactive Chat Symbol Link</title>

   

   

</head>

<body>

 

    <div class="floating-widget-wrapper" id="widgetHub">

       

        <div class="message-form-container" id="formWrapper">

            <!-- <iframe src="message.php" id="widgetIframe" title="Message Form Interface"></iframe>

         -->

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