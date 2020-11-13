<?php

require '../config.php';
require '../includes/function.php';
$id = $_GET['id'];
$name = $_GET['name'];
$action = 'đã xóa video có id = ' . $id;
if ($delete = deleteVideo($id)) {
    $sql = "INSERT INTO log(name, action) VALUES('$name', '$action')";
    if (mysqli_query($link, $sql)) {
        header('Location: ../videoManagement.php');
        exit();
    }

} else {
    echo "Cannot delete !!";
}