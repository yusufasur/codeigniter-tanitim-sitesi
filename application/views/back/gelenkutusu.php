<?php $this->load->view('back/include/header') ?>
<?= bread('tamam', 'Gelen Kutusu') ?>
    </div>
</div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <h2 align="center">MESAJLAR</h2>
        <hr>
        <?= flashread() ?>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Mesajlar</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Gönderilme Tarihi</th>
                                <th>Gönderen Ad Soyad</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mesajlar as $mesaj): ?>
                                <tr class="odd gradeX">
                                    <td><?= $mesaj->tarih ?></td>
                                    <td><?= $mesaj->gonderen ?></td>
                                    <td class="center">
                                        <a href="<?= linkto("admin/mesaj/$mesaj->id") ?>"><button class="btn btn-mini btn-warning">Mesajı Görüntüle</button></a>
                                        <a href="<?= linkto("admin/delete/mesajlar/id/$mesaj->id") ?>"><button class="btn btn-mini btn-danger">Sil</button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->
<?php $this->load->view('back/include/footer') ?>