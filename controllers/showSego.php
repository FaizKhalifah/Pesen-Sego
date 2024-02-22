<?php
    require_once __DIR__ . "/../Model/modelsego.php";
    function show(){
        global $arraySego;
        if(sizeof($arraySego) == 0){
            echo "Belum ada makanan di cart \n";
            return;
        }
        foreach($arraySego as $key=>$value){
            $key++;
            echo "$key. $value \n";
        }
        echo "========================\n";
    }
?>