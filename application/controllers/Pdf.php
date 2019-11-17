<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->library('pdf_report');
        $this->load->model('pdf_m');
        $this->load->model('setting_m');
        $this->load->model('siswa_m');
    }

    // siswa
    public function siswaall($id)
    {
        $data['siswa'] = $this->pdf_m->siswaall('siswas', $id)->result();
        $data['classes'] = $this->setting_m->getclassesid('classes', $id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $data['classes']->year_id)->row();
        $data['now'] = date('dMY');

        $this->load->view('page/pdf/siswa/siswaall.php', $data);
    }

    public function siswaid($id)
    {
        $data['siswa'] = $this->pdf_m->siswaid('siswas', $id)->row();
        $data['classes'] = $this->setting_m->getclassesid('classes', $data['siswa']->class_id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $data['classes']->year_id)->row();
        $data['now'] = date('dMY');

        $this->load->view('page/pdf/siswa/siswaid.php', $data);
    }

    // guru
    public function guruall()
    {
        $data['guru'] = $this->pdf_m->guruall('users')->result();
        $data['now'] = date('dMY');
        $this->load->view('page/pdf/guru/guruall.php', $data);
    }

    public function guruid($id)
    {
        $data['guru'] = $this->pdf_m->guruid('users', $id)->row();
        $data['now'] = date('dMY');
        $this->load->view('page/pdf/guru/guruid.php', $data);
    }

    // nilai
    public function nilai($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getid('years', $datayear)->row();
        $data['semester'] = $semester;

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['aspekpengembangan'] = $this->siswa_m->getdata($table, $join, $where)->result();
        $data['bulan'] = $bulan;
        $data['tabel'] = $table;
        $data['join'] = $join;

        $catatan = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
            'table' => $table,
        ];
        $data['ccatatan'] = $this->siswa_m->getcatatanaspek('catatan', $catatan)->num_rows();
        if ($data['ccatatan']) {
            $data['catatan'] = $this->siswa_m->getcatatanaspek('catatan', $catatan)->row();
        }

        $data['now'] = date('dMY');
        $this->load->view('page/pdf/nilai/nilai.php', $data);
    }

    public function nilaiekstra($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getid('years', $datayear)->row();
        $data['semester'] = $semester;

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['ekstrakulikuler'] = $this->siswa_m->getdataekstra($table, $join, $where)->result();
        $data['bulan'] = $bulan;
        $data['tabel'] = $table;

        $catatan = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
            'table' => $table,
        ];
        $data['ccatatan'] = $this->siswa_m->getcatatanaspek('catatan', $catatan)->num_rows();
        if ($data['ccatatan']) {
            $data['catatan'] = $this->siswa_m->getcatatanaspek('catatan', $catatan)->row();
        }

        $data['now'] = date('dMY');
        $this->load->view('page/pdf/nilai/nilaiekstra.php', $data);
    }
}
