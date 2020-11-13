<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="https://mixigaming.com/wp-content/uploads/2019/08/favicon-300x300.jpg">
  <title> Mixigaming</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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


.subscribe-form {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
}

.subscribe-form-input {
  flex: 1;
  width: 100%;
  outline: none;
  padding: 15px 10px;
  border: 1px solid #eee;
  border-radius: 4px;
  transition: all 0.2s linear;
}

.subscribe-form-input:focus {
  border-color: var(--purple);
}

.subscribe-form-input:focus+.subscribe-form-button {
  background-color: var(--purple);
}

.subscribe-form-button {
  padding: 5px 15px;
  background-color: #999;
  color: white;
  outline: none;
  cursor: pointer;
  font-weight: 500;
  border-radius: 4px;
  flex-shrink: 0;
  transition: all 0.2s linear;
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
}
</style>

<body style="background-color: rgb(34,34,34);">
  <?php
include "includes/navbar.php";

?>
  <div class="container mt-5 pt-5">
    <div class="row mt-5">
      <div class="col-12 link mb-3">
        <p><a href="/P/">Trang Chủ</a> <small class="text-light">></small> Tìm kiếm</p>
      </div>
      <div class="col-12 mb-3">
        <div class="subscribe-form">
          <input type="text" id="search" class="subscribe-form-input" placeholder="Search" />
          <p class="subscribe-form-button">Search</p>
        </div>
      </div>
      <div class="col-12">
        <div class="row" id="searchContent">

        </div>
      </div>
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
  <script src="/P/assets/js/ajax.js"></script>
</body>

</html>