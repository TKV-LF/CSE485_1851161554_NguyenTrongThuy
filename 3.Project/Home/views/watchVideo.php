<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://mixigaming.com/wp-content/uploads/2019/08/favicon-300x300.jpg">
    <title><?php echo $videos[0][3]; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/side-bar.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="/P/assets/css/link.css">
    <link rel="stylesheet" href="/P/assets/css/codingui.css">
    <style>
        iframe {
            width: 100% !important;
            height: 560px !important;
        }

        
    </style>
</head>

<body style="background-color: rgb(34,34,34);">
    <?php
      require_once "includes/navbar.php";
      error_reporting(E_ERROR | E_PARSE);

      
    ?> 
    <section class="watch mt-5 pt-5" style="background-color:#141424 !important;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 link">
                    <p><a href="/P/">Trang Chủ</a> <small class="text-light">></small> <a href="/P/category/<?php echo ucfirst($videos[0][6]); ?>" ><?php echo ucfirst($videos[0][1]); ?></a><small class="text-light"> > </small> <?php echo $videos[0][3]; ?></p>
                </div>
                <div class="col-md-4 col-12 d-md-none d-block">
                    <small class="text-uppercase text-light"><?php echo $videos[0][1]; ?></small>
                    <h1 class="text-light mt-2" ><?php echo $videos[0][3]; ?></h1>
                </div>
                <div class="col-md-8 col-12">
                    <?php echo $videos[0][2]; ?>
                </div>
                <div class="col-md-4 col-12 d-none d-md-block">
                    <small class="text-uppercase text-light"><?php echo $videos[0][1]; ?></small>
                    <h1 class="text-light mt-2" ><?php echo $videos[0][3]; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <?php
        include "includes/footer.php";
     ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/Scroll-To-Top-Button.js"></script>
    <script src="../assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="../assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
    <script src="../assets/js/buttonUp.js"></script>
    <script src="../assets/js/searchButton.js"></script>
    <script src="../assets/js/subnav.js"></script>
</body>
</html>
