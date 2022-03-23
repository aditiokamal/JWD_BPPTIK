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
            bilangan 1 : 
            <input type="text" name="bil1">
            <br>
            bilangan 2 :
            <input type="text" name="bil2">
            <br>
            <input type="submit" name="hitung" value="hitung">
            <br>
            _________________________________________
            <br>
            _________________________________________
        </form>
        <br>
        <?php
            if(isset($_POST['hitung'])) {
                $bil1 = $_POST['bil1'];
                $bil2 = $_POST['bil2'];
                $tambah = $bil1 + $bil2;
                $kurang = $bil1 - $bil2;
                $kali = $bil1 * $bil2;
                $bagi = $bil1 / $bil2;
                
                
                echo "hasil penjumlahan adalah : $tambah<br>";
                echo "hasil pengurangan adalah : $kurang<br>";
                echo "hasil perkalian adalah : $kali<br>";
                echo "hasil pembagian adalah : $bagi<br>";
            }
        ?>
    </body>
</html>