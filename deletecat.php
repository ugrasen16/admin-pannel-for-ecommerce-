<?php
session_start();
include("includes/conn/conn.php");


$id=$_GET['id'];

$query="DELETE FROM `category` WHERE `id`='$id'";
$queryrun=mysqli_query($conn,$query);

if($queryrun){

    $_SESSION['statusd']="<h3 class='text-success'>Your data succesfully deleted</h3>";
    header("location:viewcategry.php");

}else{
    $_SESSION['statusde']="<h3 class='text-danger'>Your data succesfully deleted</h3>";
    header("location:viewcategry.php");
}








?>