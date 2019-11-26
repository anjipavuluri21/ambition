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
                                        <label for="exampleInputEmail1">Course Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_id">
                                            <option value="1">MPSC</option>
                                            <option>SFDC</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Subject Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_id">
                                            <option value="1">Rajya Seva</option>
                                            <option>PSI STI ASST</option>
                                            <option>PSI STI ASST</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Subject Category</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_id">
                                            <option value="1">Poorv</option>
                                            <option>PSI STI ASST</option>
                                            <option>PSI STI ASST</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Main Subjects</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_id">
                                            <option>P1</option>
                                            <option>P2</option>
                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Year</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="course_id">
                                            <option>2000</option>
                                            <option>2001</option>
                                            <option>2002</option>
                                            <option>2003</option>
                                            <option>2004</option>
                                            <option>2005</option>
                                            <option>2006</option>
                                            <option>2007</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>

                                        </select>  
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Upload Papers</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" name="file">
                                    </div>
                                </div><br>

                                <button class="btn btn-primary" type="submit"><a href="#" style="color:white;">Save</a></button>
                                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url(); ?>Practice_papers" style="color:white;">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<?php $this->load->view('common/footer'); ?>
