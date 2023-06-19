<?php 

include '../koneksi/koneksi.php';

$id = $_GET["id"];

$sql = "DELETE from tb_buku WHERE id_buku = '$id'";
$query = mysqli_query($koneksi, $sql);

	if ($query) {
		# kalau berhasil tampilkan status=sukses
		echo "
		<script>
		alert('buku berhasil dihapus!');
		document.location.href = '../v_buku.php';
		</script>
		";
	}
	else{
		//jika gagal
		echo "
		<script>
		alert('gagal menghapus buku!');
		document.location.href = '../v_buku.php?gagal';
		</script>
		";
	}


 ?>