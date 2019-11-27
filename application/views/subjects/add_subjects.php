<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar'); ?>
<?php $this->load->view('common/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $page_title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $page_title; ?></li>
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
                                        <label for="exampleInputEmail1">Course Paper</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="subject_category_id">
                                            <option value="1">P1</option>
                                            <option>P2</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Subject Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input  type="text" name="subject_name" class="form-control"  placeholder="Subject Name">
                                    </div>
                                </div><br>
                                


                                <button class="btn btn-primary" type="submit"><a href="#" style="color:white;">Save</a></button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url();?>subjects" style="color:white;">Cancel</a></button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
    </section>


</div>

<?php $this->load->view('common/footer'); ?>
