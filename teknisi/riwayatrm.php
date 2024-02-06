<?php include '_header.php'; 

include "../controller/c_Rekam.php";
$p = new Rekam;
$data = $p->TampilRclient($_GET['id_client']);
?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Manajemen Rekam Data</h4>
                <div class="d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="client.php">client</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rekam Data</li>
                    </ol>
                </div>
            </div>
            <div class="col-7">
                <div class="text-right upgrade-btn">
                    <a href="diagnosa.php?id_client=<?php print $_GET['id_client'] ?>" class="btn btn-danger text-white"><i class="mdi mdi-plus"></i> Diagnosa</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-hover table-bordered">
                                <thead style="background-color: #7f8c8d; color: white;">
                                  <tr>
                                    <th style="color: white;" width="5%">ID</th>
                                    <th style="color: white;">Tanggal</th>
                                    <th style="color: white;">Gejala</th>
                                    <th style="color: white;">kerusakan</th>
                                    <th style="color: white;">Nilai</th>
                                    <th style="color: white;">Persentase</th>
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (!isset($data)) {
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                } else {
                                    $i=0;
                                    foreach ($data as $r) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php print $i; ?></td>
                                            <td><?php print $r['tanggal']; ?></td>
                                            <td><?php print $r['gejala']; ?></td>
                                            <td><?php print $r['kerusakan']; ?></td>
                                            <td><?php print $r['nilai']; ?></td>
                                            <td><?php print $r['persentase']; ?></td>
                                            <td>
                                                
                                                <a onclick="if (! confirm('Apakah anda yakin akan menghapus riwayat Rekam Data dari daftar ?')) { return false; }" href="../ProsesA/d_rekam.php?id_riwayat=<?php print $r['id_riwayat']; ?>&id_client=<?php print $_GET['id_client']; ?>" class="btn btn-danger btn-simple btn-xs text-white" title="Hapus Rekam Data"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<?php include '_footer.php'; ?>