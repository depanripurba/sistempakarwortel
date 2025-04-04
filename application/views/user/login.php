<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mt-2">
                        <form action="<?= base_url('auth') ?>" method="post">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Login</h3>
                                </div>
                                <!-- bagian identitas user -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_gejala">Username</label>
                                        <input required type="text" name="username" id="nama" class="form-control" placeholder="Input Username...">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input required name="password" type="password" class="form-control" id="password" placeholder="Input password...">
                                    </div>

                                </div>
                                <div class="card-footer text-right mb-3">
                                    <button type="submit" class="btn btn-info">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<!-- /.content-wrapper -->