<?php
include("includes/conn/conn.php");
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$query="DELETE FROM `users` WHERE `id`='$id'";


if($_GET['id']){
   
    $queryrun=mysqli_query($conn,$query);
    header("location:register.php");
}else{
    echo "delete data error";
    header("location:register.php");
}



?>



</body>
</html>