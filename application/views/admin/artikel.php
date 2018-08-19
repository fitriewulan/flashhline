<?php
 $this->load->view('admin/header') ?>
<section>
	<?php $cari = $this->session->userdata('cari'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
	              <div class="card">
	                <div class="card-header d-flex align-items-center">
	                  <h2 class="h5 display">Artikel</h2>
	                </div>
	                 <div class="card-header d-flex align-items-center">
	                 	<div class="col" style="float: left; margin: auto;"><a href="<?= site_url('admin/add_artikel')?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a></div>
	                 	<div class="col">
	                 	<form action="<?=site_url('admin/amil/search')?>" method = "post">
	                 		<div class="input-group" style="width: 50%; float: right; margin: auto;"">
                            <input type="text" class="form-control" name="keyword" placeholder="Cari..." value="<?=$cari?>"><span class="input-group-btn">
                              <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button></span>
                          </div>
                        </form>
	                 	</div>
	                  
	                </div>
	                <div class="card-body">
	                  <table class="table table-striped table-sm">
	                    <thead>
	                      <tr>
	                        <th>No</th>
	                        <th>Judul</th>
	                        <th>Conten isi</th>
	                        <th>gambar</th>
	                        <th>sumber</th>
	                        <th>tgl terbit</th>
	                        <th>aksi</th>
	                        
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	<?php $no=1;
	                    	foreach ($artikel as $A):?>
	                      <tr>
	                        <th scope="row"><?= $no++?></th>
	                        <td><?= $A['jenis']?></td>
	                        <td><?= $A['judul']?></td>
	                        <td><?= substr($A['isi'], 0, 200)?></td>
	                        <td><?= $A['gambar']?></td>
	                        <td><?= $A['sumber']?></td>
	                        <td><?= $A['tanggal']?></td>
	                        <td>
	                         <a href="<?= site_url('admin/artikel/edit/'.$A['id_artikel'])?>" class="btn btn-xs btn-primary" onclick= "return confirm('kamu yakin ingin mengubah data?')"><i class="fa fa-eye"></i>detail</a> 
		                     <a href="<?= site_url('admin/artikel/edit/'.$A['id_artikel'])?>" class="btn btn-xs btn-info" onclick= "return confirm('kamu yakin ingin mengubah data?')"><i class="fa fa-pencil"></i>edit</a> 
		                     <a href="<?= site_url('admin/artikel/delete/'.$A['id_artikel'])?>" class="btn btn-xs btn-danger" onclick= "return confirm('kamu yakin ingin mengubah data?')"><i class="fa fa-trash"></i>delete</a> 
		                    </td>
	                      </tr>
	                      	<?php endforeach; ?>
	                    </tbody>
	                  </table>
	                </div>
              </div>
            </div>
			</div>
		</div>
	</section>
<?php $this->load->view('admin/footer') ?>