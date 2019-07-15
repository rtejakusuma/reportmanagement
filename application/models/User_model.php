<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public $user_name;
    public $user_password;
    public $user_opd;

    public function getUser($username, $pass){
        $res = $this->db->get_where('user',
                    array('user_name' => $username, 'user_password' => $pass), 1
                );
        return $res->result();
    }

    public function getOpd($username){
        $this->db->select('user_opd');
        $res = $this->db->get_where('user',
                    array('user_name' => $username), 1
                );
        return $res->result();
    }

    public function get_login($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert('user', $data);
    }
}
