<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/Acplogo.png');?>" alt="ACP LOGO" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ambition</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="#" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
              <a href="<?php echo base_url();?>dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--<i class="right fas fa-angle-left"></i>-->
              </p>
            </a>
           
          </li>
          <li class="nav-item">
              <a href="<?php echo base_url();?>user/user_list" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          
             <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>course/courseDetails" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Course Details
                <!--<i class="fas fa-angle-left right"></i>-->
              </p>
            </a>
             </li>
<!--            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book  nav-icon"></i>
                  <p>Mpsc</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <i class="fas fa-book nav-icon"></i>
                  <p>MTS/NTS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>CLASS 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>SCHOLARSHIP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>SPECIAL MATHMATICS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>CENTRAL EXAMS</p>
                </a>
              </li>
             
            </ul>-->

        <li class="nav-item has-treeview">
            <a href="<?php echo base_url().'Subject'?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Subjects
                <!--<i class="fas fa-angle-left right"></i>-->
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url().'Subject_category'?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Subject Category
                <!--<i class="fas fa-angle-left right"></i>-->
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url().'Subject_papers'?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Subject Papers
                <!--<i class="fas fa-angle-left right"></i>-->
               
              </p>
            </a>
          </li>
          
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-upload nav-icon"></i>
                  <p>Officer Videos Uploading</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-question nav-icon"> </i>
                  
                  <p>Exams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#s" class="nav-link">
                 <!--<i class="fal fa-sticky nav-icon"></i>-->
                 <i class="fas fa-book nav-icon"></i>
                  <p>Practice Papers</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-credit-card"></i>
              <p>
                Payment Histroy
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-shopping-cart  nav-icon"></i>
                  <p>Purchase History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!--<i class="far fa-circle nav-icon"></i>-->
                  <i class="fas fa-sync nav-icon"></i>
                  <p>Renewal history</p>
                </a>
              </li>
                
            </ul>
              
          
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>