<?php
require_once 'konstruktor.php';

$robot1 = new robot('tituit',120, 'membantu manusia');
$robot2 = new robot('tototo',89,'membantu hewan');
$robot1->set_berat(200);
$robot2->set_suara('wiuwiuwiu');
$robot2->set_kegunaan('membantu semut');
echo 'beratnya adalah '.$robot1->get_berat().'<br>';
echo 'bunyinya adalah '.$robot2->get_suara().'<br>';
echo 'kegunaanya  adalah '.$robot2->get_kegunaan().'<br>';

?>