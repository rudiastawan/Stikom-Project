
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
                          <select id='editor-fond_id' name='editor-fond_id' class="form-control">
                            
                            <option value="UMUM"  >UMUM</option>
                            <option value="PEMERINTAHAN"  >PEMERINTAHAN</option>
                            <option value="POLITIK/ORGANISASI KEMASYARAKATAN"  >POLITIK/ORGANISASI KEMASYARAKATAN</option>
                            <option value="KEAMANAN/KETERTIBAN"  >KEAMANAN/KETERTIBAN</option>
                            <option value="KESEJAHTERAAN RAKYAT"  >KESEJAHTERAAN RAKYAT</option>
                            <option value="PEREKONOMIAN"  >PEREKONOMIAN</option>
                            <option value="PEKERJAAN UMUM DAN KETENAGAAN"  >PEKERJAAN UMUM DAN KETENAGAAN</option>
                            <option value="PENGAWASAN"  >PENGAWASAN</option>
                            <option value="KEPEGAWAIAN"  >KEPEGAWAIAN</option>
                            <option value="KEUANGAN"  >KEUANGAN</option>
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
                          <select name="sasal_surat" id="sasal_surat" class="form-control" onchange="select_asal_surat();" >
                              <option value="" ></option>
                              <option value="Internal" >Internal</option>
                              <option value="External" >External</option>
                          </select>    
                        </div>
                  </div>
                   <div id="tampil_asal_surat" style="display: none;" class="col-xs-12 form-group">
                     <label style="text-align:right; " class="col-sm-3 control-label">Pilih Asal Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select data-placeholder='Pilih Asal Surat' name="editor-asal_surat" id="editor-asal_surat" class="select2 form-control" style='width:100%;' >
                             <option id="currAsal" ></option>
                             
                          </select>    
                        </div>
                  </div>
                  <div id="tampil_asal_surat2" class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Pilih Asal surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input id='currAsal2' class='form-control' type='text'  readonly />                                    
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Tujuan Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                           <select name="stujuan_surat" id="stujuan_surat" class="form-control" onchange="select_tujuan_surat();"  >
                              <option value="" ></option>
                              <option value="Internal" >Internal</option>
                              <option value="External" >External</option>
                          </select>   
                        </div>
                  </div>
                  <div id="tampil_tujuan_surat" style="display: none;" class="col-xs-12 form-group">
                     <label style="text-align:right; " class="col-sm-3 control-label">Pilih Tujuan Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select data-placeholder='Pilih Tujuan Surat' name="editor-tujuan_surat" id="editor-tujuan_surat" class="select2 form-control" style='width:100%;' >
                              <option id="currTujuan" ></option>
                          </select>    
                        </div>
                  </div>
                  <div id="tampil_tujuan_surat2" class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Pilih Tujuan surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       <input id='currTujuan2' class='form-control' type='text'  readonly />                                    
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
                          <select id='editor-unit_pengolahan_pengantar' name='editor-unit_pengolahan_pengantar' class='select2' style='width:100%;' >
                               <?php
                                 foreach ($unit_pengolah->result() as $option): ?>
                                     <option value="<?php echo $option->nama_unitPengolah; ?>" > <?php echo $option->nama_unitPengolah; ?></option>    
                                <?php endforeach; ?>
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
                  <div id="unit_pengolah" class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Unit Pengolahan</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          <select id='editor-unit_pengolahan_disposisi' name='editor-unit_pengolahan_disposisi' class='select2' style='width:100%;' >
                            <?php
                                 foreach ($unit_pengolah->result() as $option): ?>

                                     <option value="<?php echo $option->nama_unitPengolah; ?>" > <?php echo $option->nama_unitPengolah; ?></option>    
                                <?php endforeach; ?>
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
                            <option value='1'  >000 - UMUM</option>
                            <option value='2'  >100 - PEMERINTAHAN</option>
                            <option value='3'  >200 - UMUM</option>
                            <option value='4'  >300 - PEMERINTAHAN</option>
                          </select>
                        </div>
                  </div>
                  <input id='file_lampiran2' type='text'    /> 
                  <input id='file_surat2' type='text'    /> 
                  <input id='file_pengantar_surat2' type='text'    /> 
                  <input id='file_disposisi2' type='text'    /> 


                  <br>
                  <br>
                   <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9 control-label" style="text-align:right;">
                         <button onclick="Batal();" class="btn btn-lg btn-default btn-flat">Batal</button>
                         <button onclick="submit(this);" id="btn-submit" class="btn btn-lg btn-primary btn-flat">Tambah</button>
                         
                       
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
                                <td><?php echo $row->asal_surat;  ?></td>
                                <td><?php echo $row->tujuan_surat;  ?></td>                  
                                <td><?php echo $row->sifat_surat;  ?></td>
                                <td style="text-align: center;">
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-flat" data-toggle="tooltip" title="Edit" onclick="editAgenda(<?php echo $row->id_surat; ?>);"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteSurat(<?php echo $row->id_surat; ?>);"><i class="fa fa-trash"></i></button>
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
            $('#currAsal').val(surat.asal_surat);
            $('#currAsal2').val(surat.asal_surat);
            $('#currTujuan').val(surat.tujuan_surat);
            $('#currTujuan2').val(surat.tujuan_surat);
            $('#edit-SM').show('slow');   
            $('#btn-add').addClass('disabled');
            $('#title-edit').html('Edit Data Surat'); 
            $('#btn-submit').html('Edit');
            $('#editor-nomor_surat').attr('data-link', surat.id_surat);
            $('#editor-nomor_surat').val(surat.no_surat);
            $('#editor-status').val(surat.sifat_surat);
            $('#editor-index_surat').val(surat.index_surat);
            $('#editor-perihal').val(surat.perihal);
            $('#editor-fond_id').val(surat.klasifikasi_arsip);
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

            $('#file_lampiran2').val(surat.file_lampiran);
            $('#file_surat2').val(surat.file_surat);
            $('#file_pengantar_surat2').val(surat.file_pengantar);
            $('#file_disposisi2').val(surat.file_disposisi);
        }, 'json');
    }


    //hapus Agenda
    function deleteSurat(id) {
        $('#modal-delete').modal();
        $(document).one('click','#btn-delete', function(event) {
            $('#modal-delete').modal('hide').on('hidden.bs.modal', function() {
                
                $('#preloader').css('display','block');
                $.get(base_url+"Surat/delete/"+id, function(data) {
                    $('#preloader').css('display','none');
                    $('#tabel-SM').html(data);
                    $("#alert-hapus").css("display","block");
                    $("#alert-hapus").fadeOut(3000);
                });
            });
        });
    }

    //select asal surat
    function select_asal_surat(){
       $('#tampil_asal_surat2').css('display','none');
      value = document.getElementById("sasal_surat").value;
      $.ajax({
           url:"<?php echo base_url();?>Surat/select_asal/"+value+"",
           success: function(response){
           $("#tampil_asal_surat").css("display","block");
           $("#editor-asal_surat").html(response);
           
           },
           dataType:"html"
         });

         return false;
    }
     function select_tujuan_surat(){
      $('#tampil_tujuan_surat2').css('display','none');
      value = document.getElementById("stujuan_surat").value;
      $.ajax({
           url:"<?php echo base_url();?>Surat/select_asal/"+value+"",
           success: function(response){
           $("#tampil_tujuan_surat").css("display","block");
           $("#editor-tujuan_surat").html(response);
           
           },
           dataType:"html"
         });

         return false;
    }




  //button batal
    function Batal() {
      $("#tabel-SM").show();
      $("#edit-SM").hide();
      $('#form_surat').trigger("reset");
      //$('#TambahSM').css('display','block');     
      // $('#edit-agenda').css('display','none');
      
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
            if($('#file_lampran').val()==''|| $('#file_surat').val()=='' || $('#editor-unggah_berkas').val()==''|| $('#editor-file_disposisi').val()==''){
                  $('#modal-message .modal-body').text('FIle Upload Belum lengkap');
                  $('#modal-message').modal();
                  return;

            } 


            var file_lampiran = $('#file_lampran')[0].files[0];
            var file_name_lampiran =$('#file_lampran')[0].files[0].name;
            var file_surat = $('#file_surat')[0].files[0];
            var file_name_surat =$('#file_surat')[0].files[0].name;
            var file_pengantar_surat = $('#editor-unggah_berkas')[0].files[0];
            var file_name_pengantar_surat =$('#editor-unggah_berkas')[0].files[0].name;
            var file_disposisi = $('#editor-file_disposisi')[0].files[0];
            var file_name_disposisi =$('#editor-file_disposisi')[0].files[0].name;

            var form_data = new FormData();
 
            form_data.append('file_lampiran', file_lampiran);
            form_data.append('file_name_lampiran', file_name_lampiran);
            form_data.append('file_surat', file_surat);
            form_data.append('file_name_surat', file_name_surat);
            form_data.append('file_pengantar_surat', file_pengantar_surat);
            form_data.append('file_name_pengantar_surat', file_name_pengantar_surat);
            form_data.append('file_disposisi', file_disposisi);
            form_data.append('file_name_disposisi', file_name_disposisi);
            $.ajax({
                url: base_url+'Surat/insert_file', // point to server-side PHP script
                dataType: 'json',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data,status){
                    //alert(php_script_response); // display response from the PHP script, if any
                    if (data.status=='success') {

                        var no_surat=$('#editor-nomor_surat').val();
                        var sifat_surat= $('#editor-status').val();
                        var index_surat= $('#editor-index_surat').val();
                        var perihal=$('#editor-perihal').val();
                        var klasifikasi_arsip= $('#editor-fond_id').val();
                        var isi_ringkasan= $('#editor-ringkas').val();
                        var asal_surat =$('#editor-asal_surat').val();
                        var tujuan_surat =$('#editor-tujuan_surat').val();
                        var tanggal_surat =$('#editor-tanggal_surat').val();
                        var lampiran =$('#editor-lampiran').val();
                        var catatan =$('#editor-catatan').val();
                        var batas_penyelesaian =$('#editor-batas_penyelesaian').val();
                        var tanggal_pengantar =$('#editor-tanggal_pengantar').val();
                        var unit_pengolah_pengantar =$('#editor-unit_pengolahan_pengantar').val();
                        var informasi_disposisi =$('#editor-informasi_disposisi').val();
                        var tgl_disposisi =$('#editor-tanggal_disposisi').val();
                        var unit_pengolah_disposisi =$('#editor-unit_pengolahan_disposisi').val();
                        var tujuan_disposisi = $('#editor-disposisi_ke').val();
                        var file_lampiran = data.file_lampiran;
                        var file_surat = data.file_surat;
                        var file_pengantar = data.file_pengantar_surat;
                        var file_disposisi = data.file_disposisi;
                        
                        $.post(base_url+"Surat/insert", {no_surat:no_surat, sifat_surat:sifat_surat, index_surat:index_surat, perihal:perihal,klasifikasi_arsip:klasifikasi_arsip, isi_ringkasan:isi_ringkasan, asal_surat:asal_surat, tujuan_surat:tujuan_surat, tanggal_surat:tanggal_surat, lampiran:lampiran, catatan:catatan, batas_penyelesaian:batas_penyelesaian, tanggal_pengantar:tanggal_pengantar, unit_pengolah_pengantar:unit_pengolah_pengantar, informasi_disposisi:informasi_disposisi, tgl_disposisi:tgl_disposisi, unit_pengolah_disposisi:unit_pengolah_disposisi, tujuan_disposisi:tujuan_disposisi,file_lampiran:file_lampiran,file_surat:file_surat,file_pengantar:file_pengantar,file_disposisi:file_disposisi}, function(data, textStatus, xhr) {
                            $('#form_surat').trigger("reset");
                            $('#preloader').css('display','none');
                            $('#TambahSM').css('display','block'); 
                            $('#edit-SM').css('display','none');
                            $('#tabel-SM').css('display','block');
                            $('#tabel-SM').html(data);

                            $("#alert-tambah").css("display","block");
                            $("#alert-tambah").fadeOut(3000);
                        }); 
                    }else{
                        
                    }
                }
            });
        }
        else if($('#btn-submit').html()=='Edit'){
            $('#preloader').css('display','block');
            

            var cek_isi_file_lampiran=$('#file_lampran').val();
            var cek_isi_file_surat=$('#file_surat').val();
            var cek_isi_file_pengantar_surat=$('#editor-unggah_berkas').val();
            var cek_isi_file_disposisi=$('#editor-file_disposisi').val();
            var nama_isi_file_lampiran=$('#file_lampiran2').val();
            var nama_isi_file_surat=$('#file_surat2').val();
            var nama_isi_file_pengantar_surat=$('#file_pengantar_surat2').val();
            var nama_isi_file_disposisi=$('#file_disposisi2').val();

            var form_data = new FormData();
            if ($('#file_lampran').val()!='') {
              var file_lampiran = $('#file_lampran')[0].files[0];
              var file_name_lampiran =$('#file_lampran')[0].files[0].name;
              form_data.append('file_lampiran', file_lampiran);
              form_data.append('file_name_lampiran', file_name_lampiran);
            }

            if ($('#file_surat').val()!='') {
              var file_surat = $('#file_surat')[0].files[0];
              var file_name_surat =$('#file_surat')[0].files[0].name;
              form_data.append('file_surat', file_surat);
              form_data.append('file_name_surat', file_name_surat);
            }

            if ($('#editor-unggah_berkas').val()!='') {
              var file_pengantar_surat = $('#editor-unggah_berkas')[0].files[0];
              var file_name_pengantar_surat =$('#editor-unggah_berkas')[0].files[0].name;
              form_data.append('file_pengantar_surat', file_pengantar_surat);
              form_data.append('file_name_pengantar_surat', file_name_pengantar_surat); 
              
            }
            if ($('#editor-file_disposisi').val()!='') {
              var file_disposisi = $('#editor-file_disposisi')[0].files[0];
              var file_name_disposisi =$('#editor-file_disposisi')[0].files[0].name;
              form_data.append('file_disposisi', file_disposisi);
              form_data.append('file_name_disposisi', file_name_disposisi);
            }

            form_data.append('cek_isi_file_lampiran', cek_isi_file_lampiran);
            form_data.append('cek_isi_file_surat', cek_isi_file_surat);
            form_data.append('cek_isi_file_pengantar_surat', cek_isi_file_pengantar_surat);
            form_data.append('cek_isi_file_disposisi', cek_isi_file_disposisi);
            form_data.append('nama_isi_file_lampiran', nama_isi_file_lampiran);
            form_data.append('nama_isi_file_surat', nama_isi_file_surat);
            form_data.append('nama_isi_file_pengantar_surat', nama_isi_file_pengantar_surat);
            form_data.append('nama_isi_file_disposisi', nama_isi_file_disposisi);


            $.ajax({
                url: base_url+'Surat/edit_file', // point to server-side PHP script
                dataType: 'json',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(data,status){
                    //alert(php_script_response); // display response from the PHP script, if any
                    if (data.status=='success') {
                        var id=$('#editor-nomor_surat').attr('data-link');
                        var no_surat=$('#editor-nomor_surat').val();
                        var sifat_surat= $('#editor-status').val();
                        var index_surat= $('#editor-index_surat').val();
                        var perihal=$('#editor-perihal').val();
                        var klasifikasi_arsip= $('#editor-fond_id').val();
                        var isi_ringkasan= $('#editor-ringkas').val();
                        var asal_surat =$('#editor-asal_surat').val();
                        var tujuan_surat =$('#editor-tujuan_surat').val();
                        var tanggal_surat =$('#editor-tanggal_surat').val();
                        var lampiran =$('#editor-lampiran').val();
                        var catatan =$('#editor-catatan').val();
                        var batas_penyelesaian =$('#editor-batas_penyelesaian').val();
                        var tanggal_pengantar =$('#editor-tanggal_pengantar').val();
                        var unit_pengolah_pengantar =$('#editor-unit_pengolahan_pengantar').val();
                        var informasi_disposisi =$('#editor-informasi_disposisi').val();
                        var tgl_disposisi =$('#editor-tanggal_disposisi').val();
                        var unit_pengolah_disposisi =$('#editor-unit_pengolahan_disposisi').val();
                        var tujuan_disposisi = $('#editor-disposisi_ke').val();
                        var file_lampiran = data.file_lampiran;
                        var file_surat = data.file_surat;
                        var file_pengantar = data.file_pengantar_surat;
                        var file_disposisi = data.file_disposisi;
                        
                        $.post(base_url+"Surat/edit", {id:id,no_surat:no_surat, sifat_surat:sifat_surat, index_surat:index_surat, perihal:perihal,klasifikasi_arsip:klasifikasi_arsip, isi_ringkasan:isi_ringkasan, asal_surat:asal_surat, tujuan_surat:tujuan_surat, tanggal_surat:tanggal_surat, lampiran:lampiran, catatan:catatan, batas_penyelesaian:batas_penyelesaian, tanggal_pengantar:tanggal_pengantar, unit_pengolah_pengantar:unit_pengolah_pengantar, informasi_disposisi:informasi_disposisi, tgl_disposisi:tgl_disposisi, unit_pengolah_disposisi:unit_pengolah_disposisi, tujuan_disposisi:tujuan_disposisi,file_lampiran:file_lampiran,file_surat:file_surat,file_pengantar:file_pengantar,file_disposisi:file_disposisi}, function(data, textStatus, xhr) {
                            $('#form_surat').trigger("reset");
                            $('#preloader').css('display','none');
                            $('#TambahSM').css('display','block'); 
                            $('#edit-SM').css('display','none');
                            $('#tabel-SM').css('display','block');
                            $('#tabel-SM').html(data);

                            $("#alert-tambah").css("display","block");
                            $("#alert-tambah").fadeOut(3000);
                        }); 
                    }else{
                        
                    }
                }
            });
        }
       
    };
        
</script>