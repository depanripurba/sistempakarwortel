<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$judul?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets')?>/dist/css/adminlte.min.css">
	<!-- Icon -->
	<link rel="shortcut icon" href="<?=base_url('assets/img/logo.png')?>" type="image/x-icon">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?=base_url()?>"><img src="<?=base_url('assets/dist/img/logo.jpg')?>" width="200" alt=""></a>
            </div>
            <div class="card-body">
                <form action="<?=base_url("user/register_act")?>" method="POST">
                    <?=$this->session->flashdata('message');?>
                    <div class="input-group mb-3">
                        <input name="fullname" type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="input-group mb-3">
                        <input name="usia" type="number" class="form-control" placeholder="Usia">
                    </div>
                    <div class="input-group mb-3">
						<select class="custom-select" name="jenis_kelamin">
							<option selected value="">--Jenis Kelamin--</option>
							<option value="Laki-laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
                    </div>
                    <div class="input-group mb-3">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat" name="alamat"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
					<div class="row mt-2">
						<div class="col-12">
							<span>Sudah Punya Akun?</span>
							<a href="<?=base_url('user/login')?>">Login Di Sini</a>
						</div>
					</div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?=base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets')?>/dist/js/adminlte.min.js"></script>
</body>

</html>
