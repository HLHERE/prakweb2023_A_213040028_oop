<?php
require_once 'app/init.php';

$produk1 = new Komik("One Piece", "Eiichiro oda", "Toei Japan", 800000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000 ,40,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


echo "<hr>";

new Coba();
var_dump($produk1);;
?>