<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('/')?>" class="brand-link text-center mb-3">
        <span class="brand-text font-weight-light text-center">Sistem Pakar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="text-center">
            <img src="<?= base_url('assets') ?>/dist/img/logo.jpg?>" class="rounded mb-2" alt="User Image" style="width:100%"/>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url('user/dashboard')?>"
                        class="nav-link <?=$aktif==='Dashboard Pasien' ? 'active' : ''?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dasboard Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url('user/diagnosa')?>"
                        class="nav-link <?=$aktif==='Diagnosa Pasien' ? 'active' : ''?>"">
						<i class=" nav-icon fas fa-user-injured"></i>
                        <p>
                            Diagnosa Penyakit
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>