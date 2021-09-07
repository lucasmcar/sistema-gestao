<?php
require('../../../vendor/autoload.php');

use Dompdf\Dompdf;

$pdf = new Dompdf();

$pdf->loadHtml("<h2>Olá MundoM</h2>");

ob_start();
require('../dates_service.php');

$pdf->loadHtml(ob_get_clean());

$pdf->setPaper("A4");

$pdf->render();

$pdf->stream("relatorio.pdf", ['Attachment' => false]);