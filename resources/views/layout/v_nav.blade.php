<?php $value = Session::get('login')?>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                    <a href="/halamanutama" class="nav-link {{ request()->is('halamanutama') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                            <p>Halaman Utama</p>
                    </a>
                </li>
        @if($value == "1")
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}">
                        <i class="fas fa-users nav-icon"></i>
                            <p>Kelola Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link {{ request()->is('profil') ? 'active' : '' }}">
                        <i class="far fa-id-badge nav-icon"></i>
                            <p>Kelola Profil Dosen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/perhitungan" class="nav-link {{ request()->is('perhitungan') ? 'active' : '' }}">
                        <i class="fas fa-table nav-icon"></i>
                            <p>Perhitungan Clustering</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/hasil" class="nav-link {{ request()->is('hasil') ? 'active' : '' }}">
                        <i class="fas fa-file nav-icon"></i>
                            <p>Hasil Pengelompokan</p>
                    </a>
                </li>
            @endif
                @if($value != "1")
                <li class="nav-item">
                    <a href="/kuesioner" class="nav-link {{ request()->is('kuesioner') ? 'active' : '' }}">
                        <i class="far fa-edit nav-icon"></i>
                            <p>Pengisian Kuesioner</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('logout') ? 'active' : '' }}">
                        <i class="fas fa-power-off nav-icon"></i>
                            <p>Logout</p>
                    </a>
                </li>
        </ul>
</nav>