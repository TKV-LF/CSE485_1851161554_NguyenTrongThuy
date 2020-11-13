<?php
// Initialize the session
require_once "includes/config.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
if ($_SESSION['role'] != 'Admin') {
    echo '<script>';
    echo 'alert("Bạn không có quyền truy cập");';
    echo '</script>';
    header("location: videoManagement.php");
}
// Include config file
// Define variables and initialize with empty values
$username = $password = $confirm_password = $ho = $ten = $email = $role = "";
$username_err = $password_err = $confirm_password_err = "";
$name = $_SESSION['username'];
$action = 'đã thêm user';
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ho = trim($_POST['ho']);
    $ten = trim($_POST['ten']);
    $email = trim($_POST['email']);
    $role = trim($_POST['role']);

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username,first_name, last_name, email, role, password) VALUES (?,?,?,?,?,?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $ten, $ho, $email, $role, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            $sql1 = "INSERT INTO log(name, action) VALUES('$name', '$action')";
            mysqli_query($link, $sql1);
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: index.php");
            } else {
                echo '<script> alert("Something went wrong. Please try again later.");</script>';
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>From Mixigaming with Love</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/metisMenu.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.min.css">
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="assets/css/typography.css">
  <link rel="stylesheet" href="assets/css/default-css.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- modernizr css -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- preloader area start -->
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <!-- preloader area end -->
  <!-- page container area start -->
  <div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
      <div class="sidebar-header">
        <div class="logo">
          <a href="index.php"><img src="Login/images/img-01.png" alt="logo"></a>
        </div>
      </div>
      <div class="main-menu">
        <div class="menu-inner">
          <nav>
            <ul class="metismenu" id="menu">
              <li class="active">
                <a href="javascript:void(0)" aria-expanded="true"><i
                    class="ti-dashboard"></i><span>Management</span></a>
                <ul class="collapse">
                  <li><a href="videoManagement.php">Video Management</a></li>
                  <li class=""><a href="userManagement.php">User Management</a></li>
                  <li class="active"><a href="register.php">Create Users</a></li>
                </ul>
              </li>
              <li class="">
                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-refresh"></i><span>Sync</span></a>
                <ul class="collapse">
                  <li class="active"><a href="userManagement.php">Sync With Youtube</a></li>
                </ul>
              </li>
              <!-- <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Item level </a></li>
                                    <li><a href="#">Item level </a></li>
                                    <li><a href="#" aria-expanded="true">Item level 1</a>
                                        <ul class="collapse">
                                            <li><a href="#">Item level </a></li>
                                            <li><a href="#">Item level </a></li>
                                            <li><a href="#">Item level </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item level </a></li>
                                </ul>
                            </li> -->
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
      <!-- header area start -->
      <div class="header-area">
        <div class="row align-items-center">
          <!-- nav and search button -->
          <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
              <span></span>
              <span></span>
              <span></span>
            </div>

          </div>
          <!-- profile info & task notification -->
          <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
              <li id="full-view"><i class="ti-fullscreen"></i></li>
              <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

              <li class="settings-btn">
                <i class="ti-settings"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- header area end -->
      <!-- page title area start -->
      <div class="page-title-area">
        <div class="row align-items-center">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
              <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
              <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                <?php echo $_SESSION["username"]; ?> <i class="fa fa-angle-down"></i></h4>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Message</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="reset-password.php">Reset Password</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page title area end -->
      <div class="main-content-inner">
        <!-- sales report area start -->
        <div class="login-area login-s2">
          <div class="container">
            <div class="login-box ">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="login-form-head">
                  <h4>Create Account</h4>
                </div>
                <div class="login-form-body">
                  <div class="form-gp">
                    <label for="exampleInputName1">Tên đăng nhập</label>
                    <input name="username" type="text" id="exampleInputName1">
                    <i class="fa fa-user-o"></i>
                    <div class="text-danger"></div>
                    <span class="help-block"><?php echo $username_err; ?></span>
                  </div>
                  <div class="form-gp">
                    <label for="exampleInputName1">Họ</label>
                    <input name="ho" type="text" id="exampleInputName1" required>
                    <i class="fa fa-user-o"></i>
                    <div class="text-danger"></div>
                  </div>
                  <div class="form-gp">
                    <label for="exampleInputName1">Tên</label>
                    <input name="ten" type="text" id="exampleInputName1" required>
                    <i class="fa fa-user-o"></i>
                    <div class="text-danger"></div>
                  </div>
                  <div class="form-gp">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" id="exampleInputEmail1">
                    <i class="ti-email"></i>
                    <div class="text-danger"></div>
                  </div>
                  <div class="form-gp">

                    <select name="role" class="form-control form-control-sm" required id="select">
                      <option selected="selected">--Role--</option>
                      <option value="Admin">Admin</option>
                      <option value="Author">Mod</option>
                    </select>
                  </div>
                  <div class="form-gp">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input name="password" type="password" id="exampleInputPassword1">
                    <i class="ti-lock"></i>
                    <div class="text-danger"></div>
                    <span class="help-block"><?php echo $password_err; ?></span>
                  </div>
                  <div class="form-gp">
                    <label for="exampleInputPassword2">Nhập lại mật khẩu</label>
                    <input name="confirm_password" type="password" id="exampleInputPassword2">
                    <i class="ti-lock"></i>
                    <div class="text-danger"></div>
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                  </div>
                  <div class="submit-btn-area">
                    <button id="form_submit" type="submit">Tạo <i class="ti-arrow-right"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Live Crypto Price</h4>
                                <div class="cripto-live mt-5">
                                    <ul>
                                        <li>
                                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$876909.00</span></li>
                                        <li>
                                            <div class="icon l">l</div> Litecoin<span><i class="fa fa-long-arrow-up"></i>$29780.00</span></li>
                                        <li>
                                            <div class="icon d">d</div> Dashcoin<span><i class="fa fa-long-arrow-up"></i>$13276.00</span></li>
                                        <li>
                                            <div class="icon b">b</div> Bitcoindash<span><i class="fa fa-long-arrow-down"></i>$5684.890</span></li>
                                        <li>
                                            <div class="icon e">e</div> Euthorium<span><i class="fa fa-long-arrow-down"></i>$3890.98</span></li>
                                        <li>
                                            <div class="icon t">b</div> Tcoin<span><i class="fa fa-long-arrow-up"></i>$750.789</span></li>
                                        <li>
                                            <div class="icon b">b</div> Bitcoin<span><i class="fa fa-long-arrow-up"></i>$325.037</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <!-- <div class="row mt-5">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Latest News</h4>
                                <div class="letest-news mt-5">
                                    <div class="single-post mb-xs-40 mb-sm-40">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                    <div class="single-post">
                                        <div class="lts-thumb">
                                            <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                                        </div>
                                        <div class="lts-content">
                                            <span>Admin Post</span>
                                            <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
      </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
      <div class="footer-area">
        <p>© Copyright 2018. </a>.</p>
      </div>
    </footer>
    <!-- footer area end-->
  </div>
  <!-- page container area end -->
  <!-- offset area start -->
  <div class="offset-area">
    <div class="offset-close"><i class="ti-close"></i></div>
    <ul class="nav offset-menu-tab">
      <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
      <li><a data-toggle="tab" href="#settings">Settings</a></li>
    </ul>
    <div class="offset-content tab-content">
      <div id="activity" class="tab-pane fade in show active">
        <div class="recent-activity notifi" id="notifi">

        </div>
      </div>
      <div id="settings" class="tab-pane fade">
        <div class="offset-settings">
          <h4>General Settings</h4>
          <div class="settings-list">
            <div class="s-settings">
              <div class="s-sw-title">
                <h5>Notifications</h5>
                <div class="s-swtich">
                  <input type="checkbox" id="switch1" />
                  <label for="switch1">Toggle</label>
                </div>
              </div>
              <p>Keep it 'On' When you want to get all the notification.</p>
            </div>
            <div class="s-settings">
              <div class="s-sw-title">
                <h5>Show recent activity</h5>
                <div class="s-swtich">
                  <input type="checkbox" id="switch2" />
                  <label for="switch2">Toggle</label>
                </div>
              </div>
              <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
            </div>
            <div class="s-settings">
              <div class="s-sw-title">
                <h5>Show your emails</h5>
                <div class="s-swtich">
                  <input type="checkbox" id="switch3" />
                  <label for="switch3">Toggle</label>
                </div>
              </div>
              <p>Show email so that easily find you.</p>
            </div>
            <div class="s-settings">
              <div class="s-sw-title">
                <h5>Show Task statistics</h5>
                <div class="s-swtich">
                  <input type="checkbox" id="switch4" />
                  <label for="switch4">Toggle</label>
                </div>
              </div>
              <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
            </div>
            <div class="s-settings">
              <div class="s-sw-title">
                <h5>Notifications</h5>
                <div class="s-swtich">
                  <input type="checkbox" id="switch5" />
                  <label for="switch5">Toggle</label>
                </div>
              </div>
              <p>Use checkboxes when looking for yes or no answers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offset area end -->
  <!-- jquery latest version -->
  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/metisMenu.min.js"></script>
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>

  <!-- start chart js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <!-- start highcharts js -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <!-- start zingchart js -->
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
  zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
  ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <!-- all line chart activation -->
  <script src="assets/js/line-chart.js"></script>
  <!-- all pie chart -->
  <script src="assets/js/pie-chart.js"></script>
  <!-- others plugins -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/ajax.js"></script>
</body>

</html>