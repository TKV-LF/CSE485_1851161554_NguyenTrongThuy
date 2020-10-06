<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>From Mixigaming with Love</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="includes/public/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="includes/public/assets/css/style.css">
    <link rel="stylesheet" href="includes/public/assets/css/footer.css">
    <link rel="stylesheet" href="includes/public/assets/css/buttonUp.css">
    <link rel="stylesheet" href="includes/public/assets/css/Off-Canvas-Sidebar-Drawer-Navbar.css">
</head>

<body class="bg-light">
    <?php
        include "includes/public/navbar.php";
    ?>
    <main>
        <div class="container pt-5">
            <div class="row mt-5">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12">
                            <p style="color: #C3C3C3;" class="clk"><a href="index.php" style="color: #C3C3C3;">Home</a> > </p>
                        </div>
                        <div class="col-6">
                            <h1 class="text-uppercase clk" ></h1>
                        </div>
                        <div class="col-12">
                            <p style="color: #777;">Tổng hợp tất cả <span class="clk"></span> của Mixigaming</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 d-md-block d-none">
                    <button class="border-0 bg-dark text-white">asdsad <i class="fa fa-angle-down"></i></button>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8 col-12">
                </div>
                <div class="col-md-4 col-12">
                    <div class="row nhan">
                        <div class="col-12 p-0" style="border-bottom: 2px solid black">
                            <p class="bg-dark d-inline text-white p-1">VIDEO MỚI</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "includes/public/footer.php";
    ?>
    <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top"  role="button"><i class="fas fa-chevron-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="includes/public/assets/js/Scroll-To-Top-Button.js"></script>
    <script src="includes/public/assets/js/Off-Canvas-Sidebar-Drawer-Navbar.js"></script>
    <script src="includes/public/assets/js/Off-Canvas-Sidebar-Drawer-Navbar-1.js"></script>
    <script src="includes/public/assets/js/buttonUp.js"></script>
    <script src="includes/public/assets/js/searchButton.js"></script>
    <script src="includes/public/assets/js/subnav.js"></script>
    <script type="text/javascript">
        $("#livehis").click(function () { 
           $(".clk").text("LIVESTREAM HISTORY"); 
        });
        $("#vlog").click(function () { 
            $(".clk").text("LIVESTREAM HISTORY");
        });
        $("#talkshow").click(function () { 
            $(".clk").text("LIVESTREAM HISTORY");
        });
        $("#pubg").click(function () { 
            $(".clk").text("LIVESTREAM HISTORY");
        });
        $("#reaction").click(function () { 
            $(".clk").text("LIVESTREAM HISTORY");
        });
        $("#fifa").click(function () { 
            $(".clk").text("LIVESTREAM HISTORY");
        });
        $("#gamekhac").click(function () { 
            $(".clk").html("LIVESTREAM HISTORY");
        });
        $("#csgo").click(function () { 
            $(".clk").html("LIVESTREAM HISTORY");
        });

    </script>
</body>
</html>
