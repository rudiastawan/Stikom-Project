 <div id="tabel-pengumuman" class=" col-xs-12" style="display: block;">
            <div class="box box-danger">
                <div class="box-header">
                    <div id="alert-tambah" class="alert alert-success" style="display: none;">
                        <strong>Berhasil!</strong> Data Berhasil Disimpan !!
                    </div>

                    <div id="alert-hapus" class="alert alert-danger" style="display: none;">
                        <strong>Berhasil!</strong> Data Berhasil Dihapus !!
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default btn-flat" title="print"><i class="fa fa-print"></i> Print</button>
                        <button id="TambahAgenda" onclick="addPengumuman();" class="btn btn-success btn-flat" title="tambah agenda"><i class="fa fa-pencil-square-o"></i> Tambah Agenda</button>
                    </div>
                </div>          
                      <!-- /.box-header -->
                <div class="box-body table-responsive" id="list-table-menu">
                    <table id="table1" class="table table1 table-bordered table-hover">
                        <thead>
                            <tr style="background:  #551E1E; color: white; text-align: center;">

                                <th style="width: 5% ">No</th>
                                <th>Informasi</th>
                                <th>Mulai</th>
                                <th>Akhir</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $i=1; 
                        foreach ($data->result() as $row): ?>
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
                        <?php  endforeach; ?>
                
                        </tbody>
                        <tfoot>
                            <tr>
                               <th style="width: 5% ">No</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
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