<?php

require_once '../../dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

//INICIA A PAGINA SEM MOSTRAR NA TELA
ob_start();
require_once 'pdfs/veiculo.php';
$pdf = ob_get_clean();

//CARREGA O PDF
$dompdf->loadHtml($pdf);

// (Optional) Setup the paper size an orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("infoveiculo.pdf",["Attachment" => false]);


?>
