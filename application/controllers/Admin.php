<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_main');
  }

  function index()
  {
    $this->load->view('admin/main');
  }

  function dashboard()
  {
    $this->load->view('admin/dashboard');
  }

  function penduduk()
  {
    $this->load->view('admin/penduduk');
  }

  function staff()
  {
    $this->load->view('admin/staff');
  }

  function kelahiran()
  {
    $this->load->view('admin/surat_kelahiran');
  }

  function keterangan()
  {
    $this->load->view('admin/surat_keterangan');
  }


}

?>
