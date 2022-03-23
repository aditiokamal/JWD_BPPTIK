<?php
    //Muhamamd Aditio Kamal Ibrhaim
    //aditiokamal@gmail.com

    //function mengitung luas Segitiga
    function luasSegitiga($tinggi, $alas)
    {
        $luas = 0.5 * $tinggi * $alas;
        return $luas;
    }

    //function mengitung luas Persegi
    function luasPersegi($sisi)
    {
        $luas = pow($sisi,2);
        return $luas;
    }

    $tinggi=5;
    $alas=10;
    $sisi=8;
    echo "Luas Segitiga adalah : ".luasSegitiga($tinggi,$alas)."<br>";
    echo "Luas Persegi adalah : ".luasPersegi($sisi)."<br>";
?>