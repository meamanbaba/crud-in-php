<?php include('conn.php'); ?>
<?php 
if(isset($_POST["done"])){
$sql = " INSERT INTO tab (name,password) VALUES ('$_POST[name]','$_POST[password]')";
$query = mysqli_query($con,$sql);
};
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
<input type="submit" value="send" name="done" onclick="val()" >
<!-- <button type="button" name="done" onclick="val()" >save</button> -->
    </form></center>

<script>
 var name = document.getElementById('name');
 var password = document.getElementById('password');
 function val()
 {
     if(name.value = "") 
     {
         alert("name is required");
         name.focus();
     }
     else if(password.value = "") 
     {
        alert("password is required");
     }
    //  password.focus();
 }

</script>

</body>
</html>