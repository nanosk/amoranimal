<?php
 
App::import('Vendor','xtcpdf');
 
$pdf = new XTCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
//$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Sistema de Interaccion Pagos');
$pdf->SetTitle('Listado de Pagos');
$pdf->SetSubject('');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(null, '', 'Listado de Pagos', '');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// set font
$pdf->SetFont('helvetica', '', 10);


$pdf->AddPage();
 /*
$html = '</pre>
<h1>hello world</h1>
<pre>';
 
 
$pdf->writeHTML($html, true, false, true, false, '');
 
$pdf->lastPage();
*/

// Table with rowspans and THEAD
$tbl = <<<EOD
<table border="1" cellpadding="2" cellspacing="2">
<thead>
 <tr style="background-color:#333399;color:#FFFFFF;">
  <td width="%15" align="center"><b>Fecha de pago</b></td>
  <td width="%15" align="center"><b>Monto</b></td>
  <td width="%15" align="center"><b>Socio</b></td>
  <td width="%15" align="center"><b>Forma de pago</b></td>
  
 </tr>
</thead>
<tbody>
EOD;

foreach ( $registros as $item ){ 
$tbl = $tbl.'
<tr>
  <td width="%15">'. $item['Pago']['fecha_pago'] .'</td>
  <td width="%15">'. $item['Pago']['monto'] .'</td>
  <td width="%15">'. $item['Socio']['apellidoynombre'] .'</td>
  <td width="%15">'. $item['Formapago']['descripcion'] .'</td>
  
 </tr>';
}
$tbl = $tbl ."</tbody></table>";
$pdf->writeHTML($tbl, true, false, false, false, '');

echo $pdf->Output(APP . 'files/pdf' . DS . 'listpdfpagos.pdf', 'F');


?>s