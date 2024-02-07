<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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
                    'title'=>'Data Form Pendaftar',
                    'isi'   =>  'admin/pengguna/v_home',
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

}
