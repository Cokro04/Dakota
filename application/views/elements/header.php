<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sampel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
  <!-- Theme style -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link  rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/skins/_all-skins.min.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')?>"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')?>"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboardc')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tampilan</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg')?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('NAME'); ?> 
                  <small>Tampilan Admin</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Message</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Settings</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Master</a>
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
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="<?php if (isset($active_dashboard)) { echo $active_dashboard; } ?>">
          <a href="<?php echo base_url('dashboardc')?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>

        <li class="<?php if (isset($active_user)) { echo $active_user; } ?>">
          <a href="<?php echo base_url('userc/data_user')?>">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>
        <li class="<?php if (isset($active_wilayah)) { echo $active_wilayah; } ?> treeview">
          <a href="#">
              <i class="fa fa-area-chart"></i> <span>Wilayah</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if (isset($active_negara)) { echo $active_negara; } ?>">
              <a href="<?php echo base_url('negarac/data_negara')?>">Negara</a>
            </li>
            <li class="<?php if (isset($active_prov)) { echo $active_prov; } ?>">
              <a href="<?php echo base_url('provc/data_prov')?>">Provinsi Dan Kota</a>
            </li>
            <li class="<?php if (isset($active_kec)) { echo $active_kec; } ?>">
              <a href="<?php echo base_url('kecamatanc/data_kecamatan')?>">Kecamatan Dan Kelurahan</a>
            </li>
          </ul>
        </li>
        <li class="<?php if (isset($active_pelanggan)) { echo $active_pelanggan; } ?>">
          <a href="<?php echo base_url('pelangganc/data_pelanggan')?>">
            <i class="fa fa-id-card"></i> <span>Pelanggan</span>
          </a>
        </li>
        <li class="<?php if (isset($active_layanan)) { echo $active_layanan; } ?>">
          <a href="<?php echo base_url('layananc/data_layanan')?>">
            <i class="fa fa-handshake-o"></i> <span>Layanan</span>
          </a>
        </li>
        <li class="<?php if (isset($active_tarif)) { echo $active_tarif; } ?>">
          <a href="<?php echo base_url('tarifc/data_tarif')?>">
            <i class="fa fa-money"></i> <span>Tarif</span>
          </a>
        </li>
        <li class="<?php if (isset($active_mitra)) { echo $active_mitra; } ?>">
          <a href="<?php echo base_url('mitrac/data_mitra')?>">
            <i class="fa fa-ship"></i> <span>Mitra</span>
          </a>
        </li>

<!-- 
        <li class="<?php if (isset($active_fitur)) { echo $active_fitur; } ?>">
          <a href="<?php echo base_url('fiturc/data_fitur')?>">
            <i class="fa fa-eye"></i> <span>Fitur Tambahan</span>
          </a>
        </li>
        <li class="<?php if (isset($active_counter)) { echo $active_counter; } ?>">
          <a href="<?php echo base_url('beritac/data_berita')?>">
            <i class="fa fa-eye"></i> <span>Counter</span>
          </a>
        </li>
 -->
        <li class="header">Line</li>
        <li><a href="<?php echo base_url('loginc/logout')?>"><i class="fa fa-power-off text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>