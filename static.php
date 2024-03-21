<?php 

// Untuk apa Static Keyword ?
// 1. Property dan Method yang terikat dengan class, bukan dengan object.
// 2. Nilai Static akan selalu tetap (tidak direset) meskipun object di-instansiasi berulang kali.
// 3. Membuat kode menjadi procedural.
// 4. Biasanya digunakan untuk membuat fungsi bantuan/helper.
// 5. Atau digunakan di class-class utility pada Framework (Codeigniter/Laravel)

class ContohStatic {
  public static $angka = 1;

  public function halo() {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo ContohStatic::halo();
// echo ContohStatic::halo();
// echo "<hr>";

$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new ContohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();





?>