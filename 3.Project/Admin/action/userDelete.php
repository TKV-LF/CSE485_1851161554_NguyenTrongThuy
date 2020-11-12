<?php

    require '../config.php';
    require '../includes/function.php';
    $id = $_GET['id'];
    $name = $_GET['name'];
    $action = 'đã xóa user có id = '.$id;
    if($delete = deleteRecord($id)){
      $sql = "INSERT INTO log(name, action) VALUES('$name', '$action')";
      if (mysqli_query($link, $sql)) {
        header('Location: ../userManagement.php');
        exit();
    }
    
    }
    else {
      echo "Cannot delete !!";
    }



?>