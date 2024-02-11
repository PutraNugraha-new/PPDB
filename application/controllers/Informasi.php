<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public $status;
    public $roles;

    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->model('M_info', 'M_info', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        
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
                    'title'=>'Informasi',
                    'isi'   =>  'admin/informasi/v_home',
                    'info' => $this->M_info->getAll()
                );
                // var_dump($data);
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }

    public function add()
    {
        
        $data = $this->session->userdata;
        if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }

        //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);

	    //check is admin or not
	    if($dataLevel == "is_admin"){
                $upload_data = array();
                // Periksa apakah file diunggah
                if (!empty($_FILES['file_info']['name'])) {
                    $config['upload_path'] = './fileInfo/';
                    $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx'; // Sesuaikan jenis file yang diizinkan
                    $config['max_size']  = 10000; 

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload('file_info')) {
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('error_message', $error['error']);
                        redirect('informasi', 'refresh');
                        die();
                    } else {
                        $upload_data = $this->upload->data();
                        $nama_file_acak = random_string('alnum', 16); // Menghasilkan string acak dengan panjang 16 karakter
                        $ext = pathinfo($_FILES['file_info']['name'], PATHINFO_EXTENSION); // Mendapatkan ekstensi file yang diunggah
                        $nama_file_akhir = $nama_file_acak . '.' . $ext; // Menyatukan nama file acak dengan ekstensi

                        // Pindahkan file yang diunggah ke lokasi tujuan dengan nama yang diacak
                        rename($upload_data['full_path'], $config['upload_path'] . $nama_file_akhir);
                        $nama = $nama_file_akhir;
                    }
                }

                $tambah = [
                    'nama_info' => $this->input->post('nama_info'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'file_info' => (!empty($nama)) ? $nama : null,
                ];

                // Masukkan ke database
                $this->M_info->add($tambah);
                $this->session->set_flashdata('success_message', 'Berhasil Menambahkan Data.');
                redirect('informasi', 'refresh');
	    }else{
	        redirect(site_url().'main/');
	    }
    }

    public function updatestatus(){
        if ($this->input->is_ajax_request()) {
            $id_detail = $this->input->post('id');
            $status = $this->input->post('status');

            // Panggil model untuk mengupdate jumlah di database
            $this->M_info->updateStatus($id_detail, $status);

            // Kirim tanggapan ke klien (jika diperlukan)
            echo json_encode(['status' => 'success']);
            exit;
        } else {
            // Tanggapan jika bukan permintaan Ajax
            show_404();
        }
    }

    public function edit() {
        // header('Content-Type: application/json');
        echo json_encode($this->M_info->getData($_POST['id']));
        exit;
    }

    public function update()
    {
        $id_informasi = $this->input->post('id_informasi');
        $ambil = $this->M_info->getData($id_informasi);

        $name = './fileInfo/' . $ambil->file_info;
        $nama = '';
        $cek_file = $_FILES['file_info']['name'];
        // Jika ada file baru diunggah
        if (!empty($_FILES['file_info']['name'])) {
                // Validasi tipe file
            $allowed_types = array('jpg', 'png', 'jpeg', 'docx', 'pdf');
            $file_ext = pathinfo($_FILES['file_info']['name'], PATHINFO_EXTENSION);

            if (!in_array(strtolower($file_ext), $allowed_types)) {
                $this->session->set_flashdata('error_message', 'Jenis file tidak diizinkan.');
                redirect('informasi', 'refresh');
            }

            // Validasi ukuran file
            $max_size = 10000; // dalam kilobyte
            $file_size = $_FILES['file_info']['size'];

            if ($file_size > $max_size * 1024) {
                $this->session->set_flashdata('error_message', 'Ukuran file terlalu besar. Maksimum: ' . $max_size . ' KB.');
                redirect('informasi', 'refresh');
            }

            if (is_readable($name) && is_file($name) && unlink($name)) {
                $config['upload_path'] = './fileInfo/';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx';
                $config['max_size']  = 10000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // var_dump($config);
                // die();

                if (!$this->upload->do_upload('file_info')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error['error']);
                    redirect('informasi', 'refresh');
                } else {
                    $upload_data = $this->upload->data();
                    $nama_file_acak = random_string('alnum', 16); // Menghasilkan string acak dengan panjang 16 karakter
                    $ext = pathinfo($_FILES['file_info']['name'], PATHINFO_EXTENSION); // Mendapatkan ekstensi file yang diunggah
                    $nama_file_akhir = $nama_file_acak . '.' . $ext; // Menyatukan nama file acak dengan ekstensi

                    // Pindahkan file yang diunggah ke lokasi tujuan dengan nama yang diacak
                    rename($upload_data['full_path'], $config['upload_path'] . $nama_file_akhir);

                    // Simpan nama file acak ke dalam variabel untuk disimpan ke dalam database
                    $nama = $nama_file_akhir;
                    // var_dump($nama);
                }
            }else{
                $config['upload_path'] = './fileInfo/';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx'; // Sesuaikan jenis file yang diizinkan
                $config['max_size']  = 10000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                // var_dump($config);
                // die();

                if (!$this->upload->do_upload('file_info')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error_message', $error['error']);
                    var_dump($error['error']);
                    die();
                    redirect('informasi', 'refresh');
                } else {
                    $upload_data = $this->upload->data();
                    $nama_file_acak = random_string('alnum', 16); // Menghasilkan string acak dengan panjang 16 karakter
                    $ext = pathinfo($_FILES['file_info']['name'], PATHINFO_EXTENSION); // Mendapatkan ekstensi file yang diunggah
                    $nama_file_akhir = $nama_file_acak . '.' . $ext; // Menyatukan nama file acak dengan ekstensi

                    // Pindahkan file yang diunggah ke lokasi tujuan dengan nama yang diacak
                    rename($upload_data['full_path'], $config['upload_path'] . $nama_file_akhir);

                    // Simpan nama file acak ke dalam variabel untuk disimpan ke dalam database
                    $nama = $nama_file_akhir;
                }
            }
        } else {
            // Jika tidak ada file baru diunggah, gunakan nama file yang ada
            $nama = $ambil->file_info;
        }

        $tambah = [
            'id_informasi' => $id_informasi,
            'nama_info' => $this->input->post('nama_info'),
            'deskripsi' => $this->input->post('deskripsi'),
            'file_info' => $nama
        ];

        $this->M_info->edit($tambah);
        $this->session->set_flashdata('success_message', 'Berhasil Mengubah Data');
        redirect('informasi', 'refresh');
    }


    public function delete($id_pendaftar)
    {
        $ambil = $this->M_info->getData($id_pendaftar);
    
        $name = './fileInfo/'.$ambil->file_info;
        
        // Periksa apakah $name adalah sebuah file
        if(is_file($name)){
            // Hapus file
            if(unlink($name)) {
                $this->M_info->delete($id_pendaftar);
                $this->session->set_flashdata('success_message', 'Data Berhasil Dihapus');
            } else {
                $this->session->set_flashdata('error_message', 'Gagal menghapus file');
            }
        } else {
            $this->M_info->delete($id_pendaftar);
            $this->session->set_flashdata('success_message', 'Data Berhasil Dihapus');
        }
        redirect('informasi', 'refresh');
    }
}
