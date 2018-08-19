<?php $this->load->view('admin/header');?>
  <div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Tambah</a></li>
        <li class="breadcrumb-item active">Artikel</li>
      </ul>
    </div>
  </div>
  <section class="forms">
    <div class="container-fluid">
      <header> 
        <h1 class="h3 display">Tambah Artikel</h1>
      </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form class="form-horizontal" action="<?= site_url('admin/add_proses')?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Jenis</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jenis">
                      <option value="dll">lainnya...</option>
                      <option value="Soccer">Soccer</option>
                      <option value="Bela diri">Bela Diri</option>
                      <option value="Moto Sport">Moto Sport</option>
                      <option value="Raket">Raket</option>                      
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" value="<?= $this->session->flashdata('judul')?>" required="" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Isi Conten</label>
                 <div class="col-sm-10">
                  	<textarea id="ckeditor1" class="form-control" name="isi" required=""><?= $this->session->flashdata('isi')?></textarea>
                  </div>
                 <!--  <main>
                  <div class="adjoined-bottom">
                    <div class="grid-container">
                      <div class="grid-width-100">
                        <div id="editor">
                          <textarea name="isi" required=""> <?= $this->session->flashdata('isi')?> </textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  </main> -->
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">sumber</label>
                  <div class="col-sm-10">
                    <input type="text" name="sumber" value="<?= $this->session->flashdata('sumber')?>" class="form-control" required="">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">gambar</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="gambar" accept="image/*"  multiple />
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <div class="col-sm-4 offset-sm-2">
                    <a href="<?= site_url('admin/Artikel')?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="<?= base_url('resource/js/jquery.min.js')?>"></script>
  
  <script>
    $(function(){
      CKEDITOR.replace('ckeditor1');
    });
  </script>

<?php 	$this->load->view('admin/footer') ?>