<?php
session_start();
include("include/header.php");
include("include/siderbar.php");
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
            <form action="handlers/add_user.php" method="post">
            <?php
            if(isset($_SESSION['success'])){
              ?>
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i>Done!</h5>
                 <?php  
                 echo$_SESSION['success'];
                 unset($_SESSION['success']);
                 ?>
                </div>
              
            <?php
            }
            ?>
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control"name="name" id="exampleInputName" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">User Email</label>
                    <input type="email" class="form-control"name="email" id="exampleInputEmail" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">User Password</label>
                    <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add User</button>
                </div>
              </form>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("include/footer.php");

?>