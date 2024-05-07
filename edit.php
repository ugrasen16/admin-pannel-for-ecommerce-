<?php
include("includes/conn/conn.php");
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
error_reporting(0);
?>

<?php

$id=$_GET['id'];
$query="SELECT * FROM `users` where `id`=$id";
$queryrun=mysqli_query($conn,$query);
$data=mysqli_num_rows($queryrun);
$result=mysqli_fetch_assoc($queryrun);

$name=$result['name'];
$email=$result['email'];
$phonenumber=$result['number'];
$password=$result['password'];
$address=$result['address'];
$city=$result['city'];
?>

<div class="content-wrapper">
  <div class="container pt-3">
    <form action="" method="post">
    
    <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">name</label>
            <input type="name" class="form-control" id="name" placeholder="enter your name" name="name" value="<?php  echo $name     ?>">
            </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="varchar" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?php  echo $email     ?>">
            </div>

            
            <div class="form-group col-md-6">
            <label for="phone number">phone number</label>
            <input type="number" class="form-control" id="phone number" placeholder="enter your number" name="number" value="<?php  echo $phonenumber     ?>">
            </div>

            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="<?php  echo $password     ?>">
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputAddress2">Address</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address" value="<?php  echo $address     ?>">
        </div>
        <div class="form-row ml-3">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" value="<?php  echo $city     ?>">
            </div>
        </div>    
        <div class="col-md-6">
             <input type="submit" name="submit" class="btn btn-primary">
        </div>       
    </form>  
       
  </div>
</div>

<?php

$name=mysqli_real_escape_string($conn,trim($_POST['name']));
$email=mysqli_real_escape_string($conn,trim($_POST['email']));
$number=mysqli_real_escape_string($conn,trim($_POST['number']));
$password=mysqli_real_escape_string($conn,trim($_POST['password']));
$address=mysqli_real_escape_string($conn,trim($_POST['address']));
$city=mysqli_real_escape_string($conn,trim($_POST['city']));

$query="UPDATE `users` SET `name` = '$name', `email`='$email',`number`='$number',`password`='$password',`address`='$address',`city`='$city' where id='$id'";

  if(isset($_POST['submit'])){
       if($queryrun=mysqli_query($conn,$query)){
        $_SESSION['statusup']="<h3 class='text-success'>your data is succesfully updated</h3>";
?>
         <script>
            window.location.href="register.php";
         </script>
<?php
       }
  }
?>


</div>


<?php
include("includes/footer.php");
?>