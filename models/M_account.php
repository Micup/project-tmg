 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('fab_member',$data);
       }

       function penelitian($data)
       {
            $this->db->insert('fab_ijin',$data);
       }
  }