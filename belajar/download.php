<?php

    require 'vendor/autoload.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options();
    $options->set('defaultFont', 'Courier');
    $dompdf = new Dompdf($options);

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('Hai');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'potrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

?>