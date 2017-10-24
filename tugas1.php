<?php
require_once 'tugas.php';
$identitas1 = new identitas('dina_sri_hartini','Bandung','XI RPL 2','pelajar');
$identitas2 = new identitas('esti wulandari','lampung ','XI RPL 2','pelajar');
$identitas3 = new identitas('tania','Bandung','X rpl 3','pelajar');
$identitas4 = new identitas('dinsri','Bandung','fakultas teknik','Mahasiswi');
$identitas5 = new identitas('halimah','Bandung','XI RPL 2','pelajar');
echo "Namanya.. :".$identitas1->get_nama().'<br>';
echo "Tempat Lahir..: ".$identitas1->get_tempatlahir().'<br>';
echo "Kelas.. :".$identitas1->get_kelas().'<br>';
echo "Status.. :".$identitas1->get_status().'<br>';
echo "======================<br>";

echo "Namanya.. : ".$identitas2->get_nama().'<br>';
echo "Tempat Lahir.. : ".$identitas2->get_tempatlahir().'<br>';
echo "Kelas.. :".$identitas2->get_kelas().'<br>';
echo "Status.. :".$identitas2->get_status().'<br>';
echo "======================<br>";

echo "Namanya.. :".$identitas3->get_nama().'<br>';
echo "Tempat Lahir.. :".$identitas3->get_tempatlahir().'<br>';
echo "Kelas..: ".$identitas3->get_kelas().'<br>';
echo "Status.. ".$identitas3->get_status().'<br>';
echo "======================<br>";

echo "Namanya.. :".$identitas4->get_nama().'<br>';
echo "Tempat Lahir.. :".$identitas4->get_tempatlahir().'<br>';
echo "Kelas.. ".$identitas4->get_kelas().'<br>';
echo "Status.. ".$identitas4->get_status().'<br>';
echo "======================<br>";

echo "Namanya.. ".$identitas5->get_nama().'<br>';
echo "Tempat Lahir.. ".$identitas5->get_tempatlahir().'<br>';
echo "Kelas.. ".$identitas5->get_kelas().'<br>';
echo "Status.. ".$identitas5->get_status().'<br>';
echo "======================<br>";

?>