<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  /**
  * 
  */
  class M_admin extends CI_Model
  {
  	
  	function __construct()
  	{
  		parent::__construct();
  	}

//models untuk data admin
    function tampil_data_admin(){
      $query = $this->db->query('select * from fab_member where level="admin"');
      if($query->num_rows()>0){
        $data = $query->result();
      }
      else{
        $data = 0;
      }
      return $data;
    
   }
   public function data_admin()
    {
        $data['data_admin']=$this->M_admin->tampil_data_admin();
        $this->load->view('admin/data_admin',$data);
    }

  function edit_data_admin($where,$table){    
    return $this->db->get_where($table,$where);
  }

  function update_data_admin($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

   /*
    function edit_member($id){
      $query = $this->db->query('select * from fab_member where id="'.$id.'"');
    if($query->num_rows()>0){
      $data = $query->result();
    }
    else{
      $data = 0;
    }
    return $data;
    //return $this->db->get('fab_member');
  }

    function update_admin($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
*/


 //models untuk data member
    function tampil_data_member(){
      $query = $this->db->query('select * from fab_member where level="member"');
  		if($query->num_rows()>0){
  			$data = $query->result();
  		}
  		else{
  			$data = 0;
  		}
  		return $data;
		
	 }
	 public function data_member()
    {
        $data['data_member']=$this->M_admin->tampil_data();
        $this->load->view('admin/data_member',$data);
    }


    function member_detail($table,$data){
      //$data = $this->db->query('select * from fab_member where id="'.$id.'"');
      $this->db->delete($table,$data);
      
      
    }


    function deleteMember($table,$data)
    {
    $this->db->delete($table,$data);
    }


//models untuk data krenova ADMINISTRASI
    function tampil_data_k(){
    	$query = $this->db->query('select * from fab_ijin where status="1" ');
		if($query->num_rows()>0){
			$data = $query->result();
		}
		else{
			$data = 0;
		}
		return $data;		
	}
	 public function data_krenova()
    {
        $data['data_krenova']=$this->M_admin->tampil_data_k();
        //$this->load->view('header2');
        $this->load->view('admin/data_krenova',$data);
    }

    function update_administrasi($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_administrasi($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

 






//models untuk data krenova SUBSTANSI
  function tampil_data_substansi(){
      $query = $this->db->query('select * from fab_ijin where status="2" ');
    if($query->num_rows()>0){
      $data = $query->result();
    }
    else{
      $data = 0;
    }
    return $data;    
  }

  public function data_subtansi()
    {
        $data['data_krenova']=$this->M_admin->tampil_data_substansi();
        //$this->load->view('header2');
        $this->load->view('admin/data_subtansi',$data);
    }
    function update_substansi($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_substansi($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }


//models untuk data krenova PEMAPARAN
  function tampil_data_pemaparan(){
      $query = $this->db->query('select * from fab_ijin where status="3" ');
    if($query->num_rows()>0){
      $data = $query->result();
    }
    else{
      $data = 0;
    }
    return $data;    
  }

  public function data_pemaparan()
    {
        $data['data_krenova']=$this->M_admin->tampil_data_pemaparan();
        //$this->load->view('header2');
        $this->load->view('admin/data_pemaparan',$data);
    }
    function update_pemaparan($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_pemaparan($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

//models untuk data krenova SURVEY
  function tampil_data_survey(){
      $query = $this->db->query('select * from fab_ijin where status="4" ');
    if($query->num_rows()>0){
      $data = $query->result();
    }
    else{
      $data = 0;
    }
    return $data;    
  }

  public function data_survey()
    {
        $data['data_krenova']=$this->M_admin->tampil_data_survey();
        //$this->load->view('header2');
        $this->load->view('admin/data_survey',$data);
    }
    function update_survey($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_survey($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

//models untuk data krenova Pemenang
  function tampil_data_pemenang(){
      $query = $this->db->query('select * from fab_ijin where status="5" ');
    if($query->num_rows()>0){
      $data = $query->result();
    }
    else{
      $data = 0;
    }
    return $data;    
  }

  public function data_pemenang()
    {
        $data['data_krenova']=$this->M_admin->tampil_data_pemenang();
        //$this->load->view('header2');
        $this->load->view('admin/data_pemenang',$data);
    }



  }