<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link <?php echo ($title == 'Dashboard' ? 'active' : '') ?>" href="<?= base_url() ?>dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">
                                <i class="fa-regular fa-folder-closed"></i>
                                Kelola Data
                            </div>
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'informasi' ? 'active' : '') ?>" href="<?= base_url() ?>informasi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-caret-right"></i></div>
                                Kelola Informasi
                            </a>
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'formcalon' ? 'active' : '') ?>" href="<?= base_url() ?>formcalon">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-caret-right"></i></div>
                                Kelola Form Pendaftaran
                            </a>
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'laporan' ? 'active' : '') ?>" href="<?= base_url() ?>laporan">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-caret-right"></i></div>
                                Kelola Laporan
                            </a>
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'seleksi' ? 'active' : '') ?>" href="<?= base_url() ?>seleksi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-caret-right"></i></div>
                                Kelola Seleksi
                            </a>
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'lhu' ? 'active' : '') ?>" href="<?= base_url() ?>lhu">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-caret-right"></i></div>
                                Kelola Data Calon Peserta Didik
                            </a>
                            <div class="sb-sidenav-menu-heading">Option</div>
                            <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'pengguna' ? 'active' : '') ?>" href="<?= base_url() ?>main/pengguna">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Data Pengguna
                            </a>
                            <a class="nav-link text-danger" href="<?php echo base_url().'main/logout' ?>" onClick="return confirm('Apakah Anda Ingin Keluar Aplikasi ?')">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt text-danger"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Login Sebagai:</div>
                        <?= $user; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">