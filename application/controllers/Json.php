<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_main');
    $this->load->model('m_main');
  }

  function json_penduduk()
  {
    $data['penduduk'] = $this->m_main->select('t_penduduk', null)->result();
    echo json_encode($data);
  }

}

?>
