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
    <link rel="stylesheet" id="google-fonts-style-css" href="https://fonts.googleapis.com/css?family=VT323%3A400%7CCutive+Mono%3A400%7COpen+Sans%3A300italic%2C400%2C400italic%2C600%2C600italic%2C700%7CRoboto%3A300%2C400%2C400italic%2C500%2C500italic%2C700%2C900&amp;ver=9.8"
        type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/P/assets/css/style.css">
    <link rel="stylesheet" href="/P/assets/css/footer.css">
    <link rel="stylesheet" href="/P/assets/css/side-bar.css">
    <link rel="stylesheet" href="/P/assets/css/nav.css">
    <link rel="stylesheet" href="/P/assets/css/codingui.css">
</head>

<body style="background-color: #111;">
    <?php
      include "includes/navbar.php";
    ?>
        <section id="headerContent" class="mx-auto backImg" style="padding-bottom: 50px; padding-top:100px;">
            <div class="container mx-auto " style="padding: 0px;width: 100%;">
                <div class="row  mt-md-5">
                    <div class="col col-12 col-md-6 position-relative imgBox" style="padding: 0px;">
                        <a href="/P/watch/<?php echo $newVideos[0][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[0][4]; ?>" style="opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                            style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                        <div class="position-absolute" style="left: 5%;bottom: 7%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;"><?php echo $newVideos[0][1]; ?></label>
                            <h4 style="color: #ffffff;"><?php echo $newVideos[0][3]; ?></h4>
                        </div>
                    </a>
                    </div>
                    <div class="col col-12 col-md-6">
                        <div class="row" style="height: 100%;width: 100%;margin: 0px ;">
                            <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                                <a href="/P/watch/<?php echo $newVideos[1][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[1][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[1][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[1][3]; ?></h5>
                                </div>
                            </a>
                            </div>
                            <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                                <a href="/P/watch/<?php echo $newVideos[2][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[2][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[2][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[2][3]; ?></h5>
                                </div>
                            </a>
                            </div>
                            <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                                <a href="/P/watch/<?php echo $newVideos[3][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[3][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
                                    style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                <div class="position-absolute" style="left: 5%;bottom: 4%;"><label class="text-uppercase" style="color: #ffffff;background-color: #111111;margin: 0px;font-size: 14px;"><?php echo $newVideos[3][1]; ?></label>
                                    <h5 style="color: #ffffff;"><?php echo $newVideos[3][3]; ?></h5>
                                </div>
                            </a>
                            </div>
                            <div class="col col-3 col-md-6 position-relative imgBox" style="padding: 0px 1px;">
                                <a href="/P/watch/<?php echo $newVideos[4][5]; ?>"><img class="img-fluid" src="<?php echo $newVideos[4][4]; ?>" style="width: 100%;opacity: 0.68;"><img class="position-absolute playButton" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png"
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
                                        <a href="/P/category/livestream-history" class="text-decoration-none"><strong class="text-white">LIVESTREAM HISTORY</strong></a>
                                    </div>
                                    <div class="col-4 titleFont">
                                        <a href="/P/category/livestream-history" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getLiveHis = $homeModel->getCategory('livestream-history');

                                    $count = 0;
                                    foreach($getLiveHis as $row){
                                        echo '
                                            <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4 col-md-12">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8 col-md-12">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 3) break;
                                    }
                                ?>
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
                                        <a href="/P/category/talkshow" class="text-decoration-none"><strong class="text-white">TALK SHOW</strong></a>
                                    </div>
                                    <div class="col-4 titleFont">
                                        <a href="/P/category/talkshow" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getLiveTalk = $homeModel->getCategory('talkshow');
                                    $count = 0;
                                    foreach($getLiveTalk as $row){
                                        echo '
                                            <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4 col-md-12">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8 col-md-12">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 6) break;
                                    }
                                ?>
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
                                        <a href="/P/category/reaction" class="text-decoration-none"><strong class="text-white">Reaction</strong></a>
                                    </div>
                                    <div class="col-4 titleFont">
                                        <a href="/P/category/reaction" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getLiveReac = $homeModel->getCategory('reaction');
                                    $count = 0;
                                    foreach($getLiveReac as $row){
                                        echo '
                                            <div class="col-12 col-md-4 pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4 col-md-12">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8 col-md-12">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 3) break;
                                    }
                                ?>
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
                        <div class="row ma-soi mt-5">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8 titleFont float-left">
                                        <a href="/P/category/ma-soi" class="text-decoration-none"><strong class="text-white">Ma Sói</strong></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getMaSoi = $homeModel->getCategory('ma-soi');
                                    $count = 0;
                                    foreach($getMaSoi as $row){
                                        echo '
                                            <div class="col-12  pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 20px;height: 20px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 5) break;
                                    }
                                ?>
                                </div>
                                <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                    <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                    <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row among-us mt-5">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8 titleFont float-left">
                                        <a href="/P/category/among-us" class="text-decoration-none"><strong class="text-white">Among Us</strong></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getAmong = $homeModel->getCategory('among-us');
                                    $count = 0;
                                    foreach($getAmong as $row){
                                        echo '
                                            <div class="col-12  pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 20px;height: 20px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 1) break;
                                    }
                                ?>
                                </div>
                                <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                    <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                    <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid backImg">
                <div class="container">
                    <div class="row py-5 vlogs">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-8 titleFont float-left">
                                    <a href="/P/category/vlog" class="text-decoration-none"><strong class="text-white">Vlog</strong></a>
                                </div>
                                <div class="col-4 titleFont">
                                    <a href="/P/category/vlog" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <?php 
                                        $homeModel = new Home();
                                        $getLiveVlog = $homeModel->getCategory('livestream-history');

                                        $count = 0;
                                        foreach($getLiveVlog as $row){
                                            echo '
                                                <div class="col-12 col-md-3 pr-3 position-relative videoHover my-3">
                                                    <div class="row">
                                                        <div class="col-4 col-md-12">
                                                            <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                                <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                                            </a>
                                                        </div>
                                                        <div class="col-8 col-md-12">
                                                            <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                            <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                        </div>
                                                    </div>
                                                </div>';
                                            if (++$count == 3) break;
                                        }
                                    ?>
                            </div>
                            <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-2">
                <div class="row">
                    <div class="col-12 col-md-8 px-5">
                        <div class="row tongHop mt-5">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8 titleFont float-left">
                                        <a href="/P/category/game-khac" class="text-decoration-none"><strong class="text-white">Tổng hợp</strong></a>
                                    </div>
                                    <div class="col-4 titleFont">
                                        <a href="/P/category/game-khac" class="text-decoration-none float-right"><strong class="text-white d-md-block d-none">VIEW ALL <i class="fa fa-fighter-jet text-white"></i></strong><i class="fa fa-fighter-jet text-white d-md-none d-block"></i></a>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $count = 0;
                                    foreach($newVideos as $row){
                                        echo '
                                            <div class="col-12 col-md-6 pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4 col-md-12">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width: 100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8 col-md-12">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 16) break;
                                    }
                                ?>
                                </div>
                                <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                    <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                    <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row fifa mt-5">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8 titleFont float-left">
                                        <a href="/P/category/fifa" class="text-decoration-none"><strong class="text-white">Fifa Online 4</strong></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getFifa = $homeModel->getCategory('fifa');
                                    $count = 0;
                                    foreach($getFifa as $row){
                                        echo '
                                            <div class="col-12 pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 20px;height: 20px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        if (++$count == 5) break;
                                    }
                                ?>
                                </div>
                                <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                    <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                    <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row conan mt-5">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-8 titleFont float-left">
                                        <a href="/P/category/conan" class="text-decoration-none"><strong class="text-white">Conan Exiles</strong></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <?php 
                                    $homeModel = new Home();
                                    $getConan = $homeModel->getCategory('conan');
                                    $count = 0;
                                    foreach($getConan as $row){
                                        if(++$count == 1){
                                            echo '
                                                <div class="col-12 pr-3 position-relative videoHover my-3">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                                <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                                <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 20px;height: 20px;left: 45%;bottom: 45%;">
                                                            </a>
                                                        </div>
                                                        <div class="col-12">
                                                            <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                            <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                        </div>
                                                    </div>
                                                </div>';
                                        }
                                        if (++$count >= 2) {
                                            echo '
                                            <div class="col-12 pr-3 position-relative videoHover my-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none">
                                                            <img class="img-fluid" src="'.$row[4].'" style="width:100%;max-height: 160px !important;opacity: 0.68;">
                                                            <img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 20px;height: 20px;left: 45%;bottom: 45%;">
                                                        </a>
                                                    </div>
                                                    <div class="col-8">
                                                        <a href="/P/category/'.$row[6].'" class="text-decoration-none d-none d-md-block" style="color:#B5B3CB !important;"><small>'.ucfirst($row[1]).'</small></a>
                                                        <a href="/P/watch/'.$row[5].'" class="text-decoration-none text-white tit">'.substr($row[3], 0, 71).'...</a>
                                                    </div>
                                                </div>
                                            </div>';
                                        }

                                        if (++$count == 4) break;
                                    }
                                ?>
                                </div>
                                <div class="row ml-1 ml-md-3 mt-1 mt-md-5">
                                    <a name="" id="" class="btn btn-dark mr-2" href="" role="button"><i class="fa fa-angle-left"></i></a>
                                    <a name="" id="" class="btn btn-dark" href="" role="button"><i class="fa fa-angle-right"></i></a>
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
            <script src="/P/assets/js/Scroll-To-Top-Button.js"></script>
            <script src="/P/assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
            <script src="/P/assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
            <script src="/P/assets/js/buttonUp.js"></script>
            <script src="/P/assets/js/searchButton.js"></script>
            <script src="/P/assets/js/subnav.js"></script>
</body>

</html>