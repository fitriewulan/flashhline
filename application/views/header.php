<!DOCTYPE html>
<html>
<head>
  <title>FlashLine</title>
  <link href="<?= base_url('resource/css/bootstrap.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('resource/css/styel.css')?>">
  <script type="text/javascript" src="<?= base_url('resource/js/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('resource/js/bootstrap.min.js')?>"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('resource/css/bootstrap.css')?>" rel="stylesheet">
  <link href="<?= base_url('resource/assets/css/font-awesome.css')?>" rel="stylesheet">
  <link href="<?= base_url('resource/assets/css/docs.css')?>" rel="stylesheet" >
  <link href="<?= base_url('resource/bootstrap-social.css')?>" rel="stylesheet" >
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="btn-group" role="group" aria-label="..." style="float:left;">
            <div class="btn-group logo" role="group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?= base_url('resource/img/1.png')?>">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" style="width:300px;">
                <li style="padding:20px 30px;"><a href="<?= site_url('artikel/select_jenis/soccer')?>"><img src="<?= base_url('resource/img/2.gif')?>">Soccer</a></li>
                <li style="padding:20px 30px;"><a href="<?= site_url('artikel/select_jenis/beladiri')?>"><img src="<?= base_url('resource/img/beladiri.gif')?>">Bela Diri</a></li>
                <li style="padding:20px 30px;"><a href="<?= site_url('artikel/select_jenis/motosport')?>"><img src="<?= base_url('resource/img/otomotif.gif')?>">MotoSport</a></li>
                <li style="padding:20px 30px;"><a href="<?= site_url('artikel/select_jenis/raket')?>"><img src="<?= base_url('resource/img/6.gif')?>">Raket</a></li>
                <li style="padding:20px 30px;"><a href="<?= site_url(' ')?>"><img src="<?= base_url('resource/img/5.gif')?>">Lainnya</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control search1" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default button1">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>   
            </button>
          </form>
          <?php $userdata = $this->session->userdata('login_user');
          if (!empty($userdata)): ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="btn-success"><?=$userdata['nama']?></a></li>
             <li><a  data-toggle="modal">Logout</a></li>
          </ul>
          <?php else: ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#Daftar-modal" data-toggle="modal">Daftar</a></li>
            <li><a href="#login-modal" data-toggle="modal" class="btn-success">Login</a></li>
          </ul>
          <?php endif ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
  </nav>
    <div class="container">
  <div class="modal fade" id="Daftar-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Daftar FlashLine</h4>
        </div>
        <div class="modal-body">
          <form action="<?= site_url('user/add_user')?>" method ="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputName" placeholder="Nama Lengkap" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ulangi Password</label>
              <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input  type="submit" class="btn btn-primary" value="Daftar">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <!-- Login-->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Login FlashLine</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="<?= site_url('user/login_process')?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
              </div>
              <div class="modal-footer">
              <a class="btn btn-default" data-dismiss="modal">Close</a>
              <input type="submit" class="btn btn-primary" value="Login">
            </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>