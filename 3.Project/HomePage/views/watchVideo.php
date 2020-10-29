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
    <style>
        iframe {
            width: 100% !important;
            height: 560px !important;
        }

        .link > p > a:hover{
            text-decoration: none;
            color:white;
        }

        .link > p > a, .link > p {
            color: #C3C3C3;
        }
    </style>
</head>

<body style="background-color: rgb(34,34,34);">
    <?php
      include "includes/navbar.php";
      
    ?> 
    <section class="watch mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 link">
                    <p><a href="?">Trang Chủ</a> <small class="text-light">></small> <a href="" ><?php echo ucfirst($videos[0][1]); ?></a><small class="text-light">></small> <?php echo $videos[0][3]; ?></p>
                </div>
                <div class="col-8">
                    <?php echo $videos[0][2]; ?>
                </div>
                <div class="col-4">
                    <small class="text-uppercase text-light"><?php echo $videos[0][1]; ?></small>
                    <h4 class="text-light"><?php echo $videos[0][3]; ?></h4>
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
