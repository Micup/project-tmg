<?php
class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('user_model');
    }
    
    function index()
    {
        $this->register();
    }

    function register()
    {
        //set validation rules
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email|is_unique[fab_member.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|md5|matches[password]');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('user_registration_view');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->user_model->insertUser($data))
            {
                // send email
                if ($this->user_model->sendEmail($this->input->post('email')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Anda Berhasil Terdaftar! Harap konfirmasikan Email yang dikirim ke ID Email Anda !!!</div>');
                    redirect('user/register');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Coba sesaat lagi..</div>');
                    redirect('user/register');
                }
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Coba sesaat lagi..</div>');
                redirect('user/register');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Alamat Email anda berhasil diverifikasi, Silahkan login untuk mengakses akun anda.</div>');
            redirect('user/register');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Maaf! Ada kesalahan saat memverifikasi Alamat Email Anda!</div>');
            redirect('user/register');
        }
    }
}
?>