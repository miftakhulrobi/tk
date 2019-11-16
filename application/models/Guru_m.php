<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_m extends CI_Model
{
    public function all($table)
    {
        return $this->db->get($table);
    }

    public function showid($table, $id)
    {
        return $this->db->get_where($table, ['user_id' => $id]);
    }
}
