<?php
  require 'includes/config.php';

  $name =  "";
  $name_err =  "";
  $description = "";
  $salary = 0;
  $gender = 3;
  $date = "";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty(trim($_POST["name"]))){
          $name_err = "Please enter a name.";
      } else{
          $sql = "SELECT id FROM employees WHERE name = ?";

          if($stmt = mysqli_prepare($conn, $sql)){
              mysqli_stmt_bind_param($stmt, "s", $param_name);

              $param_name = trim($_POST["name"]);

              if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);

                  if(mysqli_stmt_num_rows($stmt) == 1){
                      $name_err = "This name is already taken.";
                  } else{
                      $name = trim($_POST["name"]);
                  }
              } else{
                  echo "Oops! Something went wrong. Please try again later.";
              }

              mysqli_stmt_close($stmt);
          }
      }
      if(empty($name_err) ){
          $description = trim( strip_tags( $_POST['description'] ) );
          $salary = trim( strip_tags( $_POST['salary'] ));
          $gender = trim( strip_tags( $_POST['gender'] ));
          $date = trim( strip_tags( $_POST['birthday'] ));

          $sql = "INSERT INTO employees (name, description, gender, salary, birthday) VALUES (?, ?, ?, ?, ? )";

          if($stmt = mysqli_prepare($conn, $sql)){
              mysqli_stmt_bind_param($stmt, "sssss", $param_name, $description, $gender, $salary, $date);

              $param_name = $name;

              if(mysqli_stmt_execute($stmt)){
                  header("location: index.php");
              } else{
                  echo "Something went wrong. Please try again later.";
              }

              mysqli_stmt_close($stmt);
          }
      }

    // Close connection
    mysqli_close($conn);
  }
 ?>



<!doctype html>
<html lang="en">
  <head>
    <title>Create Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row align-center">
            <div class="col-12 col-md-10">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="boder border-success mt-5" >
                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                    <label><strong>Name <span class="text-danger">*</span></strong></label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block"><?php echo $name_err; ?></span>
                </div>
                <div class="form-group">
                    <label for=""><strong>Description</strong></label>
                    <textarea class="form-control" name="description" id="" rows="3" <?php echo $name_err; ?>></textarea>
                </div>
                <div class="form-group">
                  <label for=""><strong>Salary</strong></label>
                  <input type="text" class="form-control" name="salary" aria-describedby="helpId" placeholder="Salary">
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <input type="radio" name="gender" value="1">
                        <input type="radio" name="gender" value="3" class="d-none" checked>
                        <label for="male">Male</label><br>
                    </div>
                    <div class="col-2">
                        <input type="radio"  name="gender" value="0">
                        <label for="female">Female</label><br>
                    </div>

                </div>
                <div class="form-group">
                    <label for="birthday"><strong>Birthday</strong></label>
                    <input type="date" id="birthday" name="birthday" placeholder="YYYY-MM-DD">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    <a class="btn btn-light" href="index.php" role="button">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php
    echo "<h1>$description</h1>";
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
