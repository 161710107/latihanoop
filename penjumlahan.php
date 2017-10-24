<?php

class penjumlahan{

	public $bil1 , $bil2 ;


	public function set_nilai($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
	    $this->bil2 =$bilangan2;
	}
	public function get_nilai(){
		return $this->bil1 + $this->bil2;
        }
        public function set_nilai1($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
	    $this->bil2 =$bilangan2;
	}
	public function get_nilai1(){
		return $this->bil1 - $this->bil2;
        }
        public function set_nilai2($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
	    $this->bil2 =$bilangan2;
	}
	public function get_nilai2(){
		return $this->bil1 * $this->bil2;
        }
        public function set_nilai3($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
	    $this->bil2 =$bilangan2;
	}
	public function get_nilai3(){
		return $this->bil1 / $this->bil2;
        }
         public function set_nilai4($bilangan1,$bilangan2){
		$this->bil1 =$bilangan1;
	    $this->bil2 =$bilangan2;
	}
	public function get_nilai4(){
		return $this->bil1 % $this->bil2;
        }
}

$penjumlahan1 = new penjumlahan;
$penjumlahan1 -> set_nilai(21,3);
echo '===============================================<br>';
echo 'perhitungan bilangan 21 dengan bilangan 3<br>';
echo '================================================<br>';
echo 'Hasilnya penjumlahan  :'.$penjumlahan1->get_nilai().'<br>';
echo 'Hasilnya pengurangan  :'.$penjumlahan1->get_nilai1().'<br>';
echo 'Hasilnya perkalian    :'.$penjumlahan1->get_nilai2().'<br>';
echo 'Hasilnya pembagian    :'.$penjumlahan1->get_nilai3().'<br>';
echo 'Hasilnya sisa bagi    :'.$penjumlahan1->get_nilai4().'<br>';

?>