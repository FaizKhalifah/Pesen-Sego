<?php
    require_once __DIR__ . "/../Model/modelsego.php";

    function addSego($namaMenu){
        global $arraySego;
        array_push($arraySego,$namaMenu);
    }
?>