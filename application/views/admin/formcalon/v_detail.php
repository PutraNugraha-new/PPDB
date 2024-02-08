<div class="container m-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Data Calon Siswa</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Data Siswa</p>
                            <ul>
                                <?php foreach($detail as $data): ?>
                                    <li>
                                        <strong>Nama Lengkap : </strong> <?= $data->n_lengkap ?>
                                    </li>
                                    <li>
                                        <strong>Nama Panggilan : </strong> <?= $data->n_panggilan ?>
                                    </li>
                                    <li>
                                        <strong>Jenis Kelamin : </strong> <?= $data->jk ?>
                                    </li>
                                    <li>
                                        <strong>Tempat Lahir : </strong> <?= $data->tempat_lahir ?>
                                    </li>
                                    <li>
                                        <strong>Tanggal Lahir : </strong> <?= $data->tgl_lahir ?>
                                    </li>
                                    <li>
                                        <strong>Agama : </strong> <?= $data->agama ?>
                                    </li>
                                    <li>
                                        <strong>Kewarganegaraan : </strong> <?= $data->kewarganegaraan ?>
                                    </li>
                                    <li>
                                        <strong>Anak Ke : </strong> <?= $data->anak_ke ?>
                                    </li>
                                    <li>
                                        <strong>Jumlah Saudara : </strong> <?= $data->jml_saudara ?>
                                    </li>
                                    <li>
                                        <strong>Bahasa Sehari-hari : </strong> <?= $data->bahasa_seharihari ?>
                                    </li>
                                    <li>
                                        <strong>Berat Badan : </strong> <?= $data->berat_bdn ?>
                                    </li>
                                    <li>
                                        <strong>Tinggi Badan : </strong> <?= $data->tinggi_bdn ?>
                                    </li>
                                    <li>
                                        <strong>Golongan Darah : </strong> <?= $data->golongan_darah ?>
                                    </li>
                                    <li>
                                        <strong>Riwayat Penyakit : </strong> <?= $data->riwayat_penyakit ?>
                                    </li>
                                    <li>
                                        <strong>Alamat Tempat Tinggal : </strong> <?= $data->alamat_tt ?>
                                    </li>
                                    <li>
                                        <strong>Nomor HP : </strong> <?= $data->no_hp ?>
                                    </li>
                                    <li>
                                        <strong>Jarak Tempat Tinggal : </strong> <?= $data->jarak_tt ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <p>Data Orang Tua</p>
                            <ul>
                                <?php foreach($detail as $data): ?>
                                    <li>
                                        <strong>Nama Ayah : </strong> <?= $data->nama_ayah ?>
                                    </li>
                                    <li>
                                        <strong>Nama Ibu : </strong> <?= $data->nama_ibu ?>
                                    </li>
                                    <li>
                                        <strong>Pendidikan Ayah : </strong> <?= $data->pendidikan_ayah ?>
                                    </li>
                                    <li>
                                        <strong>Pendidikan Ibu : </strong> <?= $data->pendidikan_ibu ?>
                                    </li>
                                    <li>
                                        <strong>Pekerjaan Ayah : </strong> <?= $data->pekerjaan_ayah ?>
                                    </li>
                                    <li>
                                        <strong>Pekerjaan Ibu : </strong> <?= $data->pekerjaan_ibu ?>
                                    </li>
                                    <li>
                                        <strong>Nama Wali : </strong> <?= $data->nama_wali ?>
                                    </li>
                                    <li>
                                        <strong>Pendidikan Wali : </strong> <?= $data->pendidikan_wali ?>
                                    </li>
                                    <li>
                                        <strong>Pekerjaan Wali : </strong> <?= $data->pekerjaan_wali ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <p>Data Asal Sekolah</p>
                            <ul>
                                <?php foreach($detail as $data): ?>
                                    <li>
                                        <strong>Asal Sekolah : </strong> <?= $data->asal_sekolah ?>
                                    </li>
                                    <li>
                                        <strong>Nama TK : </strong> <?= $data->nama_tk ?>
                                    </li>
                                    <li>
                                        <strong>Alamat TK : </strong> <?= $data->alamat_tk ?>
                                    </li>
                                    <li>
                                        <strong>Tanggal STTB : </strong> <?= $data->tgl_sttb ?>
                                    </li>
                                    <li>
                                        <strong>Nomor STTB : </strong> <?= $data->no_sttb ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <strong>Photo Siswa :</strong>
                            <img src="<?= base_url() ?>berkasSiswa/<?= $data->photo ?>" class="img-fluid" style="width:300px; height:400px;" alt="Tidak Ada">
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <?php foreach($detail as $data): ?>
                                    <?php if($data->ijazah): ?>
                                    <li>
                                        <a href="<?= base_url() ?>berkasSiswa/<?= $data->ijazah ?>">Berkas Ijazah</a>
                                    </li>
                                    <?php endif; ?>
                                    <?php if($data->akta): ?>
                                    <li>
                                        <a href="<?= base_url() ?>berkasSiswa/<?= $data->akta ?>">Berkas Akta Kelahiran</a>
                                    </li>
                                    <?php endif; ?>
                                    <?php if($data->kk): ?>
                                    <li>
                                        <a href="<?= base_url() ?>berkasSiswa/<?= $data->kk ?>">Berkas Kartu Keluarga</a>
                                    </li>
                                    <?php endif; ?>
                                    <?php if($data->kartu_vaksin): ?>
                                    <li>
                                        <a href="<?= base_url() ?>berkasSiswa/<?= $data->kartu_vaksin ?>">Berkas Kartu vaksin</a>
                                    </li>
                                    <?php endif; ?>
                                    <?php if($data->surat_pernyataan): ?>
                                    <li>
                                        <a href="<?= base_url() ?>berkasSiswa/<?= $data->surat_pernyataan ?>">Berkas Surat Pernyataan</a>
                                    </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>