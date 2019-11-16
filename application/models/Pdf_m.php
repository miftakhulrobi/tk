<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf_m extends CI_Model
{
    public function siswaall($table, $id)
    {
        $this->db->order_by('namasiswa', 'asc');
        return $this->db->get_where($table, ['class_id' => $id]);
    }

    public function siswaid($table, $id)
    {
        return $this->db->get_where($table, ['siswa_id' => $id]);
    }

    public function guruall($table)
    {
        $this->db->order_by('nama', 'asc');
        return $this->db->get($table);
    }

    public function guruid($table, $id)
    {
        return $this->db->get_where($table, ['user_id' => $id]);
    }
}
