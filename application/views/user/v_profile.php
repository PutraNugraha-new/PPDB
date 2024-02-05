<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow my-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around text-center flex-md-row flex-column">
                            <h4>Putra Nugraha</h4>
                            <span class="text-secondary">Status : <div class="badge badge-danger">Verifikasi</div> </span> 
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
                            <div class="row">
                                <div class="col-md-12 my-3 text-end">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa-solid fa-pencil"></i>
                                        Edit
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 100%;">
                                    <tbody>
                                        <?php foreach ($siswa as $key => $value): ?>
                                        <tr>
                                            <th scope="row" style="width: 20%;"><?php echo ucwords(str_replace("_", " ", $key)); ?></th>
                                            <td>: <?php echo $value; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" id="OrangTua" style="display: none;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 my-3 text-end">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa-solid fa-pencil"></i>
                                        Edit
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 100%;">
                                    <tbody>
                                        <?php foreach ($ortu as $key => $value): ?>
                                        <tr>
                                            <th scope="row" style="width: 20%;"><?php echo ucwords(str_replace("_", " ", $key)); ?></th>
                                            <td>: <?php echo $value; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3" id="asalSekolah" style="display: none;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 my-3 text-end">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa-solid fa-pencil"></i>
                                        Edit
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" style="width: 100%;">
                                    <tbody>
                                        <?php foreach ($asal as $key => $value): ?>
                                        <tr>
                                            <th scope="row" style="width: 20%;"><?php echo ucwords(str_replace("_", " ", $key)); ?></th>
                                            <td>: <?php echo $value; ?></td>
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