<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
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
                    <h3>Edit Data Calon Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('formcalon/update') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="n_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" value="<?= $dataa->id_pendaftar ?>" name="id_pendaftar" class="form-control" id="n_lengkap" placeholder="Nama Lengkap" required>
                                        <input type="text" value="<?= $dataa->n_lengkap ?>" name="n_lengkap" class="form-control" id="n_lengkap" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="n_panggilan" class="col-sm-4 col-form-label">Nama Panggilan</label>
                                    <div class="col-sm-6">
                                        <input type="text" value="<?= $dataa->n_panggilan ?>" name="n_panggilan" class="form-control" id="n_panggilan" placeholder="Nama Panggilan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                        <select name="jk" id="jk" class="form-control" required>
                                            <option value="<?= $dataa->jk?>"><?= $dataa->jk == 'lk' ? 'Laki - Laki' : 'Perempuan' ?></option>
                                            <option value="lk">Laki-laki</option>
                                            <option value="pr">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-6">
                                        <input type="text" value="<?= $dataa->tempat_lahir?>" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-6">
                                        <input type="date" value="<?= $dataa->tgl_lahir?>" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-6">
                                        <select name="agama" id="agama" class="form-control" required>
                                            <option value="<?= $dataa->agama?>"><?= $dataa->agama ?></option>
                                            <option value="islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kewarganegaraan" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-6">
                                        <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                            <option value="<?= $dataa->kewarganegaraan ?>"><?= $dataa->kewarganegaraan ?></option>
                                            <option value="wni">WNI</option>
                                            <option value="wna">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anak_ke" class="col-sm-4 col-form-label">Anak ke-</label>
                                    <div class="col-sm-6">
                                        <input type="number" value="<?= $dataa->anak_ke ?>" name="anak_ke" class="form-control" id="anak_ke" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jml_saudara" class="col-sm-4 col-form-label">Jumlah Saudara</label>
                                    <div class="col-sm-6">
                                        <input type="number" value="<?= $dataa->jml_saudara ?>" name="jml_saudara" class="form-control" id="jml_saudara" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bahasa_seharihari" class="col-sm-4 col-form-label">Bahasa Sehari-hari</label>
                                    <div class="col-sm-6">
                                        <input type="text" value="<?= $dataa->bahasa_seharihari ?>" name="bahasa_seharihari" class="form-control" id="bahasa_seharihari" placeholder="Bahasa Sehari-hari" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat_bdn" class="col-sm-4 col-form-label">Berat Badan</label>
                                    <div class="col-sm-6">
                                        <input type="number" value="<?= $dataa->berat_bdn ?>" name="berat_bdn" class="form-control" id="berat_bdn" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi_bdn" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-6">
                                        <input type="number" value="<?= $dataa->tinggi_bdn ?>" name="tinggi_bdn" class="form-control" id="tinggi_bdn" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="golongan_darah" class="col-sm-4 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-6">
                                        <select name="golongan_darah" id="golongan_darah" class="form-control" required>
                                            <option value="<?= $dataa->golongan_darah ?>"><?= $dataa->golongan_darah ?></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                            <option value="AB">AB</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="riwayat_penyakit" class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                    <div class="col-sm-6">
                                        <textarea name="riwayat_penyakit" class="form-control" id="riwayat_penyakit" rows="3" required><?= $dataa->riwayat_penyakit ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_tt" class="col-sm-4 col-form-label">Alamat Tempat Tinggal</label>
                                    <div class="col-sm-6">
                                        <textarea name="alamat_tt" class="form-control" id="alamat_tt" rows="3" required><?= $dataa->alamat_tt ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-4 col-form-label">Nomor HP</label>
                                    <div class="col-sm-6">
                                        <input type="text" value="<?= $dataa->no_hp ?>" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jarak_tt" class="col-sm-4 col-form-label">Jarak Tempat Tinggal</label>
                                    <div class="col-sm-6">
                                        <input type="number" value="<?= $dataa->jarak_tt ?>" name="jarak_tt" class="form-control" id="jarak_tt" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->nama_ayah ?>" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->nama_ibu ?>" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->pendidikan_ayah ?>" name="pendidikan_ayah" class="form-control" id="pendidikan_ayah" placeholder="Pendidikan Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->pendidikan_ibu ?>" name="pendidikan_ibu" class="form-control" id="pendidikan_ibu" placeholder="Pendidikan Ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->pekerjaan_ayah ?>" name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->pekerjaan_ibu ?>" name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_wali" class="col-sm-4 col-form-label">Nama Wali</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->nama_wali ?>" name="nama_wali" class="form-control" id="nama_wali" placeholder="Nama Wali" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_wali" class="col-sm-4 col-form-label">Pendidikan Wali</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->pendidikan_wali ?>" name="pendidikan_wali" class="form-control" id="pendidikan_wali" placeholder="Pendidikan Wali" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_wali" class="col-sm-4 col-form-label">Pekerjaan Wali</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->pekerjaan_wali ?>" name="pekerjaan_wali" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-6">
                                            <select name="asal_sekolah" id="asal_sekolah" class="form-control mb-2" required>
                                                <option value="<?= $dataa->asal_sekolah ?>"><?= $dataa->asal_sekolah ?></option>
                                                <option value="rumah tangga">Rumah Tangga</option>
                                                <option value="tk">Taman Kanak-Kanak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_tk" class="col-sm-4 col-form-label">Nama TK</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->nama_tk ?>" name="nama_tk" class="form-control" id="nama_tk" placeholder="Nama TK" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat_tk" class="col-sm-4 col-form-label">Alamat TK</label>
                                        <div class="col-sm-6">
                                            <textarea name="alamat_tk" class="form-control" id="alamat_tk" rows="3"required><?= $dataa->alamat_tk ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_sttb" class="col-sm-4 col-form-label">Tanggal STTB</label>
                                        <div class="col-sm-6">
                                            <input type="date" value="<?= $dataa->tgl_sttb ?>" name="tgl_sttb" class="form-control" id="tgl_sttb"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_sttb" class="col-sm-4 col-form-label">Nomor STTB</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $dataa->no_sttb ?>" name="no_sttb" class="form-control" id="no_sttb" placeholder="Nomor STTB"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ijazah" class="col-sm-4 col-form-label">Ijazah</label>
                                        <div class="col-sm-6">
                                            <small class="font-weight-bold text-warning"><?= empty($dataa->ijazah) ? 'Belum Ada' : 'Sudah Upload' ?> </small>
                                            <input type="file" name="ijazah" class="form-control" id="ijazah" accept=".jpg, .jpeg, .png, .pdf" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="akta" class="col-sm-4 col-form-label">Akta Kelahiran</label>
                                        <div class="col-sm-6">
                                            <small class="font-weight-bold text-warning"><?= empty($dataa->akta) ? 'Belum Ada' : 'Sudah Upload' ?> </small>
                                            <input type="file" name="akta" class="form-control" id="akta" accept=".jpg, .jpeg, .png, .pdf">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kk" class="col-sm-4 col-form-label">Kartu Keluarga</label>
                                        <div class="col-sm-6">
                                            <small class="font-weight-bold text-warning"><?= empty($dataa->kk) ? 'Belum Ada' : 'Sudah Upload' ?> </small>
                                            <input type="file" name="kk" class="form-control" id="kk" accept=".jpg, .jpeg, .png, .pdf">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="photo" class="col-sm-4 col-form-label">Pas Photo 3X4 (Baju Sd)</label>
                                        <div class="col-sm-6">
                                        <small class="font-weight-bold text-warning"><?= empty($dataa->photo) ? 'Belum Ada' : 'Sudah Upload' ?> </small>
                                            <input type="file" name="photo" class="form-control" id="photo" accept=".jpg, .jpeg, .png">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kartu_vaksin" class="col-sm-4 col-form-label">Kartu Vaksin</label>
                                        <div class="col-sm-6">
                                            <small class="font-weight-bold text-warning"><?= empty($dataa->kartu_vaksin) ? 'Belum Ada' : 'Sudah Upload' ?> </small>
                                            <input type="file" name="kartu_vaksin" class="form-control" id="kartu_vaksin" accept=".jpg, .jpeg, .png, .pdf" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="surat_pernyataan" class="col-sm-4 col-form-label">Surat Pernyataan</label>
                                        <div class="col-sm-6">
                                            <small class="font-weight-bold text-warning"><?= empty($dataa->surat_pernyataan) ? 'Belum Ada' : 'Sudah Upload' ?> </small>
                                            <input type="file" name="surat_pernyataan" class="form-control" id="surat_pernyataan" accept=".jpg, .jpeg, .png, .pdf">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit Data</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Photo Siswa :</strong>
            <img src="<?= base_url() ?>berkasSiswa/<?= $dataa->photo ?>" class="img-fluid" style="width:300px; height:400px;" alt="Tidak Ada">
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