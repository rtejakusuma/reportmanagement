<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function gets()
    {
        $query = $this->db->get('user');
        return $query->result();
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
