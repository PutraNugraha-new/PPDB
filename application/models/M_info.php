<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class M_info extends CI_Model {
    
    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_informasi');
        return $this->db->get()->result();
    }

    public function getData($id_informasi){
        $this->db->select('*');
        $this->db->from('tb_informasi');
        $this->db->where('id_informasi', $id_informasi);
        return $this->db->get()->row();
    }

    public function add($data) {
        $data['tgl_info'] = date('Y-m-d');
        $data['status'] = 'Tampil';
        // Masukkan data pendaftaran ke dalam tabel pendaftaran
        $this->db->insert('tb_informasi', $data);

        return true; // Berhasil menambahkan pendaftaran
    }

    public function updateStatus($id_detail, $status) {
        // Sesuaikan dengan struktur tabel dan query Anda
        $data = array(
            'status' => $status
        );

        $this->db->where('id_informasi', $id_detail);
        $this->db->update('tb_informasi', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_informasi',$data['id_informasi']);
        $this->db->update('tb_informasi',$data);
    }

    public function delete($id_informasi) {
        return $this->db->delete('tb_informasi', array('id_informasi' => $id_informasi));
    }
}
