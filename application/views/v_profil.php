
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li >
         <a href="<?php echo base_url('Dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Manajemen Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('Agenda'); ?>"><i class="fa fa-circle-o"></i> Agenda Kerja</a></li>
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
            <li><a href="<?php echo base_url('Surat/disposisiMasuk'); ?>"><i class="fa fa-circle-o"></i> Riwayat Disposisi</a></li>
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
        <li class="treeview">
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
      <h1>DATA PROFIL</h1>
    </section>

    <!-- Main content -->
  <section class="content">
    <!-- Preloader -->
    <div id="preloader" style="display: none;">
        <div class="box" style="height: 80px;">
            <div class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
        </div>
    </div>


    <div id="main-content" class="row">

        <div id="edit-agenda" class=" col-xs-12" >
           <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('upload/'.$foto.'') ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $currUser; ?></h3>
              <?php foreach ($profil as $row): ?>
              <p class="text-muted text-center"><?php echo $row->jabatan;  ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>nama lengkap</b> <a class="pull-right"><?php echo $row->fullname;  ?></a>
                </li>
                <li class="list-group-item">
                  <b>username</b> <a class="pull-right"><?php echo $row->username;  ?></a>
                </li>
              </ul>
              
              <a onclick="editpassowrd()" class="btn btn-primary btn-block"><b>Edit Password</b></a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>




    </div>
  </section>
        
  </div>

  <!-- modal invalid inputan -->
<div id="modal-message" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Peringatan !!!</h4>
         </div>
         <div class="modal-body">
            <!--Text here-->
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-flat btn-primary" data-dismiss="modal">OK</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- modal hapus -->
 <div class="modal fade" id="modal-editpass" role="dialog" >
        <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-body" style="padding:40px 50px;">
               <div class="form-horizontal" >
             <?php echo form_open_multipart('manajemen_user/update_pass'); ?>
                  <div class="form-group">
                    <label > Edit Password</label>
                    <input type="hidden" class="form-control pull-right" id="id" name="id" value="<?php echo $row->id;  ?>">
                   <!--  <div class="control-label" style="text-align:left;">
                        <input type="Password" class="form-control pull-right" id="pass" name="pass" placeholder="masukan Password lama">
                                                    
                     </div> -->


                      <div class="control-label" style="text-align:left;">
                        <input type="Password" class="form-control pull-right" id="newpass" name="newpass" placeholder="masukan Password baru">
                                                    
                     </div>
                  </div> 
                   
                  <div class="form-group pull-right">
                     <button type="button" id="btn-cancel" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
                     <button type="submit"  name="PilihJenisSurat" value="Simpan"  class="btn btn-success btn-flat">Simpan</button>
                  </div>         
               <?php echo form_close(); ?>
             </div>
                <br>
            </div>     
          </div>
        </div>
      </div> 
  <?php  endforeach; ?>
<script type="text/javascript">

  //fungsi menampilkan form dokumen
    function editpassowrd() {
      
       $("#modal-editpass").modal();
        
    }

    
        
</script>