<?php $this->load->view('header') ?>
<div class="row">
			<div class="col-xs-5 col-md-5 judul">
				<h1 style="color:#223229;"><img src="<?= base_url('resource/img/'.$jenis['jenis'].'.gif')?>" style="width:60px; height:60px;"><b><?= $jenis['jenis']?></b></h1>
			</div>
			<div class="col-xs-7 col-md-7 iklan2">
				<img src="<?= base_url('resource/img/iklan1.jpg')?>" width="100%">
			</div>
		</div>
		<div class="row">
			<nav class="navbar navbar-inverse bawah">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			       <a class="navbar-brand" href="<?=site_url(' ')?>" style="background-color:#223229; size:16px; color:#fff; padding:22px;">HOME</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			      <ul class="nav navbar-nav" style="margin-left:0px;">
			        <li><a href="#">#navigasi</a></li>
			        <li><a href="#">#navigasi</a></li>
			        <li><a href="#">#navigasi</a></li>
			        <li><a href="#">#navigasi</a></li>
			        <li><a href="#">#navigasi</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div class="row">	
			<div class="col-md-9 content">
				<div class="content1 row">
					<h2>Latest News</h2>
					<div class="col-md-6 conten-utama">
						<ul>
							<?php foreach ($artikel as $a): ?>
								<li><a href="raket-thomas-uber1.html"><img src="<?= base_url('resource/img/artikel/'.$a['gambar'])?>"></a><p><?=substr($a['isi'], 0, 200) ?>
							</p></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>	
					<div class="row">
						<nav>
						  <ul class="pager">
						    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
						    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
						  </ul>
						</nav>	
					</div>	
						<div class=" row video">
						<video src="artikel/coba.MP4"></video>
						</div>
			</div>
			<div class="col-md-3 sidebar">
				<div class="iklan">
					<img src="<?= base_url('resource/img/iklan.jpg')?>">
				</div>
				<div class="last-News">
					<img src="<?= base_url('resource/img/LN.jpg')?>">
					<ul>
						<li><a href="#">Piala Thomas dan Uber 2016</a></li>
						<li><a href="#">Alasan Tim Piala Thomas Indonesia Kembali Turunkan Tommy Sugiarto</a></li>
						<li><a href="#">Tim Uber Indonesia Harus Akui Keunggulan Thailand</a></li>
						<li><a href="#">Hasil Lengkap GP Italia dan Klasemen MotoGP 2016</a></li>
						<li><a href="#">Rio Haryanto Cetak Catatan Terbaik di Sirkuit de Catalunya Barcelona</a></li>
						<li><a href="#">Persib Sudah Dapat Tawaran Laga Internasional</a></li>
						<li><a href="#">Piala Thomas dan Uber 2016</a></li>
						<li><a href="#">Alasan Tim Piala Thomas Indonesia Kembali Turunkan Tommy Sugiarto</a></li>
					</ul>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-8 linkshare">
					<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
					<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
					<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google"></span></a>
					<a class="btn btn-social-icon btn-pinterest" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-pinterest']);"><span class="fa fa-pinterest"></span></a>
				</div>
				<div class="col-md-4 iklan2">
					<img src="<?= base_url('resource/img/iklan.jpg')?>">
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer') ?>