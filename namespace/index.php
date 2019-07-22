<?php

require_once "App/init.php";

    // $produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
    // $produk3 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

    // $cetakProduk = new CetakInfoProduk();
    // $cetakProduk->tambahProduk($produk2);
    // $cetakProduk->tambahProduk($produk3);

    // echo $cetakProduk->cetak();

    use App\Produk\User as ProdukUser;
    use App\Service\User as ServiceUser;

    new ProdukUser();
    echo "<br>";
    new ServiceUser();