<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">Data Penyakit</h1>
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title"></h3>
                                    <a class="btn btn-success mx-3" href="<?= base_url('tambahdatapenyakit') ?>">Tambah Data
                                        Penyakit
                                        Baru</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Penyakit</th>
                                            <th>Nama Penyakit</th>
                                            <th>Solusi</th>
                                            <th style="width: 200px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1 ?>
                                        <?php foreach ($penyakit['penyakit'] as $data) : ?>
                                            <tr>
                                                <td class="text-center"><?= $nomor ?></td>
                                                <td><?= $data->kode_penyakit ?></td>
                                                <td><?= $data->nama_penyakit ?></td>

                                                <td>

                                                    <ul style="padding: 0 10px;">
                                                        <?php
                                                        $solusi = $data->solusi;
                                                        $solusiArr = explode("+", $solusi);

                                                        for ($i = 1; $i < count($solusiArr); $i++) {
                                                            echo "<li>" . $solusiArr[$i] . "</li></br>";
                                                        }
                                                        ?>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="<?= base_url('editpenyakit/') ?><?= $data->kode_penyakit ?>">Ubah</a>
                                                    <button data-url="<?= base_url('hapuspenyakit/' . $data->kode_penyakit) ?>" id="hapusdata" class="btn btn-danger">Hapus</button> 
                                                </td>
                                                <?php $nomor++ ?>
                                            <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
    </section>

</div>
<!-- /.content-wrapper -->