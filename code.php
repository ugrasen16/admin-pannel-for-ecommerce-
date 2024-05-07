<?php
include("includes/conn/conn.php");
session_start();




$name=mysqli_real_escape_string($conn,trim($_POST['name']));
$email=mysqli_real_escape_string($conn,trim($_POST['email']));
$phonenumber=mysqli_real_escape_string($conn,trim($_POST['number']));
$password=mysqli_real_escape_string($conn,trim($_POST['password']));
$address=mysqli_real_escape_string($conn,trim($_POST['address']));
$city=mysqli_real_escape_string($conn,trim($_POST['city']));

$query="INSERT INTO `users`(`name`, `email`, `number`, `password`, `address`, `city`) VALUES ('$name','$email','$phonenumber','$password','$address','$city')";

if(isset($_POST['submit'])){

  $checkemail="SELECT `email` from `users` where `email`='$email'";
  $checkquery=mysqli_query($conn,$checkemail);
  $emaildata=mysqli_num_rows($checkquery);

     if($emaildata>0){
          $_SESSION['statusemail']="<h2 class='text-danger'>email is already exits*</h2>";
          header("location:register.php");
     }else{
               if(!empty($name)&&!empty($email)&&!empty($phonenumber)&&!empty($password)&&!empty($address)&&!empty($city)){
                    $queryrun=mysqli_query($conn,$query);
                         
                              if($queryrun){
                                   $_SESSION['status']="<h2 class='text-success'>data successfully inserted</h2>";
                                   header("location:register.php");
                                   
                              }else{
                                   $_SESSION['status']="<h2 class='text-danger'>data not inserted error found!</h2>";
                                   header("location:register.php");
                              } 
               
               }else{
                    $_SESSION['required']="<h2 class='text-danger'>all field are required!</h2>";
                    header("location:register.php");
               }
     }

     

}




?>