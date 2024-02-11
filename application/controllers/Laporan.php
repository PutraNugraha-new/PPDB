<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller {

    public $status;
    public $roles;

    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user_model', TRUE);
        $this->load->model('M_laporan', 'M_laporan', TRUE);
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
                    'title'=>'Laporan',
                    'isi'   =>  'admin/laporan/v_home',
                    'status' => $this->M_laporan->cek_kelengkapan_data(),
                    'user' => 'Admin'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }else{
                redirect('welcome');
            }
        }
    }

    public function cetakExcel(){

        // Load library PHPSpreadsheet
        // $this->load->library('PhpSpreadsheet');
    
        // Ambil data dari model
        $data = $this->M_laporan->cek_kelengkapan_data();
    
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();
    
        // Set active worksheet
        $activeWorksheet = $spreadsheet->getActiveSheet();

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];

    
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = [
            'font' => ['bold' => true], // Set font nya jadi bold
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];
    
        // Set judul file excel nya
        $activeWorksheet->setCellValue('A1', "PEMERINTAH KABUPATEN GUNUNG MAS");
        $activeWorksheet->mergeCells('A1:F1'); // Set Merge Cell pada kolom A1 sampai F1
        $activeWorksheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
        $activeWorksheet->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $activeWorksheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center secara horizontal (center)

        // Baris berikutnya untuk DINAS PENDIDIKAN, KEPEMUDAAN DAN OLAHRAGA
        $activeWorksheet->setCellValue('A2', "DINAS PENDIDIKAN, KEPEMUDAAN DAN OLAHRAGA");
        $activeWorksheet->mergeCells('A2:F2'); // Set Merge Cell pada kolom A2 sampai F2
        $activeWorksheet->getStyle('A2')->getFont()->setBold(true); // Set bold kolom A2
        $activeWorksheet->getStyle('A2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center secara horizontal (center)

        // Baris berikutnya untuk SD NEGERI-1 KAMPURI
        $activeWorksheet->setCellValue('A3', "SD NEGERI-1 KAMPURI");
        $activeWorksheet->mergeCells('A3:F3'); // Set Merge Cell pada kolom A3 sampai F3
        $activeWorksheet->getStyle('A3')->getFont()->setBold(true); // Set bold kolom A3
        $activeWorksheet->getStyle('A3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center secara horizontal (center)

        // Baris berikutnya untuk Alamat
        $activeWorksheet->setCellValue('A4', "Alamat : Jl. Lamiang No. 02 RT. 04/RW.02 Kel. Kampuri Kode Pos 74571");
        $activeWorksheet->mergeCells('A4:F4'); // Set Merge Cell pada kolom A4 sampai F4
        $activeWorksheet->getStyle('A4')->getFont()->setItalic(true); // Set italic pada kolom A4
        $activeWorksheet->getStyle('A4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center secara horizontal (center)

    
        // Buat header tabel nya pada baris ke 3
        $activeWorksheet->setCellValue('A6', "No"); // Set kolom A6 dengan tulisan "No"
        $activeWorksheet->setCellValue('B6', "Nama Lengkap"); // Set kolom B6 dengan tulisan "Nama Lengkap"
        $activeWorksheet->setCellValue('C6', "Status Kelengkapan"); // Set kolom C6 dengan tulisan "Status Kelengkapan"
    
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $activeWorksheet->getStyle('A6:C6')->applyFromArray($style_col);
    
        // Set height baris ke 1, 2 dan 3
        $activeWorksheet->getRowDimension('1')->setRowHeight(20);
        $activeWorksheet->getRowDimension('2')->setRowHeight(20);
        $activeWorksheet->getRowDimension('3')->setRowHeight(20);
    
        // Populate worksheet with data
        $row = 7; // Set baris pertama untuk isi tabel adalah baris ke 4
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    
        foreach ($data as $row_data) {
            $activeWorksheet->setCellValue('A' . $row, $no);
            $activeWorksheet->setCellValue('B' . $row, $row_data['n_lengkap']);
            $activeWorksheet->setCellValue('C' . $row, $row_data['status_kelengkapan']);
    
            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $activeWorksheet->getStyle('A' . $row)->applyFromArray($style_row);
            $activeWorksheet->getStyle('B' . $row)->applyFromArray($style_row);
            $activeWorksheet->getStyle('C' . $row)->applyFromArray($style_row);
            $activeWorksheet->getStyle('A' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom No
            $activeWorksheet->getStyle('B' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT); // Set text left untuk kolom Nama Lengkap
            $activeWorksheet->getRowDimension($row)->setRowHeight(20); // Set height tiap row
    
            $no++; // Tambah 1 setiap kali looping
            $row++; // Tambah 1 setiap kali looping
        }
    
        // Set width kolom
        $activeWorksheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $activeWorksheet->getColumnDimension('B')->setWidth(30); // Set width kolom B
        $activeWorksheet->getColumnDimension('C')->setWidth(30); // Set width kolom C
    
        // Set orientasi kertas jadi LANDSCAPE
        $activeWorksheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Laporan_kelengkapanBerkas.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
    
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save('php://output');
        die();
    }
    
}
