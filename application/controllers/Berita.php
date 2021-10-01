<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('berita_model');
  }
  

  public function index()
  {
    $data['judul'] = "Ini Judul Berita";
    $data['isi'] = "Ini isi berita";
    $data['berita'] = $this->berita_model->get_berita();
    $this->load->view('berita_view', $data);
  }

}

/* End of file Berita.php */
