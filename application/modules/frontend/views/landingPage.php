<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />

        <title>WOW Communication - Creative Agency + Brand Activation</title>
        <link rel="shortcut icon" href="<?php echo INCLUDE_DIR; ?>wow/static/images/third-slide/logo.png" type="image/x-icon">
        <link rel="icon" href="<?php echo INCLUDE_DIR; ?>wow/static/images/third-slide/logo.png" type="image/x-icon">

        <!-- Practical proven viewport for better mobile experience -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="title" content="WOW Communication - Creative Agency + Brand Activation" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta name="description" content="One stop full services Advertising Agency which implement 360 communication brand channel with various range of service compliment, ensuring the way of winning to brand success">
        <meta name="keywords" content="Wow,HTML,One Page Scroll,full services Advertising Agency,Web Profile">
        <meta name="author" content="Be Next Technology">

        <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>wow/static/css/parallax.css">
        <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>wow/static/css/sample.css">
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/preload/royal_preloader.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/css/landing.css" />

        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/preload/jquery.js"></script>
        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/preload/royal_preloader.min.js"></script>
        <script type="text/javascript">
            Royal_Preloader.config({
                mode: 'logo',
                logo: '<?php echo INCLUDE_DIR; ?>wow/preload/logo.png',
                logo_size: [100, 169],
                text_colour: '#26b571',
                showProgress: true,
                showPercentage: true,
                background: '#FFFFFF'
            });
        </script>
        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/js/jquery-2.1.1.min.js"></script>
    </head>

    <body class="royal_preloader">
        <div id="royal_preloader"></div>

        <div id="parallax">

            <div id="hi">
                <div class="content-slide slide-1">
                    <div class="web">

                    </div>

                    <div class="footer-button">
                        <img onclick="toRight()" src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/button-next.png">
                    </div>
                </div>
            </div>

            <div id="simple">
                <div class="content-slide slide-2">
                    <div class="web">

                    </div>
                    <div class="footer-button">
                        <img onclick="toRight()" src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/button-next.png">
                    </div>
                </div>
            </div>
            <div id="tropi">
                <div class="content-slide slide-3">
                    <div class="web">
                        <div class=box-logo>

                        </div>
                    </div>
                    <div class="footer-button">
                        <a href="<?php echo base_url() ?>main"><img src="<?php echo INCLUDE_DIR ?>wow/static/images/third-slide/button-enter.png"></a>
                    </div>
                </div>
            </div>

            <!-- TODO: Describe which functions of .custom JS-files are needed -->
            <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/static/js/third_party/jquery.js"></script>
            <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/static/js/third_party/jquery.mousewheel.js"></script>
            <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/static/js/third_party/jquery.custom.js"></script>
            <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/static/js/third_party/modernizr.custom.js"></script>

            <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/static/js/parallax.js"></script>
            <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/static/js/sample.js"></script>

            <script>
                            $(function () {
                                var w = $('html').innerWidth();
                                $(window).load(function () {
                                    if (w < 960) {
                                        document.location.href = "<?php echo base_url() ?>main";
                                    }
                                });
                            });
            </script>
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-64781129-1', 'auto');
                ga('send', 'pageview');

            </script>
    </body>
</html>