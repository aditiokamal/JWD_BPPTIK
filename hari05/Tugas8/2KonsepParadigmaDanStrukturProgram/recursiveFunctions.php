<?php
    //Muhammad Aditio Kamal Ibrahim
    //aditiokamal@gmail.com
    //recursive function
    function nomorUrut($jumlah, $indeks = 1)
        {
            if ($indeks < $jumlah) {
                nomorUrut($jumlah, $indeks + 1);
            }

            echo "Urutan ke- {$indeks} <br>";
        }
    nomorUrut(20);
?>