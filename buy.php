<?php
session_start();
if(isset($_SESSION['bid'])){
    $id = $_SESSION['bid'];

    include "conn.php";
    $display = "SELECT COUNT(*) As count FROM `cart` WHERE cid = $id";
    $run_cart_query = mysqli_query($conn, $display);
    while($output=mysqli_fetch_assoc($run_cart_query)){
    $result = $output['count'];}
}
 else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>buy</title>
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
        
        @media screen and (max-width:600px) {
            *{
                overflow-x: hidden;
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
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="row pt-5 pb-5">
        <?php   
            $check_query = "SELECT * FROM `cart` WHERE cid = $id";
            $check_query_result = mysqli_query($conn, $check_query);

            if(mysqli_num_rows($check_query_result) > 0){
        ?>
            <div class="d-flex justify-content-between pe-0">
                <div>
                    <h2>My cart</h2>
                </div>
                <div>
                    <a class="btn btn-outline-primary" href="main.php">Continue Shopping</a>
                </div>
            </div>
            <?php
                $select_query = "SELECT * FROM `cart` WHERE cid = $id";
                $run_query = mysqli_query($conn, $select_query);
                while($result = mysqli_fetch_array($run_query)){
            ?>
                <div class="row border border-3 rounded mt-4">
                    <div class="p-3 col-lg-4 col-md-6 col-sm-12">
                        <img height="300px" src="<?php echo "data/" . $result['image'];?>">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-5 text-center">
                        <h3 class="card-text">
                            <?php echo $result['name']; ?>
                        </h3>
                        <h5 class="small text-muted mt-2">
                            <?php echo $result['discription']; ?>
                        </h5>
                        <a href="remove.php?id=<?php echo $result['id']; ?>" data-bs-toggle="tooltip"
                           data-bs-placement="bottom" title="Remove Product" class="text-reset text-decoration-none">
                            <i class="fa-solid fa-trash fa-lg border border-3 rounded border-primary p-3"></i>
                        </a>
                        <a class="ms-2" href="change.php?id=<?php echo $result['id']; ?>" data-bs-toggle="tooltip"
                           data-bs-placement="bottom" title="Edit Product" class="text-reset text-decoration-none">
                            <span><i class="fa-regular fa-pen-to-square fa-xl border border-3 rounded border-dark p-3"></i></span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-5 text-center">
                        <h4 class="card-text text-orange">
                            Rs. <?php echo $result['price']; ?>
                        </h4>
                        <h5 class="card-text">
                            Quantity: <?php echo $result['quantity']; ?>
                        </h5>
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="mt-5 text-lg-end text-md-center text-sm-end pe-0">
                <a class="btn btn-success ps-4 pe-4" href="order.php">Proceed to checkout</a>
            </div>
        </div>
        <?php
            } else {
        ?>
        <div class="row pt-5 pb-5">
            <div class="card pt-5 pb-5 text-center">
                <div class="col-6 offset-3">
                    <h4>No items added in your cart.</h4>
                    <a class="btn btn-outline-success ps-5 pe-5 mt-5" href="main.php">Continue Shopping</a>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>

</body>
</html>