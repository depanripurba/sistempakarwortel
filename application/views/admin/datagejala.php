<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Gejala</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title"></h3>
                            <a class="btn btn-success" href="<?= base_url('tambahdatagejala') ?>">Tambah Data Gejala Baru</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Kode Gejala</th>
                                    <th>Nama Gejala</th>
                                    <th style="width: 200px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($gejala as $item): ?>
                                <tr>
                                    <td><?=$item['kode_gejala']?></td>
                                    <td><?=$item['nama_gejala']?></td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="<?=site_url('Master/ubahdatagejala/'.$item['kode_gejala'])?>">Ubah</a>
                                        <a class="btn btn-danger" onclick="alert('Yakin Ingin Menghapus Data ini?')"
                                            href="<?=site_url('Master/deleteGejala/'.$item['kode_gejala'])?>">Hapus</a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </tbody>
                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>

            </div>
    </section>
</div>
<!-- /.content-wrapper -->
