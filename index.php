<?php
  require_once __DIR__ . "/View/viewAdd.php";
  require_once __DIR__ . "/View/viewDelete.php";
  require_once __DIR__ . "/controllers/showSego.php";
   echo "Selamat datang di pesan sego \n";
    $opsi = ["Tambah pesanan","Bayar","Lihat isi pesanan","Keluar"];
    while(true) {
        foreach($opsi as $key=>&$value) {
            $key++;
            echo  "$key. $value \n";
        }
        echo "Masukkan layanan yang ingin kamu gunakan : ";
        $layanan = trim(fgets(STDIN));
        if(intval($layanan)== 1) {
            viewAdd();
        }else if(intval($layanan)== 2) {
            viewDelete();
        }else if(intval($layanan)== 3) {
            show();
        }elseif(intval($layanan)== 4) {
            echo "Anda keluar dari program";
            return;
        }else{
            echo "Perintah tidak dikenal";
        }
    }
?>