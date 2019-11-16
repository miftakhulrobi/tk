<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model('setting_m');
        $this->load->model('siswa_m');
    }

    public function index()
    {
        $data['cyear'] = $this->siswa_m->getyearaktif('years', 'Aktif')->num_rows();

        if ($data['cyear']) {
            $data['year'] = $this->siswa_m->getyearaktif('years', 'Aktif')->row();
            $data['classes'] = $this->siswa_m->getclassesaktif('classes', $data['year']->year_id)->result();
        }

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function show($id)
    {
        $data['siswa'] = $this->siswa_m->show('siswas', $id)->result();
        $data['classes'] = $this->setting_m->getclassesid('classes', $id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $data['classes']->year_id)->row();
        $data['csiswa'] = $this->siswa_m->show('siswas', $id)->num_rows();

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/show', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/siswa/scshow');
        $this->load->view('page/layout/close');
    }

    // semester nilai
    public function semester($siswa_id, $class_id, $year_id)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getid('years', $datayear)->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/semester', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function datanilai($siswa_id, $class_id, $year_id, $semester, $bulan)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getid('years', $datayear)->row();
        $data['semester'] = $semester;
        $data['bulan'] = $bulan;

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/datanilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function detailnilai($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
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

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/detailnilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function detailnilaiekstra($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
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

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/detailnilaiekstra', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }
}
