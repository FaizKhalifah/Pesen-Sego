<?php
    require_once __DIR__ . "/../Model/modelsego.php";
    function show(){
        global $arraySego;
        $i = 0;
        foreach($arraySego as $value){
            echo "$i. $value \n";
            $i++;
        }
    }
?>