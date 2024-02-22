<?php
require_once __DIR__ . "/../controllers/deleteSego.php";
require_once __DIR__ . "/../controllers/fetchSego.php";
    function viewDelete(){
        echo "Apakah kamu ingin membayar (ya/tidak)?";
        $pilihanOpsi = trim(fgets(STDIN));
        if(strtolower($pilihanOpsi)=="ya"){
            $saldo=0;
            $status = fetchSego();
            if(sizeof($status)== 0){
                echo "Kamu saat ini tidak mememsan makanan apapun \n";
                return;
            }
            foreach($status as $key => $value){
                deleteSego();
                $saldo+=10.000;
            }
            echo "Anda perlu membayar sebanyak Rp.$saldo \n";
        }else if(strtolower($pilihanOpsi)=="tidak"){
            echo "Baiklah, tapi kami tetap menunggu bayaran anda :) \n";
        }else{
            echo "Perintah tidak dikenal \n";
        }
    }
?>