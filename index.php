<?php
include('./config.php');
error_reporting(0);
$error_msg = '';
if(isset($_POST['save'])){
    $first_name = mysqli_real_escape_string($conn,$_POST['fname']);
    $last_name = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $designation = mysqli_real_escape_string($conn,$_POST['designation']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $hobbies = implode(',', $_POST['hobbies']);

    if(empty($first_name) && empty($last_name) && empty($email) && empty($dob) && empty($mobile) && empty($designation) && empty($gender) && empty($hobbies)){
        $error_msg = "*** Please Fill All Fields.";

    }else{
        $insert_data = mysqli_query($conn, "INSERT INTO `user_info`(`first_name`, `last_name`, `email`, `dob`, `mobile`, `designation`, `gender`, `hobbies`) VALUES ('$first_name','$last_name','$email','$dob','$mobile','$designation','$gender','$hobbies')");
        ?>
        <script>
            alert('Dear User!\n Your Form Successfully Submitted.');
            window.location.href = './display.php';
        </script>
        <?php
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>USER FORM FOR EXCELLENCE TECHNOLOGY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        background-color: #e7ebe6;
    }
    input[type="text"]{
        text-transform: capitalize;
    }
</style>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2 class="text-center text-primary">-: User Information :-</h2>
                <a href="./display.php" class="btn btn-success float-right"><i class="fa fa-eye"></i> Show User Data</a>
                <h3 class="text-left text-danger"><?php echo $error_msg; ?></h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="">First Name <span style="color: red;">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="First Name">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="">Last Name <span style="color: red;">*</span></label>
                            <input type="text" name="lname" class="form-control" placeholder="Last Name">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="">Email <span style="color: red;">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="">Date Of Birth <span style="color: red;">*</span></label>
                            <input type="date" name="dob" class="form-control" placeholder="Date Of Birth">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="">Telephone/Mobile <span style="color: red;">*</span></label>
                            <input type="number" name="mobile" class="form-control" placeholder="Telephone/Mobile Only 10 Digit"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="">Designation <span style="color: red;">*</span></label>
                            <input type="text" name="designation" class="form-control" placeholder="Designation">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="">Gender <span style="color: red;">*</span></label><br>
                            <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                        </div>

                        <div class="col-md-8 form-group">
                            <label for="">Hobbies <span style="color: red;">*</span></label><br>
                            <input type="checkbox" name="hobbies[]" value="Book Reading"> Book Reading
                            <input type="checkbox" name="hobbies[]" value="Writting"> Writting
                            <input type="checkbox" name="hobbies[]" value="Coding"> Coding
                            <input type="checkbox" name="hobbies[]" value="Designing"> Designing
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="submit" name="save" value="Submit" class="btn btn-primary float-right w-25">
                        </div>
                    </div>
                </form>
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
</body>

</html>