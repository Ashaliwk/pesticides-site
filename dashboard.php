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
    <title>Dashboard</title>
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

        .navbar-nav a:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .cal .card {
            border: none;
        }

        .cal h1 {
            text-align: center;
            color: darkcyan;
        }

        .card .fok {
            color: gray;
            text-decoration: line-through;
        }

        footer {
            background-color: #0069c7;
        }

        .ghg {
            padding: 30px;
            background-color: chocolate;
            border-radius: 30px;
            width: 330px;
        }

        .ghg a {
            text-decoration: none;
            color: black;
        }

        @media screen and (max-width:1200px) {
            .card {
                margin-top: 40px;
            }
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid abc">
            <a><img class="ms-lg-5 img-fluid" src="./logo.jpg" alt=""></a>
            <button class="navbar-toggler bg-#0069c7" type="button" data-bs-toggle="collapse"
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

    <div class="container mt-5 ghg text-center mb-5">
        <a href="./user.php">
            <h4 class="ten">Admin Panel <i class="fa-solid fa-user fa-2xl"></i> </h4>
        </a>
    </div>
    <hr>

    <div class="container cal pt-sm-5 pt-lg-5 pt-md-5">
        <h1 class="h1 mb-5 text-center">Our Latest Products</h1>
        <div class="row">

            <?php
        include 'conn.php';
               $display = "SELECT * FROM `latestproduct`";
               $query = mysqli_query($conn, $display);
               while($result = mysqli_fetch_array($query)){    
?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <a href="#"> <img height="350px" src="<?php echo " data/" . $result ['limage'];?>"
                        class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h3>
                     <?php echo $result['lname'] ?> <br>
                     <td><a href="delete.php?id=<?php echo $result['id']; ?>"> <i class="fa-solid fa-trash fs-4 ms-2" style="color:#0069c7;"></i></a></td>
                       <td><a href="update.php?id=<?php echo $result['id']; ?>"><i class="far fa-edit ms-3"></i></a> </td>
                        </h3>
                        <p class="card-text text-align-center">
                            <?php echo $result['ldisc'] ?>
                        </p>
                        <span style="color: orangered;">
                            <p>
                                <?php echo $result['lsale'] ?>
                            </p>
                        </span>
                        <span class="fok">
                            <?php echo $result['lprice'] ?>
                        </span>
                        <?php echo $result['ldiscount'] ?> <br>
                    </div>
                </div>
            </div>
            <?php
               }    
              ?>
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