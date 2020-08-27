<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $kontrol = session('oku', 'adminlogin');
        if ($kontrol) {
            redirect('admin');
        }
    }

    public function index()
    {
        $this->load->view('back/login');
    }

    public function loginto()
    {
        $kadi   = $this->input->post('kadi');
        $sifre  = $this->input->post('sifre');

        $this->load->model('vt');

        $sonuc = $this->vt->single('yonetim', ['kadi' => $kadi, 'sifre' => md5($sifre)]);

        if ($sonuc) {
            session('yaz', 'adminlogin', true);
            session('yaz', 'admininfo', $sonuc);

            redirect('admin');
        } else {
            flash('error', 'Hata!', 'Kullanıcı adı veya şifre yanlış.');
            redirect('auth');
        }
    }
}
