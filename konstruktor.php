<?php
//class
class robot{
//property
	public $suara ;
	public $berat ;
	public $kegunaan ;
//konstruktor
	public function __construct($suara, $berat,$kegunaan){
		$this->suara =$suara;
		$this->berat =$berat;
    	$this->kagunaan =$kegunaan;
 
	}
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
	public function set_kegunaan($kegunaan){
		$this->kegunaan =$kegunaan;

	}
	
	public function get_kegunaan(){
		return $this->kegunaan;

}
}
?>