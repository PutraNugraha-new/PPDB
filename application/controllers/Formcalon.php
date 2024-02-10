<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;
require_once FCPATH . 'vendor/autoload.php';

class Formcalon extends CI_Controller {

    public $status;
    public $roles;

    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->model('M_pendaftaran', 'M_pendaftaran', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Times New Roman');
        $dompdf = new Dompdf($options);
    }

	public function index()
    {
        $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == 'is_admin'){
                $data = array(
                    'title'=>'Data Form Pendaftar',
                    'isi'   =>  'admin/formcalon/v_home',
                    'pendaftar' => $this->M_pendaftaran->getAll(),
                    'status' => $this->M_pendaftaran->ambilStatus(),
                    'user' => 'Admin'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }

    public function tambah(){
        $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == 'is_admin'){
                $data = array(
                    'title'=>'Data Form Pendaftar',
                    'isi'   =>  'admin/formcalon/v_tambah',
                    'user' => 'Admin'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }
    public function edit($id_pendaftar){
        $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == 'is_admin'){
                $data = array(
                    'title'=>'Data Form Pendaftar',
                    'isi'   =>  'admin/formcalon/v_edit',
                    'user' => 'Admin',
                    'dataa' => $this->M_pendaftaran->getDataedit($id_pendaftar),
                    'detail' => $this->M_pendaftaran->getDatadetail($id_pendaftar)
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }

    public function detail($id){
        $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == 'is_admin'){
                $data = array(
                    'title'=>'Data Detail',
                    'isi'   =>  'admin/formcalon/v_detail',
                    'user' => 'Admin',
                    'detail' => $this->M_pendaftaran->getDatadetail($id)
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }

    //delete user
    public function deleteuser($id) {
        $data = $this->session->userdata;
        if(empty($data['role'])){
            redirect(site_url().'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level

        //check is admin or not
        if($dataLevel == "is_admin"){
            $this->user_model->deleteUser($id);
            if($this->user_model->deleteUser($id) == FALSE )
            {
                $this->session->set_flashdata('error_message', 'Error, tidak dapat menghapus pengguna!');
            }
            else
            {   
                $this->M_pendaftaran->delete($id);
                $this->session->set_flashdata('success_message', 'Pendaftar berhasil dihapus.');
            }
            redirect(site_url().'formcalon');
        }else{
            redirect(site_url().'main/');
        }
    }

    public function updatestatus(){
        if ($this->input->is_ajax_request()) {
            $id_detail = $this->input->post('id');
            $status = $this->input->post('status');

            // Panggil model untuk mengupdate jumlah di database
            $this->M_pendaftaran->updateStatus($id_detail, $status);

            // Kirim tanggapan ke klien (jika diperlukan)
            echo json_encode(['status' => 'success']);
            exit;
        } else {
            // Tanggapan jika bukan permintaan Ajax
            show_404();
        }
    }

    public function update(){
        $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == 'is_admin'){
                $response = array(
                    'id_pendaftar' => $this->input->post('id_pendaftar'),
                    'n_lengkap' => $this->input->post('n_lengkap'),
                    'n_panggilan' => $this->input->post('n_panggilan'),
                    'jk' => $this->input->post('jk'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'agama' => $this->input->post('agama'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'jml_saudara' => $this->input->post('jml_saudara'),
                    'bahasa_seharihari' => $this->input->post('bahasa_seharihari'),
                    'berat_bdn' => $this->input->post('berat_bdn'),
                    'tinggi_bdn' => $this->input->post('tinggi_bdn'),
                    'golongan_darah' => $this->input->post('golongan_darah'),
                    'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
                    'alamat_tt' => $this->input->post('alamat_tt'),
                    'no_hp' => $this->input->post('no_hp'),
                    'jarak_tt' => $this->input->post('jarak_tt'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                    'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'nama_wali' => $this->input->post('nama_wali'),
                    'pendidikan_wali' => $this->input->post('pendidikan_wali'),
                    'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
                    'asal_sekolah' => $this->input->post('asal_sekolah'),
                    'nama_tk' => $this->input->post('nama_tk'),
                    'alamat_tk' => $this->input->post('alamat_tk'),
                    'tgl_sttb' => $this->input->post('tgl_sttb'),
                    'no_sttb' => $this->input->post('no_sttb')
                );
            
                $upload_data = array();
                $tambah = array();

                $id_pendaftar = $this->input->post('id_pendaftar');
                $ambil = $this->M_pendaftaran->getDataedit($id_pendaftar);

                // Loop through each file input
                $berkas = array('ijazah', 'akta', 'kk', 'photo', 'kartu_vaksin', 'surat_pernyataan');
                foreach ($berkas as $berkas_type) {
                    if (!empty($_FILES[$berkas_type]['name'])) {
                        // Cek apakah file lama ada
                        if (!empty($ambil->$berkas_type)) {
                            $file_path = './berkasSiswa/' . $ambil->$berkas_type;
                            // Hapus file lama
                            if (file_exists($file_path)) {
                                unlink($file_path);
                            }
                        }
                        if (!empty($_FILES[$berkas_type]['name'])) {
                            $config['upload_path'] = './berkasSiswa/';
                            $config['allowed_types'] = 'jpg|png|jpeg|pdf|docx|doc';
                            $config['max_size']  = 10000; 
                
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);
                
                            if (!$this->upload->do_upload($berkas_type)) {
                                $error = array('error' => $this->upload->display_errors());
                                $this->session->set_flashdata('error_message', $error['error']);
                                redirect('formcalon/edit/', 'refresh');
                            } else {
                                $upload_data[$berkas_type] = $this->upload->data();
                                $nama_file_acak = random_string('alnum', 16);
                                $extension = pathinfo($_FILES[$berkas_type]['name'], PATHINFO_EXTENSION);
                                $nama_file_akhir = $nama_file_acak . '.' . $extension;
                                rename($upload_data[$berkas_type]['full_path'], $config['upload_path'] . $nama_file_akhir);
                                // Menyimpan nama berkas yang diacak ke dalam array
                                $response[$berkas_type] = $nama_file_akhir;
                            }
                        }
                    }else{
                        continue;
                    }
                }
            
                // Menggabungkan data respons dan data berkas yang di-upload
                $response = array_merge($response, $tambah);

                // Masukkan data ke database menggunakan model
                $success = $this->M_pendaftaran->edit($response);
                if ($success){
                    // Set pesan berhasil
                    $this->session->set_flashdata('success_message', 'Data Calon Siswa Berhasil Diubah.');
                    redirect(site_url().'formcalon');
                }else{
                    $this->session->set_flashdata('error_message', 'Data Calon Siswa Gagal Ditambahkan.');
                    redirect('formcalon/tambah');
                }
            
                // Redirect ke halaman formcalon
            }else{
                redirect('welcome');
            }
        }
    }

    public function getData() {
        $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == "is_admin"){
                $status = $this->input->get('status');
    
                // ---------------
                if (!empty($status)) {
                    // Menampilkan semua data
                    $data = array(
                        'title'=>'Data Form Pendaftar',
                        'isi'   =>  'admin/formcalon/v_home',
                        'status' => $this->M_pendaftaran->ambilStatus(),
                        'pendaftar' => $this->M_pendaftaran->get_filtered_data($status),
                    );
                } else {
                    // Kondisi default jika tidak ada form yang terisi
                    $data = array(
                        'title'=>'Data Form Pendaftar',
                        'isi'   =>  'admin/formcalon/v_home',
                        'status' => $this->M_pendaftaran->ambilStatus(),
                        'pendaftar' => $this->M_pendaftaran->getAll(),
                    );
                }
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                
                redirect('welcome','refresh');
                
            }
        }
    }

    public function cetakLaporan(){
        $data = $this->session->userdata;
        if(empty($data)){
            redirect(site_url().'main/login/');
        }
    
        //check user level
        if(empty($data['role'])){
            redirect(site_url().'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        // var_dump($dataLevel);
        // die();
        //check user level
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'main/login/');
        }else{
            if($dataLevel == "is_admin"){
                $status = $this->input->get('status');
    
                // ---------------
                if (!empty($status)) {
                    // Mengirimkan flashdata jika hanya salah satu form tanggal yang terisi
                    $data = array(
                        'pendaftar' => $this->M_pendaftaran->get_filtered_dataStatus($status),
                    );
                } else {
                    // Kondisi default jika tidak ada form yang terisi
                    $data = array(
                        'pendaftar' => $this->M_pendaftaran->getAll(),
                    );
                }
        
        
                // Load library Dompdf
                $options = new Options();
                $options->set('isHtml5ParserEnabled', true);
                $options->set('isPhpEnabled', true);
                $options->set('isRemoteEnabled', true);
        
                $dompdf = new Dompdf($options);
        
                $html = $this->load->view('admin/formcalon/v_laporan', $data, true);
                $dompdf->loadHtml($html);
        
                $dompdf->setPaper('A4', 'portrait');
        
                // Render PDF (stream to browser atau save ke file)
                $dompdf->render();
                $nama_file_acak = random_string('alnum', 16);
                $dompdf->stream($nama_file_acak . '.pdf', array('Attachment' => 0));
            }else{
                
                redirect('dashboard','refresh');
                
            }
        }
    }
}
