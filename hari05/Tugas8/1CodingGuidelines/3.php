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
            Hitung Luas Segitiga
            <br>
            Tinggi :
            <input type="text" name="tinggi">
            <br>
            Alas :
            <input type="text" name="alas">
            <br>
            <input type="submit" name="hitung" value="hitung">
        <br>
            <?php
                //function mengitung luas Segitiga
                function luasSegitiga($tinggi, $alas)
                {
                    $luas = 0.5 * $tinggi * $alas;
                    return $luas;
                }

                //output setelah tombol hitung diklik
                if (isset($_POST['hitung'])) {
                    $tinggi = $_POST['tinggi'];
                    $alas = $_POST['alas'];

                echo "Luas Segitiga adalah : ". luasSegitiga($tinggi,$alas). "<br>";
                }
            ?>
    </body>
</html>