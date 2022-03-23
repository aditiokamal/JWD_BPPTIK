<?php
    require "vendor/autoload.php";
    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options();
    $options->set('defaultFont', 'Courier');
    $dompdf = new Dompdf($options);
    $html =
    '<html><body>' .
    '<h2>Nama : Muhammad Aditio Kamal Ibrahim </h2>' .
    '<h2>Email : aditiokamal@gmail.com</h2>' .
    '</body></html>';

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'potrait');
    $dompdf->render();
    $dompdf->stream('tugas10_MuhammadAditioKamalIbrahim.pdf');
    //Muhammad Aditio Kamal Ibrahim
    //aditiokamal@gmail.com

?>