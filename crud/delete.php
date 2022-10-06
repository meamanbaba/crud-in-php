<?php
include('conn.php');
$name = $_GET['name'];
$q = "delete  from tab where name = '$name'";
$query = mysqli_query($con,$q);
header('location:display.php');
?>