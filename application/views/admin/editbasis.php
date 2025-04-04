<div class="content-wrapper">
	<div class="col">
		<div class="card shadow mb-4 p-1">
			<!-- Card Header - Dropdown -->
			<!-- Card Body -->
			<div class="card-body">
				<!-- custom isi -->

				<div class="col-md-9">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Form Edit Data Pengetahuan</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="POST" action="<?= base_url('postupdatebasis') ?>">
							<div class="card-body">
								<div class="form-group">
									<label for="kodegejala">Nama Penyakit</label>
                                    <input class="form-control" type="text" disabled value="<?=$basis['kode_penyakit']." :". $basis['nama_penyakit']?>">
								</div>
								<div class="form-group">
									<label for="namagejala">Nama Gejala</label>
                                    <input class="form-control" type="text" disabled value="<?=$basis['kode_gejala']." :". $basis['nama_gejala']?>">
                                    <input type="hidden" name="id" value="<?=$id?>">
								</div>
								<div class="form-group">
									<label for="nilaigejala">Nilai Gejala</label>
									<input type="text" name="nilai" class="form-control" value="<?=$basis['nilai']?>" id="nilaigejala">
								</div>

							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Update Data</button>
								<a href="<?= base_url('basispengetahuan') ?>" class="btn btn-secondary">Batal/Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>