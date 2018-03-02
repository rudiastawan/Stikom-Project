<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/template/"; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url()."assets/template/";?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url()."assets/template/";?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()."assets/template/"; ?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()."assets/template/";?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Rudi Astawan</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()."assets/template/";?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Rudi Astawan - Admin
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/template/";?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>RD Unity</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"></li>
         <li>
          <a href="<?php echo base_url('books') ?>">
            <i class="fa fa-th"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('books') ?>">
            <i class="fa fa-th"></i> <span>Books</span>
            
          </a>
        </li>

         <li>
          <a href="<?php echo base_url('employees') ?>">
            <i class="fa fa-user-md"></i> <span>Employees</span>
            
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."assets/template/"; ?>pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?php echo base_url()."assets/template/"; ?>pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php echo base_url()."assets/template/"; ?>pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo base_url()."assets/template/"; ?>pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      

    <br />
      <div class="row">
         <div class="col-lg-2">
            <a href="<?php echo site_url('books/add_books') ?>"><button type="button" class="btn btn-block btn-primary btn-flat">Add Book Data</button></a>
         </div>
          <div class="col-lg-1" style="float: right; margin-right: -20px;">
             <a href="<?php echo site_url('books/add_books') ?>"><button type="button" class="btn btn-default btn-flat"><i class="fa fa-search"></i></button></a>
         </div>
         <div class="col-lg-2" style="float: right; margin-right: -31px;">
            <input type="text" name="description" class="form-control" placeholder="Enter Description">
         </div>

         <div class="col-lg-2" style="float: right; margin-right: -25px;">
            <input type="text" name="description" class="form-control" placeholder="Enter Description">
         </div>

        

      </div>
      <div class="row">
      	<section class="col-lg-12 content">
      
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Books Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered">
                <tr style="background-color: #0099CC;">
                  <th style="width: 50px; text-align: center; color: #ffffff;">NO</th>
                  <th style="width: 125px; text-align: center; color: #ffffff;">TYPE</th>
                  <th style="text-align: center; color: #ffffff;">TITLE</th>
                  <th style="text-align: center; color: #ffffff;">AUTHOR</th>
                  <th style="text-align: center; color: #ffffff;">PUBLISHER</th>
                  <th style="text-align: center; color: #ffffff;">DATE OF PUBLISH</th>
                  <th style="text-align: center; color: #ffffff;">ACTION</th>
                </tr>

                <?php
                  $no = 1;
                  foreach ($buku as $b => $row) {
                ?>
                <tr>
                  <td style="text-align: center;"><?= $no ?></td>
                   <td style="text-align: center;"><?= $row->type ?></td>
                  <td style="text-align: left;"><?= $row->title ?></td>
                  <td style="text-align: left;"><?= $row->author ?></td>
                  <td style="text-align: center;"><?= $row->publisher ?></td>
                  <td style="text-align: center;"><?= $row->date_of_publish ?></td>
                  <td style="text-align: center;">
                           <a href="<?php echo site_url('books/delete_books/'.$row->id_books) ?>"><button type="button" class="btn btn-warning btn-flat"><i class="fa fa-trash-o"></i></button></a>
                           <a href="<?php echo site_url('books/edit_books/'.$row->id_books) ?>"><button type="button" class="btn btn-info btn-flat"><i class="fa fa-edit"></i></button></a>
                           <a href="<?php echo site_url('books/detail_books') ?>"><button type="button" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></button></a>
                  </td>
                </tr>
                <?php
                $no++;
              }
                ?>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </section>
        
        
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo base_url()."assets/template/"; ?>http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

 



  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets/template/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()."assets/template/";?>https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets/template/";?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()."assets/template/";?>https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."assets/template/";?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/template/";?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."assets/template/";?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/template/";?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/template/";?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()."assets/template/";?>https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."assets/template/";?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."assets/template/";?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets/template/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."assets/template/";?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/template/";?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/template/";?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/template/";?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/template/";?>dist/js/demo.js"></script>
</body>
</html>
