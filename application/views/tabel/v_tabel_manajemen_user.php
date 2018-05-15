
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
                        <button id="TambahUser" onclick="addUser();" class="btn btn-success btn-flat" title="tambah user"><i class="fa fa-pencil-square-o"></i> Tambah User</button>
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
                                <th>Foto</th>
                                <th>Pilihan</th>
                            </tr>
                        </tfoot>
                    </table>

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