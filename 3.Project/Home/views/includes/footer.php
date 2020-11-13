<section class="instagramImg pt-5">
    <div class="container-fluid">
        <div class="td-instagram-user">
            <h4 class="td-footer-instagram-title text-white text-uppercase text-center">
                Instagram <a class="td-footer-instagram-user-link" href="https://www.instagram.com/dochet1989" target="_blank">@dochet1989</a>
            </h4>
        </div>
        <div class="td-instagram-main td-images-on-row-6 row">
            <div class="td-instagram-element">
                <!-- image -->
                <a href="https://www.instagram.com/p/CGxphUbspao" target="_blank">
                    <img class="td-instagram-image" src="https://instagram.fsgn5-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c314.0.811.811a/s640x640/122557547_163850692067933_7061996118626637654_n.jpg?_nc_ht=instagram.fsgn5-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=zhEX6nWpHDkAX_X5sv8&amp;oh=1faf0ea0b73fb7a59f90606633c1d85c&amp;oe=5FC866F0">
                </a>
                <!-- video icon -->
            </div>
            <!-- number of images to display -->
            <div class="td-instagram-element">
                <!-- image -->
                <a href="https://www.instagram.com/p/CGZ_uOXMCJo" target="_blank">
                    <img class="td-instagram-image" src="https://instagram.fsgn5-5.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c181.0.1078.1078a/s640x640/121500781_670101397268072_143349287220259172_n.jpg?_nc_ht=instagram.fsgn5-5.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=VYCGiDKPrKgAX_oadd7&amp;oh=b1d1f94d6c6f8d36a4a1e77322ebec26&amp;oe=5FC7616C">
                </a>
                <!-- video icon -->
            </div>
            <!-- number of images to display -->
            <div class="td-instagram-element">
                <!-- image -->
                <a href="https://www.instagram.com/p/CF9d_FzMlnh" target="_blank">
                    <img class="td-instagram-image" src="https://instagram.fsgn5-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/120621945_341356080517246_1926758702454206258_n.jpg?_nc_ht=instagram.fsgn5-3.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=2yF6qgG6ABAAX8fkW3T&amp;_nc_tp=24&amp;oh=0fa9723128ad67549cfa93fc289c69da&amp;oe=5FC75C47">
                </a>
                <!-- video icon -->
            </div>
            <!-- number of images to display -->
            <div class="td-instagram-element">
                <!-- image -->
                <a href="https://www.instagram.com/p/CFeVBR9sn57" target="_blank">
                    <img class="td-instagram-image" src="https://instagram.fsgn5-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c142.0.1155.1155a/s640x640/120012984_268665087509026_5982831353614458005_n.jpg?_nc_ht=instagram.fsgn5-3.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=klcWUF6jtrUAX8CZcBR&amp;oh=babd52df715a281c036ff6ac20588d29&amp;oe=5FC86E9D">
                </a>
                <!-- video icon -->
            </div>
            <!-- number of images to display -->
            <div class="td-instagram-element">
                <!-- image -->
                <a href="https://www.instagram.com/p/CFEdTfGMUVx" target="_blank">
                    <img class="td-instagram-image" src="https://scontent-hkg4-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/119114459_987230925034327_2342984187519747968_n.jpg?_nc_ht=scontent-hkg4-1.cdninstagram.com&amp;_nc_cat=107&amp;_nc_ohc=dt3avbeCVPoAX8y6aNJ&amp;_nc_tp=24&amp;oh=46b6814ae6ff15b18ed2b051182852d1&amp;oe=5FC53139">
                </a>
                <!-- video icon -->
            </div>
            <!-- number of images to display -->
            <div class="td-instagram-element">
                <!-- image -->
                <a href="https://www.instagram.com/p/CDQS-qQFxaE" target="_blank">
                    <img class="td-instagram-image" src="https://instagram.fsgn5-3.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/116473519_1276450396030631_2517541555469854672_n.jpg?_nc_ht=instagram.fsgn5-3.fna.fbcdn.net&amp;_nc_cat=111&amp;_nc_ohc=VP3MKH4zKyMAX-fGacM&amp;_nc_tp=24&amp;oh=611a8081c3e430d08cda709ba6584800&amp;oe=5FC5B6D9">
                </a>
                <!-- video icon -->
            </div>
            <!-- number of images to display -->
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="contact pt-4" style="background-color: #141424;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="row phoBien mt-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8 titleFont float-left">
                                <strong class="text-white">VIDEO TIÊU BIỂU</strong></a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <?php 
                                    $homeMode = new Home();
                                    $newVideo1 = $homeMode->newVideos();
                                    $count = 0;
                                    foreach($newVideo1 as $row){
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
                                        if (++$count == 3) break;
                                    }
                                ?>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="row tieuBieu mt-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8 titleFont float-left">
                                <strong class="text-white">VIDEO PHỔ BIẾN</strong>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <?php 
                                    // $homeMode = new Home();
                                    // $newVideo2 = $homeModel->newVideos();
                                    $count = 0;
                                    foreach($newVideo1 as $row){
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
                                        if (++$count == 3) break;
                                    }
                                ?>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="row mt-5">
                    <div class="col-8 titleFont float-left">
                        <strong class="text-white">XEM NHIỀU</strong>
                    </div>
                </div>
                <div class="row">
                        <?php 
                            $homeModel = new Home();
                            $getCount = $homeModel->countVideo();
                            foreach($getCount as $row){
                                echo '
                                    <div class="col-12 mt-3">
                                        <a href="/P/category/'.$row['1'].'" class="link text-light">
                                            <span class="float-left">'.ucfirst($row['0']).'</span>
                                            <span class="float-right">'.$row['2'].'</span>
                                        </a>
                                    </div>';
                            } 
                        ?>
                </div>
            </div>
        </div>
        <hr class="w-75" style="border-bottom: 0.5px solid #333;">
        <div class="about row my-5 pt-2 ">
            <div class="col-md-3 col-12">
                <a href="">
                    <img class="mx-md-3 mx-auto float-md-right" src="https://mixigaming.com/wp-content/uploads/2019/08/logo-mixigaming-300x157.png" alt="">
                </a>
            </div>
            <div class="col-md-5 col-12 text-center text-md-left">
                <div class="row">
                    <h2 class="text-light mx-md-0 mx-auto my-5 px-5 text-md-left">VỀ CHÚNG TÔI</h2>
                </div>
                <div class="row mb-3 px-5">
                    <p class="text-light">From MixiGaming with love . Website chính thức của MixiGaming. Cập nhật tất cả các tin tức, video, vlog đời sống, livestream từ kênh youtube Mixigaming</p>
                </div>
                <div class="row mb-2 px-5">
                    <span class="text-light">Ý kiến phản hồi:  <a href="/p/report/"> here</a></span>
                </div>
                <div class="row mb-5 px-5">
                    <span class="text-light">Hòm thư góp ý:  <a href="mailto:contact@mixigaming.com"> contact@mixigaming.com</a></span>
                </div>

            </div>
            <style>
                .social-share {
                    /* margin-left: -5% !important; */
                    display: flex;
                    justify-content: center;
                }
                
                .social-share a {
                    text-decoration: none;
                }
                
                .social-item {
                    width: 4rem !important;
                    height: 4rem;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    cursor: pointer;
                    margin: 0px 10px;
                    background-color: #1c1c2c;
                }
                
                i {
                    transition: color 0.5s ease;
                }
                
                .behanceH:hover li i {
                    color: black;
                }
                
                .facebookH:hover li i {
                    color: #3b5999;
                }
                
                .twitterH:hover li i {
                    color: #55acee;
                }
                
                .instagramH:hover li i {
                    color: #4db2ec;
                }
                
                .pinterestH:hover li i {
                    color: red;
                }
                
                .youtubeH:hover li i {
                    color: red;
                }
            </style>
            <div class="col-md-4 col-12">
                <div class="row">
                    <h2 class="text-light mb-5 px-5">THEO DÕI CHÚNG TÔI</h2>
                </div>
                <div class="row" style="margin-right:0px !important;">
                    <ul class="social-share pl-4">
                        <a class="behanceH" target="_blank" href="https://www.behance.net/mixigaming">
                            <li class="social-item">
                                <i class="fa fa-behance-square"></i>
                            </li>
                        </a>
                        <a class="facebookH" target="_blank" href="https://www.facebook.com/MixiGaming/">
                            <li class="social-item">
                                <i class="fa fa-facebook-square"></i>
                            </li>
                        </a>
                        <a class="twitterH" target="_blank" href="https://twitter.com/mixigamingvn">
                            <li class="social-item">
                                <i class="fa fa-twitter"></i>
                            </li>
                        </a>
                        <a class="instagramH" target="_blank" href="https://www.instagram.com/dochet1989/">
                            <li class="social-item">
                                <i class="fa fa-instagram"></i>
                            </li>
                        </a>
                        <a class="pinterestH" target="_blank" href="https://www.pinterest.com/Mixigamingvn/">
                            <li class="social-item">
                                <i class="fa fa-pinterest"></i>
                            </li>
                        </a>
                        <a class="youtubeH" target="_blank" href="https://www.youtube.com/channel/UCA_23dkEYToAc37hjSsCnXA">
                            <li class="social-item">
                                <i class="fa fa-youtube-play"></i>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<footer id="myFooter" style="background-color: #141424 !important;">
    <div class="container-fluid">
        <div class="row footer-copyright" style="background-color: #0d0d0d;">
            <div class="d-none d-md-block col-md-4 text-center">
                <p class="pt-2" style="font-family: 'Cutive Mono', monospace;">©Copyright Mixigaming</p>
            </div>
            <div class="col col-12 col-md-8 float-md-right">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col col-3 col-md-2 mx-0 px-0">
                        <p class="pt-2"><a href="#" class="text-uppercase">Giới thiệu</a></p>
                    </div>
                    <div class="col col-3 col-md-2 mx-0 px-0">
                        <p class="pt-2"><a href="#" class="text-uppercase">Chính sách bảo mật</a></p>
                    </div>
                    <div class="col col-3 col-md-2 mx-0 px-0">
                        <p class="pt-2"><a href="#" class="text-uppercase">Điều khoản</a></p>
                    </div>
                    <div class="col col-3 col-md-2 mx-0 px-0">
                        <p class="pt-2"><a href="#" class="text-uppercase">Sitemap</a></p>
                    </div>
                </div>
            </div>
            <div class="col col-12 d-md-none text-center">
                <p class="pt-2" style="font-family: 'Cutive Mono', monospace;">©Copyright Mixigaming</p>
            </div>
        </div>
    </div>
</footer>