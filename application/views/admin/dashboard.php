<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $penyakit ?></h3>
                            <p>Data Penyakit</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-medical"></i>
                        </div>
                        <a href="<?= base_url('master/datapenyakit') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $gejala ?></h3>
                            <p>Data Gejala</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <a href="<?= base_url('master/datagejala') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $pengetahuan ?></h3>
                            <p>Total Pengetahuan</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-user-injured"></i>
                        </div>
                        <a href="<?= base_url('master/basispengetahuan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $pasien ?></h3>
                            <p>Data Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-user-injured"></i>
                        </div>
                        <a href="<?= base_url('datapengguna') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="body pb-3">
                <div class="page rounded pb-3">
                    <div class="center p-3">
                        <center>
                            <h2>
                                <p class="center-text" style="color:#3b51e0">Selamat Datang Di Aplikasi Sistem Pakar Mendiagnosa Penyakit
                                    Pada Tanaman Wortel (Daucus Carota)</p>
                        </center>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- /.content-wrapper -->