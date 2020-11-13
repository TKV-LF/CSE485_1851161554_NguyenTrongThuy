<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://mixigaming.com/wp-content/uploads/2019/08/favicon-300x300.jpg">
    <title><?php echo ucfirst($category[0][1]); ?> | Mixigaming</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/P/assets/css/style.css">
    <link rel="stylesheet" href="/P/assets/css/footer.css">
    <link rel="stylesheet" href="/P/assets/css/side-bar.css">
    <link rel="stylesheet" href="/P/assets/css/nav.css">
    <link rel="stylesheet" href="/P/assets/css/link.css">
    <link rel="stylesheet" href="/P/assets/css/codingui.css">
    

</head>
<style>
    .imgCate {
        max-width: 100%;
        max-height: 100%;
    }
</style>

<body style="background-color: rgb(34,34,34);" >
    <?php
      include "includes/navbar.php";
      
      
    ?> 
    <div class="container mt-5 pt-5">
      <div class="row mt-5">
        <div class="col-12 link">
            <p><a href="/P/">Trang Chủ</a> <small class="text-light">></small> <a href="/P/category/<?php echo $category[0][6];  ?>" ><?php echo ucfirst($category[0][1]); ?></a><small class="text-light"> > </small> </p>
        </div>
        
        <?php 
        $count = 0;
        foreach($category as $row){
            echo '<div class="col-12 col-md-4 pr-3 position-relative videoHover my-3"><div class="row"><div class="col-12"><div class="row"><div class="col-12">';
            echo '<a href="/P/watch/'.$row['5'].'" class="text-decoration-none">';
            echo '<img class="img-fluid" src="'.$row['4'].'" style="width: 100%;opacity: 0.68;">';
            echo '<img class="position-absolute playButton d-none d-md-block" src="https://mixigaming.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/images/icons/ico-video-large@2x.png" style="width: 40px;height: 40px;left: 45%;bottom: 45%;">';
            echo '</a></div><div class="col-12">';
            echo '<a href="/P/category/'.$row['6'].'" class="text-decoration-none" style="color:#B5B3CB !important;"><small>'.ucfirst($row['1']).'</small></a><br>';
            echo '<a href="/P/watch/'.$row['5'].'" class="text-decoration-none text-white tit">';
            echo substr($row[3], 0, 71).'...';
            echo '</a></div></div></div></div></div>';
            if (++$count == 12) break;
         }
        ?>

      </div>
    </div>

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
