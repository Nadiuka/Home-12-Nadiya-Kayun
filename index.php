<?php
$data = require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Oswald:400,700&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="flexslider/flexslider.css"/>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="navigation-menu">
        <nav>
            <ul class="navigation-items clearfix">
                <?php
                foreach ($data['mainMenu'] as $menuItem) {
                    ?>
                    <li>
                        <a href="<?php echo $menuItem['url']; ?>"><?php echo $menuItem['title']; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
        <div class="logo">
            <a href="#"><img src="<?php echo $data['siteLogo']['src']; ?>"
                             alt="<?php echo $data['siteLogo']['alt']; ?>"></a>
        </div>
        <ul class="navigation-icons clearfix">
            <?php
            foreach ($data['socialLinks'] as $linkItem) {
                ?>
                <li>
                    <a href="<?php echo $linkItem['url']; ?>"><i class="fa <?php echo $linkItem['class']; ?>"
                                                                 aria-hidden="true"></i><?php echo $linkItem['count']; ?>
                    </a>
                </li>
                <?php
            }
            ?>
            <li class="navigation-button"><a
                        href="<?php echo $data['buttonBuy']['url']; ?>"><?php echo $data['buttonBuy']['title']; ?></a>
            </li>
        </ul>
    </div>
    <div class="main-foto">
        <div class="flexslider slider-header-fotos">
            <ul class="slides">
                <?php
                foreach ($data['mainPhoto'] as $mainPhotoItem) {
                    ?>
                    <li>
                        <img src="<?php echo $mainPhotoItem['src']; ?>" alt="<?php $mainPhotoItem['alt']; ?>"
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="header">
            <div class="container">
                <div class="main-header">
                    <h1><?php echo $data['mainHeader']; ?></h1>
                    <span><?php echo $data['mainHeaderSpan']; ?></span>
                    <div class="header-button">
                        <a href="<?php echo $data['headerButton']['url']; ?>"><?php echo $data['headerButton']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="introducing">
    <div class="container introducing-members">
        <h2><?php echo $data['secondHeader']; ?><span><?php echo $data['secondHeaderSpan']; ?></span></h2>
        <div id="slider-members-controls" class="angle clearfix">
            <?php
            foreach ($data['sliderControls'] as $sliderControlsItem) {
                ?>
                <a href="<?php echo $sliderControlsItem['url']; ?>" class="<?php echo $sliderControlsItem['class']; ?>">
                    <i class="fa <?php echo $sliderControlsItem['classAngle']; ?>" aria-hidden="true"></i>
                </a>
                <?php
            }
            ?>
        </div>
        <div class="flexslider slider-members">
            <ul class="members slides">
                <?php
                foreach ($data['members'] as $membersItem) {
                    ?>
                    <li class="members-item">
                        <a href="<?php echo $membersItem['url']; ?>">
                            <img src="<?php echo $membersItem['src']; ?>" alt="<?php echo $membersItem['alt']; ?>">
                            <div class="name-members">
                                <h3><?php echo $membersItem['thirdHeader']; ?></h3>
                                <span><?php echo $membersItem['thirdHeaderSpan']; ?></span>
                                <ul class="clearfix active-icon">
                                    <?php
                                    foreach ($membersItem['activeIcon'] as $activeIconItem) {
                                        ?>
                                        <li>
                                            <a href="<?php echo $activeIconItem['url']; ?>">
                                                <i class="fa <?php echo $activeIconItem['class']; ?>"
                                                   aria-hidden="true"></i>
                                                <?php echo $activeIconItem['title']; ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<div>
    <div class="container concert-and-videos">
        <section class="upcoming-concert">
            <h2><?php echo $data['fourthHeader']; ?><span><?php echo $data['fourthHeaderSpan']; ?></span></h2>
            <div class="concert-info">
                <div class="main-foto-concert">
                    <div class="concert-foto">
                        <img src="<?php echo $data['concertPhoto']['src']; ?>"
                             alt="<?php echo $data['concertPhoto']['alt']; ?>">
                    </div>
                    <div class="data">
                        <span><?php echo $data['concertData']; ?></span>
                        <span><?php echo $data['concertMonth']; ?></span>
                    </div>
                </div>
                <div class="table">
                    <h3><?php echo $data['tableHeader']; ?></h3>
                    <table>
                        <?php
                        foreach ($data['concertInfo'] as $concertInfoItem) {
                            ?>
                            <tr>
                                <td><?php echo $concertInfoItem['title']; ?></td>
                                <td><?php echo $concertInfoItem['colon']; ?></td>
                                <td><?php echo $concertInfoItem['info']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <div class="purchase-ticket">
                        <a href="<?php echo $data['purchaseTicketButton']['url']; ?>"><?php echo $data['purchaseTicketButton']['title']; ?></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="latest-videos">
            <h2><?php echo $data['fifthHeader']; ?><span><?php echo $data['fifthHeaderSpan']; ?></span></h2>
            <div id="slider-video-controls" class="angle clearfix">
                <?php
                foreach ($data['sliderControls'] as $sliderControlsItem) {
                    ?>
                    <a href="<?php echo $sliderControlsItem['url']; ?>"
                       class="<?php echo $sliderControlsItem['class']; ?>">
                        <i class="fa <?php echo $sliderControlsItem['classAngle']; ?>" aria-hidden="true"></i>
                    </a>
                    <?php
                }
                ?>
            </div>
            <div class="flexslider slider-videos">
                <ul class="slides videos">
                    <?php
                    foreach ($data['slidesVideos'] as $slidesVideosItem) {
                        ?>
                        <li>
                            <iframe width="372" height="290" src="<?php echo $slidesVideosItem['src']; ?>"
                                    frameborder="0"
                                    gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>
</div>
<div class="wrapper">
    <div class="container history">
        <div class="about-history">
            <p class="our-founder"><?php echo $data['history']; ?></p>
            <p class="start"><?php echo $data['historyStartDate']; ?>
                <span><?php echo $data['historyStartSpan']; ?></span> <?php echo $data['historyStart']; ?>
            </p>
            <div class="learn-more">
                <a href="<?php echo $data['learnMoreButton']['url']; ?>"
                   class="open-popup"><?php echo $data['learnMoreButton']['title']; ?></a>
            </div>
        </div>
        <div>
            <img src="<?php echo $data['historyPhoto']['src']; ?>" alt="<?php echo $data['historyPhoto']['alt']; ?>">
        </div>
    </div>
</div>
<div>
    <div class="container songs-instagram">
        <section class="popular-songs">
            <h2><?php echo $data['sixthHeader']; ?><span><?php echo $data['sixthHeaderSpan']; ?></span></h2>
            <iframe width="100%" height="166" scrolling="no" frameborder="no"
                    src="<?php echo $data['audio']['src']; ?>"></iframe>
            <ol class="songs">
                <?php
                foreach ($data['songs'] as $songItem) {
                    ?>
                    <li>
                        <a href="<?php echo $songItem['url']; ?>"><?php echo $songItem['title']; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ol>
        </section>
        <section class="instagram-feed">
            <h2><?php echo $data['seventhHeader']; ?><span><?php echo $data['seventhHeaderSpan']; ?></span></h2>
            <ul class="clearfix">
                <?php
                foreach ($data['instagramPhotos'] as $instagramPhotoItem) {
                    ?>
                    <li>
                        <img src="<?php echo $instagramPhotoItem['src']; ?>"
                             alt="<?php echo $instagramPhotoItem['alt']; ?>">
                    </li>
                    <?php
                }
                ?>
            </ul>
            <ul class="clearfix">
                <?php
                foreach ($data['moreInstagramPhotos'] as $moreInstagramPhotoItem) {
                    ?>
                    <li>
                        <img src="<?php echo $moreInstagramPhotoItem['src']; ?>"
                             alt="<?php echo $moreInstagramPhotoItem['alt']; ?>">
                    </li>
                    <?php
                }
                ?>
            </ul>
        </section>
    </div>
</div>
<div>
    <div class="container app">
        <p class="download-app"><?php echo $data['downloadApp']; ?></p>
        <p class="listening"><?php echo $data['listening']; ?></p>
        <ul class="icon-app">
            <?php
            foreach ($data['iconApp'] as $iconAppItem) {
                ?>
                <li>
                    <a href="<?php echo $iconAppItem['url']; ?>"><img src="<?php echo $iconAppItem['src']; ?>"
                                                                      alt="<?php echo $iconAppItem['alt']; ?>"></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<footer>
    <div class="subscribe">
        <div class="container">
            <form action="#" id="form" name="form" method="post" enctype="application/x-www-form-urlencoded">
                <input type="text" name="letter" id="letter" placeholder="subscribe newsletter">
                <button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <div class="footer-navigation">
        <div class="container">
            <nav>
                <ul class="footer-navigation-items clearfix">
                    <?php
                    foreach ($data['footerNavigation'] as $footerNavigationItem) {
                        ?>
                        <li>
                            <a href="<?php echo $footerNavigationItem['url']; ?>"><?php echo $footerNavigationItem['title']; ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </nav>
            <p><?php echo $data['footer']; ?><span><?php echo $data['footerSpan']; ?></span><?php echo $data['footerNext']; ?></p>
        </div>
    </div>
</footer>
<div class="wrapper-popup">
    <div class="popup">
        <a href="<?php echo $data['popup']['url']; ?>" class="close-popup"><?php echo $data['popup']['title']; ?></a>
        <p><?php echo $data['popup']['text']; ?></p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/main.js"></script>
</body>
</html>