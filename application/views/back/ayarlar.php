<?php $this->load->view('back/include/header') ?>
    <?= bread('tamam', 'Site Ayarları') ?>
        </div>
            <h1>Site Ayarları</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-cog"></i> </span>
                            <h5>Site Ayarları</h5>
                        </div>
                        <?= flashread() ?>
                        <div class="widget-content nopadding">
                            <form action="<?= linkto('admin/ayarupdate') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Site Adı :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="siteadi" value="<?= $ayarlar->baslik ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Facebook :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="facebook" value="<?= $ayarlar->facebook ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Twitter :</label>
                                    <div class="controls">
                                        <input type="text"  class="span11" name="twitter" value="<?= $ayarlar->twitter ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">İnstagram :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="instagram" value="<?= $ayarlar->instagram ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Youtube :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="youtube" value="<?= $ayarlar->youtube ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Linkedin :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="linkedin" value="<?= $ayarlar->linkedin ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Anasayfa Arka Plan</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="bg">
                                            <span class="filename">Dosya Seçilmedi</span>
                                            <span class="action">Dosya Seçiniz</span>
                                        </div>
                                        <img width="100" src="<?= $ayarlar->anasayfabg ?>" alt="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Site Logo</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="logo">
                                            <span class="filename">Dosya Seçilmedi</span>
                                            <span class="action">Dosya Seçiniz</span>
                                        </div>
                                        <img width="100" src="<?= $ayarlar->logo ?>" alt="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Site Favicon</label>
                                    <div class="controls">
                                        <div class="uploader" id="uniform-undefined">
                                            <input type="file" name="favicon">
                                            <span class="filename">Dosya Seçilmedi</span>
                                            <span class="action">Dosya Seçiniz</span>
                                        </div>
                                        <img width="100" src="<?= $ayarlar->favicon ?>" alt="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Hakkımızda :</label>
                                    <div class="controls">
                                        <textarea class="span11" name="hakkimizda"><?= $ayarlar->hakkimizda ?></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success btn-large btn-block">Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('back/include/footer') ?>