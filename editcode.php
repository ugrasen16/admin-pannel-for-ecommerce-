<?php
include("includes/conn/conn.php");
session_start();


// product edit code section start
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $select_category=$_POST['category'];
    $product_name=$_POST['product_name'];
    $small_discription=$_POST['small_discription'];
    $long_discription=$_POST['long_discription'];
    $price=$_POST['price'];
    $offerprice=$_POST['offerprice'];
    $tax=$_POST['tax'];
    $newimage=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $oldimg=$_POST['oldimg'];

    if(!$newimage==""){
 
        if($newimage==$oldimage){
            $_SESSION['already']="<h3 class='text-danger'>image is already exist!</h3>";
            header("location:viewcategry.php");
        }else{
            $query="UPDATE `category` SET `id`='$id',`select_category`='$select_category',`product_name`='$product_name',`small_discription`='$small_discription',`long_discription`='$long_discription',`price`='$price',`offerprice`='$offerprice',`tax`='$tax',`image`='$newimage' WHERE id='$id'";   
            $queryrun=mysqli_query($conn,$query);
    
            if($queryrun){
                        move_uploaded_file($tmpname,"image/".$newimage);
                        unlink("image/".$oldimage);
                        $_SESSION['updated']="<h3 class='text-success'>product updated successfully</h3>";
                        header("location:viewcategry.php");
                    }
        }

    }else{
        $query="UPDATE `category` SET `id`='$id',`select_category`='$select_category',`product_name`='$product_name',`small_discription`='$small_discription',`long_discription`='$long_discription',`price`='$price',`offerprice`='$offerprice',`tax`='$tax' WHERE id='$id'";   
        $queryrun=mysqli_query($conn,$query);

        if($queryrun){
                    
                    $_SESSION['updated']="<h3 class='text-success'>product updated successfully</h3>";
                    header("location:viewcategry.php");
                }
    
    }


              
}
    

?>