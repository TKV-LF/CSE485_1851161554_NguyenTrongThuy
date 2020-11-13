<?php
require_once "includes/config.php";
$id = $_GET['id'];
$name = $_GET['name'];
$action = 'đã sửa video có id = ' . $id;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $videoType = trim(strip_tags($_POST['videoType']));
    // $videoId = trim(strip_tags($_POST['videoId']));
    $title = trim(strip_tags($_POST['title']));
    $thumbnailUrl = trim(strip_tags($_POST['thumbnailUrl']));
    $slug = trim(strip_tags($_POST['slug']));
    $categorySlug = trim(strip_tags($_POST['categorySlug']));

    $sql = "update videos set
    video_type = '$videoType',
    title = '$title', thumbnail_url = '$thumbnailUrl',
    slug='$slug',categoryslug ='$categorySlug'
    where id ='$id';";

    mysqli_query($link, $sql);
    $sql1 = "INSERT INTO log(name, action) VALUES('$name', '$action')";
    mysqli_query($link, $sql1);

    header("Location:index.php");
}