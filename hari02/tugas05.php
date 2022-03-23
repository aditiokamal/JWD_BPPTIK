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
                
                //output setelah tombol hitung diklik
                if (isset($_POST['hitung'])) {
                    $bil1 = $_POST['bil1'];
                    $bil2 = $_POST['bil2'];
                
                echo "bilangan 1 : $bil1<br>";
                echo "bilangan 2 : $bil2<br>";
                echo "_____________________________<br>";
                echo "_____________________________<br>";
                echo "hasil penjumlahan adalah : ". penjumlahan($bil1,$bil2). "<br>";
                echo "hasil pengurangan adalah : ". pengurangan($bil1,$bil2). "<br>";
                echo "hasil perkalian adalah : ". perkalian($bil1,$bil2). "<br>";
                echo "hasil pembagian adalah : ". pembagian($bil1,$bil2). "<br>";
                }
            ?>
    </body>
</html>