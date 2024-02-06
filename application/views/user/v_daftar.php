<!-- MultiStep Form -->
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
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-17 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 shadow mt-3 mb-3">
                <p>Isi Semua Data untuk Mendaftarkan Diri Anda</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform"  action="<?= base_url('users/adduserPengguna') ?>" method="POST">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Akun</strong></li>
                                <li id="personal"><strong>Siswa</strong></li>
                                <li id="personal"><strong>Orang Tua</strong></li>
                                <li id="personal"><strong>Asal Sekolah Siswa</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Informasi Akun</h2>
                                    <input type="email" name="email" placeholder="Email"/>
                                    <?php echo form_error('email');?>
                                    <small class="text-danger">Isikan minimal 5 Karakter</small>
                                    <input type="password" name="password" placeholder="Password"/>
                                    <?php echo form_error('password');?>
                                    <input type="password" name="passconf" placeholder="Konfirmasi Password"/>
                                    <?php echo form_error('passconf');?>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Tahap Selanjutnya"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Keterangan Siswa</h2>
                                    <input type="text" name="n_lengkap" placeholder="Nama Lengkap" required>
                                    <input type="text" name="n_panggilan" placeholder="Nama Panggilan" required/>
                                    <select name="jk" id="jk" class="form-control mb-2" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="lk">Laki - Laki</option>
                                        <option value="pr">Perempuan</option>
                                    </select>
                                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required/>
                                    <small>Tanggal Lahir</small>
                                    <input type="date" name="tgl_lahir" class="form-control" required/>
                                    <select name="agama" id="agama" class="form-control mb-2" required>
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="wni">ISLAM</option>
                                        <option value="wna">KRISTEN</option>
                                        <option value="wna">HINDU</option>
                                        <option value="wna">BUDDHA</option>
                                        <option value="wna">KONGHUCU</option>
                                    </select>
                                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control mb-2" required>
                                        <option value="">-- Pilih Kewarganegaraan --</option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                    </select>
                                    <input type="number" name="anak_ke"  placeholder="Anak Ke" required/>
                                    <input type="number" name="jml_saudara"  placeholder="Jumlah Saudara Kandung" required/>
                                    <input type="text" name="bahasa_seharihari"  placeholder="Bahasa Sehari - hari" required/>
                                    <input type="number" name="berat_bdn"  placeholder="Berat Badan" required/>
                                    <input type="number" name="tinggi_bdn"  placeholder="Tinggi Badan" required/>
                                    <select name="golongan_darah" id="golongan_darah" class="form-control mb-2" required>
                                        <option value="">-- Pilih Golongan Darah --</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                        <option value="AB">AB</option>
                                    </select>
                                    <input type="text" name="riwayat_penyakit"  placeholder="Penyakit yang Pernah Diderita" required/>
                                    <input type="text" name="alamat_tt"  placeholder="Alamat Tempat Tinggal" required/>
                                    <input type="number" name="no_hp"  placeholder="No Hp" required/>
                                    <input type="text" name="jarak_tt"  placeholder="Jarak Tempat Tinggal Ke Sekolah" required/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Tahap Selanjutnya"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Keterangan Orang Tua/Wali</h2>

                                    <label class="pay">Nama Orang Tua</label>
                                    <input type="text" name="nama_ayah" placeholder="Ayah Kandung" required/>
                                    <input type="text" name="nama_ibu" placeholder="Ibu Kandung" required/>
                                    
                                    <label class="pay">Pendidikan Tertinggi</label>
                                    <input type="text" name="pendidikan_ayah" placeholder="Ayah Kandung" required/>
                                    <input type="text" name="pendidikan_ibu" placeholder="Ibu Kandung" required/>
                                    
                                    <label class="pay">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ayah" placeholder="Ayah Kandung" required/>
                                    <input type="text" name="pekerjaan_ibu" placeholder="Ibu Kandung" required/>
                                    
                                    <label class="pay">Wali Siswa</label>
                                    <input type="text" name="nama_wali" placeholder="Nama Wali" required/>
                                    <input type="text" name="pendidikan_wali" placeholder="Pendidikan wali" required/>
                                    <input type="text" name="pekerjaan_wali" placeholder="Pekerjaan Wali" required/>
                                    
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Tahap Selanjutnya"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Asal Sekolah Siswa</h2>
                                    <select name="asal_sekolah" id="asal_sekolah" class="form-control mb-2" required>
                                        <option value="">-- Pilih Asal Sekolah --</option>
                                        <option value="rumah_tangga">Rumah Tangga</option>
                                        <option value="tk">Taman Kanak-Kanak</option>
                                    </select>
                                    <input type="text" name="nama_tk" placeholder="Nama Taman Kanak-Kanak" required/>
                                    <input type="text" name="alamat_tk" placeholder="Alamat Taman Kanak-Kanak" required/>
                                    <small>Tanggal STTB</small>
                                    <input type="date" name="tgl_sttb" required/>
                                    <input type="text" name="no_sttb" placeholder="Nomor STTB TK" required/>
                                    
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <button type="submit" name="next" class="next action-button" value="Simpan">Simpan</button>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Datamu Akan Segera Diproses, tunggu info lebih Lanjut</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
