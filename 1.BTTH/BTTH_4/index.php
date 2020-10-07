<!doctype html>
<html lang="en">
  <head>
    <title>Employee List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row mt-3">
        <div class="col-6 mb-2">
          <h1>Employee List</h1>
        </div>
        <div class="col-6 mb-2">
          <a name="" id="" class="btn btn-success float-right" href="createRecord.php" role="button">+ Add new Employee</a>
        </div>
        <table class="table table-dark table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Description</th>
              <th>Gender</th>
              <th>Salary</th>
              <th>Birthday</th>
              <th>Created_at</th>
              <th>Action</th>
            </tr>
          </thead>
        <?php
          require 'includes/config.php';
          require 'includes/function.php';
          $employees = getAllEmployees();
          foreach ($employees as $row) {
        ?>

            <tbody>
              <tr>
                <td><?php echo $row['0']; ?></td>
                <td><?php echo $row['1']; ?></td>
                <td><?php echo $row['2']; ?></td>
                <td>
                <?php
                  if ($row['3']=='1'){
                    echo 'Male';
                  }
                  else if($row['3']=='0'){
                    echo 'Female';
                  }
                  else {
                    echo '???';
                  }

                ?>
                </td>
                <td><?php echo $row['4']; ?></td>
                <td><?php echo $row['5']; ?></td>
                <td><?php echo $row['6']; ?></td>
                <td>
                  <a href="detail.php?id=<?php echo $row['0']; ?>"><i class="fa fa-eye mr-2"></i></a>
                  <a href="change.php?id=<?php echo $row['0']; ?>"><i class="fa fa-pencil mr-2"></i></a>
                  <a onclick="confirm_delete()" href="#" class="delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          <?php
            }
          ?>
        </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function confirm_delete(){
        if(confirm("Are you sure delete?") === true){
            $(".delete").attr("href", "delete.php?id=<?php echo $row['0'] ?>");
        }else{
          $(".delete").attr("href", "#");
          }
        }

    </script>
  </body>
</html>
