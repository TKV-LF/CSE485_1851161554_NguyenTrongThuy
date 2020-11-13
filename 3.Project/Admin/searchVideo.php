<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    
    require('includes/config.php');
    $sql = "SELECT * FROM videos WHERE title like '$name%'";
    // 2. Khai bao Truy van
    $result = mysqli_query($link, $sql);
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $category = $row['video_type'];
        $embed = substr($row['video_id'],1,70).'....';
        $title = $row['title'];
        $url = $row['thumbnail_url'];


        $users_arr[] = array("0" => $id, "1" => $category, "2" => $embed, "3" => $title ,"4" => $url );
    }
    echo json_encode($users_arr);

?>