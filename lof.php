                                                          <!-- data insert  -->
<?php

include 'conn.php';

if(isset($_POST['value'])){
    $name=$_POST['sname'];
    $pass=$_POST['spass'];
    $email=$_POST['semail'];

    $insert= "INSERT INTO `lofd`(`id`, `sname`, `spass`, `semail`) VALUES ('', '$name', '$pass', '$email')";

    $query= mysqli_query($conn, $insert);
}
?>
                                                        <!-- Data Display  -->
<?php

include 'conn.php';

$display = "SELECT * FROM  `lofd`";
$query =  mysqli_query($conn, $display);
while($result= mysqli_fetch_array($query)){

?>

<?php echo $result['id'];?>
<?php echo$result ['sname'] ?>

<?php
}
?>


                                                            <!-- session for logout  -->
<?php
session_start();
session_destroy();
header('location:admin.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="POST">

             <!-- data -->

             <input type="text" name="sname"> <br>
     </form>
     
</body>
</html>