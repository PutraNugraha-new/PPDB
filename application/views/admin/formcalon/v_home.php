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
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Status</th>
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
                    <th>Status</th>
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
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                    <td>
                        <div class="badge <?= $data->status == 'Verifikasi' ? 'badge-danger' : 'badge-success'; ?>">
                            <?= $data->status ?>
                        </div>
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
