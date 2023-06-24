<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=md5($_POST['password']);

    $sql="INSERT INTO `crud` (name,email,mobile,password)
    VALUES('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Crud operations</title>
</head>
    <body>
        <div class="container my-5" id="conta">
            <form method="post">
                <h3 class="text-center my-2">Register</h3>
                <div class="form-group my-2">
                    <label >Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
                </div>
                <div class="form-group my-2">
                    <label >Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
                </div>
                <div class="form-group my-2">
                    <label >Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
                </div>
                <div class="form-group my-2">
                    <label >Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div>

                <button type="submit" class="btn bg-dark my-2 text-light" name="submit">Submit</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>