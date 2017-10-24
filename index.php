<?php
//class
class robot{
//property
	public $suara = 'ngik ngok';
	public $berat = 46;
}

$robot1 = new robot;
echo 'suara robotnya :.....'.$robot1->suara .'<br>'; 
echo 'berat robotnya :......'.$robot1->berat.'<br>';

class mawar{
public $warna ='merah';
public $jumlah = 10;
}
$mawar1 = new mawar;
echo 'warna mawar :......'.$mawar1->warna.'<br>';
echo 'jumlah mawar :.....'.$mawar1->jumlah.'<br>';

class ayam{
public $kaki =2;
public $suara = 'kukuruyuk';
}
$ayam11 = new ayam;
echo 'kaki ayam berjumlah :......'.$ayam11->kaki.'<br>';
echo 'suara ayam berbunyi  :.....'.$ayam11->suara.'<br>';
?>