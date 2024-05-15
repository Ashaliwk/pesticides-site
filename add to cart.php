<?php
include ('conn.php');
if(isset($_POST['addcart'])){
    $pname = $_POST['pname'];
    $pimage = $_POST['pimage'];
    $pprice = $_POST['pprice'];
    $pquantity = $_POST['pquantity'];


    $select = "SELECT * FROM `add_card` WHERE  pimage = '$pimage'";
    $query = mysqli_query($conn, $select);
    if(mysqli_num_rows($query) > 0){
      ?>
      <script>
         
         alert('Product already added');
         window.location.href = "wpant.php"
      </script>
      <?php
     }
     else{
        $insert = "INSERT INTO `add_card`(`pname`, `pimage`, `pprice`, `pquantity`)
        VALUES ('$pname','$pimage','$pprice','$pquantity')";
        $sql = mysqli_query($conn, $insert);
        header("location: wpant.php");
     }
}

?>