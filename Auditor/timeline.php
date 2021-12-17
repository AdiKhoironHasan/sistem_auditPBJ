<?php require "functions/connect.php" ?>
<?php require "functions/auditor.php" ?>
<?php $page = "RKA"; ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/sidebar.php" ?>
<?php require "layouts/navbar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Timeline Rencana Kerja Audit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="auditor.php">Home</a></li>
                        <li class="breadcrumb-item active">Timeline Rencana Kerja Audit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Rencana Kerja Audit</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8">

                            <!-- Main node for this component -->
                            <div class="timeline">
                                <!-- Timeline time label -->
                                <div class="time-label">
                                    <span class="bg-primary">10 Feb. 2014</span>
                                </div>
                                <div>
                                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                                    <i class="fas fa-bookmark bg-success"></i>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Perencanaan RKA</b> <i class="fas fa-check-circle text-success"></i></h3>
                                    </div>
                                </div>
                                <div>
                                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                                    <i class="fas fa-file-alt bg-warning"></i>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <!-- Header. Optional -->
                                        <h3 class="timeline-header"><b>Pengisian Data Desk</b> <i class="fas fa-exclamation-triangle text-warning"></i></h3>
                                        <!-- Body -->
                                        <div class="timeline-body">
                                            Data belum di isi
                                        </div>
                                        <!-- Placement of additional controls. Optional -->
                                        <div class="timeline-footer">
                                            <a href="#" class="btn btn-primary btn-sm">Tambah Data</a>
                                            <a href="#" class="btn btn-info btn-sm">Ubah Data</a>
                                            <a href="layouts/desk-pdf.php" class="btn btn-success btn-sm">Cetak</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                                    <i class="fas fa-file-alt bg-warning"></i>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <!-- Header. Optional -->
                                        <h3 class="timeline-header"><b>Pengisian Data Visit</b> <i class="fas fa-exclamation-triangle text-warning"></i></h3>

                                        <!-- Body -->
                                        <div class="timeline-body">
                                            Data belum di isi
                                        </div>
                                        <!-- Placement of additional controls. Optional -->
                                        <div class="timeline-footer">
                                            <a href="#" class="btn btn-primary btn-sm">Tambah Data</a>
                                            <a href="#" class="btn btn-info btn-sm">Ubah Data</a>
                                            <a href="layouts/visit-pdf.php" class="btn btn-success btn-sm">Cetak</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                                    <i class="fas fa-newspaper bg-warning"></i>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <!-- Header. Optional -->
                                        <h3 class="timeline-header"><b>Berita Acara</b> <i class="fas fa-exclamation-triangle text-warning"></i></h3>
                                        <!-- Body -->
                                        <div class="timeline-body">
                                            Data belum di isi
                                        </div>
                                        <!-- Placement of additional controls. Optional -->
                                        <div class="timeline-footer">
                                            <a href="layouts/berita-acara.php" class="btn btn-success btn-sm">Cetak</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- The last icon means the story is complete -->
                                <div>
                                    <i class="fas fa-clock bg-danger"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><b>Rencana Audit Tidak Terlaksana</b> <i class="fas fa-times-circle  text-danger"></i></h3>
                                        <div class="timeline-body">
                                            Data tidak di isi dampai waktu tenggang
                                        </div>
                                    </div>
                                </div>
                                <div class="time-label">
                                    <span class="bg-danger">10 Feb. 2015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "layouts/modal-rka-tambah.php" ?>
<?php require "layouts/footer.php" ?>