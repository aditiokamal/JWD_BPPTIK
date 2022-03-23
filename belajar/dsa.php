<?php

    require 'vendor/autoload.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options();
    $options->set('defaultFont', 'Courier');

    $cetak = new Dompdf($options);

    // instantiate and use the dompdf class
    $cetak = new Dompdf();
    $cetak->loadHtml('$nama,$email');

    // (Optional) Setup the paper size and orientation
    $cetak->setPaper('A4', 'potrait');

    // Render the HTML as PDF
    $cetak->render();

    // Output the generated PDF to Browser
    $cetak->stream('tugas10JWD.pdf',Array('Attachment'=>0));

?>