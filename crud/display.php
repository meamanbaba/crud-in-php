<?php include('conn.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>view all data</h1>
    <center>


    <table border="2"  >
    
  
            <th>name</th>
            <th>password</th>
      
        <?php 
        $sql = "select * from tab";
            $query = mysqli_query($con,$sql);
            while ($res = mysqli_fetch_array($query)){    
        ?>
       
        
        <tr>
            <td> <?php echo $res['name']; ?> </td>
            <td> <?php echo $res['password']; ?> </td>
            <td> <button> <a href=" update.php?name=<?php echo $res['name']; ?>"> UPDATE </a> </button> </td>
            <td> <button> <a href=" delete.php?name=<?php echo $res['name'];?>"> DELETE </a> </button>  </td>

        </tr>
        <?php } ?>
        
    </table></center>
</body>
</html>