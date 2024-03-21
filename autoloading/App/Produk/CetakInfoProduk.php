<?php 

class CetakInfoProduk
{
  public $daftarProduk = array();

  public function tambahProduk( Produk $produk ) {
    // Cara menambahkan elemen baru pada array :
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "DAFTAR PRODUK : <br>";

    // Lakukan pengulangan untuk mengambil semua elemen dari setiap produk
    foreach ( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }

    return $str;
  }
}