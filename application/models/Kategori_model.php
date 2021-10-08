<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

  function get_kategori(){
    $result = $this->db->get('kategori');
    return $result;
  }

  function createKategori($nama, $deskripsi) 
  {
    $data = array(
      'nama_kategori' => $nama,
      'deskripsi_kategori' => $deskripsi
    );
    $this->db->insert('kategori', $data);
  }

  function getKategori($kategori_id) {
    $query = $this->db->get_where('kategori', array('id' => $kategori_id));
    return $query;
  }

  function updateKategori($kategori_id, $nama, $deskripsi){
    $data = array(
      'nama_kategori' => $nama,
      'deskripsi_kategori' => $deskripsi
    );
    $this->db->where('id', $kategori_id);
    $this->db->update('kategori', $data);
  }

  function delete($kategori_id){
    $this->db->where('id', $kategori_id);
    $this->db->delete('kategori');
  }
  

}