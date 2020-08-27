<?php $this->load->view('back/include/header') ?>
<?= bread('tamam', 'Bloglar') ?>
    </dic>
</dic>
<div class="container-fluid">
    <div class="row-fluid">
        <?= flashread() ?>
        <a href="<?= linkto('admin/blogekle') ?>"><button class="btn btn-primary">Yeni Ekle</button></a>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-folder-close"></i></span>
                <h5>Tüm Bloglar</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="activity-list">
                    <?php foreach ($bloglar as $blog): ?>
                        <li>
                            <a href="#"> <i class="icon-file"></i> <strong><?= $blog->baslik ?></strong> |
                                <a href=""><button class="btn btn-mini btn-info">Görüntüle</button></a>
                                <a href="<?= linkto("admin/blogguncelle/$blog->id") ?>"><button class="btn btn-mini btn-warning">Güncelle</button></a>
                                <a href="<?= linkto("admin/delete/blog/id/$blog->id") ?>"><button class="btn btn-mini btn-danger">Sil</button></a>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->load->view('back/include/footer') ?>