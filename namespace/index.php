<?php

require_once 'App/init.php';

// $produk1 = new Komik("One Piece", "Oda", "Shonen Jump", 32000, 100);

// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();
// echo "<hr>";

// ==============================
// Menggunakan alias / nama lain
// ==============================

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();