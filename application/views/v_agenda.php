
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="Dashboard">
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
            <li class="active"><a href="Agenda"><i class="fa fa-circle-o"></i> Agenda Kerja</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pengumuman</a></li>
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

            <div class="row">
              
              <div id="edit-dokumen" class=" col-xs-12" style="display: block;">
                  <div class="box box-success">
                      <div class="box-header">
                        <div class="btn-group pull-right">
                              <button id="btn-cancel" class="btn btn-default btn-flat">Print</button>
                              <button onclick="submit(this);" id="btn-submit" class="btn btn-primary btn-flat">Tambah</button>
                        </div>
                      </div>
                      <!-- /.box-header -->
        <div class="box-body table-responsive" id="list-table-menu">
            <table id="table1" class="table table1 table-bordered table-hover">
                <thead>
                    <tr style="background:  #551E1E; color: white; text-align: center;">
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
                    <tr >
                        <td style="text-align: center">1</td>
                        <td>12-12-2012</td>
                        <td>13:00</td>
                        <td>asik asik</td> 
                        <td>asik asik</td>
                        <td>asik asik</td>
                        <td>asik asik</td>                  
                        <td>asik asik</td>
                        <td style="text-align: center;">
                          <div class="btn-group">
                            <button class="btn btn-success btn-flat" data-toggle="tooltip" title="Edit" onclick="editDokumen();"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteDokumen();"><i class="fa fa-trash"></i></button>
                          </div>
                        </td>
                    </tr> 

                    <tr >
                        <td style="text-align: center">1</td>
                        <td>12-12-2012</td>
                        <td>13:00</td>
                        <td>asik asik</td> 
                        <td>asik asik asik asik asik asik</td>
                        <td>asik asik</td>
                        <td>asik asik</td>                  
                        <td>asik asik</td>
                        <td style="text-align: center;">
                          <div class="btn-group">
                            <button class="btn btn-success btn-flat" data-toggle="tooltip" title="Edit" onclick="editDokumen();"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-flat" data-toggle="tooltip" title="Delete" onclick="deleteDokumen();"><i class="fa fa-trash"></i></button>
                          </div>
                        </td>
                    </tr>   
        
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
            </div><!-- .row -->

        </section><!-- /.content-->
       
      

   
  </div>
 
