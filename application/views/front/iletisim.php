<?php $this->load->view('front/include/header') ?>
<!-- Site header -->
<header class="page-header bg-img size-lg" style="background-image: url(assets/image/sayfalar/iletisim.jpg)">
    <div class="container no-shadow">
        <h1 class="text-center">İletişim</h1>
        <p class="lead text-center">Bizimle iletişime geçin.</p>
        <?= flashread() ?>
    </div>
</header>
<!-- END Site header -->


<!-- Main container -->
<main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <h4>İletişim Formu</h4>
                    <form action="<?= linkto('home/iletisim') ?>" method="post">
                        <div class="form-group">
                            <input type="text" required class="form-control input-lg" name="adsoyad" placeholder="Ad-Soyad">
                        </div>

                        <div class="form-group">
                            <input type="email" required class="form-control input-lg" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" required rows="5" name="mesaj" placeholder="Mesajınız..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </form>
                </div>

                <div class="col-sm-12 col-md-4">
                    <h4>İletişim Adresleri</h4>
                    <div class="highlighted-block">
                        <dl class="icon-holder">
                            <dt><i class="fa fa-map-marker"></i></dt>
                            <dd>Bilecik/Merkez</dd>

                            <dt><i class="fa fa-phone"></i></dt>
                            <dd>0500 500 50 50</dd>

                            <dt><i class="fa fa-fax"></i></dt>
                            <dd>0500 500 50 50</dd>

                            <dt><i class="fa fa-envelope"></i></dt>
                            <dd>info@jobmonster.com</dd>
                        </dl>
                    </div>

                    <br>

                    <ul class="social-icons size-sm text-center">
                        <?php $config = siteconfig() ?>
                        <?php if ($config->facebook != ''): ?>
                            <li><a class="facebook" href="http://www.facebook.com/<?= $config->facebook ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if ($config->twitter != ''): ?>
                            <li><a class="twitter" href="http://www.twitter.com/<?= $config->twitter ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if ($config->linkedin != ''): ?>
                            <li><a class="linkedin" href="http://www.linkedin.com/<?= $config->linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if ($config->instagram != ''): ?>
                            <li><a class="instagram" href="http://www.instagram.com/<?= $config->instagram ?>"><i class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if ($config->youtube != ''): ?>
                            <li><a class="youtube" href="http://www.youtube.com/<?= $config->youtube ?>"><i class="fa fa-youtube"></i></a></li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>

        </div>
    </section>


</main>
<!-- END Main container -->
<?php $this->load->view('front/include/footer') ?>