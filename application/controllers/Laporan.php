<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
            'title'=>'Laporan',
            'isi'   =>  'admin/laporan/v_home',
            'user' => 'Admin'
        );
        // var_dump($data);
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
