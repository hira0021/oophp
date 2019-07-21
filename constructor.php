<?php

    class Produk{
        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    $produk2 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
    $produk3 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

    var_dump($produk2);

?>