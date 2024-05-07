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
        <a href="addcategry.php" class="nav-link">Home</a>
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
        <div class="pt-2">


          <div>
            <?php
          

            if(isset($_SESSION['statussuccess'])){
                echo $_SESSION['statussuccess'];
                session_unset();
            }
            if(isset($_SESSION['statuserror'])){
                echo $_SESSION['statuserror'];
                session_unset();
            }

            if(isset($_SESSION['statusrequired'])){
                echo $_SESSION['statusrequired'];
                session_unset();
            }
            ?>
          </div>
            <!-- form start -->
            
            <form class="row g-3" action="addcatecode.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select" name="category" require="Required">
                    <option>select category</option>
                    <option value="electronic">electronic</option>
                    <option value="books">books</option>
                    <option value="cloths">cloths</option>
                    <option value="sports">sports</option>
                    </select>
                </div>

                <div class="col-md-6 form-group pl-2">
                    <label for="product_name" class="form-label">product_name</label>
                    <input type="text" class="form-control" name="product_name" require="Required">
                </div>

                <div class="col-12 form-group">
                    <label for="small_discription" class="form-label">small_discription</label>
                    <input type="text" class="form-control" name="small_discription" require="Required">
                </div>

                <div class="col-12 form-group">
                    <label for="long_discription" class="form-label">long_discription</label>
                    <textarea class="form-control" id="long_discription" name="long_discription" require="Required"></textarea>
                </div>

                <div class="col-md-6 form-group">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" name="price" require="Required">
                </div>

                <div class="col-md-6 form-group">
                    <label for="offerprice" class="form-label">offerprice</label>
                    <input type="text" class="form-control" name="offerprice" require="Required">
                </div>

                <div class="col-md-6 form-group">
                    <label for="tax" class="form-label">tax</label>
                    <input type="text" class="form-control" name="tax" require="Required">
                </div>


                <div class="col-md-6 form-group">
                    <label for="image" class="form-label">image</label>
                    <input type="file" class="form-control" name="image" require="Required">
                </div>

                <div class="col-md-6 form-group">
                    <label for="submit" class="form-label pt-3"></label>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary">
                </div>
              
                </form>
            
            <!-- form-end -->

        </div>
    </div>
</div>










<?php
include("includes/footer.php");
?>