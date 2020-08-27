<?php $this->load->view('back/include/header') ?>
<?= bread('devam', 'Bloglar') ?>
<?= bread('tamam', 'Blog Güncelle') ?>
    </div>
    <h1>Blog Güncelle</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-cog"></i> </span>
                        <h5>Blog Güncelle</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="<?= linkto('admin/blogguncelleto') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Blog Başlık :</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="baslik" value="<?= $blog->baslik ?>"/>
                                    <input type="hidden" name="id" value="<?= $blog->id ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Blog Sayfası Arka Plan</label>
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
                                        <option <?= $blog->yorum == 1 ? 'selected' : null ?> value="1">Aktiff</option>
                                        <option <?= $blog->yorum == 0 ? 'selected' : null ?> value="0">Aktiff Değil</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Sayfa İçeriği :</label>
                                <div class="controls">
                                    <textarea class="span11" id="editor" name="yazi"><?= $blog->icerik ?></textarea>
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