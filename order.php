<?php
session_start();
if(isset($_SESSION['bid'])){
    $id = $_SESSION['bid'];
    
    include "conn.php";
    $display = "SELECT COUNT(*) As count FROM `cart` WHERE cid = $id";
    $run_cart_query = mysqli_query($conn, $display);
    while($output=mysqli_fetch_assoc($run_cart_query)){
    $result = $output['count'];}
} else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
            </div>
        </div>
    </nav>


    <div class="container">
            <h2 class="pt-5 pb-3 text-lg-start text-md-center text-sm-center">Order details</h2>
            <div class="card">
                <form method="POST" enctype="multipart/form-data" id="signup-form">
                <div class="row card-body">

                <?php
                if(isset($_POST['order'])){
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $city = $_POST['city']; 
                    $zip = $_POST['zip'];
                    $province = $_POST['province'];
                    $country = $_POST['country'];
                    $total = $totalprice;

                    $insert_query = "INSERT INTO `orderproduct`(`cid`, `name`, `phone`, `address`, `city`, `zip`, `province`, `country`, `details`, `totalprice`)
                    VALUES ('$id','$name','$phone','$address','$city','$zip','$province','$country','$details','$total')";
                    $result = mysqli_query($conn, $insert_query);
            
                    $delete_query = " DELETE FROM `cart` WHERE cid=$id";
                    $query = mysqli_query($conn, $delete_query);

                    if($result){ 
                        ?>
                        <script>
                            window.location.href="detail.php";
                            // alert("Your order is placed successfully.");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("Sorry, the order could not be placed.");
                        </script>

                    <?php
                    }
                    }
                    ?>


                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>Basic details</h3>
                        <hr>
                        <div class="border rounded p-3">
                            <div class="form-group">
                                <label><b>Name <span class="text-danger">*</span></b></label>
                                <input type="text" name="name" id="customerName" class="form-control"
                                placeholder="Input full name" title="Please enter your name" required>
                                <span id="errorCustomerName" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3 cart-container">
                                <label><b>Phone <span class="text-danger">*</span></b></label>
                                <input type="text" pattern="[0-9]{4}-[0-9]{7}" name="phone" id="emailAddress" class="form-control"
                                placeholder="Input mobile number" required>
                                <span id="errorEmailAddress" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label><b>Address <span class="text-danger">*</span></b></label>
                                <input type="text" name="address" id="customerAddress" class="form-control"
                                placeholder="House no. / building / street / area" required>
                                <span id="errorCustomerAddress" class="text-danger"></span>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>City <span class="text-danger">*</span></b></label>
                                        <input type="text" name="city" id="customerCity" class="form-control"
                                            placeholder="Input your province" required>
                                        <span id="errorCustomerCity" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Zip <span class="text-danger">*</span></b></label>
                                        <input type="text" name="zip" id="customerZipcode"
                                            class="form-control" placeholder="Input your zip code" required>
                                        <span id="errorCustomerZipcode" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Province <span class="text-danger">*</span></b></label>
                                        <input type="text" name="province" id="customerState" class="form-control"
                                            placeholder="Input your province" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Country <span class="text-danger">*</span></b></label>
                                        <input type="text" name="country" id="customerCountry"
                                            class="form-control" placeholder="Input your country" required>
                                        <span id="errorCustomerCountry" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>Product details</h3>
                        <hr>
                        <div class="card">
                            <table class="card-body table lms_table_active table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Name</th>
                                        <th scope="col">Price (Rs)</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>

                                <?php
                                include 'conn.php';

                                $totalprice = 0;
                                $details = "";
                                $select_query = "SELECT * FROM `cart` WHERE cid = $id";
                                $run_query = mysqli_query($conn, $select_query);
                                while($result = mysqli_fetch_array($run_query)){
                                ?>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $result['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['price']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['quantity']; ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $totalprice += $result['price'] * $result['quantity'];
                                    $details .= $result['name'] . " x" . $result['quantity'] . "\n";
                                    }
                                    ?>

                            </table>
                            <div class="pb-3 ps-5 pe-5 d-flex">
                                <h4>Total</h4>
                                <h4 class="ms-auto">Rs
                                    <?= $totalprice ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-0 p-5">
                    <div class="col">
                        <button type="submit" name="order" class="btn btn-success w-100">Place an order</button>
                    </div>
                </div>
                </form>

            </div>
        </div>







</body>
</html>