<?php
require_once 'ovveriding.php';
//pewarisan jadi mewariskan kelas yg sebelumya/inheritance
class robot_hewan extends robot{
    public function get_kekuatan (){
    	echo 'saya hewan laut bisa berenang....';
    }

    //ovveriding adalah menggunakan nama fungsi sama tapi kita mau mengubah isi atau kontennya 
    public function get_suara(){
		return 'suaranya adalah'. $this->suara;


	}
}
?>