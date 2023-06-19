<?php
include 'koneksi/koneksi.php';
include 'templates/header.php';
?>

<!-- body content -->
	<div class="container">
		<h1 class="mt-2 mb-2">TAMBAH ANGGOTA</h1>
		<form class="mt-2" action="controller/ctrl_add.php" method="POST">
			  <div class="form-group row">
			    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nama_anggota" name="nama" placeholder="masukan nama Anggota">
			    </div>
			  </div>
			  <fieldset class="form-group row">
			    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Jenis Kelamin</legend>
			    <div class="col-sm-10">
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" <?= (@$anggota['jk'] == 'L') ? 'checked' : '' ;?>>
			        <label class="form-check-label" for="gridRadios1">
			          Laki-Laki
			        </label>
			      </div>
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="P" <?= (@$anggota['jk'] == 'p') ? 'checked' : '' ;?>>
			        <label class="form-check-label" for="gridRadios1">
			          Perempuan
			        </label>
			      </div>
			    </div>
			  </fieldset>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			      <input type="text-area" class="form-control" id="alamat" name="alamat" placeholder="masukan alamat">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Telepon</label>
			    <div class="col-sm-10">
			      <input type="text-area" class="form-control" id="alamat" name="telp" placeholder="masukan nomor telepon">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" name="tambah" class="btn btn-primary">Tambah</button> 
			      <a href="v_anggota.php" type="submit" class="btn btn-danger">Gak Jadi</a>
			    </div>
			  </div>
		</form>
	</div>
<?php
include 'templates/footer.php';
?>            	