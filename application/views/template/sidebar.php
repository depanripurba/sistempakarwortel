<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar" style="margin-top: 50px;">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url('dashboard')?>" class="nav-link <?=$aktif==='home' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url('datapenyakit')?>" class="nav-link <?=$aktif==='datapenyakit' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>
                            Data Penyakit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url('datagejala')?>"
                        class="nav-link <?=$aktif==='datagejala' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Data Gejala
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url('basispengetahuan')?>"
                        class="nav-link <?=$aktif==='basispengetahuan' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Data Pengetahuan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url('diagnosa')?>" class="nav-link <?=$aktif==='datapasien' ? 'active' : ''  ?>">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>
                            Diagnosa
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <!-- /.sidebar -->
</aside>
