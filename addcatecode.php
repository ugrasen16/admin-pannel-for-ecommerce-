<?php
session_start();
include("includes/conn/conn.php");
?>
<?php

if(isset($_POST['submit'])){

    $select_category=mysqli_real_escape_string($conn,trim($_POST['category']));
    $product_name=mysqli_real_escape_string($conn,trim($_POST['product_name']));
    $small_discription=mysqli_real_escape_string($conn,trim($_POST['small_discription']));
    $long_discription=mysqli_real_escape_string($conn,trim($_POST['long_discription']));
    $price=mysqli_real_escape_string($conn,trim($_POST['price']));
    $offerprice=mysqli_real_escape_string($conn,trim($_POST['offerprice']));
    $tax=mysqli_real_escape_string($conn,trim($_POST['tax']));
    $filename=$_FILES['image'];
  
     
  
  
  
     if(!empty($select_category)&&!empty($product_name)&&!empty($small_discription)&&!empty($long_discription)&&!empty($price)&&!empty($offerprice)&&!empty($tax)&&!empty($filename)){
              $filename=$_FILES['image']['name'];
  
              $tmpname=$_FILES['image']['tmp_name'];
  
              $query="INSERT INTO `category`(`select_category`, `product_name`, `small_discription`, `long_discription`, `price`, `offerprice`, `tax`, `image`) VALUES ('$select_category','$product_name','$small_discription','$long_discription','$price','$offerprice','$tax','$filename')";
              $queryrun=mysqli_query($conn,$query);
              
              if($queryrun){
  
                    move_uploaded_file($tmpname,"image/".$filename);
                    $_SESSION['statussuccess']="<h3 class='text-success'>product successfully uploaded</h3>";
                    header("location:addcategry.php");   
                    
                          
              }else{  
                 
                     $_SESSION['statuserror']="<h3 class='text-danger'>product not uploded error found</h3>";
                     header("location:addcategry.php");   
                    }       
      }else{
          $_SESSION['statusrequired']="<h3 class='text-danger'>all field are required!</h3>";
          header("location:addcategry.php");   
  
      }
  
      
  }
  
  
  
  
  
  
  
  ?> 


?>