<?php
require_once 'pewarisan.php';

require_once 'hewan.php';

$robot1 = new robot('tituit',120);

$robot1->set_berat(10);
echo 'beratnya adalah '.$robot1->get_berat().'<br>';
$robothewan = new robot_hewan('balalala',190);
echo $robothewan->get_kekuatan() .'<br>';
?>