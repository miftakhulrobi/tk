<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model('setting_m');
        $this->load->model('nilai_m');
    }

    public function index()
    {
        $data['cyear'] = $this->nilai_m->getyearaktif('years', 'Aktif')->num_rows();

        if ($data['cyear']) {
            $data['year'] = $this->nilai_m->getyearaktif('years', 'Aktif')->row();
            $data['classes'] = $this->nilai_m->getclassesaktif('classes', $data['year']->year_id)->result();
        }

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function show($id)
    {
        $data['siswa'] = $this->nilai_m->show('siswas', $id)->result();
        $data['classes'] = $this->setting_m->getclassesid('classes', $id)->row();
        $data['year'] = $this->setting_m->getyearid('years', $data['classes']->year_id)->row();
        $data['csiswa'] = $this->nilai_m->show('siswas', $id)->num_rows();

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/show', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    // semester nilai
    public function semester($siswa_id, $class_id, $year_id)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->nilai_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->nilai_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->nilai_m->getid('years', $datayear)->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/nilai/semester', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function datanilai($siswa_id, $class_id, $year_id, $semester, $bulan)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->nilai_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->nilai_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->nilai_m->getid('years', $datayear)->row();
        $data['semester'] = $semester;
        $data['bulan'] = $bulan;

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/nilai/datanilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function detailnilai($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->nilai_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->nilai_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->nilai_m->getid('years', $datayear)->row();
        $data['semester'] = $semester;

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['aspekpengembangan'] = $this->nilai_m->getdata($table, $join, $where)->result();
        $data['bulan'] = $bulan;
        $data['table'] = $table;

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/nilai/detailnilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/nilai/nilai/scdetailnilai');
        $this->load->view('page/layout/close');
    }

    public function detailnilaiekstra($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->nilai_m->getid('siswas', $datasiswa)->row();
        $data['classes'] = $this->nilai_m->getid('classes', $dataclass)->row();
        $data['year'] = $this->nilai_m->getid('years', $datayear)->row();
        $data['semester'] = $semester;

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['ekstrakulikuler'] = $this->nilai_m->getdataekstra($table, $join, $where)->result();
        $data['bulan'] = $bulan;
        $data['table'] = $table;

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/nilai/detailnilaiekstra', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/nilai/nilai/scdetailnilaiekstra');
        $this->load->view('page/layout/close');
    }

    // update nilai
    public function updatenilai($field, $table, $id)
    {
        $data = [
            $field => 1
        ];
        $this->nilai_m->updatenilai($table, $data, $id);

        echo json_encode('Sukses');
    }

    // catatan
    public function createcatatanaspek()
    {
        $data = [
            'siswa_id' => $this->input->post('siswa_id'),
            'class_id' => $this->input->post('class_id'),
            'year_id' => $this->input->post('year_id'),
            'semester' => $this->input->post('semester'),
            'table' => $this->input->post('table'),
            'bulan' => $this->input->post('bulan'),
            'penginput' => $this->session->userdata('nama'),
            'catatan' => $this->input->post('catatan'),
        ];
        $this->nilai_m->createcatatanaspek('catatan', $data);

        echo json_encode('Sukses');
    }
}
