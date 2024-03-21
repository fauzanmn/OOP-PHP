<?php 

// ======================
// CONSTANTA :
// define("NAME", "Value") => tidak bisa digunakan di dalam class. harus scope global.
// const => bisa digunakan di dalam class.
// ======================

// define("NAMA", "Fauzan Imanudin");
// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;

// class Coba {
//   const NAMA = "Fauzan";
// }

// echo Coba::NAMA;

// =====================
// Magic Constant
// =====================

// echo __LINE__;

// function coba(){
//   return __FUNCTION__;
// }

// echo coba();

class Cobain{
  public $kelas = __CLASS__;
}

$obj = new Cobain;
echo $obj->kelas;



?>