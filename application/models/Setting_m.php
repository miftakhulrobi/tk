<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_m extends CI_Model
{
    // thn ajaran
    public function gettahunajaran($table)
    {
        $this->db->order_by('year_id', 'desc');
        return $this->db->get($table);
    }

    public function storetahunajaran($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function getstoretahunajaran($table, $yearname)
    {
        return $this->db->get_where($table, ['yearname' => $yearname]);
    }

    public function getclassesyearid($table, $id)
    {
        return $this->db->get_where($table, ['year_id' => $id]);
    }

    public function updatestatustahunajaran($table, $data, $id)
    {
        $this->db->where('year_id', $id);
        return $this->db->update($table, $data);
    }

    public function updatetahunajaran($table, $data, $id)
    {
        $this->db->where('year_id', $id);
        return $this->db->update($table, $data);
    }

    // kelas thn ajaran
    public function getyearid($table, $id)
    {
        return $this->db->get_where($table, ['year_id' => $id]);
    }

    public function storekelasbaru($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // siswa
    public function getclassesid($table, $id)
    {
        return $this->db->get_where($table, ['class_id' => $id]);
    }

    public function getsiswaall($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function storesiswa($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function getnewsiswa($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getsiswaid($table, $id)
    {
        return $this->db->get_where($table, ['siswa_id' => $id]);
    }

    public function updatesiswa($table, $data, $id)
    {
        $this->db->where('siswa_id', $id);
        return $this->db->update($table, $data);
    }

    // profile
    public function updateprofile($table, $data, $id)
    {
        $this->db->where('user_id', $id);
        return $this->db->update($table, $data);
    }

    // blueprint nilai
    public function inserttable($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
