<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model {
    

    public function addPendaftaran($id, $data) {
         // Memasukkan data ke dalam tabel 'pendaftaran'
        $this->db->insert('tb_pendaftaran', array(
            'id' => $id, // User ID yang didapat dari controller
            'n_lengkap' => $data['n_lengkap'],
            'n_panggilan' => $data['n_panggilan'],
            'jk' => $data['jk'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tgl_lahir' => $data['tgl_lahir'],
            'agama' => $data['agama'],
            'kewarganegaraan' => $data['kewarganegaraan'],
            'anak_ke' => $data['anak_ke'],
            'jml_saudara' => $data['jml_saudara'],
            'bahasa_seharihari' => $data['bahasa_seharihari'],
            'berat_bdn' => $data['berat_bdn'],
            'tinggi_bdn' => $data['tinggi_bdn'],
            'golongan_darah' => $data['golongan_darah'],
            'riwayat_penyakit' => $data['riwayat_penyakit'],
            'alamat_tt' => $data['alamat_tt'],
            'no_hp' => $data['no_hp'],
            'jarak_tt' => $data['jarak_tt'],
            'nama_ayah' => $data['nama_ayah'],
            'nama_ibu' => $data['nama_ibu'],
            'pendidikan_ayah' => $data['pendidikan_ayah'],
            'pendidikan_ibu' => $data['pendidikan_ibu'],
            'pekerjaan_ayah' => $data['pekerjaan_ayah'],
            'pekerjaan_ibu' => $data['pekerjaan_ibu'],
            'nama_wali' => $data['nama_wali'],
            'pendidikan_wali' => $data['pendidikan_wali'],
            'pekerjaan_wali' => $data['pekerjaan_wali'],
            'asal_sekolah' => $data['asal_sekolah'],
            'nama_tk' => $data['nama_tk'],
            'alamat_tk' => $data['alamat_tk'],
            'tgl_sttb' => $data['tgl_sttb'],
            'no_sttb' => $data['no_sttb']
        ));

        // Periksa apakah data berhasil dimasukkan ke dalam database
        if ($this->db->affected_rows() > 0) {
            return true; // Jika berhasil
        } else {
            return false; // Jika gagal
        }
    }
    
}
