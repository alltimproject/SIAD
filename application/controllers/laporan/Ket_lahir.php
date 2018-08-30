<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ket_lahir extends CI_Controller{

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
      // $wherekades  = array('jabatan' => 'Kades', 'status' => 'Aktif');
      // $selectKades = $this->m_main->select('t_staff', $wherekades );
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
       $pdf->Cell(80,7,'SURAT KETERANGAN KELAHIRAN',0,1);


       //----- GARIS-----
       $pdf->Line(71.4,53.8,147.9,53.8);
       $pdf->SetLineWidth(0.9);

       $pdf->Line(71.4,53.8,147.9,53.8);
       $pdf->SetLineWidth(0,9);
       $pdf->Cell(60,6,'',0,0);
       $pdf->SetFont('Arial','',10);
       $pdf->Cell(50,6,'No. '.$no_surat,0,1); //NO SURAT
       //kop keterangan surat//


       $where    = array(
         'no_surat' => $no_surat
       );
       $data = $this->m_master->show_kelahiran($where, null);

       foreach($data->result() as $key){

       //paragraf 1 -------------------------------------
       $pdf->ln(1);
        $pdf->Cell(1,6,'',0,0);
        $pdf->SetFont('Arial','',10);

        $pdf->Cell(0,6,'',0,1);
        $pdf->Cell(0,6,'Yang bertanda tangan dibawah ini Kepala Desa Bojonggede, dengan ini menerangkan bahwa, berdasarkan Buku Induk',0,1);
        $pdf->Cell(0,6,'Kependudukan yang ada pada Kantor kami bahwa terdaftar seorang anak Laki-Laki / Perempuan yang diberi nama :',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(0,6,$key->nama_penduduk,0,1);
        $pdf->SetFont('Arial','',10);

        $pdf->ln(2);
        $pdf->Cell(0,6,'Adalah anak ke 3 dari : ',0,1);

       //----------------------------------------------


       //-----------------------------------------------
       //ayah page
       $pdf->ln(3);
       $pdf->SetFont('Arial','B',10);
       $pdf->Cell(50,6,'AYAH',0,1);

       $pdf->SetFont('Arial','',10);
       $pdf->Cell(45,6,'Nama',0,0); $pdf->Cell(85,6,': '.$key->nama_ayah,0,1);
       $pdf->Cell(45,6,'Tempat, Tanggal Lahir',0,0); $pdf->Cell(85,6,': '.$key->hari.', '.date('d M Y', strtotime($key->tgl_lahir_ayah)),0,1);
       $pdf->Cell(45,6,'Pekerjaan',0,0); $pdf->Cell(85,6,': '.$key->peker_ayah,0,1);
       $pdf->Cell(45,6,'Agama',0,0); $pdf->Cell(85,6,': '.$key->agama_ayah,0,1);
       $pdf->Cell(45,6,'Alamat',0,0); $pdf->Cell(85,6,': '.$key->alamat_ayah,0,1);
       //-----------------------------------------------
       $pdf->ln(10);
       //-----------------------------------------------
       //ayah page
       $pdf->SetFont('Arial','B',10);
       $pdf->Cell(50,6,'IBU',0,1);

       $pdf->SetFont('Arial','',10);
       $pdf->Cell(45,6,'Nama',0,0); $pdf->Cell(85,6,': '.$key->nama_ibu ,0,1);
       $pdf->Cell(45,6,'Tempat, Tanggal Lahir',0,0); $pdf->Cell(85,6,': '.$key->hari.', '.date('d M Y', strtotime($key->tgl_lahir_ibu)),0,1);
       $pdf->Cell(45,6,'Pekerjaan',0,0); $pdf->Cell(85,6,': '.$key->peker_ayah,0,1);
       $pdf->Cell(45,6,'Agama',0,0); $pdf->Cell(85,6,': '.$key->agama_ibu,0,1);
       $pdf->Cell(45,6,'Alamat',0,0); $pdf->Cell(85,6,': '.$key->alamat_ibu,0,1);
       //-----------------------------------------------



       //paragraf 1 -------------------------------------
       $pdf->ln(1);
        $pdf->Cell(1,6,'',0,0);
        $pdf->SetFont('Arial','',10);

        $pdf->Cell(0,6,'',0,1);
        $pdf->Cell(0,6,'Nama tersebut diatas Benar dilahirkan di '.$key->tempat_lahir.' , Pada '.$key->hari.', '.date('d M Y', strtotime($key->tgl_lahir)).' Pada Pukul '.$key->pukul.' WIB ',0,1);
        $pdf->Cell(0,6,'Dan nama tersebut diatas adalah Warga Negara Indonesia (WNI) Asli ',0,1);
        $pdf->Cell(0,6,'Demikian surat in kami buat dengan penuh tanggung jawab dan dengan sebenar-benarnya ',0,1);
       //----------------------------------------------



      //tanda tangan kades
      $pdf->SetFont('Arial','',10);
      $pdf->ln(16);
      $pdf->Cell(115,6,'',0,0);
      $pdf->Cell(45,6,'Bojong Gede, '.date('d M Y'),0,1);

      $pdf->ln(3);
      $pdf->Cell(135,6,'',0,0);
      $pdf->Cell(45,6,'Kepala Desa Bojonggede',0,1);
      $pdf->ln(22);
      $pdf->Cell(135,6,'',0,0);
      $pdf->SetFont('Arial','B',10);
      $pdf->Cell(45,6,$key->data_staff,0,0);



      }
      $pdf->Output();
    }


  }
