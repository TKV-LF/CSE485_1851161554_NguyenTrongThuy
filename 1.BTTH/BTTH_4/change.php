<?php

  require 'includes/config.php';
  require 'includes/function.php';
  $id = $_GET['id'];
  $employee = viewRecord($id);
  foreach ($employee as $row){
    $name =  $row['1'];
    $description = $row['2'];
    $salary = $row['4'];
    $gender = $row['3'];
    $date = $row['5'];
  }
  

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    global $conn;
    $name = trim( strip_tags( $_POST['name'] ) );
    $description = trim( strip_tags( $_POST['description'] ) );
    $salary = trim( strip_tags( $_POST['salary'] ));
    $gender = trim( strip_tags( $_POST['gender'] ) );
    // $date = trim( strip_tags( $_POST['date'] ) );
    $sql = "UPDATE employees SET name = '$name', description = '$description',gender = '$gender', salary = '$salary', birthday = '$date' where id ='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: index.php');
    exit();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php 
    $id = $_GET['id'];
    $employee = viewRecord($id);
    foreach ($employee as $row){
      $name =  $row['1'];
      $description = $row['2'];
      $gender = $row['3'];
      $salary = $row['4'];
      $date = $row['5'];
    }
  ?>
    <div class="container">
      <div class="row align-center">
            <div class="col-12 col-md-10">
            <h2>Update Record</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$_GET['id']; ?>" method="post" class="boder border-success mt-5" >
                <p>Plese edit the input values and submit to update the record.</p>
                <div class="form-group ">
                    <label><strong>Name <span class="text-danger"></span></strong></label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label for=""><strong>Description</strong></label>
                    <textarea class="form-control" name="description"  rows="3" ><?php echo $description; ?></textarea>
                </div>
                <div class="form-group">
                  <label for=""><strong>Salary</strong></label>
                  <input type="text" class="form-control" name="salary" value="<?php echo $salary; ?>" aria-describedby="helpId" >
                </div>
                <div class="form-group row">
                    <div class="col-2">
                        <input type="radio" name="gender" value="1" <?php if($gender=='1'){echo 'checked';} ?>>
                        <label for="male">Male</label><br>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="gender" value="0" <?php if($gender=='0'){echo 'checked';} ?>>
                        <label for="female">Female</label><br>
                    </div>

                </div>
                <div class="form-group">
                    <label for="birthday"><strong>Birthday</strong></label>
                    <input type="date" name="birthday"  value="<?php echo $date; ?>" min="1997-01-01" max="2030-12-31>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                    <a name="" id="" class="btn btn-light border" href="index.php" role="button">Cancel</a>
                </div>
            </form>
            </div>
        </div>
        <?php
            
        ?>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
