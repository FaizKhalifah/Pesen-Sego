<?php
    require_once __DIR__ . "/../Model/modelsego.php";

    function add($namaMenu){
        global $arraySego;
        array_push($arraySego,$namaMenu);
    }
?>