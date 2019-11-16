<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function postlogin($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    // app
    public function app($table, $id)
    {
        return $this->db->get_where($table, ['app_id' => $id]);
    }

    // user
    public function get_id($table, $id)
    {
        return $this->db->get_where($table, ['user_id' => $id]);
    }
}
