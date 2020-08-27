<?php $this->load->view('back/include/header') ?>
<?= bread('tamam', 'Menüler') ?>
    </div>
</div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <hr>
        <?= flashread() ?>
        <div class="span5">
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li class="bg_lb"> <a href="<?= linkto('admin/menuekle') ?>"> <i class="icon-plus"></i> Menü Ekle </a> </li>
                    <li class="bg_lg"> <a href="<?= linkto('admin/altmenuekle') ?>"> <i class="icon-plus"></i> Alt Menü Ekle </a> </li>
                    <li class="bg_ly"> <a href="#menugizli" data-toggle="collapse"> <i class="icon-list"></i> Menü Sırası </a> </li>
                </ul>
            </div>

            <div id="menugizli" class="row-fluid collapse">
                <div class="span11 widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-file"></i></span>
                        <h5>Menü Sıralaması</h5>
                    </div>
                    <div align="center" id="sonuc">Sıralamayı okları sürükleyerek yapabilirsiniz.</div>
                    <br>
                    <ul id="siralama">
                        <?php foreach ($menuler as $menu): ?>
                            <li id="sira_<?= $menu->id ?>"><i style="cursor: grab;" class="icon icon-move handle"></i> <?= $menu->ad ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
        <!--End-Action boxes-->

        <div class="row-fluid">
            <div class="span7">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Aktif Menüler</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Menü Adı</th>
                                <th>Menü Türü</th>
                                <th>Menü Sırası</th>
                                <th>Menü İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($menuler as $menu): ?>
                                <tr class="odd gradeX">
                                    <td><?= $menu->ad ?></td>
                                    <td><?= $menu->turu==0 ? 'Link Yönlendirme' : 'Sayfa Seçimi' ?></td>
                                    <td><?= $menu->sira ?></td>
                                    <td class="center">
                                        <?php if (altmenu($menu->id)): ?>
                                            <a href="#<?= $menu->id ?>" data-toggle="collapse"><button class="btn btn-mini btn-warning">Alt Menü İşlemleri</button></a>
                                            <a href="#sira<?= $menu->id ?>" data-toggle="collapse"><button class="btn btn-mini btn-success">Alt Menü Sıralama</button></a>
                                        <?php endif; ?>
                                        <a href="<?= linkto("admin/menuguncelle/$menu->id") ?>"><button class="btn btn-mini btn-primary">Güncelle</button></a>
                                        <a href="<?= linkto("admin/delete/menuler/id/$menu->id") ?>"><button class="btn btn-mini btn-danger">Sil</button></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php foreach ($altmenuler as $alt): ?>
                    <div id="sira<?= $alt->ustmenu ?>" class="row-fluid collapse">
                        <div class="span11 widget-box">
                            <div class="widget-title">
                                <span class="icon"><i class="icon-file"></i></span>
                                <h5>Menü Sıralaması</h5>
                            </div>
                            <div align="center" id="sonuc2">Sıralamayı okları sürükleyerek yapabilirsiniz.</div>
                            <br>
                            <ul id="altsiralama">
                                <?php
                                $altmenusirasi = altmenu($alt->ustmenu);
                                foreach ($altmenusirasi as $altsira): ?>
                                    <li id="sira_<?= $altsira->id ?>"><i style="cursor: grab;" class="icon icon-move handlem"></i> <?= $altsira->ad ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($altmenuler as $altmenu): ?>
                    <div class="collapse" id="<?= $altmenu->ustmenu ?>">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Alt Menü Adı</th>
                                <th>Alt Menü Türü</th>
                                <th>Alt Menü Sırası</th>
                                <th>Alt Menü İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach (altmenu($altmenu->ustmenu) as $altmenuitem): ?>
                                <tr class="odd gradeX">
                                    <td><?= $altmenuitem->ad ?></td>
                                    <td><?= $altmenuitem->turu==0 ? 'Link Yönlendirme' : 'Sayfa Seçimi' ?></td>
                                    <td><?= $altmenuitem->sira ?></td>
                                    <td class="center">
                                        <a href="<?= linkto("admin/altmenuguncelle/$altmenuitem->id") ?>"><button class="btn btn-mini btn-primary">Güncelle</button></a>
                                        <a href="<?= linkto("admin/delete/menuler/id/$altmenuitem->id") ?>"><button class="btn btn-mini btn-danger">Sil</button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->
<?php $this->load->view('back/include/footer') ?>