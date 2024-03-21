<?php 

// ===============
// Pemanggilan Class menggunakan require_once :
// ===============

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// ===============
// Pemanggilan Class menggunakan spl_autoload_register() :
// ===============

spl_autoload_register( function ($class){
    require_once __DIR__ . '/Produk/' . $class . '.php';
});