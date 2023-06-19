<?php
include 'koneksi/koneksi.php';
include 'templates/header.php';
?>

<!-- body content -->
	<div class="container">
		<h1 class="text-center mt-2">Data Transaksi</h1>
		<a href="v_add_transaksi.php" class="btn btn-primary mb-2">Tambah Transaksi</a>
		<table id="datatables" class="table m-t-30 table-hover contact-list v-middle text-nowrap footable footable-5 footable-paging footable-paging-center breakpoint-lg" data-paging="true" data-paging-size="7" style="">
            <thead>
				<tr>
					<th>No</th>
					<th>Nama Anggota</th>
					<th>Judul Buku</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal kembali</th>
					<th>Opsi</th>
				</tr>
			<tbody>
				<?php $no = 1; ?>
				 <tr>
				<?php 

				$anggota = mysqli_query($koneksi,"SELECT a.*, b.nama, c.judul_buku from tb_transaksi a LEFT JOIN tb_anggota b ON a.id_anggota=b.id_anggota LEFT JOIN tb_buku c ON a.id_buku=c.id_buku"); 

				foreach ($anggota as $key => $value) {
					# code...			
				 ?>
				 	<td class="footable-first-visible"><?= $no++ ?></td>
				 	<td hidden><?php echo $value['id_transaksi']; ?></td>
					<td><?php echo $value['nama']; ?></td>
					<td><?php echo $value['judul_buku']; ?></td>
					<td><?php echo $value['tanggal_pinjam']; ?></td>
					<td><?php echo $value['tanggal_kembali']; ?></td>
					<td>
                        <a href="v_edit_transasksi.php?id=<?php echo $value['id_transaksi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form id="a" action="<#" hidden>
                        </form>
                        <a href="v_pengembalian_tr.php?id=<?php echo $value['id_transaksi']; ?>" class="btn btn-success btn-sm">Pengembalian</a>
                        <a href="controller/ctrlDel_trans.php?id=<?php echo $value['id_transaksi']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
				 </tr>
				<?php 
				 };
				  ?>
			</tbody>		
	</table>
	</div>
</div>
<?php 
include 'templates/footer.php';
 ?>