<?php
require_once 'Model.php';

class Home extends Model
{
  const TABLE_NAME = 'employees';
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
    $querySelect = "SELECT * FROM `videos` WHERE id='$id'";
    $results = mysqli_query($this->connection, $querySelect);
    $videos = [];
    if (mysqli_num_rows($results) > 0) {
      $videos = mysqli_fetch_all($results);
    }
    $this->closeConnect($this->connection);
    return $videos;

  }
}
