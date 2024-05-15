<?php
session_start();
if(!isset($_SESSION['aid'])){
    header('location:admin.php');
}else{
    $aid=$_SESSION['aid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .abc {
            background-color: #0069c7;
            height: 70px;
        }

        .abc {
            font-size: 20px;
        }

        .navbar-nav a {
            color: black;
            text-decoration: none;
        }

        .bord {
            border-radius: 3%;
        }

    </style>

</head>

<body>

    <div class="container-fluid abc text-dark">
        <ul class="nav justify-content-center">
            <li class="nav-item mt-2">
                <a class="nav-link active" aria-current="page" href="./user.php">
                    <h3 class="text-dark"><i class="fa-solid fa-house"></i> Admin Sign Up</h3>
                </a>
            </li>
            <li class="nav-item mt-2 ms-5">
                <a class="nav-link text-dark" href="./userrecord.php">
                    <h3>Admin Record</h3>
                </a>
            </li>
        </ul>
    </div>


    <div class="container mt-5">
        <div class="row justify-content-center">

            <?php

include 'conn.php';

if(isset($_POST['submit'])){ 
$username = $_POST['ufname'];
$lastname = $_POST['ulname'];
$useremail = $_POST['femail'];
$password = $_POST['fpass'];

$insert="INSERT INTO `adminpage`(`id`, `fname`, `lname`, `email`, `password`) 
VALUES (' ', '$username', '$lastname', '$useremail', '$password')";

$query = mysqli_query($conn, $insert);

}
?>
            <div class="col-lg-6 col-md-10 col-sm-12">
                <div class="card bg-dark text-light bord">
                    <div class="card-body">
                        <div class="card-text text-center">
                            <h3>Sign Up</h3>
                        </div>
                        <form action="" method="POST">
                            <div class="form-outline pt-3">
                                <h5>First Name</h5>
                                <input type="text" name="ufname" class="form-control form-control-lg"
                                    placeholder="Enter Your First name" />
                            </div>
                            <div class="form-outline pt-3">
                                <h5>Last Name</h5>
                                <input type="text" name="ulname" class="form-control form-control-lg"
                                    placeholder="Enter Your Last Name" />
                            </div>
                            <div class="form-outline pt-3">
                                <h5>Enter Your Email</h5>
                                <input type="text" name="femail" class="form-control form-control-lg"
                                    placeholder="Enter Your Email" required/>
                            </div>
                            <div class="form-outline pt-3">
                                <h5>Password</h5>
                                <input type="password" name="fpass" class="form-control form-control-lg"
                                    placeholder="Enter Your Password" required/>
                            </div>
                            <div class="mute mt-4 text-center">
                                <!-- name tag type tag sa pehly ayega hamesha -->
                                <button name="submit" type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>