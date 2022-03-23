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
            Perkalian & Pembagian Bilangan
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
                //function perkalian
                function kaliAngka($bil1, $bil2) {
                    $kali = $bil1 * $bil2;
                    return $kali;
                }

                //function pembagian
                function bagiAngka($bil1, $bil2) {
                    $bagi = $bil1 / $bil2;
                    return $bagi;
                }

                //output setelah tombol hitung diklik
                if (isset($_POST['hitung'])) {
                    $bil1 = $_POST['bil1'];
                    $bil2 = $_POST['bil2'];

                echo "Bilangan 1 : $bil1<br>";
                echo "Bilangan 2 : $bil2<br>";
                echo "_____________________________<br>";
                echo "Hasil perkalian adalah : ". kaliAngka($bil1,$bil2). "<br>";
                echo "Hasil pembagian adalah : ". bagiAngka($bil1,$bil2). "<br>";
                }
            ?>
    </body>
</html>