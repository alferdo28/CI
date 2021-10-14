<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if (!$this->session->userdata('auth')) {
            $this->session->set_flashdata('message', 'Anda tidak berhak mengakses halaman ini');
            redirect('auth');
        }
    }
    
    public function index()
    {
            $data['user'] = $this->user_model->getUser();
            $this->load->view('user_view', $data);
      
    }
    
    function addUser(){
        $this->load->view('add_user');
    }

    function create(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $nomor_hp = $this->input->post('nomor_hp');
        $password = md5($this->input->post('password'));
        $this->user_model->addUser($nama, $alamat, $email, $nomor_hp, $password);
        redirect('user');
    }

    function getUser(){
        $user_id = $this->uri->segment(3);
        $result = $this->user_model->getUserId($user_id);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data = array(
                'user_id' => $i['id'],
                'nama' => $i['nama'],
                'alamat' => $i['alamat'],
                'email' => $i['email'],
                'nomor_hp' => $i['no_hp'],
                'password' => $i['password']
            );
            $this->load->view('ubah_user', $data);
        } else {
            echo "id data tidak ditemukan";
        }
    }

    function update(){
        $user_id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $nomor_hp = $this->input->post('nomor_hp');
        $password1 = $this->input->post('password1');
        $password = $this->input->post('password');
        if ($password == '') {
            $this->user_model->updateUser($user_id, $nama, $email, $alamat, $nomor_hp, $password1);
        }else{
            $password = md5($password);
            $this->user_model->updateUser($user_id, $nama, $email, $alamat, $nomor_hp, $password);
        }
        redirect('user');
    }

    function delete(){
        $user_id = $this->uri->segment(3);
        $this->user_model->delete($user_id);
        redirect('user');
    }

}

/* End of file filename.php */