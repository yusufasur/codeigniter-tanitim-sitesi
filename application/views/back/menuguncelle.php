<?php $this->load->view('back/include/header') ?>
    <?= bread('devam', 'Menüler', linkto('admin/menuler')) ?>
    <?= bread('tamam', 'Menü Güncelle') ?>
        </div>
            <h1>Menü Güncelle</h1>
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
                            <form action="<?= linkto('admin/menuguncelleto') ?>" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Menü Adı :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="menuadi" value="<?= $menu->ad ?>"/>
                                        <input type="hidden" name="id" value="<?= $menu->id ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Menü Türü : </label>
                                    <div class="controls">
                                        <label>
                                            <div class="radio">
                                                <span>
                                                    <input type="radio" name="tur" <?= $menu->turu == 0 ? 'checked' : null ?> value="0" onclick="linkok()" style="opacity: 0;">
                                                </span>
                                            </div>
                                            Link Yönlendirme
                                        </label>
                                        <?php if ($sayfalar): ?>
                                            <label>
                                                <div class="radio">
                                                    <span>
                                                        <input type="radio" name="tur" <?= $menu->turu == 1 ? 'checked' : null ?> value="1" onclick="sayfaok()" style="opacity: 0;">
                                                    </span>
                                                </div>
                                                Sayfa Seçme
                                            </label>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div <?= $menu->turu != 0 ? 'style="display: none"' : null ?> id="link" class="control-group">
                                    <label class="control-label">Link Yolu :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="link" <?php if($menu->turu==0): ?>value="<?= $menu->link ?>" <?php endif; ?>/>
                                    </div>
                                </div>
                                <div <?= $menu->turu != 1 ? 'style="display: none"' : null ?> id="sayfa" class="control-group">
                                    <label class="control-label">Sayfa Seçme :</label>
                                    <div class="controls">
                                        <select name="sayfa" id="" class="span11">
                                            <?php foreach ($sayfalar as $sayfa): ?>
                                                <option value="">Hakkımızda</option>
                                            <?php endforeach; ?>
                                        </select>
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