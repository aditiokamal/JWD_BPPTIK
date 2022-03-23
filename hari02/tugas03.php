<?php
    //Muhammad Aditio Kamal Ibrahim
    //aditiokamal@gmail.com
    
    for($bil=1; $bil<=10; $bil++){ //perulangan untuk menampilkan bilangan antara 1 - 10
        if($bil % 2 == 0){ //kondisi jika sisa bagi variable bil dengan angka 2 tidak sama dengan 0
            echo "$bil";
            echo "<font style='color:green;'> = genap</font><br>"; //kondisi true maka menampilkan bilangan genap
        }
        else{
            echo "$bil";
            echo "<font style='color:blue;'> = ganjil</font><br>"; //kondisi false maka menampilkan bilangan ganjil
        }
    }
?>