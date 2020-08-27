<?php $config = siteconfig() ?>
<!-- Site footer -->
<footer class="site-footer">

    <!-- Top section -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Hakkımızda</h6>
                <p class="text-justify"><?= $config->hakkimizda ?></p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Company</h6>
                <ul class="footer-links">
                    <li><a href="page-about.html">About us</a></li>
                    <li><a href="page-typography.html">How it works</a></li>
                    <li><a href="page-faq.html">Help center</a></li>
                    <li><a href="page-typography.html">Privacy policy</a></li>
                    <li><a href="page-contact.html">Contact us</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Trendeing jobs</h6>
                <ul class="footer-links">
                    <li><a href="job-list.html">Front-end developer</a></li>
                    <li><a href="job-list.html">Android developer</a></li>
                    <li><a href="job-list.html">iOS developer</a></li>
                    <li><a href="job-list.html">Full stack developer</a></li>
                    <li><a href="job-list.html">Project administrator</a></li>
                </ul>
            </div>
        </div>

        <hr>
    </div>
    <!-- END Top section -->

    <!-- Bottom section -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyrights &copy; <?= date('Y') ?> Tüm Hakları Saklıdır. <a href="http://codeigniter.com">Codeigniter</a>.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
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
    <!-- END Bottom section -->

</footer>
<!-- END Site footer -->


<!-- Back to top button -->
<a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
<!-- END Back to top button -->

<!-- Scripts -->
<script src="<?= base_url('assets/front/assets/js/app.min.js') ?>"></script>
<script src="<?= base_url('assets/front/assets/js/custom.js') ?>"></script>

</body>
</html>
