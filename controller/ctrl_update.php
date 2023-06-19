<?php 
 include '../koneksi/koneksi.php';
$id = $_POST['id_anggota'];
// ambil data dari form
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$alt = $_POST['alamat'];
	$telp = $_POST['telp'];
	
	//buat query
	$sql = "UPDATE tb_anggota SET 
	nama = '$nama', jk = '$jk', alamat = '$alt', telp= '$telp'
	WHERE id_anggota = '$id'";

	$query = mysqli_query($koneksi, $sql);
if( $query ) {
	//header('Location: v_anggota.php?status=sukses');
	echo "
	<script>
	alert('berhasil update anggota!');
	document.location.href = '../v_anggota.php?sukses';
	</script>
	";
}else {
	die("Akses dilarang...");
}
?>