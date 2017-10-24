<?php
//class
class robot{
//property
	public $suara = 'ngik ngok';
	public $berat = 46;

//metode
   public function bersuara (){
	
	echo 'suara robotnya :.....'.$this->suara; 
    
}
public function beratnya(){
	return $this->berat;
}
	
}

$robot1 = new robot;
$robot1->bersuara();
echo $robot1->beratnya();
?>