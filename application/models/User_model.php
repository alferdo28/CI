<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    function getUser(){
        $result = $this->db->get('pengguna');
        return $result;
    }
    
    function addUser($nama, $alamat, $email, $nomor_hp, $password){
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $nomor_hp,
            'password' => $password
        );
        $this->db->insert('pengguna', $data);
    }

    function getUserId($user_id){        
        $query = $this->db->get_where('pengguna', array('id' => $user_id));
        return $query;
    }

    function userLogin($email){
        $this->db->where('email', $email);
        $result = $this->db->get('pengguna')->row();
        return $result;
    }
    function updateUser($user_id, $nama, $alamat, $email, $nomor_hp, $password){
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $nomor_hp,
            'password' => $password
        );
        $this->db->where('id', $user_id);
        $this->db->update('pengguna', $data);
    }

    function delete($user_id){
        $this->db->where('id', $user_id);
        $this->db->delete('pengguna');
    }

}


/* End of file filename.php */
