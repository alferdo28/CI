<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

  function get_berita(){
    $result = $this->db->get('berita');
    return $result;
  }
  

}