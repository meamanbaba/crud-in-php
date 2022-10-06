<?php  include('conn.php'); ?>
<?php
if (isset($_POST["done"])) {
    $q = "UPDATE tab SET name = '$_POST[name]', password='$_POST[password]' where name='$_GET[name]'";
    $query = mysqli_query($con,$q);
    header("location:display.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center>
    <form action="" method="post" style="margin-top:30px;">
<input type="text" name="name" id="name" placeholder = "name"  >
<br><br>
<input type="password" name="password" id="password">
<br><br>
<input type="submit" value="send" name="done"  >
    </form></center>
</body>
</html>