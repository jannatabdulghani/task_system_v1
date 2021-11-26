<?php
session_start();
include("../handlers/connect.php");
include("include/header.php");
include("include/siderbar.php");
include("handlers/show_user.php");
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show Users</h1>
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
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">

                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="example1_filter" class="dataTables_filter">
                      <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
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
                  <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row">
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Staus: activate to sort column ascending">Staus</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>

                  </tr>
                  </thead>
              <tbody>
                <?php  while($users=mysqli_fetch_assoc($quryGetUsers)){?>
                    <tr>
                      <td><?= $users['name'];?></td>
                      <td><?= $users['email'];?></td>
                      <td><?php if( $users['statuse']==0){
                        echo"Pending";}
                        else{
                          echo "Approved";
                        }
                      ?></td>
                      <td>
                        <a href="handlers/delete_user.php?userid=<?=$users['id']?>"><i class="fa btn btn-danger fa-trash-alt" aria-hidden="true"></i></a>
                        <a href="handlers/approve_user.php?userid=<?=$users['id']?>" class="p-2"><i class="fa fa-check text-red bg-green p-2 border rounded" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                     <?php
                   }
                ?>
              </tbody>
                  <tfoot>
                  <tr> 
                  <th rowspan="1" colspan="1">Name</th>
                  <th rowspan="1" colspan="1">Email</th>
                  <th rowspan="1" colspan="1">status</th>
                  <th rowspan="1" colspan="1">action</th>
                </tr>
                  </tfoot>
                </table></div></div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                  </div>
                  <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous">
                      <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                    </li>
                    <li class="paginate_button page-item active">
                      <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                    </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                    </li><li class="paginate_button page-item ">
                      <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                    </li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                  </li><li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                  </li><li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                  </li>
                  <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
              </div>
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