<?php

include "tes.php" ;

$tes = new Database("localhost", "root", "", "barang");

foreach($tes->selectDb("nb") as $data){
    echo $data['nama_barang']."<br>";
}