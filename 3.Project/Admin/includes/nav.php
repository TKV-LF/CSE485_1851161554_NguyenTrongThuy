<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips " data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="welcome.php" class="logo"><b>Mixigaming</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme"></span>
              </a> -->
            <!-- <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>

            </ul> -->
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <!-- <p class="mx-auto"><a href="#"><img src="https://i.ytimg.com/vi/kMVJfyzDmtM/maxresdefault.jpg" class="img-circle " width="80"></a></p> -->
          <h5 class="centered">TKV</h5>
          <li class="mt">
            <a class="" href="welcome.php" id="home">
              <i class="fa fa-home"></i>
              <span>Welcome</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="#" id="management">
              <i class="fa fa-user"></i>
              <span>Management</span>
              </a>
            <ul class="sub">
              <li><a href="add.php">User Management</a></li>
              <li><a href="#">Post Management</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#" id="content">
              <i class="fa fa-cog"></i>
              <span>Content</span>
              </a>
            <ul class="sub">
              <?php
                $idcheck =  htmlspecialchars($_SESSION["id"]);
                $sql = "SELECT * FROM users where id=$idcheck";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                if ('Admin' == $row["role"]){
                    echo '
                    <li>
                      <a href="register.php">
                        <span>Create Account</span>
                      </a>
                    </li>
                    ';
                }
              ?>
              <li><a href="#">Create Post</a></li>
            </ul>
          </li>



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>