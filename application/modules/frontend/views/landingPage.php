
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />

        <title>WOW Communication - Creative Agency + Brand Activation</title>

        <!-- Practical proven viewport for better mobile experience -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

        <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>wow/static/css/parallax.css">
        <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>wow/static/css/sample.css">
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/preload/royal_preloader.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/css/landing.css" />

        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/preload/jquery.js"></script>
        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/preload/royal_preloader.min.js"></script>
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
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/object-1.png" style="position: absolute;left: 0px;top: 0;" class="img-responsive">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/front.png" style="position: absolute;left: 0px;top: 0;" class="img-responsive">
                    </div>
                    <div class="mobile">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/mobile/middle.png" class="img-responsive">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/mobile/front.png" class="img-responsive">
                    </div>
                    <div class="footer-button">
                        <img onclick="toRight()" src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/button-next.png">
                    </div>
                </div>
            </div>

            <div id="simple">
                <div class="content-slide slide-2">
                    <div class="web">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/second-slide/middle.png" style="position: absolute;left: 0px;top: 0;" class="img-responsive">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/second-slide/front.png" style="position: absolute;left: 0px;top: 0;" class="img-responsive">
                    </div>
                    <div class="mobile">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/second-slide/mobile/middle.png" class="img-responsive">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/second-slide/mobile/front.png" class="img-responsive">
                    </div>
                    <div class="footer-button">
                        <img onclick="toRight()" src="<?php echo INCLUDE_DIR ?>wow/static/images/first-slide/button-next.png">
                    </div>
                </div>
            </div>
            <div id="tropi">
                <div class="content-slide slide-3">
                    <div class="web">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/third-slide/middle.png" style="position: absolute;left: 0px;top: 0;" class="img-responsive">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/third-slide/front.png" style="position: absolute;left: 10%;top: 0;" class="img-responsive">
                    </div>
                    <div class="mobile">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/third-slide/mobile/middle.png" class="img-responsive">
                        <img src="<?php echo INCLUDE_DIR ?>wow/static/images/third-slide/mobile/front.png" class="img-responsive">
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

            </script>
    </body>
</html>
