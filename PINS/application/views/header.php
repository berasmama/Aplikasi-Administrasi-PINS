<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>index.php/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>INS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PINS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <?php 
          if($this->session->userdata('jabatan') == "Manager"){
          ?>
          <li class="dropdown messages-menu">
            <a href="<?php echo base_url().'index.php/dashboard/anggota_baru' ?>">
              <i class="fa fa-user-plus"></i>
              <span class="label label-success"><?php echo $this->session->userdata('notif'); ?></span>
            </a>
          </li>
          <?php } ?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/img/photo_profil/'.$this->session->userdata('foto'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('firstname') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/img/photo_profil/'.$this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname') ?>
                  <small><?php echo $this->session->userdata('email') ?></small>
                </p>
              </li>
              <!-- Menu Body -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url() ?>index.php/dashboard/profile" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>index.php/login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>