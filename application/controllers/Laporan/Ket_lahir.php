<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ket_lahir extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('pdf');
    //Codeigniter : Write Less Do More
  }
  function index()
    {
      $pdf = new FPDF('P','mm','A4');
      // membuat halaman baru
      $pdf->AddPage();

      $pdf->image('images/kopsurat.png',25,7,160) ;
      $pdf->ln(35);
      $pdf->SetFont('Arial','B',16);
      $pdf->Cell(498,0,'SURAT KETERANGAN KELAHIRAN','C',5);
      $pdf->Output();
    }
    function gaji()
    {
      $pdf = new FPDF('p','mm','A4');
      // membuat halaman baru
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',10);
      $pdf->image('images/kopsurat.png',6,7,200) ;
      $pdf->Ln(37);
      $pdf->Cell(190,0,'KETERANGAN KELAHIRAN ',1,1,'C',1);
      $pdf->Output();
  }
  }
