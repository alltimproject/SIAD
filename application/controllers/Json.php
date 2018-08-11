<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_main');
    $this->load->model('m_master');
  }

  function json_penduduk()
  {
    $cari = $this->input->post('cari');

    if(isset($cari))
    {
      $like = $cari;
    } else {
      $like = null;
    }

    $data['penduduk'] = $this->m_master->show_penduduk(null, $like)->result();
    echo json_encode($data);
  }

  function json_staff()
  {
    $cari = $this->input->post('cari');

    if(isset($cari))
    {
      $like = $cari;
    } else {
      $like = null;
    }

    $data['staff'] = $this->m_master->show_staff(null, $like)->result();
    echo json_encode($data);
  }

  function json_keterangan()
  {
    $cari = $this->input->post('cari');

    if(isset($cari))
    {
      $like = $cari;
    } else {
      $like = null;
    }

    $data['keterangan'] = $this->m_master->show_keterangan(null, null, $like)->result();
    echo json_encode($data);
  }

  function json_kelahiran()
  {
    $cari = $this->input->post('cari');

    if(isset($cari))
    {
      $like = $cari;
    } else {
      $like = null;
    }

    $data['kelahiran'] = $this->m_master->show_kelahiran(null, null, $like)->result();
    echo json_encode($data);
  }

  function json_dashboard()
  {
    $data['dashboard'] = $this->m_master->show_dashboard(null)->result();
    echo json_encode($data);
  }

}

?>
