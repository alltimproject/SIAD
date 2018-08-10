<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_main');
  }

	function index()
	{
		$this->load->view('login');
	}

  function cekLogin()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $where = array(
      'username' =>  $username,
      'password' => $password
    );

    $cek = $this->m_main->select('t_user', $where);
    if($cek->num_rows() == 1){
      foreach($cek->result() as $key){
        $name = $key->username;
        $level = $key->level;
      }

      $session = array(
        'username' => $name,
        'level' => $level
      );

      $this->session->set_userdata($session);
      echo $level;
    } else {
      echo "gagal";
    }
  }


  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url().'');
  }


}

?>
