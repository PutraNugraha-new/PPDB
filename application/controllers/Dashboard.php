<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
                    'title'=>'Dashboard',
                    'isi'   =>  'admin/dashboard/v_home',
                    'user' => 'Admin',
                    'verifikasi' => $this->M_pendaftaran->count_verifikasi(),
                    'count_lolos' => $this->M_pendaftaran->count_lolos(),
                    'count_diterima' => $this->M_pendaftaran->count_diterima(),
                    'count_tidak_diterima' => $this->M_pendaftaran->count_tidak_diterima(),
                    'countAll' => $this->M_pendaftaran->count_records()
                );
                // var_dump($data);
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }
}
