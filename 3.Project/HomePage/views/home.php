<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>From Mixigaming with Love</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/side-bar.css">
    <link rel="stylesheet" href="assets/css/nav.css">
</head>

<body style="background-color: rgb(34,34,34);">
    <?php
      include "includes/navbar.php";
    ?>
    <section id="headerContent" class="mx-auto" style="margin-bottom: 50px; margin-top:100px;">
        <div class="container-md mx-auto px-5" style="padding: 0px;width: 100%;">
            <div class="row mx-md-5 mt-md-5">
                <div class="col col-12 col-md-6 position-relative imgBox" style="padding: 0px;">
                    <a href="?controller=home&action=watch&id=<?php echo $newVideos[0][0]; ?>"><img class="img-fluid" src="<?php echo $newVideos[0][4]; ?>" style="opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                            style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                        <div class="position-absolute" style="left: 5%;bottom: 7%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;"><?php echo $newVideos[0][1]; ?></label>
                            <h4 style="color: #ffffff;"><?php echo $newVideos[0][3]; ?></h4>
                        </div>
                    </a>
                </div>
                <div class="col col-12 col-md-6">
                    <div class="row" style="height: 100%;width: 100%;margin: 0px ;">
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="?controller=home&action=watch&id=<?php echo $newVideos[1][0]; ?>"><img class="img-fluid" src="<?php echo $newVideos[1][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[1][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[1][3]; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="?controller=home&action=watch&id=<?php echo $newVideos[2][0]; ?>"><img class="img-fluid" src="<?php echo $newVideos[2][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[2][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[2][3]; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="?controller=home&action=watch&id=<?php echo $newVideos[3][0]; ?>"><img class="img-fluid" src="<?php echo $newVideos[3][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[3][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[3][3]; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="?controller=home&action=watch&id=<?php echo $newVideos[4][0]; ?>"><img class="img-fluid" src="<?php echo $newVideos[4][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[4][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[4][3]; ?></h5>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        
        include "includes/footer.php";
     ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Scroll-To-Top-Button.js"></script>
    <script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
    <script src="assets/js/buttonUp.js"></script>
    <script src="assets/js/searchButton.js"></script>
    <script src="assets/js/subnav.js"></script>
</body>
</html>
