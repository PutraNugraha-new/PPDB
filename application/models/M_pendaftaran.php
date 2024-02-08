<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model {
    
    public function getData($id){
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->where('tb_pendaftaran.id', $id);
        return $this->db->get()->result();
    }
    public function getDatadetail($id){
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->where('id_pendaftar', $id);
        return $this->db->get()->result();
    }
    public function getDataedit($id){
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->where('id_pendaftar', $id);
        return $this->db->get()->row();
    }

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        return $this->db->get()->result();
    
    }

    public function addPendaftaran($id, $data) {
        $data['id'] = $id;
        // Masukkan data pendaftaran ke dalam tabel pendaftaran
        $this->db->insert('tb_pendaftaran', $data);

        return true; // Berhasil menambahkan pendaftaran
    }

    public function delete($id) {
        return $this->db->delete('tb_pendaftaran', array('id' => $id));
    }
    
    public function updateStatus($id_detail, $status) {
        // Sesuaikan dengan struktur tabel dan query Anda
        $data = array(
            'status' => $status
        );

        $this->db->where('id_pendaftar', $id_detail);
        $this->db->update('tb_pendaftaran', $data);
    }
    public function updateBerkas($id_pendaftar, $berkas) {
        // Pastikan id_pendaftar dan $berkas tidak kosong
        if (!empty($id_pendaftar) && !empty($berkas)) {
            // Lakukan update berkas berdasarkan id_pendaftar
            $this->db->where('id_pendaftar', $id_pendaftar);
            $this->db->update('tb_pendaftaran', $berkas);
            return true; // Berhasil melakukan update
        } else {
            return false; // Gagal melakukan update karena data tidak lengkap
        }
    }

    public function edit($data)
    {
        if(!empty($data)){
            $this->db->where('id_pendaftar',$data['id_pendaftar']);
            $this->db->update('tb_pendaftaran',$data);
            return true;
        }else{
            return false;
        }
    }

    public function count_status() {
        $this->db->select('status, COUNT(*) as total');
        $this->db->from('tb_pendaftaran');
        $this->db->group_by('status');
        return $this->db->get()->result();
    }
    public function count_records() {
        return $this->db->count_all('tb_pendaftaran');
    }
}
