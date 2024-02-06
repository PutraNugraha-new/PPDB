<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow my-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around text-center flex-md-row flex-column">
                            <?php foreach($dataPendaftar as $data): ?>
                            <h4><?= $data->n_lengkap ?></h4>
                            <span class="text-secondary">Status : <div class="badge <?= $data->status == 'Verifikasi' ? 'badge-danger' : 'badge-success'; ?>"><?= $data->status ?></div> </span> 
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-3">
                <div class="card-body">
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link link-secondary Tabsiswa" id="Tabsiswa" href="#"><i class="fa-solid fa-address-card"></i> Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary TaborangTua" id="TaborangTua" href="#"><i class="fa-solid fa-person"></i> Data orang Tua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-secondary" id="Tabasalsekolah" href="#"><i class="fa-solid fa-school-flag"></i> Data Asal Sekolah</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row my-3" id="siswa">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 100%;">
                                    <tbody>
                                        <?php foreach ($dataPendaftar as $data): ?>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nama Lengkap</th>
                                                <td>: <?= $data->n_lengkap; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nama Panggilan</th>
                                                <td>: <?= $data->n_panggilan; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Jenis Kelamin</th>
                                                <td>: <?= $data->jk; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Tempat Lahir</th>
                                                <td>: <?= $data->tempat_lahir; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Tanggal Lahir</th>
                                                <td>: <?= $data->tgl_lahir; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Agama</th>
                                                <td>: <?= $data->agama; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Kewarganegaraan</th>
                                                <td>: <?= $data->kewarganegaraan; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Anak ke-</th>
                                                <td>: <?= $data->anak_ke; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Jumlah Saudara</th>
                                                <td>: <?= $data->jml_saudara; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Bahasa Sehari-hari</th>
                                                <td>: <?= $data->bahasa_seharihari; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Berat Badan</th>
                                                <td>: <?= $data->berat_bdn; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Tinggi Badan</th>
                                                <td>: <?= $data->tinggi_bdn; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Golongan Darah</th>
                                                <td>: <?= $data->golongan_darah; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Riwayat Penyakit</th>
                                                <td>: <?= $data->riwayat_penyakit; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Alamat Tempat Tinggal</th>
                                                <td>: <?= $data->alamat_tt; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nomor HP</th>
                                                <td>: <?= $data->no_hp; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Jarak Tempat Tinggal</th>
                                                <td>: <?= $data->jarak_tt; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" id="OrangTua" style="display: none;">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 100%;">
                                    <tbody>
                                        <?php foreach ($dataPendaftar as $data): ?>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nama Ayah</th>
                                                <td>: <?= $data->nama_ayah; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nama Ibu</th>
                                                <td>: <?= $data->nama_ibu; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Pendidikan Ayah</th>
                                                <td>: <?= $data->pendidikan_ayah; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Pendidikan Ibu</th>
                                                <td>: <?= $data->pendidikan_ibu; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Pekerjaan Ayah</th>
                                                <td>: <?= $data->pekerjaan_ayah; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Pekerjaan Ibu</th>
                                                <td>: <?= $data->pekerjaan_ibu; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nama Wali</th>
                                                <td>: <?= $data->nama_wali; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Pendidikan Wali</th>
                                                <td>: <?= $data->pendidikan_wali; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Pekerjaan Wali</th>
                                                <td>: <?= $data->pekerjaan_wali; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" id="asalSekolah" style="display: none;">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 100%;">
                                    <tbody>
                                        <?php foreach ($dataPendaftar as $data): ?>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Asal Sekolah</th>
                                                <td>: <?= $data->asal_sekolah; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nama TK</th>
                                                <td>: <?= $data->nama_tk; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Alamat TK</th>
                                                <td>: <?= $data->alamat_tk; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Tanggal STTB</th>
                                                <td>: <?= $data->tgl_sttb; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 20%;">Nomor STTB</th>
                                                <td>: <?= $data->no_sttb; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("Tabsiswa").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("siswa").style.display = "block";
        document.getElementById("OrangTua").style.display = "none";
        document.getElementById("asalSekolah").style.display = "none";
        document.querySelector(".Tabsiswa").classList.add("active");
        document.querySelector(".TaborangTua").classList.remove("active");
    });

    document.getElementById("TaborangTua").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("siswa").style.display = "none";
        document.getElementById("OrangTua").style.display = "block";
        document.querySelector(".Tabsiswa").classList.remove("active");
        document.querySelector(".TaborangTua").classList.add("active");
    });
    document.getElementById("Tabasalsekolah").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("siswa").style.display = "none";
        document.getElementById("OrangTua").style.display = "none";
        document.getElementById("asalSekolah").style.display = "block";
        document.querySelector(".Tabsiswa").classList.remove("active");
        document.querySelector(".TaborangTua").classList.remove("active");
        document.querySelector(".Tabasalsekolah").classList.add("active");
    });
</script>