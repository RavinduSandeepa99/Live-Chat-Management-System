<?php
include 'dbh.php';
require_once('TCPDF-main/tcpdf.php');

//SQL to get 10 records
$sql="SELECT * FROM contact LIMIT 0,10";



/**
 * 
 */
class PDF extends TCPDF
{
    public function header(){
       
     $imageFile = K_PATH_IMAGES.'logo.png';
     $this->Image($imageFile, 30,20,30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
     $this->Ln(5);
     $this->SetFont('helvetica','B',20);
     $this->Cell(189,5,'User Care Management',0,1,'C');
     $this->SetFont('helvetica','',15);
     $this->Cell(189,3,'Contact Us Report',0,1,'C');
     $this->SetFont('helvetica','',12);
     $this->Cell(189,3,'Floms Team',0,1,'C');
     $this->Cell(189,3,'A108 Adam Street,',0,1,'C');
     $this->Cell(189,3,'Colombo 1, Sri Lanka,',0,1,'C');
     $this->Cell(189,3,'Phone:+94 5589 55488 55. Fax:+94 6678 254445 41,',0,1,'C');
     $this->Cell(189,3,'E-mail:floms@example.com.',0,1,'C');


    }	

    public function Footer(){
        $this->SetY(-60);
        $this->Ln(5);
        $this->SetFont('times','B', 15);
        $this->MultiCell(189, 15, 'I, ___________________, read this carefully and signed it', 0, 'L', 0, 1, '', '', true);
        $this->Ln(2);
        $this->Cell(20, 1, '___________________',0,0);
        $this->Cell(118,1,'',0,0);
        $this->Cell(51, 1, '____________________',0,1);
        $this->Cell(20,5,'Authorized Signature', 0, 0);
        $this->Cell(118,5,'',0,0);
        $this->Cell(51,5,'Maneager Signature(s)',0,1);

        //set font
        $this->SetY(-10);
        $this->SetFont('helvetica', 'I',8);
        //page number 
        date_default_timezone_set("Asia/Dhaka");
        $today = date("F j, Y/ g:i A", time());

        $this->Cell(25,5,'Generation Date/Time: '.$today,0,0,'L');
        $this->Cell(164,5,'Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
        

    	
    }
 
} 
// create new PDF document
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

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
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}



// set default font subsetting mode
$pdf->setFontSubsetting(true);


// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);



// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
$pdf->Ln(50);
$width_cell=array(10,35,58,30,50);
$pdf->SetFont('helvetica','B',12);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'NAME',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'E-mail',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Subject',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Message',1,1,'C',true); 
//// header ends ///////

$pdf->SetFont('helvetica','',10);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
foreach ($conn->query($sql) as $row) {
$pdf->Cell($width_cell[0],10,$row['contact_id'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,$row['name'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],10,$row['email'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['subject'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['message'],1,1,'C',$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}
/// end of records /// 


// Close and output PDF document
$pdf->Output('Contact Us Report.pdf', 'I');
