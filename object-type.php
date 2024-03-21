

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
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk {
  public function cetak( Produk $produk ){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("One Piece", "Oda", "Shonen Jump", 32000 );

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Production", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

echo "Info Lengkap Produk : ";
echo "<br>";
$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);
echo "<br>";
echo $infoProduk->cetak($produk2);


?>