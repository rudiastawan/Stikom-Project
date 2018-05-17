      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('Dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
         <?php if ($jabatan=='Operator'||$jabatan=='Sekretaris'||$jabatan=='Kepala') { ?>
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
         <?php } ?>
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
            <li><a href="<?php echo base_url('Surat/disposisiKeluar'); ?>"><i class="fa fa-circle-o"></i> Riwayat Disposisi</a></li>
          </ul>
        </li>
        <?php if ($jabatan=='Operator') { ?>
        <li class="active">
          <a href="<?php echo base_url('Manajemen_User'); ?>">
            <i class="fa fa-user-circle-o"></i> <span>Manajemen User</span>
            
          </a>
        </li>
         <?php } ?>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manajemen User</h1>
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
        <div id="manajemen_user" class=" col-xs-12" style="display: none;">
            <div class="box box-success">
              <div class="box-header">
                <br />
                <h1  class="box-title" style="margin-left: 90px;">Tambah User</h1>
              </div><hr />
              <div class="box-body">
               <?php echo form_open_multipart('manajemen_user/insert'); ?>
                  <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Nama Lengkap</label>
                      <input type="text" class="form-control pull-right" id="namalengkap" name="namalengkap">
                  </div>
                  <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Username</label>
                     <input type="text" class="form-control pull-right" id="username" name="username">
                  </div>
                   <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Jabatan</label>
                     <select name="jabatan" id="jabatan" class="form-control"   >
                              <option value="" ></option>
                              <option value="Operator" >Operator</option>
                              <option value="Sekretaris" >Sekretaris</option>
                              <option value="Kepala" >Kepala</option>
                              <option value="Bidang Sosial dan Budaya " >Admin Bidang Sosial dan Budaya</option>
                              <option value="Bidang Ekonomi dan Sumber Daya Alam" >Admin Bidang Ekonomi dan Sumber Daya Alam</option>
                              <option value="Bidang Sarana dan Prasarana Wilayah" >Admin Bidang Sarana dan Prasarana Wilayah</option>
                              <option value="Bidang Sumber Daya Manusia" >Admin Bidang Sumber Daya Manusia</option>

                          </select>   
                  </div>
                  <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Password</label>
                     <input type="password" class="form-control pull-right" id="password" name="password">
                  </div>
                  <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                  <label for="nama">Foto</label>
                  <div class="form-input">
                    <input type="file" name="foto" class="form-control input-50" id="foto">
                  </div>
                  </div>
                  <br>
                   </div>
              <div class="well form-actions">
                <button type="submit" class="btn btn-success" style="margin-left: 85px;">Simpan</button> 
                <?php echo form_close(); ?>
                 <button onclick="Batalx();" class="btn btn-danger">Batal</button>
              </div> <!-- /form-actions -->
          </div>
        </div>

        <div id="edit-manajemen_user" class=" col-xs-12" style="display: none;">
            <div class="box box-success">
              <div class="box-header">
                <br />
                <h1  class="box-title" style="margin-left: 90px;">Edit User</h1>
              </div><hr />
              <div class="box-body">
               <?php echo form_open_multipart('manajemen_user/update'); ?>
               <input type="hidden" class="form-control pull-right" id="id" name="id">
                  <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Nama Lengkap</label>
                      <input type="text" class="form-control pull-right" id="editor-namalengkap" name="editor-namalengkap">
                  </div>
                  <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Username</label>
                     <input type="text" class="form-control pull-right" id="editor-username" name="editor-username">
                  </div>
                   <div class="col-sm-7 form-group" style="margin-left: 80px !important;">
                      <label >Jabatan</label>
                     <select name="editor-jabatan" id="jabatan" class="form-control"   >
                              <option id="currjabatan"  ></option>
                              <option value="Operator" >Operator</option>
                              <option value="Sekretaris" >Sekretaris</option>
                              <option value="Kepala" >Kepala</option>
                              <option value="Bidang Sosial dan Budaya " >Admin Bidang Sosial dan Budaya</option>
                              <option value="Bidang Ekonomi dan Sumber Daya Alam" >Admin Bidang Ekonomi dan Sumber Daya Alam</option>
                              <option value="Bidang Sarana dan Prasarana Wilayah" >Admin Bidang Sarana dan Prasarana Wilayah</option>
                              <option value="Bidang Sumber Daya Manusia" >Admin Bidang Sumber Daya Manusia</option>

                          </select>   
                  </div>

                  <br>
                   </div>
              <div class="well form-actions">
                <button type="submit" class="btn btn-success" style="margin-left: 85px;">Simpan</button> 
                <?php echo form_close(); ?>
                 <button onclick="Batal();" class="btn btn-danger">Batal</button>
              </div> <!-- /form-actions -->
          </div>
        </div>

           


        <div id="tabel-manajemen_user" class=" col-xs-12" style="display: block;">
            <div class="box box-primary">
                <div class="box-header">
                  
                    <div class="btn-group pull-right">
                       
                        <button id="TambahUser" onclick="addUser();" class="btn btn-success btn-flat" title="Tambah User"><i class="fa fa-pencil-square-o"></i> Tambah User</button>
                    </div>
                </div>          
                      <!-- /.box-header -->
                <div class="box-body table-responsive" id="list-table-menu">
                    <table id="table1" class="table table1 table-bordered table-hover">
                        <thead>
                            <tr style="background:  #507ab2; color: white; text-align: center;">

                                <th style="width: 5% ">No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): 
                          // url foto
                          $foto_url = base_url().'/upload/'.$row->foto;
                          
                          // url thumbnail foto
                          $thumbnail_foto_url = base_url().'/upload/'.$row->thumb_foto;
                        ?>
                            <tr >
                                <td style="text-align: center"><?php echo $i;$i++;  ?></td>
                                <td><?php echo $row->fullname;  ?></td>
                                <td><?php echo $row->username;  ?></td>
                                <td><?php echo $row->jabatan;  ?></td>
                                <td style="text-align: center">
                <a href="<?php echo $foto_url;?>" target="_blank">
                <img src="<?php echo $thumbnail_foto_url;?>" alt="<?php echo $row->fullname ?> ">
                </a>
              </td>
                                <td style="text-align: center;">
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-flat" data-toggle="tooltip" title="Edit" onclick="editUser(<?php echo $row->id; ?>);"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteUser(<?php echo $row->id; ?>);"><i class="fa fa-trash"></i></button>
                                  </div>
                                </td>
                            </tr> 
                        <?php endforeach; ?>
                
                        </tbody>
                        <tfoot>
                            <tr>
                              <th style="width: 5% ">No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                 <th>Jabatan</th>
                                  <th>Foto</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>  
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
<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Peringatan !!</h4>
         </div>
         <div class="modal-body">
            Apakah Anda Yakin Menghapus Data ini?
         </div>
         <div class="modal-footer">
            <div class="btn-group">
               <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
               <button id="btn-delete" type="button" class="btn btn-danger btn-flat">Ya</button>
            </div>
         </div>
      </div>
   </div>
</div>
 
<script type="text/javascript">

  
  //fungsi menampilkan form dokumen
    function addUser() {

        if($('#manajemen_user').css('display')=='none'){
            $("#manajemen_user").show('slow');
            $(this).addClass('disabled');
            $('#btn-submit').html('Tambah');
            $('#TambahUser').css('display','none'); 
            $('#namalengkap').val('');
            $('#username').val('');
            $('#password').val('');
            $('#konfirmasipassword').val('');
            $('#foto').val('');
          
        }
        
    }

     //fungsi menampilkan form dokumen

    //hapus Agenda
    function deleteUser(id) {
        $('#modal-delete').modal();
        $(document).one('click','#btn-delete', function(event) {
            $('#modal-delete').modal('hide').on('hidden.bs.modal', function() {
                
                $('#preloader').css('display','block');
                $.get(base_url+"Manajemen_User/delete/"+id, function(data) {
                    $('#preloader').css('display','none');
                    $('#tabel-manajemen_user').html(data);
                    $("#alert-hapus").css("display","block");
                    $("#alert-hapus").fadeOut(3000);
                });
            });
        });
    }

     //edit Agenda
     function editUser(id) {

        if($('#edit-manajemen_user').css('display')=='block'){
            $("#edit-manajemen_user").hide('slow');    
        }
        else{
          $("#edit-manajemen_user").show('slow'); 
        }

        //$('#preloader').css('display','block');
        $.get(base_url+"Manajemen_User/select/"+id, function(user) { 
            //$('#preloader').css('display','none');
            $('#btn-submit').html('Edit');
            $('#EditUser').css('display','none'); 
            $('#id').val(user.id);
            $('#editor-namalengkap').val(user.fullname);
            $('#editor-username').val(user.username);
            $('#currjabatan').html(user.jabatan);
            $('#currjabatan').val(user.jabatan);
            $('#TambahUser').css('display','none');     
            

        }, 'json');
    }

  //button batal
    function Batal() {
      $("#edit-manajemen_user").hide('slow');
      $('#TambahUser').css('display','block');     
      // $('#edit-agenda').css('display','none');
      $('#editor-namalengkap').val('');
      $('#editor-username').val('');
      $('#editor-password').val('');
      
      //$("#tabel-agenda").show('slow');
    }
     function Batalx() {
      $("#manajemen_user").hide('slow');
      $('#TambahUser').css('display','block');     
      // $('#edit-agenda').css('display','none');
      $('#namalengkap').val('');
      $('#username').val('');
      $('#password').val('');

      
      //$("#tabel-agenda").show('slow');
    }

    /*
    //tambah dan edit dokumen
        var submit= function(ctx) {
         event.preventDefault();
        //$(ctx).addClass('disabled');

        if($('#editor-namalengkap').val()=='' || $('#editor-username').val()=='' || $('#editor-password').val()=='' || $('#editor-konfirmasipassword').val()==''){
            $('#modal-message .modal-body').text('Silakan Lengkapi Inputan');
            $('#modal-message').modal();
            return;

        }
        var password1 = document.getElementById("editor-password").value;
        var password2 = document.getElementById("editor-konfirmasipassword").value;
         if (password1 != password2) {
            $('#modal-message .modal-body').text('Konfirmasi Password Belum Sesuwai');
            $('#modal-message').modal();
            return;
          }

        if($('#btn-submit').html()=='Tambah'){ 
            $('#preloader').css('display','block');
            var username= $('#editor-username').val();
            var password= $('#editor-password').val();
            var namalengkap=$('#editor-namalengkap').val();
            var foto=$('#foto').val();
            $.post(base_url+"Manajemen_User/insert", {username:username, password:password, namalengkap:namalengkap, foto:foto }, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#TambahUser').css('display','block'); 
                $('#edit-manajemen_user').css('display','none');
                $('#tabel-manajemen_user').html(data);

                $("#alert-tambah").css("display","block");
                $("#alert-tambah").fadeOut(3000);
            }); 
        }
        else if($('#btn-submit').html()=='Edit'){
            $('#preloader').css('display','block');
            var id= $('#editor-informasi').attr('data-link');
            var informasi=$('#editor-informasi').val();
            var mulaipengumuman= $('#editor-mulaipengumuman').val();
            var akhirpengumuman= $('#editor-akhirpengumuman').val();
            

            $.post(base_url+"Pengumuman/update", { id: id, informasi:informasi, mulaipengumuman:mulaipengumuman, akhirpengumuman:akhirpengumuman }, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#edit-pengumuman').css('display','none');
                $('#tabel-pengumuman').html(data);
                $("#alert-tambah").css("display","block");
                $("#alert-tambah").fadeOut(3000);

            }); 
        }
       
    };
*/

    

   
        
</script>