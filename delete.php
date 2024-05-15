<?php
include 'conn.php';
$idr=$_GET['id'];

$delete="DELETE FROM `latestproduct` WHERE id={$idr}";

$query=mysqli_query($conn,$delete);
if($query){
    header('location:dashboard.php');
}

?>