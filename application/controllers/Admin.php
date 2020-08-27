<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('vt');

        $kontrol = session('oku', 'adminlogin');
        if (!$kontrol) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->load->view('back/panel');
    }

    // AYAR İŞLEMLERİ //
    public function ayarlar()
    {
        $data['ayarlar'] = $this->vt->single('siteayarlari', ['id' => 1]);
        $this->load->view('back/ayarlar', $data);
    }

    public function ayarupdate()
    {
        $config['upload_path'] = 'assets/image/site/';
        $config['allowed_types'] = 'png|jpg|ico';
        /*$config['min_width'] = '100';
        $config['min_height'] = '100';*/
        $config['remove_space'] = true;

        $data = [
            'baslik' => postval('siteadi'),
            'hakkimizda' => postval('hakkimizda'),
            'facebook' => postval('facebook'),
            'twitter' => postval('twitter'),
            'instagram' => postval('instagram'),
            'youtube' => postval('youtube'),
            'linkedin' => postval('linkedin')
        ];

        if (upload($config, 'bg') != 'err') {
            $data['anasayfabg'] = upload($config, 'bg');
        }
        if (upload($config, 'logo') != 'err') {
            $data['logo'] = upload($config, 'logo');
        }
        if (upload($config, 'favicon') != 'err') {
            $data['favicon'] = upload($config, 'favicon');
        }

        $sonuc = $this->vt->update('siteayarlari', ['id' => 1], $data);
        if ($sonuc) {
            flash('success', 'Başarılı', 'Site ayarlarınız güncellendi.');
            redirect('admin/ayarlar');
        } else {
            flash('danger', 'Güncelleme başarısız.', 'Güncelleme işlemi sırasında bir hata oluştu..');
            redirect('admin/ayarlar');
        }

    }

    // AYAR İŞLEMLERİ SON //

    // MENÜ İŞLEMLERİ //
    public function menuler()
    {
        $data['menuler'] = $this->vt->multiple('menuler', ['ustmenu'=>0], 'sira', 'ASC');
        $data['altmenuler'] = $this->vt->groupby('menuler', ['ustmenu !='=>0], 'ustmenu', 'sira', 'ASC');
        $this->load->view('back/menuler', $data);
    }

    public function menuekle()
    {
        $data['sayfalar'] = $this->vt->multiple('sayfalar', ['aktif' => 1]);
        $this->load->view('back/menuekle', $data);
    }

    public function menuguncelle($id)
    {
        $data['menu'] = $this->vt->single('menuler', ['id' => $id]);
        $data['sayfalar'] = $this->vt->multiple('sayfalar', ['aktif' => 1]);
        $this->load->view('back/menuguncelle', $data);
    }

    public function menuguncelleto()
    {
        $data['ad'] = postval('menuadi');
        $data['turu'] = postval('tur');
        $data['sef'] = sef(postval('menuadi'));

        if ($data['turu'] == 1) {
            $data['link'] = postval('sayfa');
        } else {
            $data['link'] = postval('link');
        }

        $id = postval('id');

        $this->vt->update('menuler', ['id' => $id], $data);

        flash('success', 'Başarılı', 'Menü başarıyla güncellendi.');

        redirect('admin/menuler');
    }

    public function altmenuekle()
    {
        $data['menuler'] = $this->vt->multiple('menuler', ['ustmenu' => 0]);
        $data['sayfalar'] = $this->vt->multiple('sayfalar', ['aktif' => 1]);
        $this->load->view('back/altmenuekle', $data);
    }

    public function altmenuguncelle($id)
    {
        $data['altmenu'] = $this->vt->single('menuler', ['id' => $id]);
        $data['sayfalar'] = $this->vt->multiple('sayfalar', ['aktif' => 1]);
        $data['menuler'] = $this->vt->multiple('menuler', ['ustmenu' => 0]);
        $this->load->view('back/altmenuguncelle', $data);
    }

    public function menuekleto()
    {
        $sira = $this->vt->single('menuler', ['ustmenu' => 0], 'id', 'DESC');
        if ($sira == '') {
            $sira = 1;
        } else {
            $sira = $sira->sira;
            $sira++;
        }

        $data['ad'] = postval('menuadi');
        $data['turu'] = postval('tur');
        $data['sira'] = $sira;
        $data['sef'] = sef(postval('menuadi'));

        if ($data['turu'] == 1) {
            $data['link'] = postval('sayfa');
        } else {
            $data['link'] = postval('link');
        }

        $this->vt->insert('menuler', $data);

        flash('success', 'Başarılı', 'Menü başarıyla oluşturuldu.');

        redirect('admin/menuler');
    }

    public function altmenuekleto()
    {
        $data['ustmenu'] = postval('ustmenu');
        $data['ad'] = postval('menuadi');
        $data['turu'] = postval('tur');
        $data['sef'] = sef(postval('menuadi'));

        $sira = $this->vt->single('menuler', ['ustmenu' => $data['ustmenu']], 'id', 'DESC');
        if ($sira == '') {
            $sira=1;
        } else {
            $sira = $sira->sira;
            $sira++;
        }

        if ($data['turu'] == 1) {
            $data['link'] = postval('sayfa');
        } else {
            $data['link'] = postval('link');
        }

        $data['sira'] = $sira;


        $this->vt->insert('menuler', $data);

        flash('success', 'Başarılı', 'Alt menü başarıyla oluşturuldu.');

        redirect('admin/menuler');
    }

    public function altmenuguncelleto()
    {
        $data['ustmenu'] = postval('ustmenu');
        $data['ad'] = postval('menuadi');
        $data['turu'] = postval('tur');
        $data['sira'] = 1;
        $data['sef'] = sef(postval('menuadi'));

        if ($data['turu'] == 1) {
            $data['link'] = postval('sayfa');
        } else {
            $data['link'] = postval('link');
        }

        $this->vt->update('menuler', ['id' => postval('id')], $data);

        flash('success', 'Başarılı', 'Alt menü başarıyla güncellendi.');

        redirect('admin/menuler');
    }

    public function menusirasi()
    {
        foreach ($_GET['sira'] as $siralama => $id) {
            $query = "UPDATE menuler SET sira= $siralama WHERE id = $id";
            $this->db->query($query);
        }
        echo '<div class="alert alert-success">Başarıyla güncellendi.</div>';
    }

    // MENÜ İŞLEMLERİ SON //

    // SAYFA İŞLEMLERİ //
    public function sayfalar()
    {
        $data['sayfalar'] = $this->vt->multiple('sayfalar');
        $this->load->view('back/sayfalar', $data);
    }

    public function sayfaekle()
    {
        $this->load->view('back/sayfaekle');
    }

    public function sayfaguncelle($id)
    {
        $data['sayfa'] = $this->vt->single('sayfalar', ['id' => $id]);
        $this->load->view('back/sayfaguncelle', $data);
    }

    public function sayfaekleto()
    {
        $config['upload_path'] = 'assets/image/sayfalar/';
        $config['allowed_types'] = 'png|jpg|ico';
        $config['remove_space'] = true;

        $data['baslik'] = postval('baslik');
        $data['minibaslik'] = postval('minibaslik');
        $data['yazi'] = postval('yazi');
        $data['aktif'] = postval('aktif');
        /*$data['tarih'] = date('d-m-Y H:i:s');*/
        $data['sef'] = sef(postval('baslik'));

        $data['bg'] = upload($config, 'bg');

        $this->vt->insert('sayfalar', $data);

        flash('success', 'Başarılı', 'Sayfa başarıyla oluşturuldu.');
        redirect('admin/sayfalar');
    }

    public function sayfaguncelleto()
    {
        $config['upload_path'] = 'assets/image/sayfalar/';
        $config['allowed_types'] = 'png|jpg|ico';
        $config['remove_space'] = true;

        $data['baslik'] = postval('baslik');
        $data['minibaslik'] = postval('minibaslik');
        $data['yazi'] = postval('yazi');
        $data['aktif'] = postval('aktif');
        /*$data['tarih'] = date('d-m-Y H:i:s');*/
        $data['sef'] = sef(postval('baslik'));

        if (upload($config, 'bg') != 'err') {
            $data['bg'] = upload($config, 'bg');
        }

        $this->vt->update('sayfalar', ['id' => postval('id')], $data);

        flash('success', 'Başarılı', 'Sayfa başarıyla güncellendi.');
        redirect('admin/sayfalar');
    }
    // SAYFA İŞLEMLERİ SON //
    
    // MESAJ İŞLEMLERİ //
    public function gelenkutusu()
    {
        $data['mesajlar'] = $this->vt->multiple('mesajlar', [], 'id', 'DESC');
        $this->load->view('back/gelenkutusu', $data);
    }


    public function mesaj($id)
    {
        $data['mesaj'] = $this->vt->single('mesajlar', ['id' => $id]);
        $this->vt->update('mesajlar', ['id' => $id], ['okundumu' => 1]);
        $this->load->view('back/mesaj', $data);
    }

    // MESAJ İŞLEMLERİ SON //

    // BLOG İŞLEMLERİ //
    public function bloglar()
    {
        $data['bloglar'] = $this->vt->multiple('blog', [], 'id', 'DESC');
        $this->load->view('back/bloglar', $data);
    }

    public function blogekle()
    {
        $this->load->view('back/blogekle');
    }

    public function blogguncelle($id)
    {
        $data['blog'] = $this->vt->single('blog', ['id' => $id]);
        $this->load->view('back/blogguncelle', $data);
    }

    public function blogekleto()
    {
        $config['upload_path'] = 'assets/image/blog/';
        $config['allowed_types'] = 'png|jpg';
        $config['remove_space'] = true;

        $data['baslik'] = postval('baslik');
        $data['tarih'] = date('Y-m-d');
        $data['icerik'] = postval('yazi');
        $data['yorum'] = postval('aktif');
        $data['sef'] = sef(postval('baslik'));

        $data['bg'] = upload($config, 'bg');

        $this->vt->insert('blog', $data);

        flash('success', 'Başarılı', 'Blog sayfası başarıyla oluşturuldu.');
        redirect('admin/bloglar');
    }


    public function blogguncelleto()
    {
        $config['upload_path'] = 'assets/image/blog/';
        $config['allowed_types'] = 'png|jpg';
        $config['remove_space'] = true;

        $data['baslik'] = postval('baslik');
        $data['tarih'] = date('Y-m-d');
        $data['icerik'] = postval('yazi');
        $data['yorum'] = postval('aktif');
        $data['sef'] = sef(postval('baslik'));

        if (upload($config, 'bg') != 'err') {
            $data['bg'] = upload($config, 'bg');
        }

        $this->vt->update('blog', ['id' => postval('id')], $data);

        flash('success', 'Başarılı', 'Blog başarıyla güncellendi.');
        redirect('admin/bloglar');
    }
    // BLOG İŞLEMLERİ SON //

    // GENEL FONKSİYONLAR //
    
    public function deletefunction()
    {
        if (session('oku', 'deletefunc')) {
            $this->session->unset_userdata('deletefunc');
            geri();
        } else {
            session('yaz', 'deletefunc', 'true');
            geri();
        }
    }

    public function delete($from, $where, $id)
    {
        if (session('oku', 'deletefunc')) {
            if ($from == 'menuler') {
                if (tekveri('menuler', 'ustmenu', $id)) {
                    flash('danger', 'HATA!', 'Bu menünün alt menüleri vardır. Menü kaldırmadan önce alt menülerini siliniz.');
                    geri();
                }
            }
            if ($from == 'mesajlar') {
                $this->vt->delete($from, $where, $id);
                flash('success', 'Başarılı', 'Silme işlemi başarıyla gerçekleşti');
                redirect('admin/gelenkutusu');
            }
            $this->vt->delete($from, $where, $id);
            flash('success', 'Başarılı', 'Silme işlemi başarıyla gerçekleşti');
            geri();
        } else {
            flash('warning', 'Hata', 'Silme işlemini yapabilmek için Silme Fonksiyonunu çalıştırmalısınız.');
            geri();
        }
    }

    public function cikis()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    // GENEL FONKSİYONLAR SON //
}
