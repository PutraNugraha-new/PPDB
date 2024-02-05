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
            'isi'   => 'user/v_info',
        );
        $this->load->view('user/layout/v_wrapper',$data,FALSE);
    }
    public function profile(){
        $dataSiswa = array(
            'Email' => 'admin@example.com',
            'Nama Lengkap' => 'John Doe',
            'Nama Panggilan' => 'John',
            'Jenis Kelamin' => 'Laki-Laki',
            'Tempat Lahir' => 'Jakarta',
            'Tanggal Lahir' => '1990-01-01',
            'Agama' => 'Islam',
            'Kewarganegaraan' => 'WNI',
            'Anak ke' => 1,
            'Jumlah Saudara' => 3,
            'Bahasa Sehari - hari' => 'Bahasa Indonesia',
            'Berat Badan' => 70,
            'Tinggi Badan' => 175,
            'Golongan Darah' => 'A',
            'Riwayat Penyakit' => 'Tidak ada',
            'Alamat Domisili' => 'Jl. Contoh No. 123',
            'Nomor HP' => '08123456789',
            'Jarak Tempat Tinggal' => 5,
        );
        $dataOrtu = array(
            'nama_ayah' => 'Budi',
            'nama_ibu' => 'Siti',
            'pendidikan_ayah' => 'S1',
            'pendidikan_ibu' => 'SMA',
            'pekerjaan_ayah' => 'Karyawan',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'nama_wali' => 'Wawan',
            'pendidikan_wali' => 'SMA',
            'pekerjaan_wali' => 'Wiraswasta',
        );
        $asalSekolah = array (
            'asal_sekolah' => 'SMP Negeri 1',
            'nama_tk' => 'TK Bintang',
            'alamat_tk' => 'Jl. Bintang No. 1',
            'tgl_sttb' => '2000-06-01',
            'no_sttb' => '12345'
        );


        $data = array(
            'title' => 'Profile',
            'isi' => 'user/v_profile',
            'siswa' => $dataSiswa,
            'ortu' => $dataOrtu,
            'asal' => $asalSekolah
        );
        $this->load->view('user/layout/v_wrapper',$data, FALSE);
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
            // $email = $this->input->post('email');
            // $password = $this->input->post('password');
            // $passconf = $this->input->post('passconf');
            // $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
            // Lakukan hal yang diperlukan dengan data ini, seperti validasi, penyimpanan ke database, dll.

            // Contoh respons kembali ke client
            $response = array(
                'status' => 'success',
                'message' => 'Data berhasil diterima dan diproses.',
                'data' => array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'passconf' => $this->input->post('passconf'),
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
