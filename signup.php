<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGNUP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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

    .navbar-nav a:hover {
      text-decoration: underline;
      cursor: pointer;
    }

    .upload{
      color:#0672d0;
    }

    .gradient-custom-3 {

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: white;
    }

    .gradient-custom-4 {
      background: #84fab0;
      background: #0069c7;
    }

    footer {
      background-color:#0069c7;;
    }

    @media screen and (max-width:1500px) {
      footer {
        margin-top: 350px;
      }
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
        <!-- <form class="d-flex ms-lg-5 ps-lg-5">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>

  <section class="vh-100 bg-image mt-5 mb-5">
    <div class="mask d-flex align-items-center h-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-7 col-xl-6 col-sm-12">
            <div class="card" style="border-radius: 15px; border-color: #035eae; border-width: 2px;">
            
            <?php

  include 'conn.php';

            if(isset($_POST['submit'])){
            $firstname = $_POST['sname'];
            $email = $_POST['semail'];
            $password = $_POST['spass'];
            $cpassword = $_POST['confirmpass'];
            $simage = $_FILES['suimuge'];
            $filename = $simage['name'];
            move_uploaded_file($simage['tmp_name'],'data/'.$filename);

               $insert="INSERT INTO `signup`(`id`, `siname`, `siemail`, `sipass`, `siconfirmpass`, `suimage`) 
               VALUES ('', '$firstname', '$email', '$password', '$cpassword', '$filename')";

              $query = mysqli_query($conn, $insert);
  
  }

  ?>

              <div class="card-body pb-sm-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                      <input type="text" name="sname" class="form-control form-control-lg" placeholder="Your Name" required />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" name="semail" class="form-control form-control-lg" placeholder="Your Email" required />
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" name="spass" class="form-control form-control-lg" placeholder="Password" required/>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" name="confirmpass" class="form-control form-control-lg"
                        placeholder="Repeat your password" required/>
                    </div>
                    <Label for=""><h4 class="upload">Upload your image:</h4></Label> <br>
                    <input class="mt-1" type="file" name="suimuge"/>
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2 mt-5" type="checkbox" value="" />
                      <label class="form-check-label mt-5">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button name="submit" type="submit"
                        class="btn btn-primary btn-block btn-lg text-light">Register</button>
                    </div>
                </form>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container-fluid pt-5">
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