<?php include('common/header.php'); ?>
<?php include('common/navbar.php') ?>
<?php include('common/sidebar.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php if (!empty($_SESSION['msg'])) { ?>
        <div class="box-body custommsg" >
            <div class="alert alert-<?php echo $_SESSION['msg']['type']; ?>">
                <h4> Alert!</h4>
                <?php
                print_r($_SESSION['msg']['text']);
                ?>
            </div>
        </div>
<?php } ?>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Exams</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Exams</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- left column -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <!-- <div class="card-header">
                          <h3 class="card-title">Quick Example</h3>
                        </div> -->
                        <form method="post" action="<?php echo base_url(); ?>exams/addExam">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Exam</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="exam_name" class="form-control"  placeholder="Exam Name">
                                    </div>
                                </div><br>

                                <button class="btn btn-primary" type="submit" name="save">Save</button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url(); ?>exams/examDetails" style="color:white;">Cancel</a></button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
    </section>


</div>

<?php include('common/footer.php') ?>