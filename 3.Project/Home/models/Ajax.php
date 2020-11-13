<?php
if (isset($_POST['search'])) {

    $search = $_POST['search'];
}

$link = mysqli_connect("localhost", 'root', '', 'mixigaming');
// 2. Khai bao Truy van
$sql = "SELECT * FROM videos WHERE title like '%$search%'";
$result = mysqli_query($link, $sql);
$videos_arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $category = $row['video_type'];
    $thumbnail = $row['thumbnail_url'];

    $videos_arr[] = array("0" => $title, "1" => $category, "2" => $thumbnail);
}
echo json_encode($videos_arr);