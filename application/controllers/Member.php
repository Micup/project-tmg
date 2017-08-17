<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_member');
    }
 
 
    /**
     * Cotoh penggunaan bootstrap pada codeigniter::index()
     */
    public function index()
    {
        $this->load->view('header2');
        $this->load->view('member');
    }

    public function member_detail()
    {
        $id=$this->session->userdata("id");
        $data['data_member']=$this->M_member->tampil_data($id);
        $this->load->view('header2');
        $this->load->view('member_detail',$data);
    }

     public function data_member()
    {
        $id=$this->session->userdata("id");
        $data['data_member']=$this->M_member->tampil_data($id);
        $this->load->view('header2');
        $this->load->view('detail_member',$data);
    }

    function update_member(){
        $id = $this->input->post('id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $jenis_identitas = $this->input->post('jenis_identitas');
        $no_identitas = $this->input->post('no_identitas');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $kelurahan = $this->input->post('kelurahan');
        $kecamatan = $this->input->post('kecamatan');
        $pekerjaan = $this->input->post('pekerjaan');
        $institusi = $this->input->post('institusi');
        $alamat_institusi = $this->input->post('institusi');
        $pekerjaan_lain = $this->input->post('pekerjaan_lain');
        $nomor_handphone = $this->input->post('nomor_handphone');
        $username = $this->input->post('username');
        $data = array(
            'nama' => $nama_lengkap,
            'jenis_identitas' => $jenis_identitas,
            'no_identitas' => $no_identitas,
            'tgl_lahir'=>$tgl_lahir,
            'jenis_kelamin'=>$jenis_kelamin,
            'agama'=>$agama,
            'alamat'=>$alamat,
            'kelurahan'=>$kelurahan,
            'kecamatan'=>$kecamatan,
            'pekerjaan'=>$pekerjaan,
            'institusi'=>$institusi,
            'alamat_institusi'=>$alamat_institusi,
            'pekerjaan_lain'=>$pekerjaan_lain,
            'nomor_handphone'=>$nomor_handphone,
            'username' => $username
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->M_member->update_member($where,$data,'fab_member');
        redirect('member');
    }

    function edit_member(){
        $id=$this->session->userdata("id");
        $data['edit_member']=$this->M_member->edit_member($id);
        $this->load->view('header2');
        $this->load->view('ubah_member',$data);
    } 
    
}
 
# nama file member.php
# folder apllication/controller/