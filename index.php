<?php
    echo "Selamat datang di pesan sego \n";
    $opsi = ["Tambah pesanan","Bayar","Lihat isi pesanan","Keluar"];
    while(true) {
        foreach($opsi as $key=>&$value) {
            $key++;
            echo  "$key. $value \n";
        }
        echo "Masukkan layanan yang ingin kamu gunakan : ";
        $layanan = trim(fgets(STDIN));
    }
?>