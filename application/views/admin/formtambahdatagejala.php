<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data Gejala Baru</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?= base_url('Master/addGejala') ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_gejala">Kode Gejala</label>
                                    <input type="text"  name="kode_gejala" id="kode_gejala" class="form-control" placeholder="kode gejala">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala">Nama Gejala</label>
                                    <input name="nama_gejala" type="text" class="form-control" id="nama_gejala" placeholder="Nama Gejala">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                <a href="<?= base_url('datagejala') ?>" class="btn btn-secondary">Batal/Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->