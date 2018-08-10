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
    $data['penduduk'] = $this->m_main->select('t_penduduk', null)->result();
    echo json_encode($data);
  }

  function json_staff()
  {
    $data['staff'] = $this->m_main->select('t_staff', null)->result();
    echo json_encode($data);
  }

  function json_keterangan()
  {
    $data['keterangan'] = $this->m_master->show_keterangan(null, null)->result();
    echo json_encode($data);
  }

  function json_kelahiran()
  {
    $data['kelahiran'] = $this->m_master->show_kelahiran(null, null)->result();
    echo json_encode($data);
  }

}

?>
