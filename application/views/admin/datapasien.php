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
                                    <h1 class="m-0">Data Pasien</h1>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?=$this->session->flashdata('message');?>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:10px">No.</th>
                                        <th style="width:240px">Nama Pasien</th>
                                        <th style="width:100px">Usia</th>
                                        <th style="width:130px">Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th style="width:120px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($pasien as $p):?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$p['fullname']?></td>
                                        <td><?=$p['usia']?> Tahun</td>
                                        <td><?=$p['jenis_kelamin']?></td>
                                        <td><?=$p['alamat']?></td>
                                        <td>
                                            <a onclick='confirm("Apakah Anda Ingin Menghapus Data Pasien ini?")' href='<?=base_url('master/delete_pasien/'.$p['id'])?>' class="btn btn-danger">
                                                <span>Hapus</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
