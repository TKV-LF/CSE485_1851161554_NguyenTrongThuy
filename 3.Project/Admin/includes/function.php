<?php
    function getAllUsers(){
        global $link;
        $sql = "SELECT * FROM users";
        $result = mysqli_query($link, $sql);
        $users = mysqli_fetch_all($result);
        return $users;
    }

    function viewUser($id){
        global $link;
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        $user = mysqli_fetch_all($result);
        return $user;
    }

    function deleteRecord($id){
        global $link;
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        if ($result = mysqli_query($link, $sql)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    function getAllVideos(){
        global $link;
        $sql = "SELECT * FROM videos";
        $result = mysqli_query($link, $sql);
        $videos = mysqli_fetch_all($result);
        return $videos;
    }

    function viewVideo($id){
        global $link;
        $sql = "SELECT * FROM videos WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        $videos = mysqli_fetch_all($result);
        return $videos;
    }

    function deleteVideo($id){
        global $link;
        $sql = "DELETE FROM videos WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        if ($result = mysqli_query($link, $sql)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }



?>
