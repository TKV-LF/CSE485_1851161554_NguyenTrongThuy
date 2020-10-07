<?php
    function getAllEmployees(){
        global $conn;
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($conn, $sql);
        $employees = mysqli_fetch_all($result);
        return $employees;
    }

    function viewRecord($id){
        global $conn;
        $sql = "SELECT * FROM employees WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $employees = mysqli_fetch_all($result);
        return $employees;
    }

    function deleteRecord($id){
        global $conn;
        $sql = "DELETE FROM employees WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result = mysqli_query($conn, $sql)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }



?>
