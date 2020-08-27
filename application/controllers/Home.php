<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('vt');
    }

    public function index()
    {
        $data['title'] = 'Anasayfa';
        $this->load->view('front/anasayfa', $data);
    }

    public function iletisim()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data['gonderen'] = postval('adsoyad');
            $data['gonderenmail'] = postval('email');
            $data['icerik'] = postval('mesaj');
            $data['tarih'] = date('Y-m-d H:i:s');

            $this->vt->insert('mesajlar', $data);

            flash('success', 'Teşekkürler', 'Mesajınız ilgili departmana iletilmiştir');

            redirect('iletisim');
        } else {
            $this->load->view('front/iletisim');
        }
    }
    
    public function sayfa($id)
    {
        $menu = $this->vt->single('menuler', ['id'=>$id]);
        if ($menu->turu == 1) {
            $sayfaverileri = $this->vt->single('sayfalar', ['id'=>$menu->link]);
            if ($sayfaverileri) {
                $data['sayfa'] = $sayfaverileri;
                $this->load->view('front/sayfa', $data);
            }
        } else {
            $this->load->view("front/$menu->link");
        }
    }
}
