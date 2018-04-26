<div id="tabel-SM" class=" col-xs-12" style="display: block;">
            <div class="box box-success">
                <div class="box-header">

                    <div id="alert-tambah" class="alert alert-success" style="display: none;">
                        <strong>Berhasil!</strong> Data Berhasil Disimpan !!
                    </div>

                    <div id="alert-hapus" class="alert alert-danger" style="display: none;">
                        <strong>Berhasil!</strong> Data Berhasil Dihapus !!
                    </div>
                   
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
        <script>
  $(function () {
    $("#table1").DataTable();
    $('#table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });


  
  //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });


</script>