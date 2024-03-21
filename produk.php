

<?php 

class Produk {
    public $judul = 'judul',
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;
    
    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = 'One Piece';
// $produk1->penulis = 'Oda';
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = 'Resident Evil';
// $produk2->tahunRilis = 2024;
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Oda";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 32000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Production";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();


?>