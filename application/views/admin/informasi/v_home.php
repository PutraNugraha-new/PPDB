<h3 class="my-2">Input Informasi</h3>
<div class="card">
    <div class="card-body">
        <?php echo form_open_multipart(site_url().'produk/add'); ?>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group row">
                        <label for="nama_info" class="col-sm-2 col-form-label">Nama Informasi</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nama Informasi" name="nama_info" required>
                            <?php echo form_error('nama_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="judul_info" class="col-sm-2 col-form-label">Judul Informasi</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Judul Informasi" name="judul_info" required>
                            <?php echo form_error('judul_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_info" class="col-sm-2 col-form-label">Tanggal Informasi</label>
                        <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Tanggal Informasi" name="tgl_info" required>
                            <?php echo form_error('tgl_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <?php echo form_submit(array('value'=>'Simpan', 'class'=>'btn btn-success mx-auto my-2')); ?>
                    <?php echo form_reset(array('value'=>'Batal', 'class'=>'btn btn-danger mx-auto my-2')); ?>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
<div class="card mt-3">
    <div class="card-header">
        <h4>Data Informasi</h4>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Informasi</th>
                    <th>Judul Informasi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Informasi</th>
                    <th>Judul Informasi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Informasi 1</td>
                    <td>Judul</td>
                    <td>Sedang Tampil</td>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-id="2" data-bs-target="#modalInformasi" class="btn tampilModalUbah btn-primary p-1" data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            Edit
                        </a>
                        <a href="<?= base_url() ?>produk/delete/2" class="btn btn-danger p-1" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onClick="return confirm('Ingin Menghapus?')">
                            Hapus
                        </a>
                        <a href="<?= base_url() ?>produk/delete/2" class="btn btn-warning text-light p-1" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onClick="return confirm('Ingin Menghapus?')">
                            Tampil
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="modalInformasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Informasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="produk/update" class="form form-horizontal" enctype="multipart/form-data" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nama_info">Nama Informasi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="hidden" name="id_produk" id="id_produk">
                                <input type="text" class="form-control" placeholder="Nama Informasi" name="nama_info" id="nama_info">
                                <?php echo form_error('nama_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                            </div>
                            
                            <div class="col-md-4 my-3">
                                <label for="judul_info">Judul Informasi</label>
                            </div>
                            <div class="col-md-8 my-3">
                                <input type="text" class="form-control" placeholder="Judul Informasi" name="judul_info" id="judul_info">
                                <?php echo form_error('judul_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                            </div>

                            <div class="col-md-4">
                                <label for="tgl_info">Tanggal Informasi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" placeholder="Tanggal Informasi" name="tgl_info" id="tgl_info">
                                <?php echo form_error('tgl_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-success me-1 mb-1">Reset</button>
                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                </form>
            </div>
        </div>
    </div>
</div>
