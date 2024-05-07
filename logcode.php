<?php
session_start();
include("includes/header.php");
include("includes/conn/conn.php");
?>
<?php

$email=$_POST['email'];
$password=$_POST['password'];


$query="SELECT * FROM `loginuser` where `email`='$email' and `password`='$password'";
$queryrun=mysqli_query($conn,$query);
$data=mysqli_num_rows($queryrun);
$result=mysqli_fetch_assoc($queryrun);

if(isset($_POST['submit'])){
    if(!empty($email)&&!empty($password)){
            if($data>0){
                $_SESSION['role']=$result['role'];
                $_SESSION['login']="yes";

                    if($_SESSION['role']==1){                     
                        $_SESSION['log']="<h2 class='text-success'>you are succesfully login</h2>";
                        header("location:index.php");
                        die();
                    }else{
                        $_SESSION['role']==0;
                        header("location:addcategry.php");
                        die();
                    }
            }else{
                $_SESSION['error']="<h3 class='text-danger'>please enter correct details!</h3>";
                header("location:login.php");
                die();
            }
    }else{
        $_SESSION['empty']="<h5 class='text-danger'>please enter the email and password!<h5>";
        header("location:login.php");
        die();
    }

}







include("includes/footer.php");

?>
