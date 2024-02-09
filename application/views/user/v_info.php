<div class="container informasi">
    <div class="row">
        <div class="col-md-12">
            <h3>Informasi Sekolah Dasar Negeri 01 Kampuri</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach($info as $data): ?>
                <?php if($data->status == 'Tampil'): ?>
                <div href="#" class="card">
                    <div class="card-body flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= $data->nama_info ?></h5>
                            <small>Update : <?= $data->tgl_info ?></small>
                        </div>
                        <p class="mb-1"><?= $data->deskripsi ?></p>
                        <?php if(!empty($data->file_info)): ?>
                            <a href="<?= base_url() ?>fileInfo/<?= $data->file_info ?>" class="text-left">Unduh File</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php  endforeach;?>
        </div>
    </div>
</div>