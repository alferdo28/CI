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

  //untuk mengarahkan ke halaman tambah berita
  function addBerita(){
    $this->load->view('add_berita');
  }

  //untuk insert berita
  function create(){
    $judul = $this->input->post('judul');
    $pembaca = $this->input->post('pembaca');
    $this->berita_model->createBerita($judul, $pembaca);
    redirect('berita');
  }

  //untuk mengambil data
  function getBerita(){
    $berita_id = $this->uri->segment(3);
    $result = $this->berita_model->getBerita($berita_id);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array (
        'berita_id' => $i['id'],
        'judul' => $i['judul'],
        'pembaca' => $i['pembaca'],
      );
      $this->load->view('ubah_berita', $data);
    }else{
      echo "id data tidak ditemukan";
    }
  }

  //untuk update berita
  function update(){
    $berita_id = $this->input->post('id');
    $judul = $this->input->post('judul');
    $pembaca = $this->input->post('pembaca');
    $this->berita_model->updateBerita($berita_id, $judul, $pembaca);
    redirect('berita');
  }

  //untuk delete data
  function delete(){
    $berita_id = $this->uri->segment(3);
    $this->berita_model->delete($berita_id);
    redirect('berita');
  }


}

/* End of file Berita.php */
