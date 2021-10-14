<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  public function index()
  {
    if ($this->session->userdata('auth')) {
      redirect('user');
    } else {
      $this->load->view('login');
    }
  }

  function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->user_model->userLogin($email);

    if (empty($user)) {
      $this->session->set_flashdata('message', 'User tidak ditemukan');
      redirect('auth');
    } else {
      if (md5($password) == $user->password) {
        $session = array(
          'auth' => true,
          'nama' => $user->nama,
          'email' => $user->email
        );
        $this->session->set_userdata($session);
        redirect('user');
      } else {
        $this->session->set_flashdata('message', 'Password tidak cocok');
        redirect('auth');
      }
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }



}

/* End of file Controllername.php */
