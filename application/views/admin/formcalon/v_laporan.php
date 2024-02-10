<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Daftar Calon Peserta Didik Baru</title>

    <style>
        .cetakLaporan tr td{
            font-size:12pt;
        }

        img {
            width :70px;
            heigth:70px;
            /* position: absolute; */
        }

        .judul{
            text-align:center;
            font-weight:bold;
        }

        /* Reset some default browser styles for the table */
        .cetakLaporan {
            border-collapse: collapse;
            width: 100%;
        }

        /* Add margin to the table headers */
        .cetakLaporan th {
            padding: 5px; /* Optional: Add padding for better appearance */
            text-align: left;
            background-color: #f2f2f2; /* Optional: Add background color for the headers */
            border:1px solid #000;
            margin-bottom: 10px; /* Add margin to the bottom of the headers */
        }

        /* Add some styles to the table data cells (optional) */
        ..cetakLaporan td {
            padding: 10px; /* Optional: Add padding for better appearance */
            border: 1px solid #000; /* Optional: Add border to the cells */
        }

        /* Optional: Add some styles to the whole table for better appearance */
        .cetakLaporan {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px; /* Add margin to the top of the table */
        }

    </style>
</head>
<body>
    <table border="0" class="kop border-0">
        <tr>
            <td>
                <img src="<?= base_url() ?>public/image/gumas.jpg" class="img-fluid" alt="Logo">
            </td>
            <td align="center">
                <span class="highlight">
                    PEMERINTAH KABUPATEN GUNUNG MAS <br>
                    DINAS PENDIDIKAN, KEPEMUDAAN DAN OLAHRAGA <br>
                    SD NEGERI-1 KAMPURI <br>
                    <span class="italic">Alamat : Jl. Lamiang No. 02 RT. 04/RW.02 Kel. Kampuri Kode Pos 74571</span>
                </span>
            </td>
            <td>
                <img src="<?= base_url() ?>public/image/tutwuri.jpg" class="img-fluid" alt="">
            </td>
        </tr>
    </table>
<hr>
<p class="judul">Daftar Calon Peserta Didik</p>

<table class="table cetakLaporan" border="1" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Tempat/ Tanggal Lahir</th>
            <th>No Hp</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach($pendaftar as $data): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data->n_lengkap; ?></td>
            <td><?= $data->tempat_lahir; ?>/ <?= $data->tgl_lahir ?></td>
            <td><?= $data->no_hp; ?></td>
            <td><?= $data->status; ?></td>
        </tr>
        <?php $no++; endforeach; ?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>