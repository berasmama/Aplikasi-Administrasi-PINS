<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/img/photo_profil/'.$this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname') ?></p>
          <a href="#"><?php echo $this->session->userdata('jabatan') ?></a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-file-o"></i> <span>Buat Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>index.php/dashboard/justifikasi"><i class="fa fa-circle-o"></i> Justifikasi</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/probis"><i class="fa fa-circle-o"></i> Proposal Bisnis</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/alur_proyek"><i class="fa fa-circle-o"></i> Alur Proyek</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Lihat Laporan</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url()?>index.php/dashboard/list_justifikasi"><i class="fa fa-circle-o"></i> Justifikasi</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/list_probis"><i class="fa fa-circle-o"></i> Proposal Bisnis</a></li>
            <li><a href="<?php echo base_url()?>index.php/dashboard/list_alur_proyek"><i class="fa fa-circle-o"></i> Alur Proyek</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>