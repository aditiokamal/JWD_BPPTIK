<?php
    require_once "vendor/autoload.php";
    // reference the Dompdf namespace
    use Dompdf\Dompdf;
?>
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
            Nama :
            <input type="text" name="nama">
            <br>
            <input type="submit" name="cetak" value="cetak">
        <br>
            <?php
                function cetak($nama)
                    {
                        $cetak = new Dompdf();
                        $cetak->loadHtml($nama);
                    
                        // (Optional) Setup the paper size and orientation
                        $cetak->setPaper('A4', 'potrait');
                    
                        // Render the HTML as PDF
                        $cetak->render();
                    
                        // Output the generated PDF to Browser
                        $cetak->stream('tugas10JWD.pdf');
                    }

                if (isset($_POST['cetak'])) {
                    $nama = $_POST['nama'];

                cetak($nama);

                }
            ?>
    </body>
</html>