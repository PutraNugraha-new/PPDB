<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    }

	public function index()
    {
        $data = array(
            'title'=>'Data Form Pendaftar',
            'isi'   =>  'admin/formcalon/v_home',
            'pendaftar' => $this->M_pendaftaran->getAll(),
            'user' => 'Admin'
        );
        // var_dump($data['pendaftar']);
        // die();
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function tambah(){
        $data = array(
            'title'=>'Data Form Pendaftar',
            'isi'   =>  'admin/formcalon/v_tambah',
            'user' => 'Admin'
        );
        // var_dump($data['pendaftar']);
        // die();
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
