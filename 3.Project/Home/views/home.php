<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://mixigaming.com/wp-content/uploads/2019/08/favicon-300x300.jpg">
    <title>From Mixigaming with Love</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" id="google-fonts-style-css" href="https://fonts.googleapis.com/css?family=VT323%3A400%7CCutive+Mono%3A400%7COpen+Sans%3A300italic%2C400%2C400italic%2C600%2C600italic%2C700%7CRoboto%3A300%2C400%2C400italic%2C500%2C500italic%2C700%2C900&amp;ver=9.8" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/side-bar.css">
    <link rel="stylesheet" href="/assets/css/nav.css">
    <link rel="stylesheet" href="/assets/css/codingui.css">
</head>


<body style="background-color: #111;">

    <?php
      include "includes/navbar.php";
    ?>
    <section id="headerContent" class="mx-auto backImg" style="padding-bottom: 50px; padding-top:100px;">
        <div class="container mx-auto " style="padding: 0px;width: 100%;">
            <div class="row  mt-md-5">
                <div class="col col-12 col-md-6 position-relative imgBox" style="padding: 0px;">
                    <a href="/watch/<?php echo $newVideos[0][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[0][4]; ?>" style="opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                            style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                        <div class="position-absolute" style="left: 5%;bottom: 7%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;"><?php echo $newVideos[0][1]; ?></label>
                            <h4 style="color: #ffffff;"><?php echo $newVideos[0][3]; ?></h4>
                        </div>
                    </a>
                </div>
                <div class="col col-12 col-md-6">
                    <div class="row" style="height: 100%;width: 100%;margin: 0px ;">
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="/watch/<?php echo $newVideos[1][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[1][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[1][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[1][3]; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="/watch/<?php echo $newVideos[2][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[2][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[2][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[2][3]; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="/watch/<?php echo $newVideos[3][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[3][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[3][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[3][3]; ?></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                            <a href="/watch/<?php echo $newVideos[4][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[4][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
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
    <section class="mainContent pt-5">
        <div class="container pt-2">
            <div class="row">
                <div class="col-12 col-md-8 px-5">
                    <div class="row liveHis">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-8 titleFont float-left">
                                    <a href="/category/livestream-history" class="text-decoration-none"><strong class="text-white">LIVESTREAM HISTORY</strong></a>
                                </div>
                                <div class="col-4 titleFont">
                                    <a href="/category/livestream-history" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <?php
                                    $homeModel = new Home();
                                    $getLiveHis = $homeModel->getCategory('livestream-history');
                                ?>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveHis[0][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveHis[0][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                        <a href="/category/<?php echo $getLiveHis[0][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveHis[0][1]); ?></small></a>
                                        <a href="/watch/<?php echo $getLiveHis[0][5]; ?>" class="text-decoration-none text-white tit"><?php echo $getLiveHis[0][3]; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveHis[1][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveHis[1][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                        <a href="/category/<?php echo $getLiveHis[1][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveHis[1][1]); ?></small></a>
                                        <a href="/watch/<?php echo $getLiveHis[1][5]; ?>" class="text-decoration-none text-white tit"><?php echo $getLiveHis[1][3]; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveHis[2][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveHis[2][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                        <a href="/category/<?php echo $getLiveHis[2][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveHis[2][1]); ?></small></a>
                                        <a href="/watch/<?php echo $getLiveHis[2][5]; ?>" class="text-decoration-none text-white tit"><?php echo $getLiveHis[2][3]; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row talkShow mt-5">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-8 titleFont float-left">
                                    <a href="/category/talkshow" class="text-decoration-none"><strong class="text-white">TALK SHOW</strong></a>
                                </div>
                                <div class="col-4 titleFont">
                                    <a href="/category/talkshow" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <?php
                                    $homeModel = new Home();
                                    $getLiveTalk = $homeModel->getCategory('talkshow');
                                ?>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveTalk[0][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveTalk[0][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                            <a href="/category/<?php echo $getLiveTalk[0][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveTalk[0][1]); ?></small></a>
                                            <a href="/watch/<?php echo $getLiveTalk[0][5]; ?>" class="text-decoration-none text-white tit"><?php echo substr($getLiveTalk[0][3], 0, 71); ?>...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveTalk[1][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveTalk[1][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                            <a href="/category/<?php echo $getLiveTalk[1][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveTalk[1][1]); ?></small></a>
                                            <a href="/watch/<?php echo $getLiveTalk[1][5]; ?>" class="text-decoration-none text-white tit"><?php echo substr($getLiveTalk[1][3], 0, 71); ?>...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveTalk[2][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveTalk[2][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                            <a href="/category/<?php echo $getLiveTalk[2][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveTalk[0][1]); ?></small></a>
                                            <a href="/watch/<?php echo $getLiveTalk[2][5]; ?>" class="text-decoration-none text-white tit"><?php echo substr($getLiveTalk[2][3], 0, 71); ?>...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3 my-md-5">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveTalk[3][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveTalk[3][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                            <a href="/category/<?php echo $getLiveTalk[3][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveTalk[0][1]); ?></small></a>
                                            <a href="/watch/<?php echo $getLiveTalk[3][5]; ?>" class="text-decoration-none text-white tit"><?php echo substr($getLiveTalk[3][3], 0, 71); ?>...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3 my-md-5">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveTalk[4][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveTalk[4][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                            <a href="/category/<?php echo $getLiveTalk[4][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveTalk[0][1]); ?></small></a>
                                            <a href="/watch/<?php echo $getLiveTalk[4][5]; ?>" class="text-decoration-none text-white tit"><?php echo substr($getLiveTalk[4][3], 0, 71); ?>...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3 my-md-5">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveTalk[5][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveTalk[5][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                            <a href="/category/<?php echo $getLiveTalk[5][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveTalk[0][1]); ?></small></a>
                                            <a href="/watch/<?php echo $getLiveTalk[5][5]; ?>" class="text-decoration-none text-white tit"><?php echo substr($getLiveTalk[5][3], 0, 71); ?>...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row liveReac mt-5">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-8 titleFont float-left">
                                    <a href="/category/reaction" class="text-decoration-none"><strong class="text-white">Reaction</strong></a>
                                </div>
                                <div class="col-4 titleFont">
                                    <a href="/category/reaction" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <?php
                                    $homeModel = new Home();
                                    $getLiveReac = $homeModel->getCategory('reaction');
                                ?>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveReac[0][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveReac[0][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                        <a href="/category/<?php echo $getLiveReac[0][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveReac[0][1]); ?></small></a>
                                        <a href="/watch/<?php echo $getLiveReac[0][5]; ?>" class="text-decoration-none text-white tit"><?php echo $getLiveReac[0][3]; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveReac[1][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveReac[1][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                        <a href="/category/<?php echo $getLiveReac[1][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveReac[1][1]); ?></small></a>
                                        <a href="/watch/<?php echo $getLiveReac[1][5]; ?>" class="text-decoration-none text-white tit"><?php echo $getLiveReac[1][3]; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                    <div class="row">
                                        <div class="col-4 col-md-12">
                                            <a href="/watch/<?php echo $getLiveReac[2][5]; ?>" class="text-decoration-none">
                                                <img class="img-fluid" src="<?php echo $getLiveReac[2][4]; ?>" style="width: 100%;opacity: 0.68;">
                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-12">
                                        <a href="/category/<?php echo $getLiveReac[2][6]; ?>" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small><?php echo ucfirst($getLiveReac[2][1]); ?></small></a>
                                        <a href="/watch/<?php echo $getLiveReac[2][5]; ?>" class="text-decoration-none text-white tit"><?php echo $getLiveReac[2][3]; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row socailGroup">
                        <div class="col-12">
                            <h4 class="titleFont text-uppercase group text-center">
                                <a href="https://www.facebook.com/groups/mixigaming/" target="_blank" class="text-decoration-none text-white">Gia nhập bộ tộc mixigaming</a>
                                <p class="text-white">vvvv</p>

                            </h4>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card social-card text-center border row">
                                        <a href="https://www.facebook.com/MixiGaming" class="text-decoration-none text-white mt-3 card-hover" target="_blank" rel="nofollow">
                                            <i class="fa fa-facebook text-primary" style="font-size:24px;"></i>
                                            <div class="col-12 my-2">
                                                <h3><strong>2,501,370</strong></h3>
                                                <small class="">Thành viên</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card social-card text-center border row">
                                        <a href="https://www.facebook.com/MixiGaming" class="text-decoration-none text-white mt-3 card-hover" target="_blank" rel="nofollow">
                                            <i class="fa fa-instagram " style="font-size:24px;"></i>
                                            <div class="col-12 my-2">
                                                <h3><strong>640,675</strong></h3>
                                                <small class="">Người theo dõi</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card social-card text-center border row">
                                        <a href="https://www.facebook.com/MixiGaming" class="text-decoration-none text-white mt-3 card-hover" target="_blank" rel="nofollow">
                                            <i class="fa fa-youtube-play text-danger" style="font-size:24px;"></i>
                                            <div class="col-12 my-2">
                                                <h3><strong>4,170,000</strong></h3>
                                                <small class="">Người theo dõi</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
    <script src="/assets/js/Scroll-To-Top-Button.js"></script>
    <script src="/assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="/assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
    <script src="/assets/js/buttonUp.js"></script>
    <script src="/assets/js/searchButton.js"></script>
    <script src="/assets/js/subnav.js"></script>
</body>
</html>
