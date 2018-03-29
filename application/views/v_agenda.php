
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
            <li class="active"><a href="<?php echo base_url('Agenda'); ?>"><i class="fa fa-circle-o"></i> Agenda Kerja</a></li>
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
      <h1>Data Agenda</h1>
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

        <div id="edit-agenda" class=" col-xs-12" style="display: none;">
            <div class="box box-success">
              <div class="box-header">
                <h3 id="title-edit" class="box-title">Tambah Data Agenda</h3>
                <div class="col-xs-12">
                  <div class=" btn-group pull-right">
                        <button onclick="Batal();" class="btn btn-default btn-flat">Batal</button>
                        <button onclick="submit(this);" id="btn-submit" class="btn btn-primary btn-flat">Tambah</button>
                  </div>
                </div>
              </div>
              <div class="box-body">
                  <div class="col-xs-6 form-group">
                      <label >Tanggal</label>
                      <input type="date" class="form-control pull-right" id="editor-tanggal" name="editor-tanggal">
                  </div>
                  <div class="col-xs-6 form-group bootstrap-timepicker">
                      <label >Waktu</label>
                      <input type="text" class="form-control timepicker" id="editor-waktu" name="editor-waktu">
                  </div>
                  <div class="col-xs-12 form-group">
                      <label >Kegiatan</label>
                      <textarea id="editor-kegiatan" class="form-control" name="editor-kegiatan" data-link=""></textarea>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label >Tempat</label>
                      <textarea id="editor-tempat" class="form-control" name="editor-tempat" data-link=""></textarea>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label >Unit Kerja</label>
                      <textarea id="editor-unit" class="form-control" name="editor-unit" data-link=""></textarea>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label >Hadir</label>
                      <textarea id="editor-hadir" class="form-control" name="editor-hadir" data-link=""></textarea>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label >Keterangan</label>
                      <textarea id="editor-keterangan" class="form-control" name="editor-keterangan" data-link=""></textarea>
                  </div>
                  
              </div>
          </div>
        </div>

<div id="alert-hapus" class="alert alert-danger" style="display: none;">
                <strong>Berhasil!</strong> Data Berhasil Dihapus !!
            </div>
        <div id="tabel-agenda" class=" col-xs-12" style="display: block;">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="btn-group pull-right">
                        <button class="btn btn-default btn-flat" title="print"><i class="fa fa-print"></i> Print</button>
                        <button id="TambahAgenda" onclick="addAgenda();" class="btn btn-success btn-flat" title="tambah agenda"><i class="fa fa-pencil-square-o"></i> Tambah Agenda</button>
                    </div>
                </div>          
                      <!-- /.box-header #551E1E-->
                <div class="box-body table-responsive" id="list-table-menu">
                    <table id="table1" class="table table1 table-bordered table-hover">
                        <thead>
                            <tr style="background:  #507ab2; color: white; text-align: center;">

                                <th style="width: 5% ">No</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Tempat</th>
                                <th>Unit Kerja</th>
                                <th>Hadir</th>
                                <th>Keterangan</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): ?>
                            <tr >
                                <td style="text-align: center"><?php echo $i;$i++;  ?></td>
                                <td><?php echo $row->tanggal;  ?></td>
                                <td><?php echo $row->waktu;  ?></td>
                                <td><?php echo $row->kegiatan;  ?></td> 
                                <td><?php echo $row->tempat;  ?></td>
                                <td><?php echo $row->unit_kerja;  ?></td>
                                <td><?php echo $row->hadir;  ?></td>                  
                                <td><?php echo $row->keterangan;  ?></td>
                                <td style="text-align: center;">
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-flat" data-toggle="tooltip" title="Edit" onclick="editAgenda(<?php echo $row->id; ?>);"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteAgenda(<?php echo $row->id; ?>);"><i class="fa fa-trash"></i></button>
                                  </div>
                                </td>
                            </tr> 
                        <?php endforeach; ?>
                
                        </tbody>
                        <tfoot>
                            <tr>
                               <th style="width: 5% ">No</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Tempat</th>
                                <th>Unit Kerja</th>
                                <th>Hadir</th>
                                <th>Keterangan</th>
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
    function addAgenda() {
      $('#title-edit').html('Tambah Data Agenda'); 
        if($('#edit-agenda').css('display')=='none'){
            $("#edit-agenda").show('slow');
            $(this).addClass('disabled');
            $('#btn-submit').html('Tambah');
            $('#TambahAgenda').css('display','none'); 
            $('#editor-tanggal').val('');
            $('#editor-waktu').val('');
            $('#editor-kegiatan').val('');
            $('#editor-tempat').val('');
            $('#editor-unit').val('');
            $('#editor-hadir').val('');
            $('#editor-keterangan').val('');
          
        }
        
    }

     //edit Agenda
     function editAgenda(id) {
        if($('#edit-agenda').css('display')=='block'){
            $("#edit-agenda").hide('slow');    
        }
        else{
          $("#edit-agenda").show('slow'); 
        }

        //$('#preloader').css('display','block');
        $.get(base_url+"Agenda/select/"+id, function(agenda) { 
            //$('#preloader').css('display','none');
            $('#edit-agenda').show('slow');   
            $('#btn-add').addClass('disabled');
            $('#title-edit').html('Edit Data Agenda'); 
            $('#btn-submit').html('Edit');
            $('#editor-keterangan').attr('data-link', agenda.id);
            $('#editor-tanggal').val(agenda.tanggal);
            $('#editor-waktu').val(agenda.waktu);
            $('#editor-kegiatan').val(agenda.kegiatan);
            $('#editor-tempat').val(agenda.tempat);
            $('#editor-unit').val(agenda.unit_kerja);
            $('#editor-hadir').val(agenda.hadir);
            $('#editor-keterangan').val(agenda.keterangan);
        }, 'json');
    }


    //hapus Agenda
    function deleteAgenda(id) {
        $('#modal-delete').modal();
        $(document).one('click','#btn-delete', function(event) {
            $('#modal-delete').modal('hide').on('hidden.bs.modal', function() {
                
                $('#preloader').css('display','block');
                $.get(base_url+"Agenda/delete/"+id, function(data) {
                    $('#preloader').css('display','none');
                    $('#tabel-agenda').html(data);
                    $("#alert-hapus").css("display","block");
                    $("#alert-hapus").fadeOut(3000);
                });
            });
        });
    }



  //button batal
    function Batal() {
      $("#edit-agenda").hide('slow');
      $('#TambahAgenda').css('display','block');     
      // $('#edit-agenda').css('display','none');
      $('#editor-tanggal').val('');
      $('#editor-waktu').val('');
      $('#editor-kegiatan').val('');
      $('#editor-tempat').val('');
       $('#editor-unit').val('');
      $('#editor-hadir').val('');
      $('#editor-keterangan').val('');
      
      //$("#tabel-agenda").show('slow');
    }

    //tambah dan edit dokumen
        var submit= function(ctx) {
         event.preventDefault();
        //$(ctx).addClass('disabled');

        if($('#editor-tanggal').val()=='' || $('#editor-waktu').val()=='' || $('#editor-keterangan').val()=='' || $('#editor-tempat').val()=='' || $('#editor-unit').val()=='' || $('#editor-hadir').val()==''|| $('#editor-keterangan').val()==''){
            $('#modal-message .modal-body').text('Silakan Lengkapi Inputan');
            $('#modal-message').modal();
            return;

        } 

        if($('#btn-submit').html()=='Tambah'){ 
            $('#preloader').css('display','block');
            var tanggal=$('#editor-tanggal').val();
            var waktu= $('#editor-waktu').val();
            var kegiatan= $('#editor-kegiatan').val();
            var tempat=$('#editor-tempat').val();
            var unit= $('#editor-unit').val();
            var hadir= $('#editor-hadir').val();
            var keterangan =$('#editor-keterangan').val();
            $.post(base_url+"Agenda/insert", {tanggal:tanggal, waktu:waktu, kegiatan:kegiatan, tempat:tempat,unit:unit, hadir:hadir, keterangan:keterangan }, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#TambahAgenda').css('display','block'); 
                $('#edit-agenda').css('display','none');
                $('#tabel-agenda').html(data);

                $("#alert-tambah").css("display","block");
                $("#alert-tambah").fadeOut(3000);
            }); 
        }
        else if($('#btn-submit').html()=='Edit'){
            $('#preloader').css('display','block');
            var id= $('#editor-keterangan').attr('data-link');
            var tanggal=$('#editor-tanggal').val();
            var waktu= $('#editor-waktu').val();
            var kegiatan= $('#editor-kegiatan').val();
            var tempat= $('#editor-tempat').val();
            var unit= $('#editor-unit').val();
            var hadir= $('#editor-hadir').val();
            var keterangan= $('#editor-keterangan').val();

            $.post(base_url+"Agenda/update", { id: id, tanggal:tanggal, waktu:waktu, kegiatan:kegiatan, tempat:tempat,unit:unit, hadir:hadir, keterangan:keterangan }, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#edit-agenda').css('display','none');
                $('#tabel-agenda').html(data);
                $("#alert-tambah").css("display","block");
                $("#alert-tambah").fadeOut(3000);

            }); 
        }
       
    };
        
</script>