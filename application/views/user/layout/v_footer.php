    <footer>
        <div class="container-fluid my-3">
            <div class="row justify-content-between">
                <div class="col-xl-2 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body"> <?= $countAll ?> pendaftar</div>
                        <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body"><?= $verifikasi ?> Verifikasi</div>
                        <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body"><?= $count_lolos ?> Lolos</div>
                        <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body"><?= $count_diterima ?> Diterima</div>
                        <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body"><?= $count_tidak_diterima ?> Ditolak</div>
                        <div class="card-footer p-1 bg-light d-flex align-items-center justify-content-between">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Copyright 2024-SDN 1 Kampuri
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/user/dataTable.js"></script>
<script src="<?= base_url() ?>assets/user/multipages.js"></script>
<script src="<?= base_url() ?>/assets/extensions/jquery/jquery.min.js"></script>

</body>
</html>