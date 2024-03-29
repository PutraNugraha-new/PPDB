<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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

        $this->jumlah['verifikasi'] = $this->M_pendaftaran->count_verifikasi();
        $this->jumlah['count_lolos'] = $this->M_pendaftaran->count_lolos();
        $this->jumlah['count_diterima'] = $this->M_pendaftaran->count_diterima();
        $this->jumlah['count_tidak_diterima'] = $this->M_pendaftaran->count_tidak_diterima();
        $this->jumlah['countAll'] = $this->M_pendaftaran->count_records();
    }

    //index dasboard
	public function index()
	{
	    //user data from session
	    $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'users/login/');
	    }

	    //check user level
	    if(empty($data['role'])){
	        redirect(site_url().'users/login/');
	    }
	    $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level
        
	    
        if(empty($this->session->userdata['email'])){
            redirect(site_url().'users/login/');
        }else{
            redirect(site_url().'welcome/profile');
        }

	}
	
	public function checkLoginUser(){
	     //user data from session
	    $data = $this->session->userdata;
	    if(empty($data['email'])){
	        redirect(site_url().'users/login/');
	    }
        $this->load->library('user_agent');
        $browser = $this->agent->browser();
        $os = $this->agent->platform();
        $getip = $this->input->ip_address();
        
        $result = $this->user_model->getAllSettings();
        $stLe = $result->site_title;
        $tz = $result->timezone;
	    
        $now = new DateTime();
        $now->setTimezone(new DateTimezone($tz));
        $dTod =  $now->format('Y-m-d');
        $dTim =  $now->format('H:i:s');
        
        $this->load->helper('cookie');
        $keyid = rand(1,9000);
        $scSh = sha1($keyid);
        $neMSC = md5($data['email']);
        $setLogin = array(
            'name'   => $neMSC,
            'value'  => $scSh,
            'expire' => strtotime("+2 year"),
        );
        $getAccess = get_cookie($neMSC);
	    
        if(!$getAccess && $setLogin["name"] == $neMSC){
            // Konfigurasi SMTP untuk Gmail
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' =>  465,
                'smtp_user' => 'simpandrive803@gmail.com', // Gantilah dengan alamat email Gmail Anda
                'smtp_pass' => 'sampit2019', // Gantilah dengan password Gmail Anda
                'mailtype' => 'html',
                'charset' => 'utf-8'
            );
             $this->load->library('email', $config);
            $this->load->library('sendmail');
            $bUrl = base_url();
            $message = $this->sendmail->securemail($data['first_name'],$data['last_name'],$data['email'],$dTod,$dTim,$stLe,$browser,$os,$getip,$bUrl);
            $to_email = $data['email'];
            $this->email->from($this->config->item('register'), 'New sign-in! from ' . $browser . '');
            $this->email->to($to_email);
            $this->email->subject('New sign-in! from ' . $browser . '');
            $this->email->message($message);
            $this->email->set_mailtype("html");
        
            // Kirim email menggunakan SMTP
            $this->email->send();
            
            $this->input->set_cookie($setLogin, TRUE);
            redirect(site_url().'users/');
        }else{
            $this->input->set_cookie($setLogin, TRUE);
            redirect(site_url().'users/');
        }
	}

    public function adduserPengguna()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Pendaftaran',
                'isi' => 'user/v_daftar'
            );
            $this->load->view('user/layout/v_wrapper', $data, FALSE);
        }else{
            if($this->user_model->isDuplicate($this->input->post('email'))){
                $this->session->set_flashdata('flash_message', 'Email sudah digunakan');
                redirect(site_url().'welcome/daftar');
            }else{
                $this->load->library('password');
                $post = $this->input->post(NULL, TRUE);
                $cleanPost = $this->security->xss_clean($post);
                $hashed = $this->password->create_hash($cleanPost['password']);
                $cleanPost['email'] = $this->input->post('email');
                $cleanPost['banned_users'] = 'unban';
                $cleanPost['role'] = '2';
                $cleanPost['password'] = $hashed;
                
                unset($cleanPost['passconf']);
                $id = $this->user_model->addUserPengguna($cleanPost);
                //insert to database
                if($id){
                    if ($this->input->server('REQUEST_METHOD') === 'POST') {
                        $response = array(
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
                        // echo json_encode($response); // Output respons dalam format JSON
                        $this->M_pendaftaran->addPendaftaran($id, $response);
                        $this->session->set_flashdata('success_message', 'Pendaftaran Berhasil Mohon Login ke Aplikasi.');
                        redirect(site_url().'welcome/login');
                        exit;
                    }
                }else{
                    $this->session->set_flashdata('error_message', 'Data Gagal ditambahkan.');
                    redirect(site_url().'welcome/daftar');
                }
                redirect(site_url().'welcome');
            };
        }
    }
    //check if complate after add new user
    public function complete()
    {
        $token = base64_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);

        $user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();

        if(!$user_info){
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            redirect(site_url().'users/login');
        }
        $data = array(
            'firstName'=> $user_info->first_name,
            'email'=>$user_info->email,
            'user_id'=>$user_info->id,
            'token'=>$this->base64url_encode($token)
        );

        $data['title'] = "Set the Password";

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('container');
            $this->load->view('complete', $data);
            $this->load->view('footer');
        }else{
            $this->load->library('password');
            $post = $this->input->post(NULL, TRUE);

            $cleanPost = $this->security->xss_clean($post);

            $hashed = $this->password->create_hash($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            unset($cleanPost['passconf']);
            $userInfo = $this->user_model->updateUserInfo($cleanPost);

            if(!$userInfo){
                $this->session->set_flashdata('flash_message', 'There was a problem updating your record');
                redirect(site_url().'users/login');
            }

            unset($userInfo->password);

            foreach($userInfo as $key=>$val){
                $this->session->set_userdata($key, $val);
            }
            redirect(site_url().'users/');

        }
    }

    //check login failed or success
    public function login()
    {
        $data = $this->session->userdata;
        if(!empty($data['email'])){
	        redirect(site_url().'users/');
	    }else{
	        $this->load->library('curl');
            $this->load->library('recaptcha');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE) {
                redirect(site_url().'welcome/login');
            }else{
                $post = $this->input->post();
                $clean = $this->security->xss_clean($post);
                $userInfo = $this->user_model->checkLogin($clean);
                

                if(!$userInfo)
                {
                    $this->session->set_flashdata('flash_message', 'Wrong password or email.');
                    redirect(site_url().'users/login');
                }
                elseif($userInfo->banned_users == "ban")
                {
                    $this->session->set_flashdata('danger_message', 'You’re temporarily banned from our website!');
                    redirect(site_url().'users/login');
                }
                elseif($userInfo && $userInfo->banned_users == "unban") //recaptcha check, success login, ban or unban
                {
                    foreach($userInfo as $key=>$val){
                    $this->session->set_userdata($key, $val);
                    }
                    redirect(site_url().'users/');
                }
                else
                {
                    $this->session->set_flashdata('flash_message', 'Something Error!');
                    redirect(site_url().'users/login/');
                    exit;
                }
            }
	    }
    }

    //Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url().'users/login/');
    }

    //forgot password
    public function forgot()
    {
        $data['title'] = "Forgot Password";
        $this->load->library('curl');
        $this->load->library('recaptcha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == FALSE) {
            redirect(site_url().'welcome/forgot');
        }else{
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->user_model->getUserInfoByEmail($clean);

            if(!$userInfo){
                $this->session->set_flashdata('flash_message', 'Email Address Tidak Terdaftar');
                redirect(site_url().'users/forgot');
            }

            if($userInfo->status != $this->status[1]){ //if status is not approved
                $this->session->set_flashdata('flash_message', 'Akun Kamu Belum di Approved');
                redirect(site_url().'users/login');
            }

            //generate token
            $token = $this->user_model->insertToken($userInfo->id);
            $qstring = $this->base64url_encode($token);
            $url = site_url() . 'users/reset_password/token/' . $qstring;
            $link = '<a href="' . $url . '">' . $url . '</a>';

            $this->load->library('email');
            $this->load->library('sendmail');
            
            $message = $this->sendmail->sendForgot($this->input->post('lastname'),$this->input->post('email'),$link,'SDN 1 Kampuri');
            $to_email = $this->input->post('email');
            $this->email->from($this->config->item('forgot'), 'Reset Password! ' . $this->input->post('firstname') .' '. $this->input->post('lastname')); //from sender, title email
            // Pengaturan email
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.gmail.com';
            $config['smtp_port'] = 587;
            $config['smtp_user'] = 'simpandrive803@gmail.com'; // Ganti dengan alamat email Anda
            $config['smtp_pass'] = 'tleydnzevvrvmbda'; // Ganti dengan kata sandi email Anda
            $config['smtp_crypto'] = 'tls';
            $config['charset'] = 'utf-8';
            $config['mailtype'] = 'html';
            $config['newline'] = "\r\n";
        
            // Load konfigurasi email
            $this->email->initialize($config);
            // Pengaturan email
            $this->email->from('simpandrive803@gmail.com', 'Admin'); // Ganti dengan alamat email dan nama Anda
            $this->email->to($to_email); // Ganti dengan alamat email penerima
            
            $this->email->subject('Reset Password');
            $this->email->message($message);

            if($this->email->send()){
                redirect(site_url().'users/successresetpassword/');
            }else{
                $this->session->set_flashdata('flash_message', 'There was a problem sending an email.');
                exit;
            }
        }

    }

    public function reset_password()
    {
        $token = $this->base64url_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);
        $user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();

        if(!$user_info){
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            redirect(site_url().'users/login');
        }
        $dataa = array(
            'firstName'=> $user_info->first_name,
            'email'=>$user_info->email,
            //'user_id'=>$user_info->id,
            'token'=>$this->base64url_encode($token)
        );

        $data['title'] = "Reset Password";
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Reset Password',
                'isi' => 'user/reset-pass'
            );
            $data = array_merge($data,$dataa, $this->jumlah);
            $this->load->view('user/layout/v_wrapper', $data, FALSE);
        }else{
            $this->load->library('password');
            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);
            $hashed = $this->password->create_hash($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            $cleanPost['user_id'] = $user_info->id;
            unset($cleanPost['passconf']);
            if(!$this->user_model->updatePassword($cleanPost)){
                $this->session->set_flashdata('flash_message', 'There was a problem updating your password');
            }else{
                $this->session->set_flashdata('success_message', 'Your password has been updated. You may now login');
            }
            redirect(site_url().'welcome/login');
        }
    }

     // if success after set password
     public function successresetpassword()
     {
        redirect(site_url().'welcome/pass_info');
     }

    public function base64url_encode($data) {
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data) {
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}
