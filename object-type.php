<?php

    class Produk{
        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }
    }

    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
            return $str;
        }
    }

    $produk2 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
    $produk3 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk2);

    
?> 