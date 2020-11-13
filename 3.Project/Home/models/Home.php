<?php
require_once 'Model.php';

class Home extends Model
{
  public $connection;


  public function __construct()
  {
    $this->connection = $this->openConnect();
  }

  public function newVideos(){
    $querySelect = "SELECT * FROM `videos` order by published_at desc";
    $results = mysqli_query($this->connection, $querySelect);
    $videos = [];
    if (mysqli_num_rows($results) > 0) {
      $videos = mysqli_fetch_all($results);
    }
    $this->closeConnect($this->connection);
    return $videos;
  }

  public function getVideos($id){
    $querySelect = "SELECT * FROM `videos` WHERE slug='$id'";
    $results = mysqli_query($this->connection, $querySelect);
    $videos = [];
    if (mysqli_num_rows($results) > 0) {
      $videos = mysqli_fetch_all($results);
    }
    // $this->closeConnect($this->connection);
    return $videos;

  }

  public function getCategory($id){
    $querySelect = "SELECT * FROM `videos` WHERE categoryslug = '$id' order by published_at desc";
    $results = mysqli_query($this->connection, $querySelect);
    $videos = [];
    if (mysqli_num_rows($results) > 0) {
      $videos = mysqli_fetch_all($results);
    }
    $this->closeConnect($this->connection);
    return $videos;

  }

  public function countVideo(){
    $querySelect = 'SELECT video_type, categoryslug , COUNT(id) AS soLuongBanGhi FROM videos GROUP BY video_type ORDER BY soLuongBanGhi DESC';
    $results = mysqli_query($this->connection, $querySelect);
    $videos = [];
    if (mysqli_num_rows($results) > 0) {
      $videos = mysqli_fetch_all($results);
    }
    $this->closeConnect($this->connection);
    return $videos;
  }
}
