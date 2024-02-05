<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-light" href="#">
            Sekolah Dasar Negeri 1 <br>
            <span>Kampuri</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto"> <!-- Menambahkan class ml-auto di sini -->
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= base_url() ?>">
                        <i class="fa-solid fa-house"></i>
                        Beranda
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="<?= base_url() ?>welcome/info">
                        <i class="fa-solid fa-newspaper"></i>
                        Informasi
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="<?= base_url() ?>welcome/daftar">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Daftar
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url() ?>welcome/profile">Profile</a>
                        <a class="dropdown-item text-danger" href="<?= base_url() ?>main/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>