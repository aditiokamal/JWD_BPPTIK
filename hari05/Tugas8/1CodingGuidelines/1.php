<!DOCTYPE html>
<!--
    Muhammad Aditio Kamal Ibrahim
    aditiokamal@gmail.com
    -->
    <head>
        <title>
        </title>
    </head>
    <body>
        <form action="" method="POST">
            Penjumlahan & Pengurangan Bilangan
            <br>
            Input bilangan 1 :
            <input type="text" name="bil1">
            <br>
            Input bilangan 2 :
            <input type="text" name="bil2">
            <br>
            <input type="submit" name="hitung" value="hitung">
        <br>
            <?php
                //function penjumlahan
                function jmlAngka($bil1, $bil2) {
                    $tambah = $bil1 + $bil2;
                    return $tambah;
                }

                //function pengurangan
                function krgAngka($bil1, $bil2) {
                    $kurang = $bil1 - $bil2;
                    return $kurang;
                }

                //output setelah tombol hitung diklik
                if (isset($_POST['hitung'])) {
                    $bil1 = $_POST['bil1'];
                    $bil2 = $_POST['bil2'];

                echo "Bilangan 1 : $bil1<br>";
                echo "Bilangan 2 : $bil2<br>";
                echo "_____________________________<br>";
                echo "Hasil penjumlahan adalah : ". jmlAngka($bil1,$bil2). "<br>";
                echo "Hasil pengurangan adalah : ". krgAngka($bil1,$bil2). "<br>";
                }
            ?>
    </body>
</html>