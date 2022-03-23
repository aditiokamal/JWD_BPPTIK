<?php
    //Muhammad Aditio Kamal Ibrahim
    //aditiokamal@gmail.com
    
    
    //function penjumlahan
    function penjumlahan($bil1, $bil2) {
        $tambah = $bil1 + $bil2;
        return $tambah;
    }
    
    //function pengurangan
    function pengurangan($bil1, $bil2) {
        $kurang = $bil1 - $bil2;
        return $kurang;
    }
    
    //function perkalian
    function perkalian($bil1, $bil2) {
        $kali = $bil1 * $bil2;
        return $kali;
    }
    
    //function pembagian
    function pembagian($bil1, $bil2) {
        $bagi = $bil1 / $bil2;
        return $bagi;
    }
    
    $x=9; //nilai bilangan 1
    $y=3; // nilai bilangan 2
    
    echo "bilangan 1 : $x<br>";
    echo "bilangan 2 : $y<br>";
    echo "_____________________________<br>";
    echo "_____________________________<br>";
    echo "hasil penjumlahan adalah : ". penjumlahan($x,$y). "<br>";
    echo "hasil pengurangan adalah : ". pengurangan($x,$y). "<br>";
    echo "hasil perkalian adalah : ". perkalian($x,$y). "<br>";
    echo "hasil pembagian adalah : ". pembagian($x,$y). "<br>";
?>
