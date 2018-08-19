<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LAZIS Syuhada</title>
    <link rel="icon" type="image/png" href="<?=base_url('resource/admin/images//logo/logo.png')?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/vendor/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/vendor/font-awesome/css/font-awesome.min.css')?>">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/css/fontastic.css')?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/css/grasp_mobile_progress_circle-1.0.0.min.css')?>">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/css/style.default.css" id="theme-stylesheet')?>">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/css/custom.css')?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="<?= base_url('resource/admin/build/css/style.default.css')?>" id="theme-stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('resource/admin/build/vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')?>">
    <script src="<?= base_url('resource/js/ckeditor.js')?>"></script>
    <script src="<?= base_url('resource/js/sample.js')?>"></script>
    <link rel="stylesheet" href="<?= base_url('resource/css/samples.css')?>">
    <link rel="stylesheet" href="<?= base_url('resource/toolbarconfigurator/lib/codemirror/neo.css')?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
 <body id="main">
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?= base_url('resource/images/logo/admin.png')?>" alt="person" class="img-fluid rounded-circle">
            <?php $userdata = $this->session->userdata('login_admin') ?>
            <h2 class="h5 text-uppercase">Admin</h2><span class="text-uppercase">Petugas Admin</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>L</strong><strong class="text-primary">S</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li <?= (uri_string() == 'admin/home' ? 'class="active"' : '') ?>><a href="<?= site_url('admin/artikel')?>"> <i class="icon-home"></i><span>Artikel</span></a></li>
          </ul>
        </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Admin </span><strong class="text-primary"> LAZIS Syuhada</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item"><a href="<?= site_url('admin/auth/logout')?>" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>