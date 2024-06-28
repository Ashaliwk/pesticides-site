<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User record</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
       
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .abc {
            background-color: #0069c7;
            height: 70px;
        }

        .abc {
            font-size: 20px;
        }

        .navbar-nav a {
            color: black;
            text-decoration: none;
        }

        ul{
            list-style: none;
        }
    </style>

</head>
<body>
      
<div class="container-fluid abc text-dark">
        <ul class="nav justify-content-center">
            <li class="nav-item mt-2">
                <a class="nav-link active" aria-current="page" href="./user.php">
                    <h3 class="text-dark"><i class="fa-solid fa-house"></i> Admin Sign Up</h3>
                </a>
            </li>
            <li class="nav-item mt-2 ms-5">
                <a class="nav-link text-dark" href="./userrecord.php">
                    <h3>Admin Record</h3>
                </a>
            </li>
        </ul>
    </div>

           <div class="container-fluid mt-5">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
    
            <?php
        include 'conn.php';
               $display = "SELECT * FROM `adminpage`";
               $query = mysqli_query($conn, $display);
               while($result = mysqli_fetch_array($query)){    
?>
          <ul class="d-flex justify-content-center">
            <li>
              <h2 class="pe-5"> <?php echo $result['id'] ?> </h2>
            </li>
            <div class="ms-5">
                   <li><h4>First Name</h4>
                    <h3 class="text-primary"><?php echo $result['fname']?></h3></li>
                </div>
                <div class="ms-5">
                    <li><h4>Last Name</h4>
                    <h3 class="text-primary"><?php echo $result['lname']?></h3> </li>
                </div>
                <div class="ms-5">
                   <li> <h4>Enter Your Email</h4>
                     <h3 class="text-primary"><?php echo $result['email']?></h3> </li>
                </div>
                <div class="ms-5">
                  <li>  <h4>Password</h4>
                  <h3 class="text-primary"><?php echo $result['password']?></h3> </li>
                </div>
                </ul> <hr>
           <?php
               }
           ?>
            </div>
           </div>
           </div>
      
</body>
</html>