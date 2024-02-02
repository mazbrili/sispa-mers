<?php include '_header.php'; 

include "../controller/c_Kerusakan.php";
$pt = new Kerusakan;
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
                <h4 class="page-title">Manajemen Tingkatan Kerusakan</h4>
                <div class="d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tingkatan Kerusakan</li>
                    </ol>
                </div>
            </div>
            <div class="col-7">
                <div class="text-right upgrade-btn">
                    <a href="tKerusakan.php" class="btn btn-danger text-white"><i class="mdi mdi-plus"></i> Tambah Data</a>
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
                            <table id="example3" class="table table-hover table-bordered">
                                <thead style="background-color: #7f8c8d; color: white;">
                                  <tr>
                                    <th style="color: white;" width="13%">Kode Kerusakan</th>
                                    <th style="color: white;">Nama Kerusakan</th>
                                    <th style="color: white;">Keterangan Kerusakan</th>
                                    <th style="color: white;" width="8%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = $pt->TampilSemua();
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
                                foreach($data as $d){
                                    ?>
                                    <tr>
                                        <td><?php print "P".$d['id']; ?></td>
                                        <td><?php print $d['nama']; ?></td>
                                        <td><?php print $d['kett']; ?></td>
                                        <td>
                                            <a href="eKerusakan.php?id=<?php print $d['id']; ?>" class="btn btn-info btn-simple btn-xs text-white" title="Edit Kerusakan"><i class="mdi mdi-lead-pencil"></i></a>

                                            <a onclick="if (! confirm('Apakah anda yakin akan kerusakan dari daftar ?')) { return false; }" href="../ProsesA/d_Kerusakan.php?id=<?php print $d['id']; ?>" class="btn btn-danger btn-simple btn-xs text-white confirmation" title="Hapus Kerusakan"><i class="fa fa-times"></i></a>
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