<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="http://sigapbappeda.badungkab.go.id/assets/system_images/favicon.png" type="image/x-icon">
  <title>SIRAT </title>
   <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/template/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/custom/font-awesome-4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
         <link href="<?php echo base_url('assets/custom/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        
        <!-- DataTables -->
        <link href="<?php echo base_url('assets/template/plugins/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css">
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/template/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/template/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/custom/css/magnum_custom.css') ?>" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo base_url('assets/template/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/template/plugins/timepicker/bootstrap-timepicker.min.css') ?>" rel="stylesheet" type="text/css" />

          <!-- Select2 -->
   
        <link href="<?php echo base_url('assets/template/plugins/select2/select2.min.css') ?>" rel="stylesheet" type="text/css" />

        
        

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
      
  
</head>
<body class="hold-transition skin-blue">
<div class="wrapper">

  <header class="main-header" style="background: rgb(59, 70, 74) none repeat scroll 0% 0%;">
            <div class="bg-user-panel-header">
                <img src="<?php echo base_url('assets/images/bg-blur.jpg') ?>" alt="User Image" />
            </div>
            <a href="#" class="logo"><b> SIRAT</b></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user "></i>
                   
                    <span class="hidden-xs">
              <?php echo $currUser; ?></span> 
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li style="background-color: white;" class="user-header">
    
                <p style="color: black">
                 <?php echo $currUser; ?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('Manajemen_User/Profil') ?>" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a id="logout" href="<?php echo base_url('Login/unauth') ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>


                       
                    </ul>
                </div>
            </nav>
        </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
            <div class="bg-user-panel">
                <img src="<?php echo base_url('assets/images/bg-blur.jpg') ?>" alt="User Image" />
            </div>
            <div class="image img_circle">
                <img src="<?php echo base_url('upload/'.$foto.'') ?>" alt="User Image" />
            </div>
            <div class="info">
                <p style="color: #fff;"><?php echo $currUser; ?></p>
                <a href="#">Kepala Sub Bagian Perencanaan dan Pelaporan </a>
            </div>
            
        </div>