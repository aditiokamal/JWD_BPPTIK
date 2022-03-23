<?php 

//MANIPULASI STRING DI PHP

//menghitung jumlah karakter
$kalimat = "Belajar pemrograman di bpptik kominfo";
echo strlen($kalimat);


//menghitung jumlah kata
$kalimat = "Belajar pemrograman di bpptik kominfo";
echo str_word_count($kalimat);


//membalik string
$kalimat = "Belajar pemrograman di bpptik kominfo";
echo strrev($kalimat);


//memfilter dan mengganti string
$kalimat = "Belajar pemrograman di bpptik kominfo";
echo str_replace("Belajar","Tutorial",$kalimat);

?>