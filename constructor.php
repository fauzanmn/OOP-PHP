

<?php

class Produk
{
  public $judul,
         $penulis,
         $penerbit,
         $harga;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->judul, $this->penulis, $this->penerbit";
  }
}


$produk1 = new Produk("One Piece", "Oda", "Shonen Jump", 32000 );

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Production", 250000);

$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);


?>