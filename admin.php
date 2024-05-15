<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .abc img {
            width: 100px;
            border-radius: 50%;
        }

        .navbar-expand-lg {
            background-color: #0069c7;
        }

        .navbar-nav {
            font-size: 20px;
        }

        .navbar-nav a {
            color: white;
            text-decoration: none;
        }

        .det {
            position: absolute;
            top: 20px;
            z-index: -1;
        }

        .one {
            position: relative;
            margin-top: 140px;
        }

        .bga{
            background-color: #0069c7;
        }

        .navbar-nav a:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        footer {
            background-color: #0069c7;
        }


        @media screen and (max-width:380px) {
            body{
                overflow-x: hidden;
            }
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid abc">
            <a><img class="ms-lg-5 img-fluid" src="./logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./admin.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./dashboard.php">dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <div class="row justify-content-center">
            
        <?php

session_start();

include('conn.php');

if(isset($_POST['submit'])){
$adminemail = $_POST['cemail'];
$adminpassword = $_POST['cpass'];
$mysql ="SELECT * FROM `adminpage` WHERE `email` = '$adminemail' AND `password` = '$adminpassword'";
$result = mysqli_query($conn,$mysql);
$row = mysqli_num_rows($result);

if($row > 0){
    $row1 = mysqli_fetch_assoc($result);
    $_SESSION['aid']=$row1['id'];
    $_SESSION['Email']=$row1['email'];
    $_SESSION['Password']=$row1['password'];
    header('location:product.php');

}
else{
 ?>
 <script>
         alert("User name & password not match");
 </script>
 <?php
}
}

?>

              <div class="col-lg-4 col-md-10 col-sm-12 col-sm-center">
                <img class="img-fluid det mt-2 ms-lg-5 ps-lg-5 ms-xl-0" src="./admin lugo.jpg" alt="">
                <div class="card one  bga"  style="border-color: #0069c7; border-width: 2px;">
                <form action="" method="POST">    
                <div class="card-body">
                        <div class="form-outline text-light mb-4 pt-3">
                            <h5>My Email</h5>
                            <input type="text" name="cemail" class="form-control form-control-lg"
                                placeholder="Your Email" required/>
                        </div>
                        <div class="form-outline text-light mb-4">
                            <h5>My Password</h5>
                            <input type="password" name="cpass" class="form-control form-control-lg"
                                placeholder="Password" required/>
                        </div>
                        
                        <div class="bot justify-content-center text-center" >
                            <button name="submit" type="submit"  class="btn btn-dark btn-lg">Login</button>
                        </div> 
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <footer class="text-center text-lg-start text-light">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Fertilizers are additional substances supplied to the crops to increase their
                                productivity. These are used by the farmers daily to increase the crop yield. These
                                fertilisers contain essential nutrients required by the plants, including nitrogen,
                                potassium, and phosphorus.
                            </p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pesticidies</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Insecticidies</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Bactericidies</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Herbicidies</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Pakpattan Road, SWL 57000, PAK</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                ashali@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> 92309-7239667</p>
                            <p><i class="fas fa-print me-3"></i> + 01 23456789</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center p-4" style="background-color:#0069c7;">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="#">Fertilizers.com</a>
            </div>
        </footer>
    </div>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>