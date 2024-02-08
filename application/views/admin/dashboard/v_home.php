<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol> -->
<div class="row justify-content-evenly mt-2">
    <div class="col-xl-2 col-md-2">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <h5>
                    Pendaftar <?= $countAll ?>
                </h5>
            </div>
        </div>
    </div>
    <?php foreach($counts as $count): ?>
    <div class="col-xl-2 col-md-2">
        <div class="card 
        <?php 
            switch ($count->status) {
                case 'Verifikasi':
                    echo 'bg-secondary';
                    break;
                case 'Lolos':
                    echo 'bg-success';
                    break;
                case 'Diterima':
                    echo 'bg-primary';
                    break;
                case 'Ditolak':
                    echo 'bg-danger';
                    break;
                default:
                    echo 'bg-secondary'; // Default background jika status tidak sesuai
            }
        ?>
        text-white mb-4">
            <div class="card-body">
                <h5>
                    <?= $count->status ?> <?= $count->total ?>
                </h5>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>
<div class="card mb-4 bg-primary">
    <div class="card-body">
        <h1 class="text-light my-3 mt-4">
            Selamat Datang Admin!
        </h1>
        <p class="text-light my-3">Website PPDB SDN 1 Kampuri</p>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
            <figure class="figure">
                <img src="<?= base_url() ?>public/image/sekolah1.jpeg" class="figure-img img-fluid rounded">
            </figure>
        </div>
        <div class="col-md-5">
            <figure class="figure">
                <img src="<?= base_url() ?>public/image/sekolah2.jpeg" class="figure-img img-fluid rounded">
            </figure>
        </div>
    </div>
</div>