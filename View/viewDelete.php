<?php
require_once __DIR__ . "/../controllers/deleteSego.php";
require_once __DIR__ . "/../controllers/fetchSego.php";
    function delete(){
        echo "Apakah kamu ingin membayar (ya/tidak)?";
        $pilihanOpsi = trim(fgets(STDIN));
        if(strtolower($pilihanOpsi)=="ya"){
            $saldo=0;
            $status = fetchSego();
            if($status==[]){
                echo "Kamu saat ini tidak mememsan makanan apapun";
                return;
            }
            foreach($status as $key => $value){
                deleteSego();
                $saldo+=10.000;
            }
            echo "Anda perlu membayar sebanyak Rp.$saldo";
        }else{
            echo "Baiklah, tapi kami tetap menunggu bayaran anda :)";
        }
    }
?>