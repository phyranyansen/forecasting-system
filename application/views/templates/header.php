<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url().'assets/chart/css/morris.css'?>">
  <link href="<?= base_url().'assets/bootstrap1/vendor/fontawesome-free/css/all.min.css';?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url().'assets/bootstrap1/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url().'assets/bootstrap1/css/ruang-admin.min.css';?>" rel="stylesheet">
  <link href="<?= base_url().'assets/bootstrap1/vendor/datatables/dataTables.bootstrap4.min.css';?>" rel="stylesheet">
  <!-- Select2 -->
  <link href="<?= base_url().'assets/bootstrap1/vendor/fontawesome-free/css/all.min.css';?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url().'assets/bootstrap1/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url().'assets/bootstrap1/css/ruang-admin.min.css';?>" rel="stylesheet">
 <!-- javascript-->  
<script src="<?php echo base_url().'assets/chart/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/chart/js/raphael-min.js'?>"></script>
<script src="<?php echo base_url().'assets/chart/js/morris.min.js'?>"></script>
 
  <!-- Select2 -->
  <link href="<?= base_url().'assets/bootstrap1/vendor/select2/dist/css/select2.min.css';?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url().'assets/bootstrap1/vendor/select2/dist/css/select2.min.css';?>" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="<?= base_url().'assets/bootstrap1/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css';?>" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="<?= base_url().'assets/bootstrap1/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css';?>" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="<?= base_url().'assets/bootstrap1/vendor/clock-picker/clockpicker.css';?>" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url().'assets/bootstrap1/img/logo/toko3.png';?>">
        </div>
        <div class="sidebar-brand-text mx-3">Alfarizqy</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
            
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('data-jenis'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Jenis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('data-penjualan'); ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Penjualan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('data-user'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('forecasting'); ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Forecsating</span>
        </a>
      </li>
     
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url().'assets/bootstrap1/img/boy.png';?>" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?= $this->session->userdata('username') ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $page; ?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active" aria-current="page"><?= $page; ?></li>
            </ol>
          </div>