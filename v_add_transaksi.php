<?php
include 'koneksi/koneksi.php';
include 'templates/header.php';

//query data anggota
$anggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota");
//query data buku
$buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
?>

<!-- body content -->
	<div class="container">
		<h2 class="mt-2 mb-3">MENU TRANSAKSI</h2>
		<form class="mt-2" action="controller/ctrl_addTr.php" method="POST">
			  <div class="form-group row">
			    <label for="id_anggota" class="col-sm-2 col-form-label">Anggota</label>
			    <div class="col-sm-10">
				    <select name="id_anggota" id="id_anggota" class="form-control col-xl-4">
				    	<?php
					    	foreach ($anggota as $key => $value){
				    	?>
					    	<option value="<?= $value['id_anggota']?>"><?= $value['nama']?></option>
				    	<?php
						    }
				    	?>
				    </select>
				</div>
			  </div>
			  <div class="form-group row">
			    <label for="id_buku" class="col-sm-2 col-form-label">Buku</label>
			    <div class="col-sm-10">
			    	 <select name="id_buku" id="id_buku" class="form-control col-xl-4">
			    	<?php
				    	foreach ($buku as $key => $value){
			    	?>
				    	<option value="<?= $value['id_buku']?>"><?= $value['judul_buku']?></option>
			    	<?php
					    }
			    	?>
			    </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
			    <div class="col-sm-10">
			      <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" placeholder="masukan tanggal">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Tanggal Kembali</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="masukan tanggal">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" name="tambah" class="btn btn-primary">Tambah</button> 
			      <a href="v_transaksi.php" type="submit" class="btn btn-danger">Gak Jadi</a>
			    </div>
			  </div>
		</form>
	</div>
</div>
<?php 
include 'templates/footer.php';
 ?>