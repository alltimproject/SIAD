<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_main');
  }

  function index()
  {
    $this->load->view('kades/main');
  }

  function dashboard()
  {
    $this->load->view('kades/dashboard');
  }

  function penduduk()
  {
    $this->load->view('kades/penduduk');
  }

  function staff()
  {
    $this->load->view('kades/staff');
  }

  function kelahiran()
  {
    $this->load->view('kades/surat_kelahiran');
  }

  function keterangan()
  {
    $this->load->view('kades/surat_keterangan');
  }

}

?>
