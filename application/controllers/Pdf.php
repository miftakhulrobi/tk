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

}
