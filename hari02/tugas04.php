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
            Jumlah Bintang =
            <input type="text" name="jml_bintang">
            <br>
            <input type="submit" name="kirim" value="kirim">
        </form>
        <br>
        <?php
            if (isset($_POST['kirim'])){
                $bin = $_POST['jml_bintang'];

                for($a=1; $a <= $bin; $a++){
                    for($b=1; $b <= $a; $b++){
                        echo "*";
                    }
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>