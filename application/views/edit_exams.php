<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ambition | Course Details</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url("assets"); ?>/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <?php include('common/navbar.php') ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include('common/sidebar.php'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Exam Details</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Exams</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- left column -->
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <!-- <div class="card-header">
                                      <h3 class="card-title">Quick Example</h3>
                                    </div> -->
                                    <form method="post" action="<?php echo base_url();?>exams/updateExamname">

                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="exampleInputEmail1">Exam Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="exam_name" value="<?php echo $data->exam_name?>">
                                                </div>
                                            </div><br>
                                             <div class="row">
<!--                                                <div class="col-md-6">
                                                    <label for="exampleInputEmail1">id</label>
                                                </div>-->
                                                <div class="col-md-6">
                                                    <input type="hidden" name="id" value="<?php echo $data->exam_id?>">
                                                </div>
                                            </div><br>


                                            <button class="btn btn-primary" type="submit" name="update">Save</button>
                                            <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url(); ?>exams/examDetails" style="color:white;">Cancel</a></button>
                                        </div>
                                    </form>


                                </div>

                            </div>

                        </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include('common/footer.php') ?>


            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url("assets"); ?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url("assets"); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url("assets"); ?>/plugins/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url("assets"); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url("assets"); ?>/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url("assets"); ?>/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
    </body>
</html>