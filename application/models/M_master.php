<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_master extends CI_Model
  {
    function show_kelahiran($where = null, $between = null)
    {
      $this->db->select('a.*, b.*, c.nama_penduduk as nama_ibu, d.nama_penduduk as nama_ayah, e.username');
      $this->db->from('t_kelahiran a');
      $this->db->join('t_penduduk b', 'b.id_penduduk = a.id_penduduk', 'left');
      $this->db->join('t_penduduk c', 'c.id_penduduk = a.id_ibu', 'left');
      $this->db->join('t_penduduk d', 'd.id_penduduk = a.id_ayah', 'left');
      $this->db->join('t_user e', 'e.username = a.input_by', 'left');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }

    function show_keterangan($where = null, $between = null)
    {
      $this->db->select('a.*, b.*, c.username');
      $this->db->from('t_keterangan a');
      $this->db->join('t_penduduk b', 'b.id_penduduk = a.id_penduduk', 'left');
      $this->db->join('t_user c', 'c.username = a.input_by', 'left');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }

  }

?>
