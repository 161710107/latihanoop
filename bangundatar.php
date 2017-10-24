
<?php
echo 'LUAS DAN KELILING BANGUN DATAR <br>';
echo '____________________________________________><br>';

class persegipanjang{

	public $p , $l ;


	public function set_nilai($panjang,$lebar){
		$this->p =$panjang;
	    $this->l =$lebar;
	}
	public function get_nilai(){
		return $this->p * $this->l;
        }
        public function get_nilai2(){
		return 2 *$this->p + 2 *$this->l;
        }
    }
    $persegipanjang1 = new persegipanjang;
        $persegipanjang1-> set_nilai(5,9);
        echo '1.Hasilnya luas persegipanjang  :'.$persegipanjang1->get_nilai().'<br>';
        echo 'Hasilnya keliling persegipanjang  :'.$persegipanjang1->get_nilai2().'<br>';
        echo '===================================<br>';

        class persegi{

	public $s,$s2 ;


	public function set_bangun($sisi,$sisi2){
		$this->s=$sisi;
		$this->s2=$sisi2;

	}
	public function get_bangun(){
		return $this->s * $this->s2;
        }
        public function get_bangun2(){
		return 4*$this->s * $this->s2;
        }
    }
        $persegi1 = new persegi;
        $persegi1 -> set_bangun(5,5);
        echo '2.Hasilnya luas persegi  :'.$persegi1->get_bangun().'<br>';
        echo 'Hasilnya keliling persegi  :'.$persegi1->get_bangun2().'<br>';
        echo '===================================<br>';

        class segitiga{

	public $a,$t,$s;


	public function set_bangun($alas,$tinggi,$sisi){
		$this->a =$alas;
	    $this->t =$tinggi;
	    $this->s =$sisi;

	}
	public function get_bangun(){
		return 1/2 *$this->a * $this->t ;
        }
        public function get_bangun3(){
		return 3 *$this->s;
        }
    }
        $segitiga1= new segitiga;
        $segitiga1 -> set_bangun(2,5,4);
        echo '3.Hasilnya luas segitiga  :'.$segitiga1->get_bangun().'<br>';
          echo 'Hasilnya keliling segitiga  :'.$segitiga1->get_bangun3().'<br>';

?>