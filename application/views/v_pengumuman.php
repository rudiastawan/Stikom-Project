
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="<?php echo base_url('Dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Manajemen Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('Agenda'); ?>"><i class="fa fa-circle-o"></i> Agenda Kerja</a></li>
            <li class="active"><a href="<?php echo base_url('Pengumuman'); ?>"><i class="fa fa-circle-o"></i> Pengumuman</a></li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Riwayat Disposisi</a></li>
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
            <li><a href="Agenda"><i class="fa fa-circle-o"></i> Kartu Kendali</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Riwayat Disposisi</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pengumuman</h1>
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

        <div id="edit-pengumuman" class=" col-xs-12" style="display: none;">
            <div class="box box-success">
              <div class="box-header">
                <h3 id="title-edit" class="box-title">Tambah Pengumuman</h3>
                <div class="col-xs-12">
                  <div class=" btn-group pull-right">
                        <button onclick="Batal();" class="btn btn-default btn-flat">Batal</button>
                        <button onclick="submit(this);" id="btn-submit" class="btn btn-primary btn-flat">Tambah</button>
                  </div>
                </div>
              </div>
              <div class="box-body">
               <div class="row">
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-1">
                     <label>Informasi</label>
                  </div>
                  <div class="col-sm-1">
                     <label>:</label>
                  </div>
                  <div class="col-sm-7">
                     <textarea name="editor-informasi" class="texteditor" id="editor-informasi"></textarea>
                  </div>
               </div><br />
               <div class="row">
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-1">
                     <label >Mulai</label>
                  </div>
                  <div class="col-sm-1">
                     <label >:</label>
                  </div>
                  <div class="col-sm-7">
                     <input type="date" class="form-control pull-right" id="editor-mulaipengumuman" name="editor-mulaipengumuman">
                  </div>
               </div><br />

               <div class="row">
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-1">
                     <label >Akhir</label>
                  </div>
                  <div class="col-sm-1">
                     <label >:</label>
                  </div>
                  <div class="col-sm-7">
                      <input type="date" class="form-control" id="editor-akhirpengumuman" name="editor-akhirpengumuman">
                  </div>
               </div><br />                 
              </div>
          </div>
        </div>

            <div id="alert-hapus" class="alert alert-danger" style="display: none;">
                <strong>Berhasil!</strong> Data Pengumuman Berhasil Dihapus !!
            </div>


        <div id="tabel-pengumuman" class=" col-xs-12" style="display: block;">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="btn-group pull-right">
                        <button class="btn btn-default btn-flat" title="print"><i class="fa fa-print"></i> Print</button>
                        <button id="TambahPengumuman" onclick="addPengumuman();" class="btn btn-success btn-flat" title="tambah pengumuman"><i class="fa fa-pencil-square-o"></i> Tambah Pengumuman</button>
                    </div>
                </div>          
                      <!-- /.box-header -->
                <div class="box-body table-responsive" id="list-table-menu">
                    <table id="table1" class="table table1 table-bordered table-hover">
                        <thead>
                            <tr style="background:  #507ab2; color: white; text-align: center;">

                                <th style="width: 5% ">No</th>
                                <th>Informasi</th>
                                <th>Mulai</th>
                                <th>Akhir</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): ?>
                            <tr >
                                <td style="text-align: center"><?php echo $i;$i++;  ?></td>
                                <td><?php echo $row->informasi;  ?></td>
                                <td><?php echo $row->mulaipengumuman;  ?></td>
                                 <td><?php echo $row->akhirpengumuman;  ?></td>
                                <td style="text-align: center;">
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-flat" data-toggle="tooltip" title="Edit" onclick="editPengumuman(<?php echo $row->id; ?>);"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deletePengumuman(<?php echo $row->id; ?>);"><i class="fa fa-trash"></i></button>
                                  </div>
                                </td>
                            </tr> 
                        <?php endforeach; ?>
                
                        </tbody>
                        <tfoot>
                            <tr>
                               <th style="width: 5% ">No</th>
                                <th>Informasi</th>
                                <th>Mulai</th>
                                <th>Akhir</th>
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
            Apakah Anda Yakin Menghapus Agenda ini?
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
    function addPengumuman() {
      $('#title-edit').html('Tambah Data Agenda'); 
        if($('#edit-pengumuman').css('display')=='none'){
            $("#edit-pengumuman").show('slow');
            $(this).addClass('disabled');
            $('#btn-submit').html('Tambah');
            $('#TambahPengumuman').css('display','none'); 
            $('#editor-informasi').val('');
            $('#editor-mulaipengumuman').val('');
            $('#editor-akhirpengumuman').val('');
          
        }
        
    }

     //edit Agenda
     function editPengumuman(id) {
        if($('#edit-pengumuman').css('display')=='block'){
            $("#edit-pengumuman").hide('slow');    
        }
        else{
          $("#edit-pengumuman").show('slow'); 
        }

        //$('#preloader').css('display','block');
        $.get(base_url+"Pengumuman/select/"+id, function(pengumuman) { 
            //$('#preloader').css('display','none');
            $('#edit-pengumuman').show('slow');   
            $('#btn-add').addClass('disabled');
            $('#title-edit').html('Edit Data Pengumuman'); 
            $('#btn-submit').html('Edit');
            $('#editor-informasi').attr('data-link', pengumuman.id);
            $('#editor-informasi').val(pengumuman.informasi);
            $('#editor-mulaipengumuman').val(pengumuman.mulaipengumuman);
            $('#editor-akhirpengumuman').val(pengumuman.akhirpengumuman);
        }, 'json');
    }


    //hapus Agenda
    function deletePengumuman(id) {
        $('#modal-delete').modal();
        $(document).one('click','#btn-delete', function(event) {
            $('#modal-delete').modal('hide').on('hidden.bs.modal', function() {
                
                $('#preloader').css('display','block');
                $.get(base_url+"Pengumuman/delete/"+id, function(data) {
                    $('#preloader').css('display','none');
                    $('#tabel-pengumuman').html(data);
                    $("#alert-hapus").css("display","block");
                    $("#alert-hapus").fadeOut(3000);
                });
            });
        });
    }



  //button batal
    function Batal() {
      $("#edit-pengumuman").hide('slow');
      $('#TambahPengumuman').css('display','block');     
      // $('#edit-agenda').css('display','none');
      $('#editor-informasi').val('');
      $('#editor-mulaipengumuman').val('');
      $('#editor-akhirpengumuman').val('');
      
      //$("#tabel-agenda").show('slow');
    }

    //tambah dan edit dokumen
        var submit= function(ctx) {
         event.preventDefault();
        //$(ctx).addClass('disabled');

        if($('#editor-informasi').val()=='' || $('#editor-mulaipengumuman').val()=='' || $('#editor-akhirpengumuman').val()==''){
            $('#modal-message .modal-body').text('Silakan Lengkapi Inputan');
            $('#modal-message').modal();
            return;

        } 

        if($('#btn-submit').html()=='Tambah'){ 
            $('#preloader').css('display','block');
            var informasi=$('#editor-informasi').val();
            var mulaipengumuman= $('#editor-mulaipengumuman').val();
            var akhirpengumuman= $('#editor-akhirpengumuman').val();
            $.post(base_url+"Pengumuman/insert", {informasi:informasi, mulaipengumuman:mulaipengumuman, akhirpengumuman:akhirpengumuman }, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#TambahPengumuman').css('display','block'); 
                $('#edit-pengumuman').css('display','none');
                $('#tabel-pengumuman').html(data);

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
        
</script>