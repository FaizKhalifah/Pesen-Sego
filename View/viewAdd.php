<?php
    require_once __DIR__ . "/../controllers/addSego.php";
    function viewAdd(){
        $listMenu = ["Sego babat","Sego endog","Sego Ayam","Sego ikan","batal"];
        foreach ($listMenu as $key => $value) {
            $key++;
            echo "$key. $value \n";
        }
        echo"Pilih menu yang kamu mau dalam angka : ";
        $pilihanMenu = trim(fgets(STDIN));
        if(intval($pilihanMenu)==1){
            echo "Menambah sego babat ke dalam cart \n";
            addSego($listMenu[0]);
        }else if(intval($pilihanMenu)== 2){
            echo "Menambah sego endog ke dalam cart \n";
            addSego($listMenu[1]);
        }else if(intval($pilihanMenu)== 3){
            echo "Menambah sego ayam ke dalam cart \n";
            addSego($listMenu[2]);
        }else if(intval($pilihanMenu)== 4){
            echo "Menambah sego ikan ke dalam cart \n";
            addSego($listMenu[3]);
        }else if(intval($pilihanMenu)== 5){
            echo "Keluar dari program \n";
            return;
        }else{
            echo "Perintah tidak dikenal \n";
        }
    }
   

?>