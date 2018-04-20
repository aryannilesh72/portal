<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_test extends CI_Controller {
  
    function __construct()
    {
        parent::__construct();
        $this->load->library("Pdf");
    }
  
   public function create_pdf() {
$this->load->library('Pdf');
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Pdf Example');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->Write(5, 'CodeIgniter TCPDF Integration');
	    $this->Pdf->load_view('dashboard');
  $this->pdf->render();
$pdf->Output('pdfexample.pdf', 'I');
}
 }
?>
