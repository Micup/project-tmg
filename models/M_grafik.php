<?php    
class Model_grafik extends CI_Model{
   function pendaftar_per_kategori()
 {
  
  $sql= $this->db->query("
  
  select
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Agrobisnis & Pangan')AND (bidang_penelitian_lain='Agrobisnis & Pangan'))),0) AS `Agrobisnis & Pangan`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Energi')AND (bidang_penelitian_lain='Energi'))),0) AS `Energi`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Kehutanan & Lingkungan Hidup')AND (bidang_penelitian_lain='Kehutanan & Lingkungan Hidup'))),0) AS `Kehutanan & Lingkungan Hidup`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Kelautan & Perikanan')AND (bidang_penelitian_lain='Kelautan & Perikanan'))),0) AS `Kelautan & Perikanan`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Kesehatan, Obat & Kosmetika')AND (bidang_penelitian_lain='Kesehatan, Obat & Kosmetika'))),0) AS `Kesehatan, Obat & Kosmetika`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Pendidikan')AND (bidang_penelitian_lain='Pendidikan'))),0) AS `Pendidikan`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Rekayasa & Manufaktur')AND (bidang_penelitian_lain='Rekayasa & Manufaktur'))),0) AS `Rekayasa & Manufaktur`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Kerajinan & Industri Rumah Tangga')AND (bidang_penelitian_lain='Kerajinan & Industri Rumah Tangga'))),0) AS `Kerajinan & Industri Rumah Tangga`,
  ifnull((SELECT count(id) FROM (fab_ijin)WHERE((bidang_penelitian='Sosial')AND (bidang_penelitian_lain='Sosial'))),0) AS `Sosial`,
 from fab_ijin GROUP BY bidang_penelitian 
  
  ");
  
  return $sql;
  
 } 
}