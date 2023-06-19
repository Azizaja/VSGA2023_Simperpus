<?php 

include '../koneksi/koneksi.php';

$id = $_GET["id"];

$sql = "DELETE from tb_transaksi WHERE id_transaksi = '$id'";
$query = mysqli_query($koneksi, $sql);

	if ($query) {
		# kalau berhasil tampilkan status=sukses
		echo "
		<script>
		alert('transaksi berhasil dihapus!');
		document.location.href = '../v_transaksi.php';
		</script>
		";
	}
	else{
		//jika gagal
		echo "
		<script>
		alert('gagal menghapus transaksi!');
		document.location.href = '../v_transaksi.php?gagal';
		</script>
		";
	}


 ?>