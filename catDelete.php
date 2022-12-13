<?php
 include "db_connect.php";
$sql=mysqli_query($conn,"DELETE  FROM category WHERE catId='".$_GET['catId']."'");
header("location:catVeiw.php");
?>