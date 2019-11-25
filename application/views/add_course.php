<?php include('common/header.php'); ?>
 <?php include('common/navbar.php') ?>
<?php include('common/sidebar.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
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
                    <label for="exampleInputEmail1">Course Name</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="course_name" class="form-control"  placeholder="Name">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Course Price</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="course_price" placeholder="price">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Course Duration</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="course_duration" placeholder="Duration">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Course Price</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="course_price" placeholder="Mobile Number">
                  </div>
                </div><br>
                
               
                <button class="btn btn-primary" type="submit"><a href="#" style="color:white;">Save</a></button>
                <button class="btn btn-primary" type="reset" ><a href="<?php echo base_url();?>course/courseDetails" style="color:white;">Cancel</a></button>
              </div>
              </form>


          </div>

        </div>

      </div>
    </section>


  </div>

<?php include('common/footer.php') ?>