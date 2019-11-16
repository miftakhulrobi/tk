<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model('guru_m');
    }

    public function index()
    {
        $data['guru'] = $this->guru_m->all('users')->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/guru/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/guru/scindex');
        $this->load->view('page/layout/close');
    }

    public function showid($id)
    {
        $guru = $this->guru_m->showid('users', $id)->row();
        echo json_encode($guru);
    }
}
