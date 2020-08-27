<?php $this->load->view('back/include/header') ?>
    <?= bread('devam', 'Menüler', linkto('admin/menuler')) ?>
    <?= bread('tamam', 'Alt Menü Ekle') ?>
        </div>
            <h1>Alt Menü Ekle</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-cog"></i> </span>
                            <h5>Alt Menü Ekle</h5>
                        </div>
                        <?= flashread() ?>
                        <div class="widget-content nopadding">
                            <form action="<?= linkto('admin/altmenuekleto') ?>" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Alt Menü Adı :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="menuadi"/>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Üst Menü Seçiniz :</label>
                                    <div class="controls">
                                        <select name="ustmenu" class="span11">
                                            <?php foreach ($menuler as $menu): ?>
                                                <option value="<?= $menu->id ?>"><?= $menu->ad ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Menü Türü : </label>
                                    <div class="controls">
                                        <label>
                                            <div class="radio"><span><input type="radio" required name="tur" value="0" onclick="linkok()" style="opacity: 0;"></span></div>
                                            Link Yönlendirme</label>
                                        <?php if ($sayfalar): ?>
                                        <label>
                                            <div class="radio"><span class=""><input type="radio" name="tur" value="1" onclick="sayfaok()" style="opacity: 0;"></span></div>
                                            Sayfa Seçme</label>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div style="display: none" id="link" class="control-group">
                                    <label class="control-label">Link Yolu :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="link"/>
                                    </div>
                                </div>
                                <div style="display: none" id="sayfa" class="control-group">
                                    <label class="control-label">Sayfa Seçme :</label>
                                    <div class="controls">
                                        <select name="sayfa" id="" class="span11">
                                            <?php foreach ($sayfalar as $sayfa): ?>
                                                <option value="<?= $sayfa->id ?>"><?= $sayfa->baslik ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success btn-large btn-block">Ekle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var linkok = function () {
            $('#sayfa').hide();
            $('#link').show();
        }
        var sayfaok = function () {
            $('#link').hide();
            $('#sayfa').show();
        }
    </script>
<?php $this->load->view('back/include/footer') ?>