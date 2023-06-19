<?php
include("../koneksi/koneksi.php");

// cek tombol tambah
if(isset($_POST['tambah'])){
	
	// ambil data dari form
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$alt = $_POST['alamat'];
	$telp = $_POST['telp'];
	 
	// buat query
	$sql = "INSERT INTO tb_anggota (nama, jk, alamat, telp) VALUE ('$nama','$jk','$alt', '$telp')";
	$query = mysqli_query($koneksi, $sql);
	
	// query simpan sudah berhasil
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		// header('Location: anggota.php?status=sukses');
		echo "
		<script>
		alert('berhasil menambah anggota!');
		document.location.href = '../v_anggota.php?sukses';
		</script>
		";
	} else {
		// kalau gagal menampilkan status=gagal
		// header('Location: ../v_anggota.php?status=gagal');
		echo "
		<script>
		alert('gagal menambah anggota!');
		document.location.href = '../v_anggota.php?status=gagal';
		</script>
		";
	}	
} else {
	die("Akses dilarang...");
}
?>