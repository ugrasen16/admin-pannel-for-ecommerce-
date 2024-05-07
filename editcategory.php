<?php
session_start();
include("includes/header.php");
include("includes/topbar.php");
include("includes/conn/conn.php");
?>

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
        <?php
        $id=$_GET['id'];

        $query="SELECT * from `category` where `id`='$id'";
        $queryrun=mysqli_query($conn,$query);
        $data=mysqli_num_rows($queryrun);
        $result=mysqli_fetch_assoc($queryrun);

        $id=$result['id'];
        $sc=$result['select_category'];
        $name=$result['product_name'];
        $sd=$result['small_discription'];
        $ld=$result['long_discription'];
        $price=$result['price'];
        $offerprice=$result['offerprice'];
        $tax=$result['tax'];
        $image=$result['image'];
        ?>
        <div>
           
      <?php

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
                <form class="row g-3" action="editcode.php" method="POST" enctype="multipart/form-data">
   
                    <div class="col-md-6 form-group pl-2">
                        <label for="id" class="form-label">id</label>
                        <input type="text"  class="form-control" name="id" readonly value= <?php echo $id  ?>>
                    </div>                 
                    
                    <div class="col-md-4">
                        <label for="select_category" class="form-label">select-category</label>
                        <select id="select_category" class="form-select" name="category">
                        <option><?php echo $sc;?></option>
                        <option value="electronic">electronic</option>
                        <option value="books">books</option>
                        <option value="cloths">cloths</option>
                        <option value="sports">sports</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group pl-2">
                        <label for="product_name" class="form-label">product_name</label>
                        <input type="text" class="form-control" name="product_name" value= <?php echo $name  ?>>
                    </div>
                    <div class="col-12 form-group">
                        <label for="small_discription" class="form-label">small_discription</label>
                        <input type="text" class="form-control" name="small_discription" value= <?php echo $sd  ?> >
                    </div>
                    <div class="col-12 form-group">
                        <label for="long_discription" class="form-label">long_discription</label>
                        <textarea class="form-control" id="long_discription" name="long_discription" ><?php echo $ld  ?></textarea>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="price" class="form-label">price</label>
                        <input type="text" class="form-control" name="price" value= <?php echo $price  ?> >
                    </div>

                    <di class="col-md-6 form-group">
                        <label for="offerprice" class="form-label">offerprice</label>
                        <input type="text" class="form-control" name="offerprice" value= <?php echo $offerprice  ?> >
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="tax" class="form-label">tax</label>
                        <input type="text" class="form-control" name="tax" value= <?php echo $tax  ?>>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" name="image">
                        <input type="text" name="oldimg" value=<?php echo $image  ?>>
                        <img src="<?php echo "image/$image" ?>"  width="100px" height="100px" alt="image">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="update" class="form-label pt-3"></label>
                        <input type="submit" name="update" id="update" class="btn btn-primary">
                    </div>
                
                </form>
                <!-- form-end -->
    

        

        
    </div>
</div>

<?php
include("includes/footer.php");
?>