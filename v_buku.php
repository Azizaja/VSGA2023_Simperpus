<?php
include 'templates/header.php';
include 'koneksi/koneksi.php';
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="mt-2 mb-3 text-center">Data Koleksi Buku</h1>
        <!-- Page Heading -->
       <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Koleksi Buku</h1>
        </div> -->
        <a href="v_add_buku.php" class="btn btn-primary mb-2">Tambah Buku</a>
        <!-- Content Row -->
        <table id="datatables" class="table m-t-30 table-hover contact-list v-middle text-nowrap footable footable-5 footable-paging footable-paging-center breakpoint-lg" data-paging="true" data-paging-size="7" style="">
        <tr>
              <th scope="col">No</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Kategori</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Menu</th>
        </tr>
            <?php $no = 1; ?>
            <?php 
            $anggota = mysqli_query($koneksi,"select * from tb_buku"); 

            foreach ($anggota as $anggotas => $value) {
                # code...           
             ?>
             <tr>
                <td class="footable-first-visible"><?= $no++ ?></td>
                <td><?php echo $value['judul_buku']; ?></td>
                <td><?php echo $value['kategori']; ?></td>
                <td><?php echo $value['pengarang']; ?></td>
                <td><?php echo $value['penerbit']; ?></td>
                <td>
                    <a href="controller/ctrl_upd_buku.php?id=<?php echo $value['id_buku']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i> Edit</a>
                    <form id="a" action="<#" hidden>
                    </form>
                    <a href="controller/ctrl_del_buku.php?id=<?php echo $value['id_buku']; ?>"class="btn btn-danger btn-sm">Hapus</a>
                </td>
             </tr>
            <?php 
             };
              ?>            
    </table>
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php 
include 'templates/footer.php';
 ?>