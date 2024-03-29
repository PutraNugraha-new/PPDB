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

        $new_data = $this->db->get_where('users', ['id' => $id])->row_array();
        return $new_data; // Berhasil menambahkan pendaftaran
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

    public function count_verifikasi() {
        $this->db->where('status', 'Verifikasi');
        return $this->db->count_all_results('tb_pendaftaran');
    }

    public function count_lolos() {
        $this->db->where('status', 'Lolos');
        return $this->db->count_all_results('tb_pendaftaran');
    }

    public function count_diterima() {
        $this->db->where('status', 'Diterima');
        return $this->db->count_all_results('tb_pendaftaran');
    }

    public function count_tidak_diterima() {
        $this->db->where('status', 'Ditolak');
        return $this->db->count_all_results('tb_pendaftaran');
    }

    public function count_records() {
        return $this->db->count_all('tb_pendaftaran');
    }

    public function get_filtered_data($status) {
        // Fetch filtered data based on start and end date
        $this->db->like('status', $status);
        $query = $this->db->get('tb_pendaftaran');
        return $query->result();
    }

    public function ambilStatus(){
        $this->db->select('status');
        $this->db->from('tb_pendaftaran');
        return $this->db->get()->result();
    }

    public function get_filtered_dataStatus($status) {
        // Fetch filtered data based on start and end date
        $this->db->like('status', $status);
        $query = $this->db->get('tb_pendaftaran');
        return $query->result();
    }
}
