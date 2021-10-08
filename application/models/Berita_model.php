<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

  function get_berita(){
    $result = $this->db->get('berita');
    return $result;
  }

  function createBerita($judul, $pembaca) 
  {
    $data = array(
      'judul' => $judul,
      'pembaca' => $pembaca
    );
    $this->db->insert('berita', $data);
  }

  function getBerita($berita_id) {
    $query = $this->db->get_where('berita', array('id' => $berita_id));
    return $query;
  }

  function updateBerita($berita_id, $judul, $pembaca){
    $data = array(
      'judul' => $judul,
      'pembaca' => $pembaca
    );
    $this->db->where('id', $berita_id);
    $this->db->update('berita', $data);
  }

  function delete($berita_id){
    $this->db->where('id', $berita_id);
    $this->db->delete('berita');
  }
  

}