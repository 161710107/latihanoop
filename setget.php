<?php
//class
class robot{
//property
	public $suara ;
	public $berat ;

//metode set dan get
	public function set_suara($suara){
		$this->suara =$suara;

	}
	public function get_suara(){
		return $this->suara;


	}
	public function set_berat($berat){
		$this->berat =$berat;

	}
	public function get_berat(){
		return $this->berat;

	}
}

$robot1 = new robot;
$robot1 -> set_suara('tituit');
echo 'bunyinya adalah '.$robot1->get_suara().'<br>';
$robot1 -> set_berat(67);
echo 'beratnya adalah '.$robot1->get_berat();
?>