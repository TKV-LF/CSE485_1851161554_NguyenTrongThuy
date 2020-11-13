<?php
require_once './models/Home.php';
class HomeController
{
  public function index()
  {
    $homeModel = new Home();
    $newVideos = $homeModel->newVideos();
    require_once 'views/home.php';
  }

  public function watch($id){
    $watchModel = new Home();
    $videos = $watchModel->getVideos($id);
    $newVideos = $watchModel->newVideos();
    require_once 'views/watchVideo.php';

  }

  public function category($id){
    $categoryModel = new Home();
    $category = $categoryModel->getCategory($id);
    require_once 'views/category.php';
  }

  public function search(){
    
    require_once 'views/search.php';
  }

  public function report(){
    require_once 'views/report.php';
  }

}
