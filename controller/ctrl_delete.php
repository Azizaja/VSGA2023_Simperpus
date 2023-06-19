<?php 

include '../koneksi/koneksi.php';

$id = $_GET["id"];

$sql = "DELETE from tb_anggota WHERE id_anggota = '$id'";
$query = mysqli_query($koneksi, $sql);

	if ($query) {
		# kalau berhasil tampilkan status=sukses
		echo "
		<script>
		alert('anggota berhasil dihapus!');
		document.location.href = '../v_anggota.php';
		</script>
		";
	}
	else{
		//jika gagal
		echo "
		<script>
		alert('gagal menghapus anggota!');
		document.location.href = '../v_anggota.php?gagal';
		</script>
		";
	}


 ?>