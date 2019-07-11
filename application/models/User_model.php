<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function gets()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
}
