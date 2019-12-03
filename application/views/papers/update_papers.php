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
                    <h1>Add Paper</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Paper</li>
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
                        <form method="post" action="<?php echo base_url(); ?>papers/updatePaper">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Course Category</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_category_id">
                                            <option>Select Course category</option>

                                            <?php foreach ($category_data as $category) { ?>
                                                <option value='<?= $category->course_category_id; ?>'><?= $category->course_category_name; ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Course Paper</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="course_paper_name" class="form-control"  placeholder="Course Paper" value="<?php echo $paper_data->course_paper_name; ?>">
                                    </div>
                                </div><br>

                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url(); ?>papers" style="color:white;">Cancel</a></button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
    </section>


</div>

<?php $this->load->view('common/footer'); ?>
