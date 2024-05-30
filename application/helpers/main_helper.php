<?php
function is_logged_in() //membatasi akses ke halaman admin

{
    $ci = get_instance();
    if (!$ci->session->userdata('id_siswa')) {
        redirect('Auth');
    } else {
        $level = $ci->session->userdata('level');
        if ($level != "siswa") {
            redirect('Auth');
        }
    }
}

function is_logged_in2() 

{
    $ci = get_instance();
    if (!$ci->session->userdata('id_pengguna')) {
        redirect('Auth');
    } else {
        $level = $ci->session->userdata('level');
        if ($level == "panitia") {
            redirect('Forbiden');
        } else if ($level == "bendahara") {
            redirect('Forbiden');
        } else if ($level == "siswa") {
            redirect('Auth');
        }

    }
}
function is_logged_in3()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id_pengguna')) {
        redirect('Auth');
    } else {
        $level = $ci->session->userdata('level');
        if ($level == "panitia") {
            redirect('Forbiden');
        } else if ($level == "admin") {
            redirect('Forbiden');
        } else if ($level == "siswa") {
            redirect('Auth');
        }

    }
}
function is_logged_in4()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id_pengguna')) {
        redirect('Auth');
    } else {
        $level = $ci->session->userdata('level');
        if ($level == "admin") {
            redirect('Forbiden');
        }else if($level == "bendahara") {
            redirect('Forbiden');
        }else if($level == "siswa") {
            redirect('Auth');
        }

    }
}
