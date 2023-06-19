<?php
include 'koneksi/koneksi.php';
include 'templates/header.php';
?>

<!-- body content -->
	<div class="container">
		<h2 class="mt-2 mb-2">TAMBAH BUKU</h2>
		<form class="mt-2" action="controller/ctrl_add_buku.php" method="POST">
			  <div class="form-group row">
			    <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="judul_buku" name="nama" placeholder="masukan judul buku">
			    </div>
			  </div>
			  <fieldset class="form-group row">
			    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Kategori</legend>
			    <div class="col-sm-10">
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" <?= (@$buku['kategori'] == 'novel') ? 'checked' : '' ;?>>
			        <label class="form-check-label" for="gridRadios1">
			          Novel
			        </label>
			      </div>
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="P" <?= (@$buku['kategori'] == 'cerpen') ? 'checked' : '' ;?>>
			        <label class="form-check-label" for="gridRadios1">
			          Cerpen
			        </label>
			      </div>
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="P" <?= (@$buku['kategori'] == 'sejarah') ? 'checked' : '' ;?>>
			        <label class="form-check-label" for="gridRadios1">
			          Sejarah
			        </label>
			      </div>
			    </div>
			  </fieldset>
			  <div class="form-group row">
			    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="masukan nama pengarang">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="penerbit" name="telp" placeholder="masukan nama penerbit">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" name="tambah" class="btn btn-primary">Tambah</button> 
			      <a href="v_buku.php" type="submit" class="btn btn-danger">Gak Jadi</a>
			    </div>
			  </div>
		</form>
	</div>
</div>
<?php
include 'templates/footer.php';
?>            	