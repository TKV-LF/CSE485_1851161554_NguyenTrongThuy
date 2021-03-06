<?php
// Initialize the session
require_once "includes/config.php";
session_start();
$userName = $_SESSION["username"];

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
require 'includes/function.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="https://mixigaming.com/wp-content/uploads/2019/08/favicon-300x300.jpg">
  <title>From Mixigaming with Love</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
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
  <link rel="stylesheet" href="login/css/main.css">
  <link rel="stylesheet" href="login/css/util.css">
  <link rel="stylesheet" href="assets/css/codingui.css">
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
                  <li class="active"><a href="videoManagement.php">Video Management</a></li>
                  <li><a href="userManagement.php">User Management</a></li>
                  <li><a href="register.php">Create Users</a></li>
                </ul>
              </li>
              <li class="">
                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-refresh"></i><span>Sync</span></a>
                <ul class="collapse">
                  <li class="active"><a href="youtube_api/index.php">Sync With Youtube</a></li>
                </ul>
              </li>

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
            <div class="search-box pull-left">
              <input type="text" name="name" id="input" aria-describedby="helpId" placeholder=""">
                            <i class=" ti-search"></i>
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
            <div class="breadcrumbs-area clearfix">
              <h4 class="page-title pull-left">Video</h4>
              <ul class="breadcrumbs pull-left">
                <li><a href="index.html">Home</a></li>
                <li><span>Video Management</span></li>
              </ul>
            </div>
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

        <div class="card mt-5">
          <div class="card-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6">
                  <h4 class="header-title float-left">Video List</h4>
                </div>
                <div class="col-6 mb-2">
                  <button type="button" class="btn btn-success float-right" data-toggle="modal"
                    data-target=".bd-example-modal-lg">Add new video <i class="fa fa-plus-circle"></i></button>

                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <h2 class="text-center my-2">Add New Video</h2>
                        <form action="action/addVideo.php?name=<?php echo $userName; ?>" method="POST"
                          class="mx-5 px-5">
                          <div class="wrap-input100 validate-input" data-validate="Please type">
                            <input type="text" size="40" name="category" class="form-control input100" value=""
                              placeholder="Category">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate="Please type">
                            <input type="text" size="40" name="embed" class="form-control input100" value=""
                              placeholder="Embed">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate="Please type">
                            <input type="text" size="40" name="title" class="form-control input100" value=""
                              placeholder="Title">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate="Please type">
                            <input type="text" size="40" name="thumbnail" class="form-control input100" value=""
                              placeholder="Thumbnail">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            </span>
                          </div>
                          <div class="container-login100-form-btn">
                            <input type="submit" class="btn btn-primary login100-form-btn mb-5" value="Create">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered ">
                <thead class="thead-dark">
                  <tr class="heading-td">

                    <th>No</th>
                    <th>Category</th>
                    <th>Embed</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th colspan="3" class="text-center">Action</th>


                  </tr>
                </thead>
                <?php

$videos = getAllVideos();
foreach ($videos as $row) {
    ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['0']; ?></td>
                    <td><?php echo $row['1']; ?></td>
                    <td><?php echo substr($row['2'], 1, 70) . '....'; ?></td>
                    <td><?php echo $row['3']; ?></td>
                    <td><?php echo $row['4']; ?></td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="" data-toggle="modal" data-target="#modelId">
                        <i class="fa fa-eye"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">View</h5>

                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-4">
                                  <p>ID</p>
                                </div>
                                <div class="col-8">
                                  <input class="w-100" disabled class="pl-3" value="<?php echo $row['0']; ?>"
                                    type="text" name="email" placeholder="" />
                                </div>
                                <div class="col-4 mt-2">
                                  <p>Category</p>
                                </div>
                                <div class="col-8 mt-2">
                                  <input class="w-100" disabled class="pl-3" value="<?php echo $row['1']; ?>"
                                    type="text" name="email" placeholder="" />
                                </div>
                                <div class="col-4 mt-2">
                                  <p>Embed</p>
                                </div>
                                <div class="col-8 mt-2">
                                  <textarea disabled name="" id="" cols="40"
                                    rows="7"><?php echo $row['2']; ?></textarea>
                                </div>
                                <div class="col-4 mt-2">
                                  <p>Title</p>
                                </div>
                                <div class="col-8 mt-2">
                                  <textarea disabled name="" id="" cols="40"
                                    rows="3"><?php echo $row['3']; ?></textarea>
                                </div>
                                <div class="col-4 mt-2">
                                  <p>Thumbnail</p>
                                </div>
                                <div class="col-8 mt-2">
                                  <textarea disabled name="" id="" cols="40"
                                    rows="3"><?php echo $row['4']; ?></textarea>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
            </div>
            </td>
            <td>
              <a href="update.php?id=<?php echo $row['0']; ?>&name=<?php echo $userName; ?>"><i
                  class="fa fa-pencil mr-2"></i></a>
            </td>
            <td>
              <a onclick="confirm_delete()" href="#" class="delete"><i class="fa fa-trash"></i></a>
            </td>

            </tr>
            </tbody>
            <script>
            function confirm_delete() {
              if (confirm("Are you sure delete?") === true) {
                $(".delete").attr("href",
                  "action/delete.php?id=<?php echo $row['0'] ?>&name=<?php echo $userName; ?>"
                );
              } else {
                $(".delete").attr("href", "#");
              }
            }
            </script>
            <?php }?>
            </table>
          </div>

          <div class="pagination_area pull-right mt-5">
            <ul>
              <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main content area end -->
  <!-- footer area start-->
  <footer>
    <div class="footer-area">
      <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
      </p>
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
  <script src="assets/js/ajax.js"></script>
  <script src="assets/js/ajax1.js"></script>

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
  <!-- all pie chart -->
  <!-- others plugins -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script>
  $(document).ready(function() {
    $("#allCheck").click(function() {
      $('input:checkbox').not(this).prop('checked', this.checked);
    });
  });
  </script>

</body>

</html>