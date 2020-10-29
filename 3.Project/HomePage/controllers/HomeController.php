<?php
require_once 'models/Home.php';
class HomeController
{
  public function index()
  {
    //controller gọi model, model sẽ truy vấn dữ liệu và trả về cho controller
    //khởi tạo model book
    $homeModel = new Home();
    $newVideos = $homeModel->newVideos();
    require_once 'views/home.php';
  }

  public function watch(){
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $watchModel = new Home();
    $videos = $watchModel->getVideos($id);
    //import file view tương ứng, xử lý biến $books tại view này
    require_once 'views/watchVideo.php';

  }
}
