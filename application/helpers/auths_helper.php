<?php

function checklogin()
{
    $ci = &get_instance();
    $user = $ci->session->userdata('user_id');

    if (!$user) {
        redirect('auth/login');
    }
}
