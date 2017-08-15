<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $this->load->view('header');
        $this->load->view('news');
        $this->load->view('footer');
    }
}
 
# nama file news.php
# folder apllication/controller/