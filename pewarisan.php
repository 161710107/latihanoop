<?php
//class
class robot{
//property
	public $suara ;
	public $berat ;
//konstruktor
	public function __construct($suara, $berat){
		$this->suara =$suara;
		$this->berat =$berat;
 
 
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

}
//pewarisan jadi mewariskan kelas yg sebelumya/inheritance
//jadi kita mau struktur dasar metode dan juga properti dari kelas parent (induk) jadi kita bisa mengambil , kita disini sebagai class child (anak) tapi kita juga tetap bisa membuat fungsi baru.
class robot_hewan extends robot{
    public function get_kekuatan (){
    	echo 'saya hewan laut bisa berenang....';
    	
    }
}
?>