<?php
include 'koneksi/koneksi.php';
include 'templates/header.php';
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="mt-2 mb-3 text-center">Data Anggota</h1>
        <!-- Page Heading -->
        <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Anggota</h1>
        </div> -->
        <a href="v_add_anggota.php" class="btn btn-primary mb-2">Tambah Anggota</a>
        <!-- Content Row -->
        <table id="datatables" class="table m-t-30 table-hover contact-list v-middle text-nowrap footable footable-5 footable-paging footable-paging-center breakpoint-lg" data-paging="true" data-paging-size="7" style="">
            <thead> 
                <tr>
                    <th class="footable-first-visible">No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php 
                $anggota = mysqli_query($koneksi,"select * from tb_anggota"); 

                foreach ($anggota as $anggotas => $value) {
                    # code...           
                 ?>
                 <tr>
                    <td class="footable-first-visible"><?= $no++ ?></td>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['jk']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td><?php echo $value['telp']; ?></td>
                    <td>
                        <a href="v_edit_anggota.php?id=<?php echo $value['id_anggota']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form id="a" action="<#" hidden>
                        </form>
                        <a href="controller/ctrl_delete.php?id=<?php echo $value['id_anggota']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                 </tr>
                <?php 
                 };
                  ?> 
            </tbody>
                       
    </table>
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include 'templates/footer.php';
?>            