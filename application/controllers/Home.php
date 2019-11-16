<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
    }

    public function index()
    {
        $this->load->view('page/layout/header');
        $this->load->view('page/home/index');
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }
}
