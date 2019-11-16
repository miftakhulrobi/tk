<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m');
    }

    public function login()
    {
        if ($this->session->userdata('nama')) {
            redirect('home');
        }
        $this->load->view('auth/login');
    }

    public function postlogin()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        ];
        $user = $this->auth_m->postlogin('users', $data);

        if ($user->num_rows() > 0) {
            $login = $user->row();

            $param = [
                'user_id' => $login->user_id,
                'nama' => $login->nama
            ];
            $this->session->set_userdata($param);

            $this->session->set_flashdata('success', 'Selamat datang kembali ' . $login->nama . '');
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Login gagal!, Username / Password salah!');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $param = ['user_id', 'nama'];
        $this->session->unset_userdata($param);

        $this->session->set_flashdata('success', 'Anda berhasil logout!');
        redirect('auth/login');
    }
}
