<?php
session_start();
if(!isset($_SESSION['role'])){
 header("location:login.php");
};


include("includes/header.php");
include("includes/topbar.php");
include("includes/conn/conn.php");
include("includes/sidebar.php");



?>
<div class="content-wrapper">

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          
        </button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">input your data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                          <form action="code.php" method="post">
                        
                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="name">name</label>
                                      <input type="name" class="form-control" id="name" placeholder="enter your name" name="name">
                                    </div>

                                  <div class="form-row">
                                    <span></span>
                                    <div class="form-group col-md-6">
                                      <label for="inputEmail4">Email</label>
                                      <input type="varchar" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                                    </div>

                                    
                                    <div class="form-group col-md-6">
                                      <label for="phone number">phone number</label>
                                      <input type="number" class="form-control" id="phone number" placeholder="enter your number" name="number">
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="inputPassword4">Password</label>
                                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                                    </div>
                                      
                                  
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address">
                                  </div>
                                  <div class="form-row ml-3">
                                    <div class="form-group col-md-6">
                                      <label for="inputCity">City</label>
                                      <input type="text" class="form-control" id="inputCity" name="city">
                                    </div>
                                
                                  </div>
                                  
                              
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit">
                          </form>



                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>

            <div>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            
            <?php

              if(isset($_SESSION['required'])){
                echo $_SESSION['required'];
                session_unset();
              }


              if(isset($_SESSION['status'])){
                echo $_SESSION['status'];
                 session_unset();
              }

              if(isset($_SESSION['statusemail'])){
                echo $_SESSION['statusemail'];
                session_unset();
              }

             if(isset($_SESSION['status'])){
               echo $_SESSION['status'];
             }

             if(isset($_SESSION['statuserror'])){
              echo $_SESSION['statuserror'];
              session_unset();
            }

            
            if(isset($_SESSION['statusup'])){
              echo $_SESSION['statusup'];
              session_unset();
            }

            ?>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">registered user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div class="card" >
        <div class="card-header">
          <h3 class="card-title">DataTable with minimal features & hover style</h3>
            <div>
                 <a href="" data-toggle="modal" data-target="#exampleModal" class=" btn btn-primary float-right">add users</a>
            </div>
        </div>
        
      <!-- paginationwork -->
      <?php
      if(!isset($_GET['page'])){
         $page=1;
      }else{
        $page=$_GET['page'];
      }
      
      $query="SELECT * FROM `users`";
      $queryrun=mysqli_query($conn,$query);
      $data=mysqli_num_rows($queryrun);
      $limit=8;
      $no_of_page=ceil($data/$limit);
      $offset=($page-1) * $limit;
      
      ?>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover table">
                <thead>
                    <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">address</th>
                        <th scope="col">city</th>
                        <th scope="col" colspan="2">operation</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                 
                    
                    $query1="SELECT * FROM users LIMIT ".$offset.','.$limit;
                    $queryrun1=mysqli_query($conn,$query1);
                    
                      
                    while($result=mysqli_fetch_assoc($queryrun1)){
                    echo "
                      <tr>
                          <td class='row'>".$result['id']."</td>
                          <td>".$result['name']."</td>
                          <td>".$result['email']."</td>
                          <td>".$result['number']."</td>
                          <td>".$result['address']."</td>
                          <td>".$result['city']."</td>
                          <td><a href='edit.php?id=$result[id]' class='btn btn-primary'>Edit</a></td>
                          <td><a href='delete.php?id=$result[id]' class='btn btn-danger'>delete</a></td>
                      </tr>";
                    }
                  ?>       
                </tbody>
              </table>

            <div class="d-flex align-items-center justify-content-center mt-3">
             <ul class="pagination">
              <?php
                  for($page=1;$page<=$no_of_page;$page++){
                      echo'<li class="page-item"><a href="register.php?page='.$page.'" class="page-link">'.$page.'</a></li>';

                  }
              ?>
             </ul>
            </div>
             

               
        </div>
    </div>
    

</div>

        


<?php

include("includes/footer.php");
                
?>