<?php
function slugify($str)
{
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
}
require '../config.php';
$category = $embed = $title = $thumbnail = $slug = $categorySlug = '';
$name = $_GET['name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $category = trim($_POST["category"]);
    $embed = trim($_POST["embed"]);
    $title = trim($_POST["title"]);
    $thumbnail = trim($_POST["thumbnail"]);
    $action = " đã thêm video " . $title;

    $embed = '<iframe width="560" height="315" src="' . $embed . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

    // $slug = slugify($title);
    // $categorySlug = slugify($category);
    $slug = slugify($title);

    $categorySlug = slugify($category);

    // Prepare an insert statement
    $sql = "INSERT INTO videos (video_type, video_id, title, thumbnail_url, slug, categoryslug) VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $category, $embed, $title, $thumbnail, $slug, $categorySlug);

        // Set parameters

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page
            $sql = "INSERT INTO log(name, action) VALUES('$name', '$action')";
            if (mysqli_query($link, $sql)) {
                header("location: ../videoManagement.php");
            }

        } else {
            echo "Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}