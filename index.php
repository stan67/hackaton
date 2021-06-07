<?php
$url = 'https://api.spacexdata.com/v3/missions';


$raw = file_get_contents($url);


$json = json_decode($raw);

$navettesMission3 = $json[3]->payload_ids;
$nameMissions3 = $json[3]->mission_name;
$wikipediaLiens3 = $json[3]->wikipedia;
$description3 = $json[3]->description;
$website3 = $json[3]->website;
$navettesMission2 = $json[2]->payload_ids;
$nameMissions2 = $json[2]->mission_name;
$wikipediaLiens2 = $json[2]->wikipedia;
$description2 = $json[2]->description;
$website2 = $json[2]->website;
$navettesMission7 = $json[7]->payload_ids;
$nameMissions7 = $json[7]->mission_name;
$wikipediaLiens7 = $json[7]->wikipedia;
$description7 = $json[7]->description;
$website7 = $json[7]->website;
?>

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
                <li class="uk-active"><a href="#" uk-scroll>Accueil</a></li>
                    <li><a href="#historique" uk-scroll>Historique</a></li>
                    <li>
                        <a href="#fusee" uk-scroll>Les fusées</a>
                    </li>
                    <li>
                        <a href="#bisous" uk-scroll>Bisous</a>
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
                                <p uk-scrollspy="cls: uk-animation-fade; delay: 1500">Elon Musk, né le 28 juin 1971 à Pretoria, est un ingénieur, entrepreneur, chef d'entreprise</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!----------------
                HISTORIQUE 
            ------------------>
            <!-- Timeline -->
            <div id="historique" class="uk-container uk-padding" uk-parallax="bgy: 700" style="background: url('images/planet.png') no-repeat; background-size: 40%; background-position: right" uk-scrollspy="cls: uk-animation-fade; delay: 1800">
                <div class="uk-timeline" uk-parallax="bgy: 700" style="background: url('images/planet-2.png') no-repeat; background-size: 12%; background-position: right 35% top 70%;">
                    <div class="uk-timeline-item" uk-scrollspy="uk-animation-slide-bottom">
                        <div class="uk-timeline-icon">
                            <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-08">July 8 : <?php echo $nameMissions3; ?></time></h3>
                                        <div class="marge">
                                            <p class="description"><?php echo $description3 ?></p>
                                            <h3>Navettes utilisées : </h3>
                                            <?php
                                            echo '';
                                            foreach ($navettesMission3 as $key => $navettes)
                                            {
                                                echo $navettes .' - ';
                                            }
                                            ?>
                                            <p>Pour plus d'information rendez vous sur le site : </p>
                                            <ul>
                                                <li><a href='https://www.spacex.com' class="link" target="_blank"><?php echo $website7; ?></a></li>
                                                <li><a href='https://en.wikipedia.org/wiki/Commercial_Resupply_Services#SpaceX' class="link" target="_blank"><?php echo $wikipediaLiens7; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
                                    
                                        <h3 class="uk-card-title"><time datetime="2020-07-07">July 7 : <?php echo $nameMissions2; ?></time></h3>
                                        <div class="marge">
                                        <p class="description"><?php echo $description2 ?></p>
                                        <h3> Navettes utilisées : </h3>
                                        <?php
                                        foreach ($navettesMission2 as $key => $navettes)
                                        {
                                            echo $navettes .' - ';
                                        }
                                        ?>
                                        <p>Pour plus d'information rendez vous sur le site : </p>
                                        <ul>
                                            <li><a href='https://www.spacex.com' class="link" target="_blank"><?php echo $website7; ?></a></li>
                                            <li><a href='https://en.wikipedia.org/wiki/Commercial_Resupply_Services#SpaceX' class="link" target="_blank"><?php echo $wikipediaLiens7; ?></a></li>
                                        </ul>
                                    </div>
                                    </div>
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
                                            <h3 class="uk-card-title"><time datetime="2020-07-06">July 6 : <?php echo $nameMissions7; ?></time></h3>
                                            <div class="marge">
                                            <p class="description"><?php echo $description7 ?></p>
                                            <h3>Navettes utilisées : </h3>
                                            <?php
                                            foreach ($navettesMission7 as $key => $navettes)
                                            {
                                                echo $navettes .' - ';
                                            }
                                            ?>
                                            <p>Pour plus d'information rendez vous sur le site : </p>
                                            <ul>
                                                <li><a href='https://www.spacex.com' class="link" target="_blank"><?php echo $website7; ?></a></li>
                                                <li><a href='https://en.wikipedia.org/wiki/Commercial_Resupply_Services#SpaceX' class="link" target="_blank"><?php echo $wikipediaLiens7; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
            <ul id="fusee" class="uk-slideshow-items">
                <li id="navette-1">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 uk-slideshow-parallax="x: 100,-100" class="title-h2">Iridium NEXT 7</h2>
                        <p uk-slideshow-parallax="x: 200,-200" class="p-slider">This is for use by air traffic control and, via FlightAware</p>
                        <div uk-lightbox>
                            <a class="capitaine" href="images/capitaine.jpg">Clique pas ici</a>
                        </div>
                    </div>
                </li>
                <li id="navette-2">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 uk-slideshow-parallax="x: 100,-100" class="title-h2">COTS Demo Flight 1 </h2>
                        <p uk-slideshow-parallax="x: 200,-200" class="p-slider">This is for use by air traffic control and, via FlightAware</p>
                    </div>
                </li>
                <li id="navette-3">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0" class="title-h2">Orbcomm-OG2-M1 </h2>
                        <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0" class="p-slider">This is for use by air traffic control and, via FlightAware</p>
                    </div>
                </li>
            </ul>
            <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
            
<div id="bisous" class="uk-cover-container uk-height-large" id="videoDiv2" uk-scrollspy="cls: uk-animation-fade; delay: 800">
    <video src="videos/rocket.mp4" autoplay loop muted playsinline uk-cover></video>
    <div id="videoMessage2" class="styling">
        <div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
        <h2>Team Space Monkeys</h2>
        <img src="images/team.png" alt="">
    </div>
</div>


<div class="min-footer" uk-scrollspy="cls: uk-animation-fade; delay: 800">
    <p><span uk-icon="icon: bolt"></span>Propulsé par :    <span style="font-weight: 600">Bastien, Stan, Martin, Didor, Zach et le Capitaine</span></p>
</div>

    <!-- SCRIPTS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>