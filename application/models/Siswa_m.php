<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{

    public function getyearaktif($table, $status)
    {
        return $this->db->get_where($table, ['status' => $status]);
    }

    public function getclassesaktif($table, $year_id)
    {
        return $this->db->get_where($table, ['year_id' => $year_id]);
    }

    public function show($table, $id)
    {
        return $this->db->get_where($table, ['class_id' => $id]);
    }

    // nilai semester
    public function getid($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getdata($table, $join, $where)
    {
        $this->db->join($join, $join . '.kemampuan_id = ' . $table . '.kemampuan_id', 'left');
        return $this->db->get_where($table, $where);
    }

    public function getdataekstra($table, $join, $where)
    {
        $this->db->join($join, $join . '.program_id = ' . $table . '.program_id', 'left');
        return $this->db->get_where($table, $where);
    }

    // catatan
    public function getcatatanaspek($table, $catatan)
    {
        return $this->db->get_where($table, $catatan);
    }
}
