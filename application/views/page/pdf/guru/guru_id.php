<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Cetak Data Guru');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('LOGO FIX.png', 12, '    TAMAN KANAK-KANAK ISLAM MIFTAAHUL JANNAH' . '', '    JL.BINTORO II NO.54 PANDEAN LAMPER GAYAMSARI SEMARANG (081 385 046 431)', array(0, 0, 0), array(0, 64, 128));
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', 11));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('times', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

// Set some content to print
$html = <<<EOD
<h3>BIODATA GURU</h3>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);

$table = '<table style="padding: 7px; border: 1px solid grey;">
            <tr>
                <td rowspan="2">Nama Guru</td>
                <td style="border: 1px solid grey;">Nama Lengkap</td>
                <td style="border: 1px solid grey;">' . $guru->nama . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Nama Panggilan</td>
                <td style="border: 1px solid grey;">' . $guru->username . '</td>
            </tr>
          </table>
          <br>
          <br>';

$table .= '<table style="padding: 7px; border: 1px solid grey;">
            <tr>
                <td rowspan="5">Data Guru</td>
                <td style="border: 1px solid grey;">Tmp Tgl Lahir</td>
                <td style="border: 1px solid grey;">' . $guru->tgllahir . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Pendidikan Terakhir</td>
                <td style="border: 1px solid grey;">' . $guru->pendidikanterakhir . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Mulai Mengajar</td>
                <td style="border: 1px solid grey;">' . $guru->mulaimengajar . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Pengampu</td>
                <td style="border: 1px solid grey;">' . $guru->pengampu . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Telepon</td>
                <td style="border: 1px solid grey;">' . $guru->telepon . '</td>
            </tr>
            <tr>
            <td style="border: 1px solid grey;">Alamat Lengkap</td>
            <td style="border: 1px solid grey;" colspan="2">' . $guru->alamat . '</td>
        </tr>
          </table>';

$bottom = '<p>Dicetak Oleh: ' . $this->session->userdata('nama') . ',  ' . $now . '</p>';


$pdf->writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '', '', $bottom, 0, 1, 0, true, 'R', true);
// $pdf->writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
