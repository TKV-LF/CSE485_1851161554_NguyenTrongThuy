<?php
$action = $id = '';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : 'id';

$controller = "HomeController";

//kiem tra nếu file controller không tồn tại trong thư mục thì báo lỗi,
//thực tế có thể chuyển hướng user tới trang not found mà ban jtuwj xây dựng
$pathController = "controllers/$controller.php";
if (!file_exists($pathController)) {
  die("Trang bạn tìm không tồn tại");
}
//import file controller
require_once "$pathController";

//khởi tạo đối tượng của controller
$object = new $controller;
if($action == ""){
  $action = "index";
}

if (!method_exists($object, $action)) {
  die("Không tồn tại phương thức $action của class $controller");
}
$object->$action($id);
