<?php 
include '../koneksi/koneksi.php';
// cek tombol tambah
if(isset($_POST['tambah'])){
	
	// ambil data dari form
	$anggota = $_POST['id_anggota'];
	$buku = $_POST['id_buku'];
	$tanggal_pinjam = $_POST['tanggal_pinjam'];
	$tanggal_kembali = $_POST['tanggal_kembali'];
	
	// buat query
	$sql = "INSERT INTO tb_transaksi (id_anggota, id_buku, tanggal_pinjam, tanggal_kembali) VALUE ('$anggota','$buku','$tanggal_pinjam', '$tanggal_kembali')";
	$query = mysqli_query($koneksi, $sql);
	
	// query simpan sudah berhasil
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		// header('Location: anggota.php?status=sukses');
		echo "
		<script>
		alert('berhasil menambah transaksi!');
		document.location.href = '../v_transaksi.php?sukses';
		</script>
		";
	} else {
		// kalau gagal menampilkan status=gagal
		header('Location: ../v_transaksi.php?status=gagal');
	}	
} else {
	die("Akses dilarang...");
}

 ?>