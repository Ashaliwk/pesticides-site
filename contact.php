<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
        }

        .abc img {
            width: 100px;
            border-radius: 50%
        }

        #navbarSupportedContent {
            background-color: #0069c7;
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

        footer {
            background-color: #0069c7;
        }

        @media screen and (max-width:426px) {
            .raw {
                margin-top: 20px;
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


    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
            directly. Our team will come back to you within
            a matter of hours to help you.</p>
        <div class="container">
            <div class="row mb-5">
    
    <?php

     include 'conn.php';

      if(isset($_POST['submit'])){
        $cname=$_POST['cname'];
        $cemail=$_POST['cemail'];
        $csubject=$_POST['csubject'];
        $cmessage=$_POST['cmessage'];

         $insert="INSERT INTO `contact`(`id`, `coname`, `coemail`, `comessage`, `cosubject`)  
         VALUES (' ','$cname','$cemail','$csubject','$cmessage')";

                 $query=mysqli_query($conn, $insert);
     }

  ?>
                <div class="col-md-9 mb-md-0 mb-5 col-lg-6">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form ms-lg-3 mb-0">
                                    <input type="text" name="cname" class="form-control" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="col-md-6 raw">
                                <div class="md-form ms-lg-3 mb-0">
                                    <input type="email" name="cemail" class="form-control" placeholder="Your email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 mb-3 ms-lg-3">
                                <div class="md-form mb-0">
                                    <input type="text" name="csubject" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pb-5 ms-lg-3">
                                <div class="md-form">
                                    <textarea type="text" name="cmessage" rows="2" class="form-control md-textarea"
                                        placeholder="Your message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
         <button name="submit" type="submit" class="btn btn-primary btn-block fa-lg mb-3 me-2 p-3" type="button">Send</button>
                        </div>
                </div>
                </form>

                <div class="col-md-3 text-center col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Pakpattan Road, SWL 57000, PAK</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+92309-7239667</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>Ashali@fertilizers.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.099988068227!2d73.11577988192374!3d30.6311395251479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6448f40df1d%3A0xa10fe6fef2ae82f3!2sArain%20House%D8%8C%2088%2F9-L%2C%20Pakpattan%20Road%2C%20Sahiwal%2C%20Sahiwal%20District%2C%20Punjab%2057000%2C%20Pakistan!5e0!3m2!1snl!2s!4v1699502176882!5m2!1snl!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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