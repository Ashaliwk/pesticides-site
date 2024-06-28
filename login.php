<?php
session_start();
include "conn.php";
if(isset($_POST["submit"])){
    $email=   mysqli_real_escape_string($conn, $_POST['loname']);
    $password=  mysqli_real_escape_string($conn, $_POST['lopass']);

    $select_query = "SELECT * FROM `signup` WHERE `siemail`='$email' AND `sipass`='$password'";

    $result_query = mysqli_query($conn, $select_query);
    $run_result = mysqli_num_rows($result_query);

    if($run_result > 0){
        $started_session = mysqli_fetch_assoc($result_query);
        $_SESSION['bid'] = $started_session['id'];
        $_SESSION['email'] = $started_session['email'];
        $_SESSION['password'] = $started_session['password'];

        header('location:categories.php');

    ?>
    <script>
        alert("login Successful.");
    </script>
    <?php
   }

   else{
    ?>
    <script>
        alert("Email or password is incorrect.");
    </script>
    <?php
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
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
      color: black;
      text-decoration: none;
    }

    .pen{
      color:orangered;
    }

    .navbar-nav a:hover {
      text-decoration: underline;
      cursor: pointer;
    }

    .fff {
      border: 2px solid #0069c7;
    }


    .gradient-custom-2 {
      /* fallback for old browsers */
      background: white;
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }

    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }

    footer {
      background-color: #0069c7;
    }
  </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid abc">
      <a><img class="img-fluid ms-lg-5" src="./LOGO.jpg" alt=""></a>
      <button class="navbar-toggler bg-#0069c7" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="main.php#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./signup.php">Signup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
                  
    include 'conn.php';

                   if(isset($_POST['submit'])){
                   $username = $_POST['loname'];
                   $userpass = $_POST['lopass'];

                   $insert="INSERT INTO `login`(`id`, `loginname`, `loginpass`) 
                   VALUES ('','$username','$userpass')";

                 $query = mysqli_query($conn, $insert);

}    
?>

  <section class=" gradient-form m-2" style="background-color:white">
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xl-10">
          <div class="card fff rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                  <form action="" method="POST">
                  <i class="fa-solid fa-pencil fa-2xl pen mb-3"></i>
                    <h4 class="mt-1 mb-5 pb-1">The Fertilizers Suppliers</h4>
                  </div>
                    <p>Please login to your account</p>
                    <div class="form-outline mb-4">
                      <input type="text" class="form-control" name="loname" placeholder="Enter Your Email" required />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" name="lopass" placeholder="Password" required/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button name="submit" type="submit" class="btn btn-primary btn-block fa-lg mb-3 me-2 p-3" type="button">Log
                        in</button>
                        </form>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button type="button" class="btn btn-outline"> <a href="signup.php">Create new</a> </button>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-dark px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Fertilizers are generally defined as "any material, organic or inorganic,
                    natural or synthetic, which supplies one or more of the chemical elements required for the plant
                    growth." Most fertilizers that are commonly used in agriculture contain the three basic plant
                    nutrients: nitrogen, phosphorus, and potassium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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