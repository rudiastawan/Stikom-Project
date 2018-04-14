
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li >
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
         <li class="active treeview">
          <a href="#">
            <i class="fa fa-download"></i>
            <span>Surat Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('Surat/suratMasuk'); ?>"><i class="fa fa-circle-o"></i> Kartu Kendali</a></li>
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
      <h1>Data Surat Masuk Kartu Kendali</h1>
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

        <div id="edit-SM" class=" col-xs-12" style="display: none;">
            <div class="box box-success">
              <div class="box-header">
                <h3 id="title-edit" class="box-title">Tambah Data Surat Masuk Kartu Kendali</h3>
                <div class="col-xs-12">
                   <div class="col-sm-12 control-label" >
                  <div class=" btn-group pull-right">
                        <button onclick="Batal();" class="btn btn-default btn-flat">Batal</button>
                        <button onclick="submit(this);" id="btn-submit" class="btn btn-primary btn-flat">Tambah</button>
                  </div>
                </div>
                </div>
              </div>
              <div class="box-body">
                  <div class="col-xs-12 form-group">
                     <div class="col-sm-12 control-label" >
                    <div  class="alert " style="background-color:#e6e9ef;" >
                        <h4><strong>Surat</strong></h4> 
                    </div>
                  </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Nomor surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input id='editor-nomor_surat' class='form-control' name='editor-nomor_surat' type='text'  data-link=""  />                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Sifat surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                        <select name="editor-status" id="editor-status" class="form-control"  >
                              <option value="Biasa" >Biasa</option>
                              <option value="Penting" >Penting</option>
                              <option value="Segera" >Segera</option>
                              
                          </select>                                     
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Index surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input id='editor-index_surat' class='form-control' name='editor-index_surat' type='text'  maxlength='255' />                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Perihal</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <textarea id="editor-perihal" name="editor-perihal" class="form-control" ></textarea>                                    
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Klasifikasi Arsip Fond</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select id='editor-fond_id' name='editor-fond_id' class='select2' style='width:100%;' data-placeholder='Pilih Klasifikasi Arsip Fond'>
                            <option value=''></option>
                            <option value='2'  >000 - UMUM</option>
                            <option value='3'  >100 - PEMERINTAHAN</option>
                          </select>
                        </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Isi Ringkas</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <textarea id="editor-ringkas" name="editor-ringkas" class="form-control" ></textarea>                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Asal Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select name="editor-asal_surat" id="editor-asal_surat" class="form-control"  >
                              <option value="Internal" >Internal</option>
                              <option value="External" >External</option>
                          </select>    
                        </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Tujuan Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                           <select name="editor-tujuan_surat" id="editor-tujuan_surat" class="form-control"  >
                              <option value="Internal" >Internal</option>
                              <option value="External" >External</option>
                          </select>   
                        </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Tanggal surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input type="date" id='editor-tanggal_surat' class='form-control' name='editor-tanggal_surat'  />                                    
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Lampiran</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <textarea id="editor-lampiran" name="editor-lampiran" class="form-control" ></textarea>                                    
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">File lampiran</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <input type="file" id="file_lampran" name="file_lampran" multiple>                                    
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Catatan</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <textarea id="editor-catatan" name="editor-catatan" class="form-control" ></textarea>                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Batas Penyelesaian</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input type="date" id='editor-batas_penyelesaian' class='form-control' name='editor-batas_penyelesaian'  />                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">File surat</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <input type="file" id="file_surat" name="file_surat" multiple>                                    
                     </div>
                  </div>


                  <div class="col-xs-12 form-group">
                     <div class="col-sm-12 control-label" >
                    <div  class="alert " style="background-color:#e6e9ef;" >
                        <h4><strong>Pengantar Surat</strong></h4> 
                    </div>
                  </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Tanggal Pengantar</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input type="date" id='editor-tanggal_pengantar' class='form-control' name='editor-tanggal_pengantar'  />                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Unit Pengolahan</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select id='editor-unit_pengolahan_pengantar' name='editor-unit_pengolahan_pengantar' class='select2' style='width:100%;' data-placeholder='Pilih Unit Pengolahan'>
                            <option value=''></option>
                            <option value='1'  >000 - UMUM</option>
                            <option value='2'  >100 - PEMERINTAHAN</option>
                            <option value='3'  >200 - UMUM</option>
                            <option value='4'  >300 - PEMERINTAHAN</option>
                          </select>
                        </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Unggah Berkas</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <input type="file" id="editor-unggah_berkas" name="editor-unggah_berkas" multiple >                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <div class="col-sm-12 control-label" >
                    <div  class="alert " style="background-color:#e6e9ef;" >
                        <h4><strong>Disposisi</strong></h4> 
                    </div>
                  </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Informasi Disposisi</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <textarea id="editor-informasi_disposisi" name="editor-catatan" class="form-control" ></textarea>                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Tanggal Disposisi</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input type="date" id='editor-tanggal_disposisi' class='form-control' name='editor-tanggal_disposisi'  />                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Unit Pengolahan</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select id='editor-unit_pengolahan_disposisi' name='editor-unit_pengolahan_disposisi' class='select2' style='width:100%;' data-placeholder='Pilih Unit Pengolahan'>
                            <option value=''></option>
                            <option value='1'  >000 - UMUM</option>
                            <option value='2'  >100 - PEMERINTAHAN</option>
                            <option value='3'  >200 - UMUM</option>
                            <option value='4'  >300 - PEMERINTAHAN</option>
                          </select>
                        </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">File Disposisi</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       <input type="file" id="editor-file_disposisi" name="editor-file_disposisi" multiple >                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Disposisi Ke</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select id='editor-disposisi_ke' name='editor-disposisi_ke' class='select2' style='width:100%;' data-placeholder='Pilih tujuan Disposisi'>
                            <option value=''></option>
                            <option value='1'  >000 - UMUM</option>
                            <option value='2'  >100 - PEMERINTAHAN</option>
                            <option value='3'  >200 - UMUM</option>
                            <option value='4'  >300 - PEMERINTAHAN</option>
                          </select>
                        </div>
                  </div>
                  
                  
              </div>
          </div>
        </div>

<div id="alert-hapus" class="alert alert-danger" style="display: none;">
                <strong>Berhasil!</strong> Data Berhasil Dihapus !!
            </div>
        <div id="tabel-SM" class=" col-xs-12" style="display: block;">
            <div class="box box-success">
                <div class="box-header">
                    <div class="btn-group pull-right">
                        <button class="btn btn-default btn-flat" title="print"><i class="fa fa-print"></i> Print</button>
                        <button id="TambahSM" onclick="addSuratM();" class="btn btn-success btn-flat" title="tambah surat masuk"><i class="fa fa-pencil-square-o"></i> Tambah Data Surat Masuk</button>
                    </div>
                </div>          
                      <!-- /.box-header -->
                <div class="box-body table-responsive" id="list-table-menu">
                    <table id="table1" class="table table1 table-bordered table-hover">
                        <thead>
                            <tr style="background:  #42a34a; color: white; text-align: center;">

                                <th style="width: 5% ">No</th>
                                <th>No surat</th>
                                <th>Index surat</th>
                                <th>Tanggal surat</th>
                                <th>Periode surat</th>
                                <th width="14%">Asal Surat</th>
                                <th width="14%">Tujuan surat</th>
                                <th>Sifat surat</th>
                                <th width="10%">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; ?>
                        <?php foreach ($data->result() as $row): ?>
                            <tr >
                                <td style="text-align: center"><?php echo $i;$i++;  ?></td>
                                <td><?php echo $row->no_surat;  ?></td>
                                <td><?php echo $row->index_surat;  ?></td>
                                <td><?php echo $row->tanggal_surat;  ?></td> 
                                <td><?php echo $row->tanggal_surat;  ?></td>
                                <td><?php echo $row->asal_surat;  ?><?php echo 'sdad asdasdad adadadad';  ?></td>
                                <td><?php echo $row->tujuan_surat;  ?><?php echo 'sdad asdasdad adadadad';  ?></td>                  
                                <td><?php echo $row->sifat_surat;  ?></td>
                                <td style="text-align: center;">
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-flat" data-toggle="tooltip" title="Edit" onclick="editAgenda(<?php echo $row->id_surat; ?>);"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteAgenda(<?php echo $row->id_surat; ?>);"><i class="fa fa-trash"></i></button>
                                  </div>
                                </td>
                            </tr> 
                        <?php endforeach; ?>
                
                        </tbody>
                        <tfoot>
                            <tr>
                               <th style="width: 5% ">No</th>
                                <th>No surat</th>
                                <th>Index surat</th>
                                <th>Tanggal surat</th>
                                <th>Periode surat</th>
                                <th>Asal surat</th>
                                <th>Tujuan surat</th>
                                <th>Sifat surat</th>
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
    function addSuratM() {
      $('#title-edit').html('Tambah Data Surat Masuk Kartu Kendali'); 
        if($('#edit-SM').css('display')=='none'){
            $("#edit-SM").show('slow');
            $('#btn-submit').html('Tambah');
            $('#TambahSM').css('display','none'); 
            // $('#editor-tanggal').val('');
            // $('#editor-waktu').val('');
            // $('#editor-kegiatan').val('');
            // $('#editor-tempat').val('');
            // $('#editor-unit').val('');
            // $('#editor-hadir').val('');
            // $('#editor-keterangan').val('');
            $("#tabel-SM").hide();
        }
        
    }

     //edit Agenda
     function editAgenda(id) {
        if($('#edit-SM').css('display')=='block'){
            $("#edit-SM").hide('slow');    
        }
        else{
          $("#edit-SM").show('slow'); 
          $("#tabel-SM").hide();
        }

        //$('#preloader').css('display','block');
        $.get(base_url+"Surat/select/"+id, function(surat) { 
            //$('#preloader').css('display','none');
            $('#edit-SM').show('slow');   
            $('#btn-add').addClass('disabled');
            $('#title-edit').html('Edit Data Surat'); 
            $('#btn-submit').html('Edit');
            $('#editor-nomor_surat').attr('data-link', surat.id);
            $('#editor-nomor_surat').val(surat.no_surat);
            $('#editor-status').val(surat.sifat_surat);
            $('#editor-index_surat').val(surat.index_surat);
            $('#editor-perihal').val(surat.perihal);
            $('#editor-fond_id').val(surat.kasifikasi_arsip);
            $('#editor-ringkas').val(surat.isi_ringkasan);
            $('#editor-asal_surat').val(surat.asal_surat);
            $('#editor-tujuan_surat').val(surat.tujuan_surat);
            $('#editor-tanggal_surat').val(surat.tanggal_surat);
            $('#editor-lampiran').val(surat.lampiran);
            $('#editor-catatan').val(surat.catatan);
            $('#editor-batas_penyelesaian').val(surat.batas_penyelesaian);
            $('#editor-tanggal_pengantar').val(surat.tanggal_pengantar);
            $('#editor-unit_pengolahan_pengantar').val(surat.unit_pengolah_pengantar);
            $('#editor-informasi_disposisi').val(surat.informasi_disposisi);
            $('#editor-tanggal_disposisi').val(surat.tgl_disposisi);
            $('#editor-unit_pengolahan_disposisi').val(surat.unit_pengolah_disposisi);
            $('#editor-disposisi_ke').val(surat.tujuan_disposisi);
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
      $("#tabel-SM").show();
      $("#edit-SM").hide();

      $('#TambahSM').css('display','block');     
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

        if($('#editor-nomor_surat').val()=='' || $('#editor-index_surat').val()=='' ){
            $('#modal-message .modal-body').text('Silakan Lengkapi Inputan');
            $('#modal-message').modal();
            return;

        } 

        if($('#btn-submit').html()=='Tambah'){ 
            $('#preloader').css('display','block');
            var nosurat=$('#editor-nomor_surat').val();
            var status= $('#editor-status').val();
            var indexsurat= $('#editor-index_surat').val();
            var perihal=$('#editor-perihal').val();
            var fond= $('#editor-fond_id').val();
            var ringkas= $('#editor-ringkas').val();
            var asalsurat =$('#editor-asal_surat').val();
            var tujuansurat =$('#editor-tujuan_surat').val();
            var tanggalsurat =$('#editor-tanggal_surat').val();
            var lampiran =$('#editor-lampiran').val();
            var catatan =$('#editor-catatan').val();
            var bataspenyelesaian =$('#editor-batas_penyelesaian').val();
            var tanggalpengantar =$('#editor-tanggal_pengantar').val();
            var unitpengolahanpengantar =$('#editor-unit_pengolahan_pengantar').val();
            var informasidisposisi =$('#editor-informasi_disposisi').val();
            var tanggaldisposisi =$('#editor-tanggal_disposisi').val();
            var unitpengolahandisposisi =$('#editor-unit_pengolahan_disposisi').val();
            var disposisike = $('#editor-disposisi_ke').val();
            $.post(base_url+"Surat/insert", {nosurat:nosurat, status:status, indexsurat:indexsurat, perihal:perihal,fond:fond, ringkas:ringkas, asalsurat:asalsurat, tujuansurat:tujuansurat, tanggalsurat:tanggalsurat, lampiran:lampiran, catatan:catatan, bataspenyelesaian:bataspenyelesaian, tanggalpengantar:tanggalpengantar, unitpengolahanpengantar:unitpengolahanpengantar, informasidisposisi:informasidisposisi, tanggaldisposisi:tanggaldisposisi, unitpengolahandisposisi:unitpengolahandisposisi, disposisike:disposisike }, function(data, textStatus, xhr) {
                $('#preloader').css('display','none');
                $('#TambahSM').css('display','block'); 
                $('#edit-SM').css('display','none');
                $('#tabel-SM').css('display','block');
                $('#tabel-SM').html(data);

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