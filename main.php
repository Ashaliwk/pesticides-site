<?php
// Define the limit_text function
function limit_text($text, $limit)
{
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesticidies</title>
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
            color: rgb(231, 226, 226);
            text-decoration: none;
        }

        .navbar-nav a:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .dot img {
            height: 90vh;
        }

        .aid .carousel-indicators button {
            border-radius: 50%;
            width: 12px;
            height: 12px;
        }

        .cal h1 {
            color: darkcyan;
        }

        .list {
            list-style: none;
        }

        .fla {
            position: absolute;
            padding-left: 40px;
            padding-right: 60px;
            padding-top: 14px;
            padding-bottom: 14px;
            border-radius: 30px;
            font-size: 20px;
        }

        .fal {
            position: relative;
            margin-left: 150px;
            color: #0069c7;
            background-color: white;
            padding: 17px;
            font-size: 22px;
            border-radius: 30px;
        }

        .card .fok {
            color: gray;
            text-decoration: line-through;
        }

        .lak img {
            box-shadow: 2px 2px 4px gray;
        }

        .bag {
            background-color: whitesmoke;
        }

        .gren {
            background-color: #0069c7;
        }

        .lok img {
            box-shadow: 4px 4px 6px white;
        }

        .cat {
            color: #111112;
        }

        .none .card {
            border: none;
            border-right: 3px solid rgb(211, 211, 211);
            transition: filter 1s;
        }

        .none .card:hover {
            filter: drop-shadow(10px 10px 20px #0069c7);
        }

        .local {
            height: 80vh;
            background-size: cover;
        }

        footer {
            background-color: #0069c7;
        }

        @media screen and (max-width:1492px) {
            * {
                overflow-x: hidden;
            }
        }

        @media screen and (max-width:992px) {
            .dol {
                text-align: center;
                padding-bottom: 30px;
            }
        }

        @media screen and (max-width:1400px) {
            .lak image {
                width: 600px;
            }
        }

        @media screen and (max-width:768px) {
            .lak image {
                width: 300px;
            }
        }

        @media screen and (min-width:1027px) {
            .ali img {
                height: 30vh;
            }
        }

        @media screen and (max-width:1200px) {
            .met img {
                margin-top: 10px;
            }
        }

        @media screen and (max-width:1200px) {
            .nara {
                margin-top: 20px;
            }
        }

        @media screen and (max-width:768px) {
            .local {
                min-height: 30px;
            }
        }
    </style>

</head>

<body>
    <!-- <div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div> -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid abc">
                <a><img class="ms-lg-5" src="logo.jpg" alt=""></a>
                <button class="navbar-toggler bg-#0069c7" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

        <div class="container-fluid aid mt-2">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" class="ms-3" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" class="ms-3" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner active dot">
                    <div class="carousel-item active">
                        <img class="img-fluid w-100" src="./carousel1.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item dot">
                        <img src="./carousel2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item dot">
                        <img src="./carousel3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="container cal none mt-4" id="latest">
            <h1 class="h1 mb-3 text-center">Our Latest Products</h1>
            <div class="row">

                <?php
                include 'conn.php';
                $display = "SELECT * FROM `latestproduct`";
                $query = mysqli_query($conn, $display);
                while ($result = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <a class="mx-auto d-block" href="./categories.php?id=<?php echo $result['id']; ?>"> <img height="200px" class="p-2" src="<?php echo " data/" . $result['limage']; ?>" alt="...">
                            </a>
                            <div class="card-body">
                                <h4>
                                    <?php echo $result['lname'] ?>
                                </h4>
                                <p class="card-text text-align-center">
                                    <?php echo limit_text($result['ldisc'], 8); // Adjust the limit as needed 
                                    ?>
                                </p>

                                <span style="color: orangered;">
                                    <p>
                                        Rs.<?php echo $result['lsale'] ?>
                                    </p>
                                </span>
                                <span class="fok">
                                    <?php echo $result['lprice'] ?>
                                </span>
                                <?php echo $result['ldiscount'] ?> <br>
                                <a href="./login.php" class="btn btn-primary mt-3">Buy Now</a>
                                <a href="categories.php" type="submit" class="btn btn-secondary mt-3 ms-1">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <h1 class="text-center mt-5 mb-4" id="about"> <span style="color: #0069c7;">ABOUT US</span></h1>
        <div class="container-fluid bag mb-5">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-12 col-sm-12 p-4 lak text-md-center">
                        <img class="img-fluid" src="./suncrop-group-office.avif" alt="">
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 mt-5 ms-lg-5 dol">
                        <h1 class="mb-4">WELCOME TO <span style="color:#0069c7;">ESSENCE</span></h1>
                        <p>√ ISO9001, ISO14001, OHSAS18001 Certified</p>
                        <p>√ Pesticide formulating, R&D, sub-packing & exporting</p>
                        <p>√ Over 1000 pesticide formulas in various formulation types</p>
                        <p>√ Customized crop protection products & packaging</p>
                        <p>√ Professional crop protection consulting</p>
                        <p>√ Experienced registration assistant service</p>
                        <button type="button" class="btn btn-primary fla">Learn more</button><i class="fa-solid fa-arrow-right fal"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5 mb-5 met">
            <div class="row">
                <div class="col-lg-2 col-md-4 text-center ali">
                    <img height="50px" class="img-fluid w-100" src="./c1.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img class="img-fluid" src="./col-2.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img class="img-fluid" src="./col-3.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img class="img-fluid" src="./col-4.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img class="img-fluid" src="./col-2.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img class="img-fluid" src="./col-6.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid gren p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 lok">
                        <img class="img-fluid" src="./brand-img_1.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-light ps-lg-5 nara pt-5">
                        <h1>We grow diversity</h1>
                        <p class="lh-3 fs-5">An equal opportunity employer,Ashali Fertilizers welcomes <br> individuals from
                            all the walks of life and celebrates diversity and <br> inclusion in the workplace.We also
                            provides a chance to beginners for gaining experience through internship.</p>
                        <button type="button" class="btn btn-primary fla">Next Steps</button><i class="fa-solid fa-arrow-right fal"></i>
                    </div>
                </div>
            </div>
        </div>
        <table>

            <div class="container-fluid mt-4 none">
                <h1 class="text-center mb-3 cat">Categories</h1>
                <div class="row d-flex mt-4">
                    <?php

                    include 'conn.php';

                    $display = "SELECT * FROM `productrecord`";
                    $query = mysqli_query($conn, $display);
                    while ($result = mysqli_fetch_array($query)) {
                    ?>

                        <div class="col-lg-2 col-md-4 col-sm-12">
                            <div class="card p-2">
                                <img class="col-xl-10 col-lg-8 col-md-6 col-sm-12 img-fluid">
                                <a href="./pcategory2.php?id=<?php echo $result['id']; ?>"> <img height="200px" class="img-fluid mx-auto d-block p-1" src="<?php echo " data/" . $result['simage']; ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                    <h3> <?php echo $result['productname'] ?> </h3>
                                    <span style="color: #0069c7;">
                                        <h6 class="mt-2"> <?php echo limit_text($result['productdiscription'], 4); ?> </h6>
                                    </span>
                                    <div class="bod mt-2">
                                        <span style="color: rgb(254, 91, 31);">
                                            <h3 class="mt-2">
                                                <?php echo $result['productprice'] ?>
                                            </h3>
                                        </span>
                                        <span style="text-decoration: line-through;" class="me-1">
                                            <?php echo $result['productpurchase'] ?>
                                        </span>
                                        <?php echo $result['productdiscount'] ?>
                                        <br>
                                        <div class="text-center">
                                            <a href="./login.php" class="btn btn-primary mt-3">Buy Now</a>
                                            <button type="button" class="btn btn-secondary mt-3 ms-1">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </table>


        <div class="mt-4 local" style="background-image: url(./farmer.jpg);">
            <div class="tyxt text-lg-center text-md-start text-sm-center pt-lg-5 text-light">
                <h1 style="color: #0069c7;">Our Objective</h1>
                <h3> We invite the brightest minds from across Pakistan <br> to join our organization and enhance their
                    abilities<br> in a
                    supportive, collaborative workplace with a culture <br> that prioritizes their growth.</h3>
            </div>
        </div>

        <div class="container-fluid mt-3">
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
                                    ashali12345.9@gmail.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> +92309-7239667</p>
                                <p><i class="fas fa-print me-3"></i> +92301-6529492</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="text-center p-4" style="background-color:#0069c7;">
                    © 2024
                    <a class="text-reset fw-bold" href="#">Fertilizers.com</a>
                </div>
            </footer>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script>
            // alert("Ashali pesticidies");
        </script>



</body>

</html>