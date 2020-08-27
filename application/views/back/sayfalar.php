<?php $this->load->view('back/include/header') ?>
<?= bread('tamam', 'Sayfalar') ?>
    </div>
</div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <h2 align="center">SAYFALAR</h2>
        <hr>
        <?= flashread() ?>
        <div class="row-fluid">
            <div class="span12">
                <a href="<?= linkto('admin/sayfaekle') ?>"><button class="btn btn-primary"> <i class="icon icon-plus"></i> Yeni Ekle</button></a>
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Sayfalar</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sayfa Adı</th>
                                <th>Sayfa Mini Başlık</th>
                                <th>Sayfa Arka Plan</th>
                                <th>Sayfa Durumu</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($sayfalar as $sayfa): ?>
                                <tr class="odd gradeX">
                                    <td><?= $sayfa->baslik ?></td>
                                    <td><?= $sayfa->minibaslik ?></td>
                                    <td><img src="<?= $sayfa->bg ?>" width="50"></td>
                                    <td class="center"><?= $sayfa->aktif == 1 ? 'Aktif' : 'Aktif Değil' ?></td>
                                    <td class="center">
                                        <a href="<?= linkto("admin/sayfaguncelle/$sayfa->id") ?>"><button class="btn btn-mini btn-primary">Güncelle</button></a>
                                        <a href="<?= linkto("admin/delete/sayfalar/id/$sayfa->id") ?>"><button class="btn btn-mini btn-danger">Sil</button></a>
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