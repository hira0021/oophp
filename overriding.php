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

         public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
              
            return $str;
         }
     } 

     class Komik extends Produk{
			public $jmlHalaman;

			public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
				parent::__construct($judul, $penulis, $penerbit, $harga);

				$this->jmlHalaman = $jmlHalaman;
			}
		
         public function getInfoProduk(){
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
         }
     }
     class Game extends Produk{
			public $waktuMain;

			public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
				parent::__construct($judul, $penulis, $penerbit, $harga);

				$this->waktuMain = $waktuMain;
			}

         public function getInfoProduk(){
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
            return $str;
         }
     }


     $produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
     $produk3 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

     echo $produk2->getInfoProduk();
     echo "<br>";
     echo $produk3->getInfoProduk();
    
?>