<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        
        $this->load->view('admin/a_header');
        $this->load->view('admin/admin');
        $this->load->view('admin/a_footer');
    }

//untuk mengolah data admin

    function tampil_admin(){         
        
        $data['data_admin']=$this->M_admin->tampil_data_admin(); 
        $this->load->view('admin/a_header');      
        $this->load->view('admin/data_admin',$data);
    }    

    public function data_admin()
    {
        
        $data['data_admin']=$this->M_admin->tampil_data_admin();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_admin',$data);
    }

    function edit($id){
      $where = array('id' => $id);
      $data['data_admin'] = $this->M_admin->edit_data_admin($where,'data_admin')->result();
      $this->load->view('admin/data_admin',$data);
    }
    function update_data_admin(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        //$pekerjaan = $this->input->post('pekerjaan');
        echo $id;
        echo $nama;
        echo $username;
        die();

        $data = array(
            'nama' => $nama,
            'username' => $username
        );

        $where = array(
            'id' => $id
        );

        $this->M_admin->update_data_admin($where,$data,'fab_member');
        // $this->load->view('admin/data_admin',$data);
        redirect('admin/data_admin');
    }

/*
    function edit_member(){
        //$id=$this->session->userdata("id");
        $data['edit_member']=$this->M_admin->edit_admin($id);
        $this->load->view('header2');
        $this->load->view('ubah_member',$data);
    } 

       function update_admin(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = md5($this->input->post('kelurahan'));
        $level = $this->input->post('level');
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level'=>$level
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->M_admin->update_admin($where,$data,'fab_member');
        redirect('admin/data_admin');
    }
*/
//controller untuk mengolah data member
    function tampil_member(){         
        /*
         $data=array(        
            'id'=>$this->M_admin->getIdMember(),
        );
         */
        //$id=$this->session->userdata("id");
        $data['data_member']=$this->M_admin->tampil_data_member(); 
        $this->load->view('admin/a_header');      
        $this->load->view('admin/data_member',$data);
    }    

    public function data_member()
    {
        
        $data['data_member']=$this->M_admin->tampil_data_member();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_member',$data);
    }
    public function member_detail()
    {
        $this->M_admin->detailMember('fab_member',$id);  
        //$data['data_member']=$this->M_admin->member_detail($id);
        
    }

    function hapus_member(){
        $id['id'] = $this->uri->segment(3);
        $this->M_admin->deleteMember('fab_member',$id);        
        redirect("admin");
    }







//contoller untuk DATA ADMINISTRASI 
    function tampil_krenova(){         
        $data['data_krenova']=$this->M_admin->tampil_data_k($data);       
        $this->load->view('admin/data_krenova',$data);
    }    
    public function data_krenova()
    {
        
        $data['data_krenova']=$this->M_admin->tampil_data_k();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_krenova',$data);
    }
    function update_administrasi(){
        $id = $this->input->post('id');
        $data = array(
            'status' => $this->input->post('2')
        );
        $this->model_admin->ubah_administrasi($data,$id);
    }


//contoller untuk DATA SUBSTANSI 
    function tampil_substansi(){        
        $data['data_krenova']=$this->M_admin->tampil_data_substansi($data);       
        $this->load->view('admin/data_substansi',$data);
    }    
    public function data_substansi()
    {
        
        $data['data_krenova']=$this->M_admin->tampil_data_substansi();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_substansi',$data);
    }

//contoller untuk DATA PEMAPARAN 
    function tampil_pemaparan(){
        
        $data['data_krenova']=$this->M_admin->tampil_data_pemaparan($data);       
        $this->load->view('admin/data_pemaparan',$data);
    }    
    public function data_pemaparan()
    {
        
        $data['data_krenova']=$this->M_admin->tampil_data_pemaparan();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_pemaparan',$data);
    }

//contoller untuk DATA SURVEY 
    function tampil_survey(){
        
        $data['data_krenova']=$this->M_admin->tampil_data_survey($data);       
        $this->load->view('admin/data_survey',$data);
    }    
    public function data_survey()
    {
        
        $data['data_krenova']=$this->M_admin->tampil_data_survey();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_survey',$data);
    }

//contoller untuk DATA SURVEY 
    function tampil_pemenang(){
        
        $data['data_krenova']=$this->M_admin->tampil_data_pemenang($data);       
        $this->load->view('admin/data_pemenang',$data);
    }    
    public function data_pemenang()
    {
        
        $data['data_krenova']=$this->M_admin->tampil_data_pemenang();
        $this->load->view('admin/a_header');
        $this->load->view('admin/data_pemenang',$data);
    }

}
 
