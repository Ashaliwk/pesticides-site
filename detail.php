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
    <title>detail</title>
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
            <?php
                $check_query = "SELECT * FROM `orderproduct` WHERE cid = $id";
                $check_query_result = mysqli_query($conn, $check_query);

                if(mysqli_num_rows($check_query_result) > 0){
            ?>
            <div class="row pt-5 pb-5 bg-light">
                <div class="col-12 pt-5 pb-5 card">
                    <table class="card-body table lms_table_active table-hover" id="myTable">
                        <h3 class="mb-5 text-center">My Orders</h3>
                        <thead>
                            <tr class="text-center">
                                <th scope="col-lg-2 col-md-2 col-sm-6">Name</th>
                                <th scope="col-lg-2 col-md-2 col-sm-6 ">Phone</th>
                                <th scope="col-lg-2 col-md-2 col-sm-6">Address</th>
                                <th scope="col-lg-2 col-md-2 col-sm-6">Details</th>
                                <th scope="col-lg-2 col-md-2 col-sm-6">Total</th>
                                <th scope="col-lg-2 col-md-2 col-sm-6">Status</th>
                            </tr>
                        </thead>

                        <?php
                            $select_query = "SELECT * FROM `orderproduct` WHERE cid = $id";
                            $run_query = mysqli_query($conn, $select_query);
                            while($result = mysqli_fetch_array($run_query)){
                        ?>
                        <tbody>
                            <tr class="text-lg-center">
                                <td>
                                    <?php echo $result['name']; ?>
                                </td>
                                <td>
                                    <?php echo $result['phone']; ?>
                                </td>
                                <td>
                                    <?php echo $result['address']; ?>
                                </td>
                                <td>
                                    <?php echo $result['details']; ?>
                                </td>
                                <td>
                                    <?php echo $result['totalprice']; ?>
                                </td>
                                <td>
                                    <?php echo $result['status']; ?>
                                    <!-- <span style="color:<?php if($result['status']=='pending'){ echo 'red';} else{echo'green';}?>"><?php echo $result['status']?></span> -->
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        
                    </table>
                    <a class="btn btn-primary" href="./main.php">Payment</a>
                </div>
            </div>
            <?php
                }

                else{
                    ?>
                    <div class="row pt-5 pb-5" style="height: 480px;">
                        <div class="card pt-5 pb-5 text-center">
                            <div class="col-6 offset-3">
                                <h4>You have placed no orders.</h4>
                                <a class="btn btn-outline-success ps-5 pe-5 mt-5" href="main.php">Continue shopping</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>




















</body>
</html>