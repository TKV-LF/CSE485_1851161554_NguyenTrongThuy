<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php

$API_Url = 'https://www.googleapis.com/youtube/v3/';
$API_Key = 'AIzaSyAdXbNcm3kZpGL2JhqiC7_Yt4BgCNIZQJs';

// If you don't know the channel ID see below
$channelId = 'UCA_23dkEYToAc37hjSsCnXA';

$parameter = [
    'id' => $channelId,
    'part' => 'contentDetails',
    'key' => $API_Key,
];
$channel_URL = $API_Url . 'channels?' . http_build_query($parameter);
$json_details = json_decode(file_get_contents($channel_URL), true);

$playlist = $json_details['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

$parameter = [
    'part' => 'snippet',
    'playlistId' => $playlist,
    'maxResults' => '50',
    'key' => $API_Key,
];
$channel_URL = $API_Url . 'playlistItems?' . http_build_query($parameter);
$json_details = json_decode(file_get_contents($channel_URL), true);

$my_videos = [];
foreach ($json_details['items'] as $video) {
    //$my_videos[] = $video['snippet']['resourceId']['videoId'];
    $my_videos[] = array('v_id' => $video['snippet']['resourceId']['videoId'], 'v_name' => $video['snippet']['title']);
}

while (isset($json_details['nextPageToken'])) {
    $nxt_page_URL = $channel_URL . '&pageToken=' . $json_details['nextPageToken'];
    $json_details = json_decode(file_get_contents($nxt_page_URL), true);
    foreach ($json_details['items'] as $video) {
        $my_videos[] = $video['snippet']['resourceId']['videoId'];
    }

}
// echo $my_videos['52']['v_id'];
// print_r($my_videos);
$videoArray = array();
$count = 0;
// print_r($my_videos);

foreach ($my_videos as $row => $video) {
    $embed = 'https://www.youtube.com/embed/' . $video['v_id'] . '?rel=0';
    $thumbnail = 'https://img.youtube.com/vi/' . $video['v_id'] . '/maxresdefault.jpg';
    $videoArray[] = array("v_id" => $video['v_id'], "v_title" => $video['v_name'], "v_thumb" => $thumbnail, "v_embed" => $embed);
    $count += 1;
    if ($count == 50) {
        break;
    }

}
// file_put_contents('array.txt', var_export($videoArray, true));
// for($i = 0; $i <= 1000; $i++){
//     echo $my_videos[$i]['v_id'];
//     $count += 1 ;
// }
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

foreach ($videoArray as $x => $row) {
    $id1 = $row['v_id'];
    $title1 = $row['v_title'];
    $thumb1 = $row['v_thumb'];
    $slug = slugify($title1);
    $embed1 = '<iframe width="560" height="315" src="' . $row['v_embed'] . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    $conn = mysqli_connect("localhost", 'root', '', 'mixigaming');

    $sql = "INSERT INTO videos(video_id, title, thumbnail_url, slug) VALUES('$embed1','$title1', '$thumb1', '$slug')";
    mysqli_query($conn, $sql);

}
header("location: ../index.php");

// print_r(json_encode($my_videos, JSON_UNESCAPED_UNICODE));
?>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>