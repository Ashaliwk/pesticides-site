<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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

        #navbarSupportedContent {
            background-color: #0069c7;
        }

        .cel {
            color: orange;
        }

        .bod {
            border-top: 1px solid gray;
        }

        .cql {
            color: white;
            background-color: #0069c7;
        }

        footer {
            margin-top: 100px;
            background-color: #0069c7;
        }

        @media screen and (max-width:720px) {
            .fert {
                margin-top: 40px;
            }
        }

        @media screen and (max-width:780px) {
            .bat {
                margin-top: 60px;
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
                        <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About us</a>
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

    <div class="container">
        <div class="row m-5">
            
        <?php
            
            include 'conn.php';
            
            $ids = $_GET['id'];

            $showquery = "SELECT* FROM `productrecord` WHERE id = $ids";

            $showdata = mysqli_query($conn, $showquery);

            $row = mysqli_fetch_assoc($showdata);
            
           ?>
  
            <div class="col-4">
                <img class="img-fluid" src="<?php echo " data/" . $row ['simage'];?>" class="card-img-top" alt="...">
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12 fert">
                <h2><?php echo $row ['productname']?></h2>
                <i class="fa-solid fa-star fa-xs cel"></i>
                <i class="fa-solid fa-star fa-xs cel"></i>
                <i class="fa-solid fa-star fa-xs cel"></i>
                <i class="fa-solid fa-star fa-xs cel"></i>
                <i class="fa-solid fa-star fa-xs"></i>
                <span style="color: #0069c7;">
                    <h5 class="mt-2"><?php echo $row ['productdiscription'] ?></h5>
                </span>
                <div class="bod mt-4">
                    <span style="color: rgb(254, 91, 31);">
                        <h3 class="mt-3"><?php echo $row['productprice'] ?></h3>
                    </span>
                    <span style="text-decoration: line-through;"><?php echo $row['productpurchase'] ?></span> 
                    <div class="qua mt-4">
                        <h5>product no:<?php echo $row ['id'] ?></h5>
                    </div>
                    <div class="bat mt-4">
                        <button type="submit" class="btn-lg btn-secondary ps-5 pe-5">Buy now</button>
                        <button type="button" class="btn-lg cql ps-4 pe-4">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
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

</body>
</html>