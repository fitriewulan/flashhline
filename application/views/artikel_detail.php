<?php $this->load->view('header') ?>
<div class="container">
		<div class="row">
			<div class="col-xs-5 col-md-5 judul">
				<h1 style="color:#223229;"><img src="<?= base_url('resource/img/otomotif.gif')?>" style="width:80px; height:60px;"><b>Otomotif</b></h1>
			</div>
			<div class="col-xs-7 col-md-7 iklan2">
				<img src="<?= base_url('resource/img/iklan1.jpg')?>" width="100%">
			</div>
		</div>
		<div class="row">
			<nav class="navbar navbar-inverse bawah">
			  <div class="container">
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
			        <li><a href="#">LIGA</a></li>
			        <li><a href="#">KLASEMEN</a></li>
			        <li><a href="#">NASIONAL</a></li>
			        <li><a href="#">INTERNASIONAL</a></li>
			        <li><a href="#">SIARAN LANGSUNG</a></li>
			       </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div class="row wel">	
				<div class="col-md-9 content">
					<div class="content1">
						<h2><p><?= $detail_artikel['judul']?></p></h2>
						<?php $tanggal = $detail_artikel['tanggal'];
							$day = date('D', strtotime($tanggal));
							$dayList = array('Sun' => 'Minggu',
											'Mon' => 'Senin',
											'Tue' => 'Selasa',
											'Wed' => 'Rabu',
											'Thu' => 'Kamis',
											'Fri' => 'Jumat',
											'Sat' => 'Sabtu'
											 );
							// $bulan = date('M', strtotime($detail_artikel['tanggal']))

						 ?>
						<p><?= $dayList[$day].", ".$detail_artikel['tanggal'] ?> 
						</p>
						<img src="<?= base_url('resource/img/artikel/'.$detail_artikel['gambar'])?>">
						<p>
							<?= $detail_artikel['isi']?>
							<br>
							Sumber: <a href="www.sports.sindonews.com/motosport">www.sports.sindonews.com/motosport</a>
						</p>	
					</div>	
					<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
					<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
					<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google"></span></a>
					<a class="btn btn-social-icon btn-pinterest" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-pinterest']);"><span class="fa fa-pinterest"></span></a>
					<div class = "komentar" style="widht:100%;">
						<h3>KOMENTAR</h3>
					<form method="post" action="<?= site_url('komentar/add_komentar')?>">
						<input type="hidden" name="id_artikel" value="<?= $detail_artikel['id_artikel']?>">
						<textarea class="form-control" rows="3" name="komentar" required=""></textarea>
						<button type="submit" class="btn btn-primary">komentar</button>
					</form>
					<table>
						<h4>Daftar Komentar</h4>
						<?php foreach ($komentar as $k): ?>
						<tr>							
							<td style="padding: 10px;"><strong><?= $k['nama']?></strong></td>
							<td><?= $k['isi_komentar']?></td>								
						</tr>
						<?php endforeach ?>
					</table>
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
	</div>
</div>
<?php $this->load->view('footer') ?>