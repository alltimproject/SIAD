<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_master extends CI_Model
  {
    function show_penduduk($where = null, $like = null)
    {
      $this->db->select('*');
      $this->db->from('t_penduduk');

      if($where != null){
        $this->db->where($where);
      }

      if($like != null){
        $this->db->like('id_penduduk', $like);
        $this->db->or_like('nama_penduduk', $like);
      }

      return $this->db->get();
    }

    function show_staff($where = null, $like = null)
    {
      $this->db->select('*');
      $this->db->from('t_staff');

      if($where != null){
        $this->db->where($where);
      }

      if($like != null){
        $this->db->like('nip', $like);
        $this->db->or_like('nama_staff', $like);
      }

      return $this->db->get();
    }

    function show_kelahiran($where = null, $between = null, $like = null)
    {
      $this->db->select('a.*, b.*, c.nama_penduduk as nama_ibu, c.tempat_lahir as tempat_lhr_ibu, c.tgl_lahir as tgl_lahir_ibu, c.pekerjaan as peker_ibu, c.agama as agama_ibu, c.alamat as alamat_ibu, d.nama_penduduk as nama_ayah, d.agama as agama_ayah, d.tgl_lahir as tgl_lahir_ayah, d.pekerjaan as peker_ayah, d.alamat as alamat_ayah, e.username');
      $this->db->select('(select nama_staff from t_staff where jabatan = "Kades" and status = "Aktif") as data_staff  ');
      $this->db->from('t_kelahiran a');
      $this->db->join('t_penduduk b', 'b.id_penduduk = a.id_penduduk', 'left');
      $this->db->join('t_penduduk c', 'c.id_penduduk = a.id_ibu', 'left');
      $this->db->join('t_penduduk d', 'd.id_penduduk = a.id_ayah', 'left');
      $this->db->join('t_user e', 'e.username = a.input_by', 'left');

      if($where != null)
      {
        $this->db->where($where);
      }

      if($like != null){
        $this->db->like('no_surat', $like);
      }

      return $this->db->get();
    }

    function show_keterangan($where = null, $between = null, $like = null)
    {
      $this->db->select('a.*, b.*, c.username');
      $this->db->from('t_keterangan a');
      $this->db->join('t_penduduk b', 'b.id_penduduk = a.id_penduduk', 'left');
      $this->db->join('t_user c', 'c.username = a.input_by', 'left');

      if($where != null)
      {
        $this->db->where($where);
      }

      if($like != null){
        $this->db->like('no_surat', $like);
      }

      return $this->db->get();
    }

    function show_dashboard($where = null)
    {
      $this->db->select('COUNT(id_penduduk) as jml_penduduk');
      $this->db->select('(SELECT COUNT(nip) FROM t_staff WHERE status = "Aktif") as jml_staff');
      $this->db->select('(SELECT COUNT(no_surat) FROM t_keterangan) as jml_ket');
      $this->db->select('(SELECT COUNT(no_surat) FROM t_kelahiran) as jml_kel');
      $this->db->from('t_penduduk');

      if($where != null)
      {
        $this->db->where($where);
      }

      return $this->db->get();
    }

  }

?>
