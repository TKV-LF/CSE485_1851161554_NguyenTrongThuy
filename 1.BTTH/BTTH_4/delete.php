<?php

    require 'includes/config.php';
    require 'includes/function.php';
    $id = $_GET['id'];
    if($delete = deleteRecord($id)){
      header('Location: index.php');
      exit();
    }
    else {
      echo "Cannot delete !!";
    }



?>
