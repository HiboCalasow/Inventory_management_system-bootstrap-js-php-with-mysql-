<?php
 include "db_connect.php";
$sql=mysqli_query($conn,"DELETE  FROM items WHERE itemId='".$_GET['itemId']."'");
header("location:ItemsVeiw.php");
?>