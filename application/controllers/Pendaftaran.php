 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Pendaftaran extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
        $this->session->userdata("id");
        $this->load->view('header2');
        $this->load->view('pendaftaran');
     }

     //function upload pendaftaran
     function multiple_upload(){
         $config['upload_path']   = './././uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|pdf'; 
         //$config['max_size']      = 100; 
         //$config['max_width']     = 1024; 
         //$config['max_height']    = 768;  
         $this->load->library('upload', $config);
         // script upload file pertama
         $this->upload->do_upload('scan_surat_permohonan_instansi');
         $file1 = $this->upload->data();
         $nama1 = $file1['file_name'];

         // script uplaod file kedua
         $this->upload->do_upload('scan_identitas');
         $file2 = $this->upload->data();
         $nama2 = $file2['file_name'];
        
         // script uplaod file ketiga
         $this->upload->do_upload('foto_berwarna');
         $file3 = $this->upload->data();
         $nama3 = $file3['file_name'];
         
         // script uplaod file keempat
         $this->upload->do_upload('proposal');
         $file4 = $this->upload->data();
         $nama4 = $file4['file_name'];

         
         // script uplaod file kelima
         $this->upload->do_upload('hasil');
         $file5 = $this->upload->data();
         $nama5 = $file5['file_name'];
         
         // script uplaod file keenam
         $this->upload->do_upload('rekomendasi');
         $file6 = $this->upload->data();
         $nama6 = $file6['file_name'];
         
         //proses ambil data form
            $data['nomor_surat']  =    $this->input->post('no_surat');
            $data['userid']  =    $this->session->userdata("id");
            $data['judul_penelitian']      =    $this->input->post('judul');
            $data['bidang_penelitian']     =    $this->input->post('kategori');
            $data['bidang_penelitian_lain']  =    $this->input->post('kategori_lain');
            $data['lokasi_penelitian']      =    $this->input->post('lokasi_penelitian');
            $data['tanggal_mulai_penelitian']      =    $this->input->post('tanggal_mulai_penelitian');
            $data['tanggal_selesai_penelitian']      =    $this->input->post('tanggal_selesai_penelitian');
            $data['nomor_surat_instansi']      =    $this->input->post('no_surat_instansi');
            $data['penanggung_jawab']      =    $this->input->post('penanggung_jawab');
            $data['pengikut']      =    $this->input->post('pengikut');
            $data['surat_permohonan_instansi']      =    $nama1;
            $data['scan_copy_identitas']      =    $nama2;
            $data['pas_foto_berwarna']      =    $nama3;
            $data['softcopy_proposal_penelitian']      =    $nama4;
            $data['surat_penyerahan_hasil']      =    $nama5;
            $data['jenis_ijin']      =    "Penelitian";
            $data['data_pemohon']      =    $this->input->post('data_pemohon');
            $data['scan_rekomendasi']      =    $nama6;
            $this->m_account->penelitian($data);
            $this->load->view('header2');
            $this->load->view('pendaftaran');
         //proses simpan ke database
    }
 }