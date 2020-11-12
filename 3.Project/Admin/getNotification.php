<?php
    require('includes/config.php');
    // 2. Khai bao Truy van
    $sql = "SELECT * FROM log ORDER BY time DESC";
    $result = mysqli_query($link, $sql);
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $action = $row['action'];
        $time = $row['time'];


        $users_arr[] = array("0" => $name, "1" => $action, "2" => $time);
    }
    echo json_encode($users_arr);

?>