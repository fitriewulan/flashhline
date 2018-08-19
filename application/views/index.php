 <?php $this->load->view('header') ?>
 <div class="container">
		<div class="row">
			<div class="judul">
				<img src="<?= base_url('resource/img/judul.jpg')?>">
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
			      <a class="navbar-brand" href="index.html" style="background-color:#223229; size:16px; color:#fff; padding:22px;">HOME</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			      <ul class="nav navbar-nav">
			        <li><a href="#">NASIONAL</a></li>
			        <li><a href="#">INTERNASIONAL</a></li>
			        <li><a href="#">SIARAN LANGSUNG</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<!-- Slider -->
		<div class="row">
			<div class="col-md-9" id="slider">	
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<?php $no=1;
						foreach ($new as $a): ?>
							<?php if ($no++ == 1): ?>
							<div class="item active">
								<a href="<?= site_url('artikel/select_detail/'.$a['id_artikel'])?>"><img src="<?= base_url('resource/img/artikel/'.$a['gambar'])?>" alt="..." ></a>
								<div class="carousel-caption">
									<h3><?=$a['judul']?></h3>
									<p><?=  substr($a['isi'], 0, 200)?>, <?=$a['tanggal']?></p>
								</div>
							</div>
							
							<?php else: ?>
							<div class="item">
								<a href="<?= site_url('artikel/select_detail/'.$a['id_artikel'])?>"><img src="<?= base_url('resource/img/artikel/'.$a['gambar'])?>" alt="..."></a>
								<div class="carousel-caption">
									<h3><?=$a['judul']?></h3>
									<p><?= substr($a['isi'], 0, 200)?>, <?=$a['tanggal']?></p>
								</div>
							</div>
								
							<?php endif ?>
						<?php endforeach ?>
					</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>	
						</div>	
						<div class="col-md-3 news-comments">
							<img src="<?= base_url('resource/img/NC.jpg')?>" width="100%" padding:"0">
							
							<ul>
								<?php foreach ($artikel as $a): ?>
								<li><a href="raket-thomas-uber1.html"><img src="<?= base_url('resource/img/artikel/'.$a['gambar'])?>"><?= $a['judul']?></a></li>
								<?php endforeach ?>
							</ul>	
							
						</div>
					</div>
					<!-- end slider -->
				</div>
				<div class="row wel">	
					<div class="col-md-9 content">
						<div class="content1 row">
							<h2>Latest News</h2>
							<div class=" col-md-8 conten-utama">
								<a href="<?= site_url('artikel/select_detail/'.$terbaru['id_artikel'])?>"><img src="<?= base_url('resource/img/artikel/'.$terbaru['gambar'])?>"></a><h5><b><?= $terbaru['judul']?></b></h5><p><?= substr( $terbaru['isi'], 0, 200)?></p>
								</div>
							<div class="col-md-4 conten-scroll">
								<ul>
									<?php foreach ($late as $l): ?>
										<li><a href="<?= site_url('artikel/select_detail/'.$l['id_artikel'])?>"><img src="<?= base_url('resource/img/artikel/'.$l['gambar'])?>"><?= $l['judul']?></a></li>
									<?php endforeach ?>
									
								</ul>
							</div>
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
								<?php foreach ($artikel as $a): ?>
									<li><a href="<?= site_url('artikel/select_detail/'.$a['id_artikel'])?>"><?= $a['judul']?></a></li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="row wel">
					<div class="col-md-8 linkshare">
						<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
						<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
						<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google"></span></a>
						<a class="btn btn-social-icon btn-pinterest" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-pinterest']);"><span class="fa fa-pinterest"></span></a>
					</div>
					<div class="col-md-4 iklan2">
						<img src="<?= base_url('resource/img/iklan1.jpg')?>">
					</div>
				</div>
			</div>
		</div>
<?php $this->load->view('footer') ?>
