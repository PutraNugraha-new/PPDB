<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {
    
    public function cek_kelengkapan_data() {
        $this->db->select('id_pendaftar, n_lengkap, ijazah, akta, kk, photo, kartu_vaksin, surat_pernyataan');
        $query = $this->db->get('tb_pendaftaran')->result();

        $status = array();

        foreach ($query as $row) {
            $status_per_baris = "Data Lengkap";
            $data_kosong = array();
            if ($row->ijazah == "") {
                $data_kosong[] = 'ijazah';
            }
            if ($row->akta == "") {
                $data_kosong[] = 'akta';
            }
            if ($row->kk == "") {
                $data_kosong[] = 'kk';
            }
            if ($row->photo == "") {
                $data_kosong[] = 'photo';
            }
            if ($row->kartu_vaksin == "") {
                $data_kosong[] = 'kartu_vaksin';
            }
            if ($row->surat_pernyataan == "") {
                $data_kosong[] = 'surat_pernyataan';
            }
            if (!empty($data_kosong)) {
                $status_per_baris = "Data belum lengkap: " . implode(", ", $data_kosong);
            }
            $status[$row->id_pendaftar] = array(
                'id_pendaftar' => $row->id_pendaftar,
                'n_lengkap' => $row->n_lengkap,
                'status_kelengkapan' => $status_per_baris
            );
        }

        return $status;
    }
}
