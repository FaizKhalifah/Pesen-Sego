<?php
    require_once __DIR__ . "/../Model/modelsego.php";
    function deleteSego(){
        global $arraySego;
        array_pop($arraySego);
    }


?>