<?php if ($this->session->flashdata('success_message')): ?>
    <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
        <?= $this->session->flashdata('success_message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error_message')): ?>
    <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
        <?= $this->session->flashdata('error_message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<h3 class="my-2">Input Informasi</h3>
<div class="card">
    <div class="card-body">
        <?php echo form_open_multipart(site_url().'informasi/add'); ?>
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
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Informasi</label>
                        <div class="col-md-5">
                            <textarea name="deskripsi" class="form-control" id="" cols="50" rows="5"></textarea>
                            <?php echo form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="file_info" class="col-sm-2 col-form-label">File (Optional)</label>
                        <div class="col-md-5">
                        <input type="file" class="form-control" name="file_info">
                            <?php echo form_error('file_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
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
                    <th>Nama Informasi</th>
                    <th>Deskripsi Informasi</th>
                    <th>Tanggal Info</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Informasi</th>
                    <th>Deskripsi Informasi</th>
                    <th>Tanggal Info</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach($info as $data): ?>
                <tr>
                    <td><?= $data->nama_info ?></td>
                    <td><?= $data->deskripsi ?></td>
                    <td><?= $data->tgl_info ?></td>
                    <td>
                        <div class="btn btn-success p-1 status" data-status="<?= $data->status ?>" data-id="<?= $data->id_informasi ?>"><?= $data->status ?>
                        </div>
                    </td>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-id="<?= $data->id_informasi ?>" data-bs-target="#modalInformasi" class="btn tampilModalUbah btn-primary p-1" data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                            Edit
                        </a>
                        <a href="<?= base_url() ?>informasi/delete/<?= $data->id_informasi ?>" class="btn btn-danger p-1" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onClick="return confirm('Ingin Menghapus?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
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
                <form action="informasi/update" class="form form-horizontal" enctype="multipart/form-data" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nama_info">Nama Informasi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="hidden" name="id_informasi" id="id_informasi">
                                <input type="text" class="form-control" placeholder="Nama Informasi" name="nama_info" id="nama_info">
                                <?php echo form_error('nama_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                            </div>
                            
                            <div class="col-md-4 my-3">
                                <label for="deskripsi">Deskripsi Informasi</label>
                            </div>
                            <div class="col-md-8 my-3">
                                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="50" rows="5"></textarea>
                                <?php echo form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                            </div>
                            <div class="col-md-4 my-3">
                                <label for="file_info">File Informasi</label>
                            </div>
                            <div class="col-md-8 my-3">
                                <small class="text-warning">Kosongkan Jika tidak ingin mengganti file</small>
                                <input type="file" class="form-control" name="file_info">
                                <?php echo form_error('file_info', '<div class="alert alert-danger" role="alert">', '</div>') ?>
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

<script>
    $(document).ready(function() {
        $('.status').each(function() {
            var currentStatus = $(this).data('status'); 
            if (currentStatus === 'Tidak Tampil') {
                $(this).removeClass('btn-success').addClass('btn-danger');
            } else if (currentStatus === 'Tampil') {
                $(this).removeClass('btn-danger').addClass('btn-success');
            }
        });
        $('.status').on('click', function() {
            var id = $(this).data('id');
            var currentStatus = $(this).data('status'); 
            var newStatus = (currentStatus === 'Tidak Tampil') ? 'Tampil' : 'Tidak Tampil'; 
            console.log(newStatus);

                $.ajax({
                url: '<?= base_url("informasi/updatestatus") ?>',
                data: {
                    id : id,
                    status: newStatus
                },
                method: 'post',
                dataType:'json',
                success:function(response){
                    console.log(response);
                    if (newStatus === 'Tidak Tampil') {
                        $(this).removeClass('btn-success').addClass('btn-danger').text('Tidak Tampil');
                    } else if (newStatus === 'Tampil') {
                        $(this).removeClass('btn-danger').addClass('btn-success').text('Tampil');
                    }
                    location.reload();
                }, 
                error: function (xhr, status, error) {
                    console.error("Error: " + status, error);
                }
            });
        });

        $('.tampilModalUbah').on('click', function() {
            const id = $(this).data('id');
            $('.modal-body form').attr('action', 'informasi/update/'+id);
            $('#nama_produk').val(id);


            $.ajax({
                url: 'informasi/edit',
                data: {id : id},
                method: 'post',
                dataType:'json',
                success:function(data){
                    $('#id_informasi').val(data.id_informasi);
                    $('#nama_info').val(data.nama_info);
                    $('#deskripsi').val(data.deskripsi);
                    console.log(data)
                }
            });
        });
    });
</script>
