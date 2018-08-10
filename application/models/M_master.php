<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_master extends CI_Model
  {
    function show_kelahiran($where = null, $between = null)
    {
      $this->db->select('a.komentar, b.nama_peserta');
      $this->db->from('t_komentar a');
      $this->db->join('t_peserta b', 'b.id_peserta = a.id_peserta', 'left');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }

    function show_keterangan($where = null, $between = null)
    {
      $this->db->select('a.komentar, b.nama_peserta');
      $this->db->from('t_komentar a');
      $this->db->join('t_peserta b', 'b.id_peserta = a.id_peserta', 'left');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }
  }

?>
