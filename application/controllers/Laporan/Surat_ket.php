<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_ket extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('pdf');
    $this->load->model('m_master');
    $this->load->model('m_main');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $no_surat = $_GET['no_surat'];
    $pdf = new FPDF('p','mm','A4');
    // membuat halaman baru
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $pdf->image('images/kopsurat.png',6,7,200) ;
    $pdf->Ln(37);

    //kop keterangan surat//
     $pdf->SetFont('Arial','B',13);
     $pdf->Cell(60,7,'',0,0);
     $pdf->Cell(80,7,'SURAT KETERANGAN',0,1);


     //----- GARIS-----
     $pdf->Line(71.4,53.8,147.9,53.8);
     $pdf->SetLineWidth(0.9);

     $pdf->Line(71.4,53.8,147.9,53.8);
     $pdf->SetLineWidth(0,9);
     $pdf->Cell(60,6,'',0,0);
     $pdf->SetFont('Arial','',10);
     $pdf->Cell(50,6,'No. '.$no_surat,0,1); //NO SURAT
     //kop keterangan surat//


     //paragraf 1 -------------------------------------
     $pdf->ln(1);
      $pdf->Cell(1,6,'',0,0);
      $pdf->SetFont('Arial','',10);

      $pdf->Cell(0,6,'',0,1);
      $pdf->Cell(0,6,'Yang bertanda tangan dibawah ini Kepala Desa Bojonggede, dengan ini menerangkan bahwa : ',0,1);
      $pdf->SetFont('Arial','',10);
     //----------------------------------------------


     //----------------------------------------------
     //-----------------------------------------------
     //ayah page
     $pdf->ln(3);
     $pdf->SetFont('Arial','B',10);

     $pdf->SetFont('Arial','',10);
     $pdf->Cell(45,8,'Nama',0,0); $pdf->Cell(85,6,': Wahyu Alfarisi',0,1);
     $pdf->Cell(45,8,'NIK',0,0); $pdf->Cell(85,6,': 34872842734673446736',0,1);
     $pdf->Cell(45,8,'Tempat, Tanggal lahir',0,0); $pdf->Cell(85,6,':  2 Agustus 2008',0,1);
     $pdf->Cell(45,8,'Jenis Kelamin',0,0); $pdf->Cell(85,6,': Laki - Laki ',0,1);
     $pdf->Cell(45,8,'Agama',0,0); $pdf->Cell(85,6,': Jl. Islam',0,1);
     $pdf->Cell(45,8,'Alamat',0,0); $pdf->Cell(85,6,': Jl. Palem raya rawa bogo  ',0,1);
     //-----------------------------------------------
     //----------------------------------------------


     //paragraf 1 -------------------------------------
     $pdf->ln(1);
      $pdf->Cell(1,6,'',0,0);
      $pdf->SetFont('Arial','',10);

      $pdf->Cell(0,6,'',0,1);
      $pdf->Cell(0,6,'Adapun salah seorang warga Desa kami, telah memohon keterangan : ',0,1);
      $pdf->SetFont('Arial','B',10);

      $pdf->Cell(0,6,'Permohonan',0,1);
      $pdf->SetFont('Arial','',10);
      $pdf->Cell(0,6,'Kepada kami dalam rangka : ',0,1);
     //----------------------------------------------

       $pdf->SetFont('Arial','B',10);









       $pdf->Output();
  }

}
