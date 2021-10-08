<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kategori_model');
  }
  

  public function index()
  {
    $data['kategori'] = $this->kategori_model->get_kategori();
    $this->load->view('kategori_view', $data);
  }

  //untuk mengarahkan ke halaman kategori
  function addkategori(){
    $this->load->view('add_kategori');
  }

  //untuk insert kategori
  function create(){
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $this->kategori_model->createkategori($nama, $deskripsi);
    redirect('kategori');
  }

  //untuk mengambil data
  function getKategori(){
    $kategori_id = $this->uri->segment(3);
    $result = $this->kategori_model->getKategori($kategori_id);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array (
        'kategori_id' => $i['id'],
        'nama' => $i['nama_kategori'],
        'deskripsi' => $i['deskripsi_kategori'],
      );
      $this->load->view('ubah_kategori', $data);
    }else{
      echo "id data tidak ditemukan";
    }
  }

  //untuk update kategori
  function update(){
    $kategori_id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $this->kategori_model->updateKategori($kategori_id, $nama, $deskripsi);
    redirect('kategori');
  }

  //untuk delete data
  function delete(){
    $kategori_id = $this->uri->segment(3);
    $this->kategori_model->delete($kategori_id);
    redirect('kategori');
  }


}

/* End of file kategori.php */
