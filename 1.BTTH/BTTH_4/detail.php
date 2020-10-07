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
        <?php 
            require 'includes/config.php';
            require 'includes/function.php';
            $id = $_GET['id'];
            $employee = viewRecord($id);
            foreach ($employee as $row){
                echo "<h2 class = 'my-3'>VIEW RECORD</h2>";
                echo "<h4>ID<h4>";
                echo "<small>".$row[0]."</small>";
                echo "<h4>Name<h4>";
                echo "<small>".$row[1]."</small>";
                echo "<h4>Description<h4>";
                echo "<small>".$row[2]."</small>";
                echo "<h4>Salary<h4>";
                echo "<small>".$row[3]."</small>";
                echo "<h4>Gender<h4>";
                echo "<small>".$row[4]."</small>";
                echo "<h4>Birthday<h4>";
                echo "<small>".$row[5]."</small>";
                echo "<h4>Created_at<h4>";
                echo "<small>".$row[6]."</small>";
                echo '<br><a class="btn btn-primary mt-4" href="index.php" role="button">Back</a>';
            }
        ?>

    </div>
        

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>