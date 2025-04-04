
<div class="content-wrapper">
  <!-- batas -->
  <section class="content">
    <div class="container-fluid">

  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data Basis Pengetahuan</h1>
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="card">
      <div class="card-header">
      <div class="d-flex justify-content-between">
        <h3 class="card-title"></h3>
        <a class="btn btn-success mx-3" href="<?= base_url('tambahbasis') ?>">Tambah Data Basis Pengetahuan Baru</a>
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
              <th>Kode Gejala</th>
              <th>Nama Gejala</th>
              <th>Nilai Probabilitas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1 ?>
            <?php foreach ($basis as $b) : ?>
              <tr>
                <td><?= $nomor ?></td>
                <td><?= $b->kode_penyakit ?></td>
                <td><?= $b->nama_penyakit ?></td>
                <td><?= $b->kode_gejala ?></td>
                <td><?= $b->nama_gejala ?></td>
                <td><?= $b->nilai ?></td>
                <td style="width: 200px;">
                  <a class="btn btn-success" href="<?= base_url('editbasis/') . $b->id ?>">Ubah</a>
                  <button data-url="<?= base_url('hapusbasis/' . $b->id) ?>" id="hapusdata" class="btn btn-danger">
                    Hapus
                  </button>
                </td>
              </tr>
              <?php $nomor++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>

    </div>
  </section>
</div>
<!-- /.content-wrapper -->