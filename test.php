<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FullPage and WOW.js</title>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include fullPage.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>

    <!-- Include WOW.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <style>
        .section {
            text-align: center;
            padding: 50px 0;
        }

        .wow {
            opacity: 0;
            transition: opacity 1s;
        }

        .wow.animated {
            opacity: 1;
        }
    </style>
</head>
<body>

    <div id="fullpage">
        <div class="section">
            <div class="wow fadeInUp">
                <h1>This is the first section</h1>
            </div>
        </div>
        <div class="section">
            <div class=" fadeInUp">
                <h1>This is the second section</h1>
            </div>
        </div>
        <div class="section">
            <div class=" fadeInUp">
                <h1>This is the third section</h1>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Initialize WOW.js
            new WOW().init();

            // Initialize fullPage.js
            $('#fullpage').fullpage({
            autoScrolling: true,
            scrollHorizontally: true,
            scrollingSpeed: 700, // Control scroll speed
            easing: 'easeInOutCubic', // Smooth scroll effect
            loopBottom: true, // Scroll back to top when you reach the bottom
            });
        });
    </script>

</body>
</html>
