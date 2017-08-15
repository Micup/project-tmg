<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class control_grafik extends CI_Controller {
 public function index() {  
   
   foreach($this->M_grafik->pendaftar_per_kategori()->result_array() as $row)
   {
    $data['grafik'][]=(float)$row['Agrobisnis & Pangan'];
    $data['grafik'][]=(float)$row['Energi'];
    $data['grafik'][]=(float)$row['Kehutanan & Lingkungan Hidup'];
    $data['grafik'][]=(float)$row['Kelautan & Perikanan'];
    $data['grafik'][]=(float)$row['Kesehatan, Obat & Kosmetika'];
    $data['grafik'][]=(float)$row['Pendidikan'];
    $data['grafik'][]=(float)$row['Rekayasa & Manufaktur'];
    $data['grafik'][]=(float)$row['Kerajinan & Industri Rumah Tangga'];
    $data['grafik'][]=(float)$row['Sosial'];
   }
    
   $this->load->view('view_grafik', $data); 
 }