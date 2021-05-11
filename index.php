<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceHistory</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>
<div class="uk-position-top">
    <!----------------
        HEADER 
    ------------------>
    <!-- Menu -->
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar uk-sticky>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <img src="images/logo.gif" width="250" height="80" alt="">
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav"> 
                <li class="uk-active"><a href="#">Accueil</a></li>
                    <li><a href="#">Historique</a></li>
                    <li>
                        <a href="#">Les robots</a>
                    </li>
                    <li>
                        <a href="#">Les fusées</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Banner -->
        <img src="images/light.jpg" alt="">
            <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('images/banner.jpg');" >
                <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-scrollspy="cls: uk-animation-fade; delay: 300">ExoMars</h1>
                <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2022-03-18T09:24:06+00:00" uk-scrollspy="cls: uk-animation-fade; delay: 600">
                    <div>
                        <div class="uk-countdown-number uk-countdown-days"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
                    </div>
                    <div class="uk-countdown-separator">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-hours"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
                    </div>
                    <div class="uk-countdown-separator">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-minutes"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
                    </div>
                    <div class="uk-countdown-separator">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-seconds"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
                    </div>
                </div>
            </div>
            <!----------------
                PRESENTATION 
            ------------------>
            <div class="uk-section-default">
                <div class="uk-section uk-light uk-background-cover" style="background-image: url(images/dark.jpg)">
                    <div class="uk-container">

                        <h3 uk-scrollspy="cls: uk-animation-fade; delay: 900">Elon Musk</h3>

                        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
                            <img src="images/spacex.png" class="spacex" alt="" uk-scrollspy="cls: uk-animation-fade; delay: 1200">
                            <div>
                                <p uk-scrollspy="cls: uk-animation-fade; delay: 1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!----------------
                HISTORIQUE 
            ------------------>
            <!-- Timeline -->
            <div class="uk-container uk-padding" uk-parallax="bgy: 700" style="background: url('images/planet.png') no-repeat; background-size: 40%; background-position: right" uk-scrollspy="cls: uk-animation-fade; delay: 1800">
                <div class="uk-timeline" uk-parallax="bgy: 700" style="background: url('images/planet-2.png') no-repeat; background-size: 12%; background-position: right 35% top 70%;">
                    <div class="uk-timeline-item" uk-scrollspy="uk-animation-slide-bottom">
                        <div class="uk-timeline-icon">
                            <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-08">July 8</time></h3>
                                        <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Fully responsive timeline you can add to your UIkit 3 project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-timeline-item" uk-scrollspy="uk-animation-slide-bottom">
                        <div class="uk-timeline-icon">
                                <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-07">July 7</time></h3>
                                        <span class="uk-label uk-label-success uk-margin-auto-left">Test</span>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-timeline-item" uk-scrollspy="cls:uk-animation-slide-bottom">
                        <div class="uk-timeline-icon">
                            <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-06">July 6</time></h3>
                                        <span class="uk-label uk-label-success uk-margin-auto-left">Fix</span>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="uk-position-relative uk-visible-toggle uk-light slide" tabindex="-1" uk-slideshow="animation: push; max-height: 450" uk-scrollspy="cls: uk-animation-fade; delay: 800">
            
            <!----------------
                SLIDESHOW 
            ------------------>
            <ul class="uk-slideshow-items">
                <li id="navette-1">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 uk-slideshow-parallax="x: 100,-100" class="title-h2">Heading</h2>
                        <p uk-slideshow-parallax="x: 200,-200" class="p-slider">Lorem ipsum dolor sit amet.</p>
                    </div>
                </li>
                <li id="navette-2">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 uk-slideshow-parallax="x: 100,-100" class="title-h2">Heading</h2>
                        <p uk-slideshow-parallax="x: 200,-200" class="p-slider">Lorem ipsum dolor sit amet.</p>
                    </div>
                </li>
                <li id="navette-3">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="title-h2">Heading</h2>
                        <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0" class="p-slider">Lorem ipsum dolor sit amet.</p>
                    </div>
                </li>
            </ul>
            <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
            

<div id="videoDiv2"> 
    <video src="videos/rocket.mp4" loop muted playsinline uk-video="autoplay: inview">
    </video> 
    <div id="videoMessage2" class="styling">
        <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
        <h2>Team Space Monkeys</h2>
        <img src="images/team.png" alt="">
    </div>
</div>

<div class="min-footer">
    <p><span uk-icon="icon: bolt"></span>Propulsé par :    <span style="font-weight: 600">Bastien, Stan, Martin, Didor, Zach et le Capitaine</span></p>
</div>

    <!-- SCRIPTS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>