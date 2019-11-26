<?php
//            print_r($this->session->userdata['user_data']['user_type']);
//            exit;
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/dist/img/Acplogo.png'); ?>" alt="ACP LOGO" class="brand-image img-circle elevation-3"
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

                <a href="#" class="d-block"><?php print_r($this->session->userdata['user_data']['user_name']); ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?php echo base_url(); ?>dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!--<i class="right fas fa-angle-left"></i>-->
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>user/user_list" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-credit-card"></i>
                        <p>
                            Exam Details
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>exams/examDetails" class="nav-link">
                                <i class="fa fa-book  nav-icon"></i>
                                <p>Exams</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'Courses' ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Courses
                                    <!--<i class="fas fa-angle-left right"></i>-->

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'category' ?>" class="nav-link">
                                <i class="nav-icon fa fa-list-alt"></i>
                                <p>
                                    Category
                                    <!--<i class="fas fa-angle-left right"></i>-->

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'papers' ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Papers
                                    <!--<i class="fas fa-angle-left right"></i>-->

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'subjects' ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Subjects
                                    <!--<i class="fas fa-angle-left right"></i>-->

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo base_url() . 'Chapter' ?>" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Chapter
                                    <!--<i class="fas fa-angle-left right"></i>-->

                                </p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>images" class="nav-link">
                        <i class="fa fa-image nav-icon"></i>
                        <p>Images</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>video/all_videos" class="nav-link">
                        
                       <i class="fas fa-upload nav-icon"></i>
                        <p>Course Videos Uploading</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>Officers_videos" class="nav-link">
                        <i class="fas fa-upload nav-icon"></i>

                        <p>Officers Videos Uploading</p>
                    </a>
                </li>
                <li class="nav-item">
                    
                    <a href="<?php echo base_url() . 'Practice_papers'; ?>" class="nav-link">
                     <!--<i class="fal fa-sticky nav-icon"></i>-->
                        <i class="fas fa-book nav-icon"></i>
                        <p>Practice Papers</p>
                    </a>
                </li>
                <?php if ($this->session->userdata['user_data']['user_type'] == 1) { ?> 
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
                                <a href="<?php echo base_url(); ?>payment/purchase" class="nav-link">
                                    <i class="fa fa-shopping-cart  nav-icon"></i>
                                    <p>Purchase History</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>payment/renewal" class="nav-link">
                                <!--<i class="far fa-circle nav-icon"></i>-->
                                    <i class="fas fa-sync nav-icon"></i>
                                    <p>Renewal history</p>
                                </a>
                            </li>

                        </ul>

                        </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>