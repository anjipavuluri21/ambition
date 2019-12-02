<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar'); ?>
<?php $this->load->view('common/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Chapter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Chapter</li>
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
                                        <label for="exampleInputEmail1">Subject</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="subject_id">
                                           <option>Select Subject Name</option>
                                            <?php foreach ($list as $row) { ?>
                                                <option value="<?php echo $row->subject_id; ?>"><?php echo $row->subject_name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>  
                                    </div>
                                </div><br> 
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Chapter Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="chapter_name" class="form-control"  placeholder="Chapter Name">
                                    </div>
                                </div><br>
                               
                                
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url();?>chapter" style="color:white;">Cancel</a></button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
    </section>


</div>

<?php $this->load->view('common/footer'); ?>
