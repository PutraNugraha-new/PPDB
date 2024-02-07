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
                    <h3>Tambah Calon Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('main/adduserPengguna') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                        <?php echo form_error('email');?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                        <?php echo form_error('password');?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passconf" class="col-sm-4 col-form-label">Password Confirmation</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="passconf" class="form-control" id="passconf" placeholder="Password Confirmation" required>
                                        <?php echo form_error('passconf');?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="n_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="n_lengkap" class="form-control" id="n_lengkap" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="n_panggilan" class="col-sm-4 col-form-label">Nama Panggilan</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="n_panggilan" class="form-control" id="n_panggilan" placeholder="Nama Panggilan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                        <select name="jk" id="jk" class="form-control" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="lk">Laki-laki</option>
                                            <option value="pr">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-6">
                                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-6">
                                        <select name="agama" id="agama" class="form-control" required>
                                            <option value="">- Pilih Agama -</option>
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
                                            <option value="">- Pilih Kewarganegaraan -</option>
                                            <option value="wni">WNI</option>
                                            <option value="wna">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anak_ke" class="col-sm-4 col-form-label">Anak ke-</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="anak_ke" class="form-control" id="anak_ke" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jml_saudara" class="col-sm-4 col-form-label">Jumlah Saudara</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="jml_saudara" class="form-control" id="jml_saudara" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bahasa_seharihari" class="col-sm-4 col-form-label">Bahasa Sehari-hari</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="bahasa_seharihari" class="form-control" id="bahasa_seharihari" placeholder="Bahasa Sehari-hari" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat_bdn" class="col-sm-4 col-form-label">Berat Badan</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="berat_bdn" class="form-control" id="berat_bdn" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi_bdn" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="tinggi_bdn" class="form-control" id="tinggi_bdn" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="golongan_darah" class="col-sm-4 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-6">
                                        <select name="golongan_darah" id="golongan_darah" class="form-control" required>
                                            <option value="">- Pilih Golongan Darah -</option>
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
                                        <textarea name="riwayat_penyakit" class="form-control" id="riwayat_penyakit" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_tt" class="col-sm-4 col-form-label">Alamat Tempat Tinggal</label>
                                    <div class="col-sm-6">
                                        <textarea name="alamat_tt" class="form-control" id="alamat_tt" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-4 col-form-label">Nomor HP</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jarak_tt" class="col-sm-4 col-form-label">Jarak Tempat Tinggal</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="jarak_tt" class="form-control" id="jarak_tt" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pendidikan_ayah" class="form-control" id="pendidikan_ayah" placeholder="Pendidikan Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pendidikan_ibu" class="form-control" id="pendidikan_ibu" placeholder="Pendidikan Ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pekerjaan_ayah" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pekerjaan_ibu" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_wali" class="col-sm-4 col-form-label">Nama Wali</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nama_wali" class="form-control" id="nama_wali" placeholder="Nama Wali" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan_wali" class="col-sm-4 col-form-label">Pendidikan Wali</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pendidikan_wali" class="form-control" id="pendidikan_wali" placeholder="Pendidikan Wali" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pekerjaan_wali" class="col-sm-4 col-form-label">Pekerjaan Wali</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pekerjaan_wali" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_tk" class="col-sm-4 col-form-label">Nama TK</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nama_tk" class="form-control" id="nama_tk" placeholder="Nama TK" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat_tk" class="col-sm-4 col-form-label">Alamat TK</label>
                                        <div class="col-sm-6">
                                            <textarea name="alamat_tk" class="form-control" id="alamat_tk" rows="3"required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_sttb" class="col-sm-4 col-form-label">Tanggal STTB</label>
                                        <div class="col-sm-6">
                                            <input type="date" name="tgl_sttb" class="form-control" id="tgl_sttb"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_sttb" class="col-sm-4 col-form-label">Nomor STTB</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="no_sttb" class="form-control" id="no_sttb" placeholder="Nomor STTB"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>