<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<style>
    .bod {
        background-image: url('<?= base_url('assets/img/bg.png') ?>');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        font-family: 'Poppins', sans-serif;
    }
</style>
<link rel="stylesheet" href="style.css">

<div class="content-wrapper">
    <!-- batas -->
    <section class="content">
        <div class="container-fluid">

            <!-- content -->


            <div class="body">
                <div class="page rounded pb-3">
                    <div class="center">
                        <p class="center-text" style="color:#3b51e0">Selamat Datang Di Aplikasi Sistem Pakar Mendiagnosa Penyakit
                            Pada Tanaman Wortel</p>
                        <!-- batas carousel -->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?=base_url("assets/img/slide1.jpg")?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?=base_url("assets/img/slide2.jpg")?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?=base_url("assets/img/slide3.jpg")?>" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- batas carousel -->
                        <a style="margin-left:800px;margin-top:10px;" class="button-diagnosa" href="<?= base_url('auth') ?>">
                            <span>Login</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- content -->

        </div>
    </section>
</div>
<!-- /.content-wrapper -->