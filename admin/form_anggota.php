<?php 
include '../header.php';
 ?>

<div class="container">
		<h1 class="mt-2 mb-2">TAMBAH ANGGOTA</h1>
		<form class="mt-2">
			  <div class="form-group row">
			    <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="id_anggota" placeholder="123xxx">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="nama_anggota" class="col-sm-2 col-form-label">Nama</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="nama_anggota" placeholder="masukan nama Anggota">
			    </div>
			  </div>
			  <fieldset class="form-group row">
			    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Jenis Kelamin</legend>
			    <div class="col-sm-10">
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			        <label class="form-check-label" for="gridRadios1">
			          Laki-Laki
			        </label>
			      </div>
			      <div class="form-check">
			        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			        <label class="form-check-label" for="gridRadios1">
			          Perempuan
			        </label>
			      </div>
			    </div>
			  </fieldset>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			      <input type="text-area" class="form-control" id="alamat" placeholder="masukan alamat">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <a href="#" type="submit" class="btn btn-primary">Tambah</a>
			      <a href="anggota.html" type="submit" class="btn btn-danger">Gak Jadi</a>
			    </div>
			  </div>
		</form>
	</div>

<?php 
include '../footer.php';
 ?>