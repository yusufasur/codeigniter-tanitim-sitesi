<?php $this->load->view('back/include/header') ?>
<?= bread('devam', 'Mesajlar', linkto('admin/gelenkutusu')) ?>
<?= bread('tamam', 'Mesajı Görüntüle') ?>
    </div>
    </div>
    <div class="container-fluid">
        <h2 align="center">Mesaj İçeriği</h2>
        <hr>
        <div class="row-fluid">
            <?= flashread() ?>
            <div class="span6" style="margin-left: 10px">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> <a href="<?= linkto("admin/delete/mesajlar/id/$mesaj->id") ?>"><button class="btn btn-mini btn-danger">Mesajı Sil</button></a></span>
                        <h5><?= $mesaj->gonderenmail ?></h5>
                    </div>
                    <div class="widget-content">
                        <h5>Gönderen : <b><?= $mesaj->gonderen ?></b></h5>
                        <hr>
                        <p>Gönderilme Tarihi : <b><?= $mesaj->tarih ?></b></p>
                        <hr>
                        <p><?= $mesaj->icerik ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('back/include/footer') ?>