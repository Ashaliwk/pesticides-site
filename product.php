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
    <title>Product</title>
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

        footer {
            background-color: #0069c7;
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

    <div class="container mt-5">
    <div class="row d-flex">
    <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
        
    <?php

include 'conn.php';

if(isset($_POST['submit'])){
$prodname = $_POST['lpname'];
$prodsale = $_POST['lpprice'];
$prodprice = $_POST['lppurchase'];        
$proddisc = $_POST['lpdisc'];
$proddiscount = $_POST['discount'];
$limage = $_FILES['limage'];
$filename = $limage['name'];
move_uploaded_file($limage['tmp_name'],'data/'.$filename);

    $insert ="INSERT INTO `latestproduct`(`id`, `lname`, `lsale`, `lprice`, `ldisc`, `ldiscount`, `limage`)
     VALUES ('','$prodname','$prodsale','$prodprice','$proddisc', '$proddiscount','$filename')";

   $query = mysqli_query($conn, $insert);

}
?>
        <div class="row ms-lg-5 ps-lg-5 justify-content-center">
            <h2 class="mb-4 ">Add Record of Latest Products</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Product Name</label>
                <input type="text" name="lpname"> <br><br>

                <label for="">Product sale price</label>
                <input type="number" name="lpprice"> <br><br>

                <label for="">Product Price</label> <hb>
                <input type="number" name="lppurchase"> <br><br>

                <label for="">Product discription</label>
                <input type="text" name="lpdisc"> <br><br>

                <label for="">Product discount</label>
                <input type="text" name="discount"> <br><br>

                <label for="">Product image</label>
                <input type="file" name="limage"> <br><br>

                <div class="ms-lg-5">
                <button name="submit" type="submit" class="btn btn-primary ms-lg-5">Add</button>
                </div>
            </form>
        </div>
     </div>

<div class="col-lg-6 col-md-12 col-sm-12 mt-5">

    <?php

include 'conn.php';

if(isset($_POST['submyt'])){ 
    $productname = $_POST['pname'];
    $productprice = $_POST['sprice'];
    $productpurch = $_POST['spurchase'];
    $productdisc = $_POST['pdisc'];
    $productdiscount = $_POST['pdiscount'];
    $simage = $_FILES['uimage'];
    $filename1 = $simage['name'];
    move_uploaded_file($simage['tmp_name'],'data/'.$filename1);

     $insert="INSERT INTO `productrecord`(`id`, `productname`, `productprice`, `productpurchase`, `productdiscription`, `simage`, `productdiscount`)  
      VALUES (' ', '$productname', '$productprice', '$productpurch', '$productdisc', '$filename1', '$productdiscount')";

$query = mysqli_query($conn, $insert);
}

?>
        <div class="row ms-lg-5 ps-lg-5 justify-content-center">
            <h2 class="mb-4">Add Record of categories</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Product Name</label>
                <input type="text" name="pname"> <br><br>

                <label for="">Product sale price</label>
                <input type="number" name="sprice"> <br><br>

                <label for="">Product Price</label>
                <input type="number" name="spurchase"> <br><br>

                <label for="">Product discription</label>
                <input type="text" name="pdisc"> <br><br>

                <label for="">Product discount</label>
                <input type="text" name="pdiscount"> <br><br>

                <label for="">Product image</label>
                <input type="file" name="uimage"> <br><br>
                <div class="ms-lg-5">
                <button name="submyt" type="submit" class="btn btn-primary ms-lg-5">Add</button>
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