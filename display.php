<!doctype html>
<html lang="en">
  <head>
    <title>USER DATA FOR EXCELLENCE TECHNOLOGY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

  </head>

  <style>
    body {
        background-color: #e7ebe6;
    }
</style>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="text-center text-primary">-: User Data :-</h3>
                <a href="./index.php" class="btn btn-success float-left"><i class="fa fa-plus"></i> Add User</a>
            </div>
            <div class="card-body">
            <table id="userData" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
            <tr>
              <th>SN</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>D.O.B.</th>
              <th>Mobile No.</th>
              <th>Designation</th>
              <th>Gender</th>
              <th>Hobbies</th>
            </tr>
            </thead>
            <tbody>
              <?php
              include('./config.php');
              $i = 1;
              $sel_user_tbl = mysqli_query($conn, "SELECT * FROM `user_info` ORDER BY `first_name` ASC");
              foreach($sel_user_tbl as $row){
              ?>
              <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['designation'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['hobbies'] ?></td>
              </tr>
              <?php 
              } ?>
            </tbody>

            </table>
            </div>
            <div class="card-footer text-center">
                @ <?php echo date('Y'); ?> Design by <a href="https://vijaybalaghati.tech/">Vijay Amule</a>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  </body>
</html>
<script>
  $(document).ready(function() {
    $('#userData').DataTable();
} );
</script>