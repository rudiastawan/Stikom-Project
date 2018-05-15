
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo base_url('Dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Manajemen Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Agenda'); ?>"><i class="fa fa-circle-o"></i> Agenda Kerja</a></li>
            <li><a href="<?php echo base_url('Pengumuman'); ?>"><i class="fa fa-circle-o"></i> Pengumuman</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-download"></i>
            <span>Surat Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Surat/suratMasuk'); ?>"><i class="fa fa-circle-o"></i> Kartu Kendali</a></li>
           <li class="active"><a href="<?php echo base_url('Surat/disposisiMasuk'); ?>"><i class="fa fa-circle-o"></i> Riwayat Disposisi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-upload"></i>
            <span>Surat Keluar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo base_url('Surat/suratKeluar'); ?>"><i class="fa fa-circle-o"></i> Kartu Kendali</a></li>
            <li><a href="<?php echo base_url('Surat/disposisiKeluar'); ?>"><i class="fa fa-circle-o"></i> Riwayat Disposisi</a>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url('Manajemen_User'); ?>">
            <i class="fa fa-user-circle-o"></i> <span>Manajemen User</span>
            
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo  $jml_suratmasuk; ?></h3>
              <p>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-inbox"></i>
            </div>
            <a href="<?php echo base_url('Surat/suratMasuk'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo  $jml_suratkeluar; ?></h3>
              <p>Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-send"></i>
            </div>
            <a href="<?php echo base_url('Surat/suratKeluar'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo  $jml_agneda; ?></h3>
              <p>Agenda</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-plus-o"></i>
            </div>
            <a href="<?php echo base_url('Agenda'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo  $jml_pengumuman; ?></h3>
              <p>Pengumuman</p>
            </div>
            <div class="icon">
              <i class="fa fa-bullhorn"></i>
            </div>
            <a href="<?php echo base_url('Pengumuman'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
     

    </section>
    <!-- /.content -->
  </div>
 
 