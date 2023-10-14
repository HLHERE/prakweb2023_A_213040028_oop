<?php 

// define("NAMA","Trafalgar Law");
// echo NAMA;

// echo "<br>"; 

// const UMUR = 32;
// echo UMUR;

// class Coba {
//     const NAMA = "trafalgar law";
// }

// echo Coba::NAMA;


// echo __LINE__;
// echo __FILE__;

// function coba(){
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;

}
$obj = new Coba;
echo $obj->kelas;












?>