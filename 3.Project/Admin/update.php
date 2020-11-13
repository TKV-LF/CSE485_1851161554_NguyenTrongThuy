<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center"><strong>Update Video</strong></h3>
        <?php
require_once 'includes/config.php';
$id = $_GET['id'];
$name = $_GET['name'];
$sql = "select * from videos where id = '$id'";
$result = mysqli_query($link, $sql);
foreach (mysqli_fetch_all($result) as $array) {
    ?>
            <form method="POST" action="process_update.php?id=<?php echo $array['0']; ?>&name=<?php echo $name; ?>">
                <div class="form-group">
                    <label for="">Video Type</label>
                    <input type="text" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[1]; ?>" name="videoType">
                </div>
                <!-- <div class="form-group">
                    <label for="">Embed</label>
                    <input type="text" class="form-control" placeholder="" aria-describedby="helpId" value='<?php echo $array[2]; ?>' name="videoId">
                </div> -->
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[3]; ?>" name="title">
                </div>
                <div class="form-group">
                    <label for="">Thumbnail URL</label>
                    <input type="text" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[4]; ?>" name="thumbnailUrl">
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[5]; ?>" name="slug">
                </div>
                <div class="form-group">
                    <label for="">Category Slug</label>
                    <input type="text" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $array[6]; ?>" name="categorySlug">
                </div>


                <button type="submit" class="btn btn-warning mr-3">Update</button>
                <a href="index.php" class="btn btn-primary">Cancel</a>

            </form>
        <?php }
?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>