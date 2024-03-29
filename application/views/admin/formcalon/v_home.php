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
<div class="card mt-3">
    <div class="card-header">
        <h4>Daftar Pendaftar</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <a href="<?= base_url() ?>formcalon/tambah" class="btn btn-primary mb-3">
                    <i class="fa-solid fa-circle-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url() ?>formcalon/getData" method="get">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="end_date">Status :</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- status --</option>
                                <?php foreach($status as $data): ?>
                                    <option value="<?= $data->status ?>"><?= $data->status ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <button type="submit" id="filter_button" class="btn btn-primary">Tampilkan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                            <a href="<?= base_url() ?>formcalon/cetakLaporan?status=<?= $this->input->get('status') ?>" class="btn btn-success my-2">Cetak</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>
                        <div class="col-12">Status Pendaftar</div>
                    </th>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Kewarganegaraan</th>
                    <th>Anak ke</th>
                    <th>Jumlah Saudara</th>
                    <th>Bahasa Sehari-hari</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Golongan Darah</th>
                    <th>Riwayat Penyakit</th>
                    <th>Alamat Tempat Tinggal</th>
                    <th>Nomor HP</th>
                    <th>Jarak Tempat Tinggal</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pendidikan Ayah</th>
                    <th>Pendidikan Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Nama Wali</th>
                    <th>Pendidikan Wali</th>
                    <th>Pekerjaan Wali</th>
                    <th>Asal Sekolah</th>
                    <th>Nama TK</th>
                    <th>Alamat TK</th>
                    <th>Tanggal STTB</th>
                    <th>Nomor STTB</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Aksi</th>
                    <th><div class="col-12">Status Pendaftar</div></th>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Kewarganegaraan</th>
                    <th>Anak ke</th>
                    <th>Jumlah Saudara</th>
                    <th>Bahasa Sehari-hari</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Golongan Darah</th>
                    <th>Riwayat Penyakit</th>
                    <th>Alamat Tempat Tinggal</th>
                    <th>Nomor HP</th>
                    <th>Jarak Tempat Tinggal</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pendidikan Ayah</th>
                    <th>Pendidikan Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Nama Wali</th>
                    <th>Pendidikan Wali</th>
                    <th>Pekerjaan Wali</th>
                    <th>Asal Sekolah</th>
                    <th>Nama TK</th>
                    <th>Alamat TK</th>
                    <th>Tanggal STTB</th>
                    <th>Nomor STTB</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($pendaftar as $data): ?>
                <tr>
                    <td>
                        <a href="<?= base_url() ?>formcalon/deleteuser/<?= $data->id ?>" class="btn btn-danger " onClick="return confirm('Yakin Ingin Menghapus Data?')">Hapus</a>
                        <a href="<?= base_url() ?>formcalon/detail/<?= $data->id_pendaftar ?>" class="btn btn-primary  m-1">Detail</a>
                        <a href="<?= base_url() ?>formcalon/edit/<?= $data->id_pendaftar ?>" class="btn btn-success  m-1">Edit</a>
                    </td>
                    <td>
                        <select class="form-select status" data-id="<?= $data->id_pendaftar ?>">
                            <option value="Verifikasi" <?= ($data->status == 'Verifikasi') ? 'selected' : '' ?>>Verifikasi</option>
                            <option value="Lolos" <?= ($data->status == 'Lolos') ? 'selected' : '' ?>>Lolos</option>
                            <option value="Diterima" <?= ($data->status == 'Diterima') ? 'selected' : '' ?>>Diterima</option>
                            <option value="Ditolak" <?= ($data->status == 'Ditolak') ? 'selected' : '' ?>>Ditolak</option>
                        </select>
                    </td>
                    <td><?= $data->n_lengkap ?></td>
                    <td><?= $data->n_panggilan ?></td>
                    <td> <?= $data->jk == 'lk' ? 'Laki - Laki' : 'Perempuan'; ?></td>
                    <td><?= $data->tempat_lahir ?>/ <?= $data->tgl_lahir ?></td>
                    <td><?= $data->agama ?></td>
                    <td><?= $data->kewarganegaraan ?></td>
                    <td><?= $data->anak_ke ?></td>
                    <td><?= $data->jml_saudara ?></td>
                    <td><?= $data->bahasa_seharihari ?></td>
                    <td><?= $data->berat_bdn ?></td>
                    <td><?= $data->tinggi_bdn ?></td>
                    <td><?= $data->golongan_darah ?></td>
                    <td><?= $data->riwayat_penyakit ?></td>
                    <td><?= $data->alamat_tt ?></td>
                    <td><?= $data->no_hp ?></td>
                    <td><?= $data->jarak_tt ?></td>
                    <td><?= $data->nama_ayah ?></td>
                    <td><?= $data->nama_ibu ?></td>
                    <td><?= $data->pendidikan_ayah ?></td>
                    <td><?= $data->pendidikan_ibu ?></td>
                    <td><?= $data->pekerjaan_ayah ?></td>
                    <td><?= $data->pekerjaan_ibu ?></td>
                    <td><?= $data->nama_wali ?></td>
                    <td><?= $data->pendidikan_wali ?></td>
                    <td><?= $data->pekerjaan_wali ?></td>
                    <td><?= $data->asal_sekolah ?></td>
                    <td><?= $data->nama_tk ?></td>
                    <td><?= $data->alamat_tk ?></td>
                    <td><?= $data->tgl_sttb ?></td>
                    <td><?= $data->no_sttb ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.status').on('change', function() {
            var id = $(this).data('id');
            var newStatus = $(this).val();

            $.ajax({
                url: '<?= base_url("formcalon/updatestatus") ?>',
                data: {
                    id : id,
                    status: newStatus
                },
                method: 'post',
                dataType:'json',
                success:function(response){
                    console.log(response);
                    location.reload();
                }, 
                error: function (xhr, status, error) {
                    console.error("Error: " + status, error);
                }
            });
        });
    });
</script>
