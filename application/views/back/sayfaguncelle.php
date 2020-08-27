<?php $this->load->view('back/include/header') ?>
<?= bread('devam', 'Sayfalar') ?>
<?= bread('tamam', 'Sayfa Güncelle') ?>
    </div>
    <h1>Sayfa Güncelle</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-cog"></i> </span>
                        <h5>Sayfa Güncelle</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="<?= linkto('admin/sayfaguncelleto') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Sayfa Başlık :</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="baslik" value="<?= $sayfa->baslik ?>"/>
                                    <input type="hidden" name="id" value="<?= $sayfa->id ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Sayfa Mini Başlık :</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="minibaslik" value="<?= $sayfa->minibaslik ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Sayfa Arka Plan</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-undefined">
                                        <input type="file" name="bg">
                                        <span class="filename">Dosya Seçilmedi</span>
                                        <span class="action">Dosya Seçiniz</span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Sayfa Aktif Mi :</label>
                                <div class="controls">
                                    <select class="span11" name="aktif">
                                        <option <?= $sayfa->aktif == 1 ? 'selected' : null ?> value="1">Aktiff</option>
                                        <option <?= $sayfa->aktif == 0 ? 'selected' : null ?> value="0">Aktiff Değil</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Sayfa İçeriği :</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" name="yazi"><?= $sayfa->yazi ?></textarea>
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