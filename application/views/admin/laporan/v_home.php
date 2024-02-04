<div class="card mt-3">
    <div class="card-header">
        <h4>Laporan</h4>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>lhu/getData" method="get" class="mb-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="start_date">Tanggal Awal:</label>
                    <input type="date" id="start_date" class="form-control" name="tgl_awal">
                    <span class="text-warning">Rentang Berdasarkan Tanggal Daftar</span>
                </div>
                <div class="col-md-2">
                    <label for="end_date">Tanggal Akhir:</label>
                    <input type="date" id="end_date" class="form-control" name="tgl_akhir">
                </div>
                <div class="col-md-4">
                    <br>
                    <button type="submit" id="filter_button" class="btn btn-primary">Tampilkan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </form>
        <a href="<?= base_url() ?>lhu/cetakLaporan?tgl_awal=<?= $this->input->get('tgl_awal') ?>&tgl_akhir=<?= $this->input->get('tgl_akhir') ?>&nama_perusahaan=<?= $this->input->get('nama_perusahaan') ?>" class="btn btn-success my-2">Cetak</a>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Pendaftar</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Pendaftar</th>
                    <th>Keterangan</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>62021658792</td>
                    <td>Julistio Dido</td>
                    <td>
                        Data Lengkap
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
