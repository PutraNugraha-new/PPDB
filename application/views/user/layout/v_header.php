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
                    <a class="nav-link text-light" href="<?= base_url() ?>welcome/produk">
                        <i class="fa-solid fa-newspaper"></i>
                        Informasi
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light" href="<?= base_url() ?>welcome/produk">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Login / Daftar
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<script>
    $(document).ready(function () {
        $.ajax({
            url: '<?= base_url("welcome/countKuantitas") ?>',
            method: 'post',
            dataType:'json',
            success:function(data){
                $('#notifJumlah').text(data.total_quantity);
            }, 
            error: function (xhr, status, error) {
                console.error("Error: " + status, error);
            }
        });
    });
</script>