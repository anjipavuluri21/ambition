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
                    <h1><?= $content['page_title']; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $content['page_title']; ?></li>
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
                        <form method="post" action="<?php echo base_url(); ?>subjects/updatesubjects">

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Course Paper</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_paper_id">
                                            <option>Select Course Paper</option>
                                            <?php foreach ($subject as $row) { ?>
                                                <option value='<?php echo $row->course_paper_id; ?>'><?php echo $row->course_paper_name; ?></option>
                                            <?php } ?>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Subject Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input  type="text" name="subject_name" class="form-control"  placeholder="Subject Name" value="<?php echo $subjects_data->subject_name; ?>">
                                        <input type="hidden" name="subjects_id" class="form-control"  placeholder="Subjects" value="<?php echo $subjects_data->subject_id; ?>">
                                    </div>
                                </div><br>

                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url(); ?>subjects" style="color:white;">Cancel</a></button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
    </section>


</div>

<?php $this->load->view('common/footer'); ?>
