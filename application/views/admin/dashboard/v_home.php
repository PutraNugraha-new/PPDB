<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row justify-content-between">
    <div class="col-xl-2 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body"> <?= $countAll ?> pendaftar</div>
            <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><?= $verifikasi ?> Verifikasi</div>
            <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"><?= $count_lolos ?> Lolos</div>
            <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body"><?= $count_diterima ?> Diterima</div>
            <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body"><?= $count_tidak_diterima ?> Ditolak</div>
            <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
            </div>
        </div>
    </div>
</div>
<div class="card mb-4 bg-light shadow border-start border-1 border-primary">
    <div class="card-body">
        <h1 class=" my-3 mt-4">
            Selamat Datang <?= $this->session->userdata['first_name'] ?>
        </h1>
        <p class=" my-3">Website PPDB SDN 1 Kampuri</p>
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