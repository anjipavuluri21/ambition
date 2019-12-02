<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar'); ?>
<?php $this->load->view('common/sidebar'); ?>

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
                    <h1>Add Course</h1> 
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
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
                        <form method="post" action="">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Exam Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select value="" class="form-control" name="exam_id" >
                                            <?php foreach($exam_list as $exam){ ?>
                                                <option><?= $exam->exam_name;?></option>
                                            <?php }?>
                                            
                                        </select>  
                                    </div>
                                </div><br>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Course Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="course_name" class="form-control"  placeholder="Course Name" value="<?php echo $course_data->course_name; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Course Price</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="course_price" class="form-control"  placeholder="Course Price" value="<?php echo $course_data->course_price; ?>">
                                    </div>
                                </div><br>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Course Validity </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="course_validity" class="form-control"  placeholder="Course validity in months" value="<?php echo $course_data->course_validity; ?>">
                                    </div>
                                </div><br>
                                
                                <button class="btn btn-primary" type="submit" name="update">Update</button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url();?>courses" style="color:white;">Cancel</a></button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
    </section>


</div>

<?php $this->load->view('common/footer'); ?>
