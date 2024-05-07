<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:login.php");
}
include("includes/header.php");
include("includes/conn/conn.php");
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../admin/viewcategry.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
            <a href="logout.php" class="nav-link align-items-center bg-primary">logout</a>        
      </li>
      
    
    </ul>
</nav>



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ugrasen</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview meenu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addcategry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewcategry.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view category</p>
                </a>
              </li>
            </ul>
          </li>    

          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<div class="content-wrapper">
<div class="container">

<div>
        <?php
        if(isset($_SESSION['status'])){
            echo $_SESSION['status'];
            session_unset();
        }

        if(isset($_SESSION['status'])){
            echo $_SESSION['status'];
            session_unset();
        }

        if(isset($_SESSION['status'])){
            echo $_SESSION['status'];
            session_unset();
        }

        if(isset($_SESSION['statusd'])){
            echo $_SESSION['statusd'];
            session_unset();
        }

        if(isset($_SESSION['statusde'])){
            echo $_SESSION['statusde'];
            session_unset();
        }

        if(isset($_SESSION['already'])){
          echo $_SESSION['already'];
          session_unset();

        }

        if(isset($_SESSION['updated'])){
        echo $_SESSION['updated'];
        session_unset();

        }

        ?>
</div>

<?php
$query="SELECT `id`, `select_category`, `product_name`, `small_discription`, `long_discription`, `price`, `offerprice`, `tax`, `image`, `created_at` FROM `category` WHERE 1";
$queryrun=mysqli_query($conn,$query);
$data=mysqli_num_rows($queryrun);

?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Selected_category</th>
            <th scope="col">Product_name</th>
            <th scope="col">Small_discription</th>
            <th scope="col">Long_discription</th>
            <th scope="col">Price</th>
            <th scope="col">Offerprice</th>
            <th scope="col">Tax</th>
            <th scope="col">Image</th>
            <th colspan="2">operations</th>
        </tr>
    </thead>
    <?php
        while($result=mysqli_fetch_assoc($queryrun)){

    echo "   
    <tbody>
    <tr>
        <td>".$result['id']."</td>
        <td>".$result['select_category']."</td>
        <td>".$result['product_name']."</td>
        <td>".$result['small_discription']."</td>
        <td>".$result['long_discription']."</td>
        <td>".$result['price']."</td>
        <td>".$result['offerprice']."</td>
        <td>".$result['tax']."</td>
        <td><img src='image/".$result['image']."' width='100px' height='100px'></td>
        <td><a href='editcategory.php?id=$result[id]'>Edit</a></td>
        <td><a href='deletecat.php?id=$result[id]'>Delete</a></td>
    </tr>
    </tbody>  ";


        }






         ?>

</table>




<div>
</div>



<?php
include("includes/footer.php");
?>
