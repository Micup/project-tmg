 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation','session','email'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account','register'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('header');
             $this->load->view('register');
             $this->load->view('footer');
         }else{
            $data['nama']      =    $this->input->post('name');
            $data['username']  =    $this->input->post('username');
            $data['email']     =    $this->input->post('email');
            $data['password']  =    md5($this->input->post('password'));
            $data['email']      =    $this->input->post('email');
             $this->m_account->daftar($data);
             
             $pesan['message']  =    "Pendaftaran berhasil";
             
             $this->load->view('home',$pesan);
             $this->register();
         }
     }

//coba verifikasine
     function register() {
       //set validation rules
       
       $this->home->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
       $this->home->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
       $this->home->set_rules('password_conf', 'Confirm Password', 'trim|required');
       
       //validate form input
       if ($this->form_validation->run() == FALSE)
       {
           // fails
           $this->load->view('voter/register');
       }
       else
       {
           //insert the user registration details into database
           $data = array(
               'name' => $this->input->post('name'),
               'email' => $this->input->post('email'),
               'password' => $this->input->post('password'),
                 'username' => $this->input->post('username')
           );
           
           // insert form data into database
           if ($this->Register->insertUser($data))
           {
               // send email
               if ($this->Register->sendEmail($this->input->post('email')))
               {
                   // successfully sent mail
                   $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Registrasi Sukses, silakan cek e-mail Anda untuk melakukan konfirmasi dan aktivasi akun.</div>');
                   redirect('admin_voter');
               }
               else
               {
                   // error
                   $this->session->set_flashdata('msg','<div class="alert alert-info text-center">Registrasi Sukses, gagal mengirim e-mail verifikasi.</div>');
                   redirect('admin_voter');
               }
           }
           else
           {
               // error
               $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Coba sesaat lagi</div>');
               redirect('admin_voter');
           }
       }
   }
   
   function verify($hash=NULL) {
        $this->load->helper('url');
        $this->load->model('register');

       if ($this->register->verifyEmailID($hash))
       {
           
           redirect('voter/voter_aktivasiok');
       }
       else
       {
          
           redirect('voter/voter_aktivasifail');
       }
   }
 }