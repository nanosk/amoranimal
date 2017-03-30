<?php
 
App::import('Vendor','xtcpdf');
 
$pdf = new XTCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
//$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Sistema de Interaccion Promos');
$pdf->SetTitle('Listado de Promos');
$pdf->SetSubject('');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(null, '', 'Listado de Promos', '');

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
  <td width="%15" align="center"><b>Comercio</b></td>
  <td width="%15" align="center"><b>Promo</b></td>
  <td width="%15" align="center"><b>Valido Desde</b></td>
  <td width="%15" align="center"><b>Valido Hasta</b></td>
  
 </tr>
</thead>
<tbody>
EOD;

foreach ( $registros as $item ){ 
 $vdesde =  $this->Convertdatos->fechaDMY($item['Promo']['valido_desde']);
 $vhasta =  $this->Convertdatos->fechaDMY($item['Promo']['valido_hasta']);
 
$tbl = $tbl.'
<tr>
  <td width="%15">'. $item['Comercio']['razon_social'] .'</td>
  <td width="%15">'. $item['Promo']['descripcion'] .'</td>
  <td width="%15">'. $vdesde .'</td>
  <td width="%15">'. $vhasta .'</td>
  
 </tr>';
}
$tbl = $tbl ."</tbody></table>";
$pdf->writeHTML($tbl, true, false, false, false, '');

echo $pdf->Output(APP . 'files/pdf' . DS . 'listpdfpromos.pdf', 'F');


?>s