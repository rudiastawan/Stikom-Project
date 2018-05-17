<!-- <div class="box-header">
  <?php 
                  foreach($surat as $data)
                  { ?>
                <h3 id="title-edit" class="box-title"><?= $data->no_surat ?></h3>
                <div class="col-xs-12">
                   <div class="col-sm-12 control-label" >
                 <?php }
                ?>
                </div>
                </div>
              </div> -->
 <?php 
                  foreach($surat as $data)
                  { ?>
<div class="box box-success">
              <div class="box-header">
                <h3 id="title-edit" class="box-title">Detail Surat Masuk Kartu Kendali</h3>
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
                      : <?= $data->no_surat ?>                                 
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Sifat surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                        : <?= $data->sifat_surat ?>                                     
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Index surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       : <?= $data->index_surat ?>                                     
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Perihal</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       : <?= $data->perihal ?>                                      
                     </div>
                  </div>

                   <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Klasifikasi Arsip Fond</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          : <?= $data->klasifikasi_arsip ?>  
                        </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Isi Ringkas</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                      : <?= $data->isi_ringkasan ?>                                      
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Asal Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          : <?= $data->asal_surat ?>    
                        </div>
                  </div>
                  
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Tujuan Surat</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                           : <?= $data->tujuan_surat ?>   
                        </div>
                  </div>
                  
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Tanggal surat</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                      : <?= $data->tanggal_surat ?>                                      
                     </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Lampiran</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       : <?= $data->lampiran ?>                                      
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">File lampiran</label>
                     <div class="col-sm-9 form-group " style="text-align:left;">
                           : <a target="_blank" href="<?php echo base_url();?>uploads/lampiran/<?= $data->file_lampiran ?>"  class="btn btn-sm btn-default btn-flat">Lihat</a> 
                     </div>
                                                        
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Catatan</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       : <?= $data->catatan ?>                                      
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Batas Penyelesaian</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                       : <?= $data->batas_penyelesaian ?>                                     
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">File surat</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                      : <a target="_blank" href="<?php echo base_url();?>uploads/surat/<?= $data->file_surat ?>"  class="btn btn-sm btn-default btn-flat">Lihat</a>                                     
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
                      : <?= $data->tanggal_pengantar ?>                                     
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Unit Pengolahan</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          : <?= $data->unit_pengolah_pengantar ?>  
                        </div>
                  </div>
                   <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Unggah Berkas</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       : <a target="_blank" href="<?php echo base_url();?>uploads/pengantar/<?= $data->file_pengantar ?>"  class="btn btn-sm btn-default btn-flat">Lihat</a>                                  
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
                      <label class="col-sm-3 control-label" style="text-align:right;">Nomor Disposisi</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                      : <?= $data->no_disposisi ?>                                     
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Informasi Disposisi</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                       : <?= $data->informasi_disposisi ?>                                      
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">Tanggal Disposisi</label>
                     <div class="col-sm-9 control-label" style="text-align:left;">
                      : <?= $data->tgl_disposisi ?>                                     
                     </div>
                  </div>
                  <div id="unit_pengolah" class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Unit Pengolahan</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          : <?= $data->unit_pengolah_disposisi ?>  
                           
                          </select>
                        </div>
                  </div>
                 
                  <div class="col-xs-12 form-group">
                      <label class="col-sm-3 control-label" style="text-align:right;">File Disposisi</label>
                     <div class="col-sm-9 form-group" style="text-align:left;">
                      : <a target="_blank" href="<?php echo base_url();?>uploads/disposisi/<?= $data->file_disposisi ?>"  class="btn btn-sm btn-default btn-flat">Lihat</a>                                
                     </div>
                  </div>
                  <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label">Disposisi Ke</label>
                        <div class="col-sm-9 control-label" style="text-align:left;">
                          : <?= $data->tujuan_disposisi ?> 
                        </div>
                  </div>
                  <!-- <input id='file_lampiran2' type='text'    /> 
                  <input id='file_surat2' type='text'    /> 
                  <input id='file_pengantar_surat2' type='text'    /> 
                  <input id='file_disposisi2' type='text'    /> 
 -->            <br>
                  <br>
                   <div class="col-xs-12 form-group">
                     <label style="text-align:right;" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9 control-label" style="text-align:right;">
                         <button onclick="Kembali();" class="btn btn-default btn-flat">Kembali</button>
                         
                       
                        </div>
                  </div>
                  
              </div>
            
          </div>
 <?php }
                ?>