<?php

    class Produk{
        public $judul = "Judul",
               $penulis = "Penulis",
               $penerbit = "Penerbit",
               $harga = 0;

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    $produk2 = new Produk();
    $produk2->judul = "Naruto";
    $produk2->penulis = "Masashi Kishimoto";
    $produk2->penerbit = "Shounen Jump";
    $produk2->harga = 30000;

    $produk3 = new Produk();
    $produk3->judul = "Uncharted";
    $produk3->penulis = "Neil Druckmann";
    $produk3->penerbit = "Sony Computer";
    $produk3->harga = 250000;

    echo "Komik : " . $produk2->getLabel();
    echo "<br>Komik : " . $produk3->getLabel();

?>