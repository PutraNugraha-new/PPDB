<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public $status;
    public $roles;

    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

	public function index()
    {
        $data = array(
            'title'=>'Dashboard',
            'isi'   =>  'user/v_home',
        );
        // var_dump($data);
        $this->load->view('user/layout/v_wrapper', $data, FALSE);
    }

    public function info(){
        $data = array(
            'title' => 'Informasi',
            'isi'     => 'user/v_info',
        );
        $this->load->view('user/layout/v_wrapper',$data,FALSE);
    }

    public function daftar(){
        $data = array(
            'title' => 'Pendaftaran',
            'isi' => 'user/v_daftar'
        );
        $this->load->view('user/layout/v_wrapper', $data, FALSE);
    }

    public function registration() {
        // Periksa apakah request merupakan request POST
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Tangkap data dari formulir
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $passconf = $this->input->post('passconf');
            $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
            // Lakukan hal yang diperlukan dengan data ini, seperti validasi, penyimpanan ke database, dll.

            // Contoh respons kembali ke client
            $response = array(
                'status' => 'success',
                'message' => 'Data berhasil diterima dan diproses.',
                'data' => array(
                    'email' => $email,
                    'password' => $password,
                    'passconf' => $passconf,
                    'pekerjaan_ayah' => $pekerjaan_ayah,
                    // Anda bisa menambahkan data inputan lainnya di sini
                )
            );
            echo json_encode($response); // Output respons dalam format JSON
            exit;
        } else {
            // Jika bukan request POST, redirect atau tangani dengan cara lain sesuai kebutuhan aplikasi Anda
            redirect('welcome');
        }
    }
}
