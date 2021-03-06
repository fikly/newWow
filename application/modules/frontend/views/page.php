<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>WOW Communication - Creative Agency + Brand Activation</title>
        <meta name="title" content="WOW Communication - Creative Agency + Brand Activation" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta name="description" content="One stop full services Advertising Agency which implement 360 communication brand channel with various range of service compliment, ensuring the way of winning to brand success">
        <meta name="keywords" content="Wow,HTML,One Page Scroll,full services Advertising Agency,Web Profile">
        <meta name="author" content="Be Next Technology">

        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/preload/royal_preloader.css" />

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

        <link href="<?php echo INCLUDE_DIR; ?>wow/css/animate.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_DIR; ?>wow/css/hover-min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_DIR; ?>wow/css/bootstrap.min.css" rel="stylesheet">
        <link href='<?php echo INCLUDE_DIR; ?>wow/onepage-scroll.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo INCLUDE_DIR; ?>wow/css/base.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo INCLUDE_DIR; ?>wow/css/styles.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo INCLUDE_DIR; ?>wow/css/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>wow/javascripts/dist/stylesheets/superslides.css">

        <!-- favicon -->
        <link rel="icon" href="<?php echo INCLUDE_DIR; ?>wow/mainlogo/favicon.png" type="image/x-icon">


        <script src="<?php echo INCLUDE_DIR; ?>wow/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/jquery.onepage-scroll.js"></script>
        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/js/custome.js"></script>



        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/js/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>wow/js/source/jquery.fancybox.css?v=2.1.5" media="screen" />


        <script>
            $(document).ready(function () {
                $(".main").onepage_scroll({
                    sectionContainer: "section",
                    responsiveFallback: 600,
                    loop: false
                });
            });

            /* CENTERED CONTEN FULSCREEN */

            function getWindowHeight() {
                var windowHeight = 0;
                if (typeof (window.innerHeight) == 'number') {
                    windowHeight = window.innerHeight;
                }
                else {
                    if (document.documentElement && document.documentElement.clientHeight) {
                        windowHeight = document.documentElement.clientHeight;
                    }
                    else {
                        if (document.body && document.body.clientHeight) {
                            windowHeight = document.body.clientHeight;
                        }
                    }
                }
                return windowHeight;
            }
            function contentCenter() {
                var h = getWindowHeight();
                $('.content-b').css({'display': 'table-cell', 'height': h + 'px', 'position': 'relative', 'vertical-align': 'middle'});
            }

            window.onload = function () {
                contentCenter();
            }
            window.onresize = function () {
                contentCenter();
            }

            function gototab(reload)
            {
                window.location.hash = '#' + reload;
                window.location.reload(true);
            }
        </script>
        <style>
            #logo {
                -webkit-animation-duration: 3s;
                -webkit-animation-delay: 1s;
                -moz-animation-duration: 3s;
                -moz-animation-delay: 1s;
            }

            #kedua {
                -webkit-animation-duration: 3s;
                -webkit-animation-delay: 2s;
                -moz-animation-duration: 3s;
                -moz-animation-delay: 2s;
            }

            #ketiga {
                -webkit-animation-duration: 3s;
                -webkit-animation-delay: 3s;
                -moz-animation-duration: 3s;
                -moz-animation-delay: 3s;
            }
            #keempat {
                -webkit-animation-duration: 3s;
                -webkit-animation-delay: 4s;
                -moz-animation-duration: 3s;
                -moz-animation-delay: 4s;
            }
            #kelima {
                -webkit-animation-duration: 3s;
                -webkit-animation-delay: 5s;
                -moz-animation-duration: 3s;
                -moz-animation-delay: 5s;
            }
        </style>

        <script type="text/javascript" src="<?php echo INCLUDE_DIR; ?>wow/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>wow/css/custom.css"/>
    </head>

    <body class="royal_preloader">
        <div id="royal_preloader"></div>

        <div class="wrapper">
            <div class="main">


                <section class="page1">

                    <div class="page_container">

                        <img src="<?php echo INCLUDE_DIR; ?>wow/mainlogo/1.png" id="logo" class="img-responsive animated fadeIn" style="position: absolute;left: 0;margin: auto;min-width: 10%;min-height: 10%;z-index: 60;">
                        <img src="<?php echo INCLUDE_DIR; ?>wow/mainlogo/2.png" id="kedua" class="img-responsive animated fadeIn" style="position: absolute;left: 0;margin: auto;min-width: 10%;min-height: 10%;z-index: 50;">
                        <img src="<?php echo INCLUDE_DIR; ?>wow/mainlogo/3.png" id="ketiga" class="img-responsive animated fadeIn" style="position: absolute;left: 0;margin: auto;min-width: 10%;min-height: 10%;z-index: 40;">
                        <img src="<?php echo INCLUDE_DIR; ?>wow/mainlogo/4.png" id="keempat" class="img-responsive animated fadeIn" style="position: absolute;left: 0;margin: auto;min-width: 10%;min-height: 10%;z-index: 30;">
                        <div class="logo5 animated fadeIn" id="kelima" style="position: absolute;right: 0;top:300px;margin: auto;min-width: 10%;min-height: 10%;z-index: 55;">
                            <h3>creative <span>+</span></h3>
                            <span class="brand-logo">Brand Activation</span>
                            <h2>agency</h2>
                        </div>
                        <span class="txt-bottom-home animated fadeIn" id="kelima" style="text-align: left !important;">
                            <font face="dinPro" size="2pt" color="#26b571">One stop full services Advertising Agency which implement 360 communication brand channel with various range of service compliment, ensuring the way of winning to brand success</font>
                        </span>
                    </div>

                    <div class="bottom-abs nav-home">
                        <a href="#" class="nav-bottom 2"></a>
                    </div>
                </section>

                <section class="page2">


                    <div class="slide-nav">
                        <div href="#" class="navi-l" id="slide-about-l"><span class="nav-left"></span></div>
                        <div href="#" class="navi-r" id="slide-about-r"><span class="nav-right"></span></div>
                    </div>

                    <div class="page_container">

                        <div class="top-abs">
                            <a href="#" class="nav-top 1"></a>
                        </div>

                        <div id="bg">
                            <img src="<?php echo INCLUDE_DIR; ?>wow/img/box.png" class="small">
                        </div>
                        <div class="content-a">
                            <div class="content-b">


                                <div class="box-one">
                                    <div class="box-container-about">
                                        <div class="gallery-wrap-about">

                                            <div class="gallery-about clearfix">

                                                <div class="gallery__item-about">
                                                    <div class="content-over">
                                                        <div class="photo-text-headline-box col-xs-4">
                                                            <div class="photo-text-middle">
                                                                <span class="head-title">WHO WE ARE</span>
                                                                <h1 class="title">WHO</h1>
                                                                <h1 class="title">WE</h1>
                                                                <h1 class="title">ARE</h1>
                                                            </div>
                                                        </div>
                                                        <div class="photo-text col-xs-4">
                                                            <div class="photo-text-middle">
                                                                <a href="<?php echo base_url(); ?>about" class="fancybox fancybox.ajax play-video"><img src="<?php echo INCLUDE_DIR; ?>wow/images/about/hover.png" style="width: 140px;height:140px" class="image img-video"></a>
                                                            </div>
                                                        </div>
                                                        <div class="photo-text-headline-box col-xs-4">
                                                            <div class="photo-text-middle">
                                                                <p class="caption1">Creative agency that builds brands by creating WOW-moments through campaign and experience</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gallery__item-about">
                                                    <div class="content-over">
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <span class="head-title2">SERVICE</span>
                                                                <h1 class="ser">SER</h1>
                                                                <h1 class="vices">VICES</h1>
                                                            </div>
                                                        </div>
                                                        <div class="photo-text">
                                                            <div class="photo-text-middle">
                                                                <img src="<?php echo INCLUDE_DIR; ?>wow/images/about/2.png" class="image2">
                                                            </div>
                                                        </div>
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <p class="caption2">Strategy</p>
                                                                <p class="caption2-plus">+</p>
                                                                <p class="caption2"> Planning</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gallery__item-about">
                                                    <div class="content-over">
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <span class="head-title2">SERVICE</span>
                                                                <h1 class="ser">SER</h1>
                                                                <h1 class="vices">VICES</h1>
                                                            </div>
                                                        </div>
                                                        <div class="photo-text">
                                                            <div class="photo-text-middle">
                                                                <img src="<?php echo INCLUDE_DIR; ?>wow/images/about/3.png" class="image2">
                                                            </div>
                                                        </div>
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <p class="caption3">Content</p>
                                                                <br/>
                                                                <p class="caption3">Production</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gallery__item-about">
                                                    <div class="content-over">
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <span class="head-title2">SERVICE</span>
                                                                <h1 class="ser">SER</h1>
                                                                <h1 class="vices">VICES</h1>
                                                            </div>
                                                        </div>
                                                        <div class="photo-text">
                                                            <div class="photo-text-middle">
                                                                <img src="<?php echo INCLUDE_DIR; ?>wow/images/about/4.png" class="image2">
                                                            </div>
                                                        </div>
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <p class="caption4">Brand</p>
                                                                <p class="caption4">Experience</p>
                                                                <p class="caption4" style="color:gray"> & </p>
                                                                <p class="caption4">Activation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gallery__item-about">
                                                    <div class="content-over">
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <span class="head-title2">SERVICE</span>
                                                                <h1 class="ser">SER</h1>
                                                                <h1 class="vices">VICES</h1>
                                                            </div>
                                                        </div>
                                                        <div class="photo-text">
                                                            <div class="photo-text-middle">
                                                                <img src="<?php echo INCLUDE_DIR; ?>wow/images/about/5.png" class="image2">
                                                            </div>
                                                        </div>
                                                        <div class="photo-text-headline-box">
                                                            <div class="photo-text-middle">
                                                                <p class="caption5">Media Planning</p>
                                                                <br/>
                                                                <p class="caption5-dua"> + </p>
                                                                <br/>
                                                                <p class="caption5-tiga">Buying</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div> <!-- .gallery-wrap -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="bottom-abs">
                            <a href="#" class="nav-bottom 3"></a>
                        </div>

                    </div>
                </section>



                <section class="page3">
                    <div class="top-abs">
                        <a href="#" class="nav-top 2"></a>
                    </div>
                    <div class="page_container">



                        <div id="bg">
                            <img src="<?php echo INCLUDE_DIR; ?>wow/img/box.png" class="small">
                        </div>

                        <div id="slides">
                            <ul class="slides-container">
                                <?php
                                $no = 1;
                                foreach ($viewClient as $vc) {
                                    ?>
                                    <li>
                                        <img src="<?php echo IMAGES_DIR; ?>client/background/<?php echo $vc['background'] ?>" alt="">
                                        <div class="container" style="left:30%">
                                            <div class="logo-client">
                                                <h1>
                                                    <a style="background: url(<?php echo IMAGES_DIR; ?>client/logo/risize/<?php echo $vc['logo'] ?>)  no-repeat;
                                                       width: 200px;
                                                       height: 200px;
                                                       display: inline-block;" href="<?php echo base_url(); ?>content/<?php echo $vc['id_client'] ?>" class="img-client fancybox fancybox.ajax"></a>
                                                </h1>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    $no++;
                                }
                                ?>

                            </ul>

                            <nav class="slides-navigation">
                                <a href="#" class="next"></a>
                                <a href="#" class="prev"></a>
                            </nav>
                        </div>


                        <div class="bottom-abs">
                            <a href="#" class="nav-bottom 4"></a>
                        </div>
                    </div>

                </section>


                <section class="page4">


                    <div class="slide-nav-team left">
                        <div class="tes" id="slide-team-l"><span class="nav-left nav-team"></span></div>
                    </div>
                    <div class="slide-nav-team right">
                        <div class="tes" id="slide-team-r"><span class="nav-right nav-team"></span></div>
                    </div>

                    <div class="page_container">

                        <div class="top-abs team">
                            <a href="#" class="nav-top 3"></a>
                        </div>

                        <div id="bg-team">
                            <img src="<?php echo INCLUDE_DIR; ?>wow/img/box.png" class="small">
                        </div>



                        <div class="content-a">
                            <div class="content-b">




                                <div class="box-container-team">

                                    <div class="gallery-wrap-team">
                                        <div class="gallery-team clearfix">
                                            <div class="gallery__item-team">
                                                <div class="content-over">
                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/lisa.png" class="gallery__img img-team" alt="" width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Lisa Mariana, SH<br>
                                                                    President Director/Executive Creative Director<br><br></strong></p>
                                                            <p style="font-size:10px;">Passionated singer who keen to pursue her talent in advertising, repeatedly sparkled invincible creative ideas in response to the understanding of consumers insight.</p>

                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery__item-team">
                                                <div class="content-over">


                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/aji.png" class="gallery__img img-team2" alt="" width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">


                                                            <p class="nama" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Ir. Aji Nugroho, MBA<br>
                                                                    General Manager Operation<br><br></strong></p>
                                                            <p style="font-size:10px;">Geek that has strong willing and gears to go one step further than anyone else into the insight of consumers and find the gap to fill for the creative people to explore.</p>


                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery__item-team">
                                                <div class="content-over">

                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/ajeng.png" class="gallery__img img-team" alt="" width="390"/>
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">
                                                            <p class="nama3" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Ajeng Nugrahani, Ssi<br>
                                                                    Account Manager<br><br></strong></p>
                                                            <p style="font-size:10px;">Put forward sincerity and speed of response is her main aptitude, with her great socializing ability, she could perform as a good buddy as well as assistant for clients at once.</p>


                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery__item-team">
                                                <div class="content-over">
                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/edah.png" class="gallery__img img-team2" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Edah Budiman<br>
                                                                    General Manager Media and Finance<br><br></strong></p>
                                                            <p style="font-size:10px;">Strong relationship with media people from various kind of media in most cities in Indonesia have given her.  All that will be rewarded back for the benefit of the clients.</p>


                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="gallery__item-team">
                                                <div class="content-over">

                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/didi.png" class="gallery__img img-team2" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Drs. Didacus Sunoto<br>
                                                                    New Business Development Manager<br><br></strong></p>
                                                            <p style="font-size:10px;">Having bulk of hobbies such as wayang, ancient stories and soccer, he was a former Associate Creative Director that turns out to meeting new clients as his new preoccupation</p>


                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery__item-team">
                                                <div class="content-over">




                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/marvin.png" class="gallery__img img-team2 img-marvin" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama2" style="font-family: dinPro; font-size: 11px; font-style: bold;"> <strong>
                                                                    MARVIN JULIAN<br>
                                                                    CREATIVE DIRECTOR<br><br></strong></p>
                                                            <p style="font-size:10px;">
                                                                A CREATIVE THINKER IS PASSIONATE ABOUT
                                                                POP CULTURE, TV SHOWS, AND ALL THINGS
                                                                PRETTY. A PROFOUNDLY HONEST, OPEN-MINDED
                                                                AND PROGRESSIVE CREATIVE WHO ALWAYS
                                                                TRIES TO ELIMINATE ALL BOXES INSTEAD OF
                                                                THINKING OUTSIDE OF ONE.</p>

                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery__item-team">
                                                <div class="content-over">




                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/udi.png" class="gallery__img img-team2" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama" style="font-family: dinPro; font-size: 11px; font-style: bold;"> <strong>
                                                                    Udi Husodo<br>
                                                                    Associate Creative Director<br><br></strong></p>
                                                            <p style="font-size:10px;">&nbsp;&nbsp;&nbsp;Deep. Bold. Earthy. Loves Instagram too.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="gallery__item-team">
                                                <div class="content-over">

                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/bambang.png" class="gallery__img img-team2" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama3" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Bambang Srihana<br>
                                                                    Senior Art Director <br><br>  </strong></p>
                                                            <p style="font-size:10px;"> In his third decade working in the creative field, he is still as fresh as ever, with wisdom as his weapon of choice.</p>

                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery__item-team">
                                                <div class="content-over">


                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/anton.png" class="gallery__img img-team2" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama3" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Edward Antonius<br>
                                                                    Creative Producer<br><br></strong></p>
                                                            <p style="font-size:10px;"> WOW's very own creative producer extraordinaire, he has passionately produced/ organized/ managed countless events.</p>
                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="gallery__item-team">
                                                <div class="content-over">
                                                    <div class="photo">
                                                        <img src="<?php echo INCLUDE_DIR; ?>wow/images/martha.png" class="gallery__img img-team2" alt=""  width="390" />
                                                    </div>
                                                    <div class="photo-text">
                                                        <div class="photo-text-middle">

                                                            <p class="nama2" style="font-family: dinPro; font-size: 11px; font-style: bold;"><strong>
                                                                    Margaretha Maulani, SE<br>
                                                                    Finance Manager<br><br> </strong></p>
                                                            <p style="font-size:10px;">Dependable for all financial matter, ensuring timely payment and good relationships with suppliers.  She was one of the forerunners of the company.</p>


                                                        </div>
                                                    </div>
                                                    <div class="photo-text-headline-box">
                                                        <div class="photo-text-middle">
                                                            <h1>THE TEAM</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div> <!-- .gallery-wrap -->
                                </div>

                            </div>
                        </div>

                        <div class="bottom-abs team">
                            <a href="#" class="nav-bottom 5 nav-team2"></a>
                        </div>


                    </div>
                </section>

                <section class="page5">


                    <div class="page_container">

                        <div class="top-abs">
                            <a href="#" class="nav-top 4"></a>
                        </div>


                        <div id="bg">
                            <img src="<?php echo INCLUDE_DIR; ?>wow/img/box.png" class="small">
                        </div>

                        <div class="content-a">
                            <div class="content-b">



                                <div class="pad-footer">
                                    <div class="box-icon-contact">
                                        <div class="box-icon-col-contact">
                                            <a target="_blank" href="https://instagram.com/wow.id" class="icon-twitter"></a>
                                            <a href="<?php echo base_url(); ?>email" class="icon-email fancybox fancybox.ajax"></a>
                                        </div>
                                        <div class="box-icon-col-contact">
                                            <a href="<?php echo base_url(); ?>career" class="icon-team fancybox fancybox.ajax"></a>
                                            <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.7059797968277!2d106.7748079!3d-6.170109999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6524bc162df%3A0xbc17cd0375b590c5!2sJl.+Komp.+Graha+Indah+Green+Ville+Blok+Ax+No.4%2C+Kebonjeruk%2C+Kota+Jak+Bar.%2C+Daerah+Khusus+Ibukota+Jakarta+11510!5e0!3m2!1sid!2sid!4v1420601008780" class="icon-map fancybox fancybox.iframe"></a>
                                        </div>
                                        <div class="box-icon-col-contact">
                                            <a target="_blank" href="https://www.facebook.com/Wow.Komunindo" class="icon-fb"></a>
                                            <a href="<?php echo base_url(); ?>contact" class="icon-phone fancybox fancybox.ajax"></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </section>

            </div>





        </div>
        <script src="<?php echo INCLUDE_DIR; ?>wow/javascripts/jquery.easing.1.3.js"></script>
        <script src="<?php echo INCLUDE_DIR; ?>wow/javascripts/jquery.animate-enhanced.min.js-"></script>
        <script src="<?php echo INCLUDE_DIR; ?>wow/javascripts/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
        <script>
            $(function () {
                $('#slides').superslides({
                    hashchange: false,
                    pagination: false,
                });
            });
        </script>



        <script type="text/javascript">
            $(document).ready(function () {
                $('.fancybox').fancybox();
                $("span.menu-name-1").html("Home");
                $("span.menu-name-2").html("About");
                $("span.menu-name-3").html("Client");
                $("span.menu-name-4").html("Team");
                $("span.menu-name-5").html("Contact");

            });
            $('#imageHover').hide();
            function changeImage() {
                $('#imageHover').show();
                $('#imageFirst').hide();
            }
            function changeImageOut() {
                $('#imageHover').hide();
                $('#imageFirst').show();
            }
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