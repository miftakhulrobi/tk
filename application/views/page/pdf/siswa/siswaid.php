<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
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
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($this->session->userdata('name'));
$pdf->SetTitle('Cetak Data Siswa');
$pdf->SetSubject('TCPDF Siswa');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('LOGO FIX.png', 12, '    TAMAN KANAK-KANAK ISLAM MIFTAAHUL JANNAH' . ' ', '    JL.BINTORO II NO.54 PANDEAN LAMPER GAYAMSARI SEMARANG (081 385 046 431)');

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

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set some text for example

$title = <<<EDD
    <h3>DATA SISWA KELAS $classes->classname  T.A  $year->yearname</h3>
EDD;

$pdf->writeHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);

$table .= '<table style="padding: 7px; border: 1px solid grey;">
            <tr>
                <td rowspan="2">Nama Anak Didik</td>
                <td style="border: 1px solid grey;">Nama Lengkap</td>
                <td style="border: 1px solid grey;">' . $siswa->namasiswa . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Nama Panggilan</td>
                <td style="border: 1px solid grey;">' . $siswa->namapgln . '</td>
            </tr>
          </table>
          <br>
          <br>';

$table .= '<table style="padding: 7px; border: 1px solid grey;">
            <tr>
                <td rowspan="5">Data Siswa</td>
                <td style="border: 1px solid grey;">NO. Induk</td>
                <td style="border: 1px solid grey;">' . $siswa->noinduk . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Jenis Kelamin</td>
                <td style="border: 1px solid grey;">' . $siswa->jk . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Tmp Tgl Lahir</td>
                <td style="border: 1px solid grey;">' . $siswa->tgllahir . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Agama</td>
                <td style="border: 1px solid grey;">' . $siswa->agama . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Anak Ke</td>
                <td style="border: 1px solid grey;">' . $siswa->anakke . '</td>
            </tr>
          </table><br><br>';

$table .= '<table style="padding: 7px; border: 1px solid grey;">
            <tr>
                <td rowspan="4">Orang Tua</td>
                <td style="border: 1px solid grey;">Ayah</td>
                <td style="border: 1px solid grey;">' . $siswa->ayah . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Ibu</td>
                <td style="border: 1px solid grey;">' . $siswa->ibu . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Pekerjaan Ayah</td>
                <td style="border: 1px solid grey;">' . $siswa->pekerjaanayah . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Pekerjaan Ibu</td>
                <td style="border: 1px solid grey;">' . $siswa->pekerjaanibu . '</td>
            </tr>
            <tr>
                <td style="border: 1px solid grey;">Alamat Lengkap</td>
                <td style="border: 1px solid grey;" colspan="2">' . $siswa->alamatortu . '</td>
            </tr>
          </table>';

$bottom = '<p>Dicetak Oleh: ' . $this->session->userdata('nama') . ',  ' . $now . '</p>';

$pdf->writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'L', true);
$pdf->writeHTMLCell(0, 0, '', '', $bottom, 0, 1, 0, true, 'R', true);

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('siswakelas' . $classes->classname . 't.a.' . $year->yearname . '.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
