<?php

class Auths
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('auth_m');
    }

    function user()
    {
        $user = $this->ci->auth_m->get_id('users', $this->ci->session->userdata('user_id'))->row();
        return $user;
    }

    function app()
    {
        $app = $this->ci->auth_m->app('apps', 1)->row();
        return $app;
    }
}
