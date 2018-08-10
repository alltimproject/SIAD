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

  function laporan()
  {
    $this->load->view('admin/laporan');
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

  function response_penduduk($aksi)
  {
    switch ($aksi) {
      case 'simpan':
        $data = array(
          'id_penduduk' => $this->input->post('id_penduduk'),
          'nama_penduduk' => $this->input->post('nama_penduduk'),
          'tempat_lahir' => $this->input->post('tempat_lahir'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'jenis_kelamin' => $this->input->post('jenis_kelamin'),
          'agama' => $this->input->post('agama'),
          'alamat' => $this->input->post('alamat'),
          'kelurahan' => $this->input->post('kelurahan'),
          'kecamatan' => $this->input->post('kecamatan'),
          'status' => $this->input->post('status'),
          'pekerjaan' => $this->input->post('pekerjaan'),
          'kewarganegaraan' => $this->input->post('kewarganegaraan')
        );

        $cek = $this->m_main->add_data('t_penduduk', $data);

        if($cek)
        {
          echo "berhasil";
        } else {
          echo "gagal";
        }
      break;

      default:
        // code...
      break;
    }
  }

  function response_staff($aksi)
  {
    switch ($aksi) {
      case 'simpan':
        $data = array(
          'nip' => $this->input->post('nip'),
          'nama_staff' => $this->input->post('nama_staff'),
          'tempat_lahir' => $this->input->post('tempat_lahir'),
          'tgl_lahir' => $this->input->post('tgl_lahir'),
          'alamat' => $this->input->post('alamat'),
          'jenis_kelamin' => $this->input->post('jenis_kelamin'),
          'no_tlp' => $this->input->post('no_tlp'),
          'jabatan' => $this->input->post('jabatan'),
          'status' => $this->input->post('status')
        );

        $cek = $this->m_main->add_data('t_staff', $data);

        if($cek)
        {
          echo "berhasil";
        } else {
          echo "gagal";
        }
      break;

      default:
        // code...
      break;
    }
  }

  function response_keterangan($aksi)
  {
    switch ($aksi) {
      case 'simpan':
        $data = array(
          'no_surat' => $this->input->post('no_surat'),
          'id_penduduk' => $this->input->post('id_penduduk'),
          'tgl_surat' => date('Y-m-d'),
          'perihal' => $this->input->post('perihal'),
          'keterangan' => $this->input->post('keterangan'),
          'input_by' => $this->session->userdata('username')
        );

        $cek = $this->m_main->add_data('t_keterangan', $data);

        if($cek)
        {
          echo "berhasil";
        } else {
          echo "gagal";
        }

        // echo $this->input->post('no_surat').' - '.$this->input->post('id_penduduk').' - '.$this->input->post('perihal')
      break;

      default:
        // code...
      break;
    }
  }

  function response_kelahiran($aksi)
  {
    switch ($aksi) {
      case 'simpan':
        $data = array(
          'no_surat' => $this->input->post('no_surat'),
          'id_penduduk' => $this->input->post('id_penduduk'),
          'tgl_surat' => date('Y-m-d'),
          'anak_ke' => $this->input->post('anak_ke'),
          'hari' => $this->input->post('hari'),
          'pukul' => $this->input->post('pukul'),
          'id_ibu' => $this->input->post('id_ibu'),
          'id_ayah' => $this->input->post('id_ayah'),
          'input_by' => $this->session->userdata('username')
        );

        $cek = $this->m_main->add_data('t_kelahiran', $data);

        if($cek)
        {
          echo "berhasil";
        } else {
          echo "gagal";
        }
      break;

      default:
        // code...
      break;
    }
  }


}

?>
