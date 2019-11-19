<?php include('common/header.php');?>
<?php include('common/sidebar.php');?>

<body class="hold-transition sidebar-mini">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Course</h3>

          <div class="card-tools">
              
              <a class="btn btn-primary float-right btn-sm" href=""><i class="fa fa-plus" style="font-size:14px;"></i>&nbsp;Add</a>
              
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          S.No
                      </th>
                      <th>
                         Course Name
                      </th>
                      <th >
                          Course Duration 
                      </th>
                      <th>
                          Course Price
                      </th>
                       
                      <th>
                          Action
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
              <tr>
              <td>1</td>
              <td>MPSC</td>
              <td>3 MONTHS</td>
              <td>3000</td>
              <td><i class="fas fa-edit"> / <i class="fas fa-trash-alt"></i></td>
              </tr>
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('common/footer.php')?>
<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>
</body>
