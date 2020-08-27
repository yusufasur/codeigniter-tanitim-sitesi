<?php $this->load->view('front/include/header') ?>
<!-- Site header -->
<header class="page-header bg-img size-lg" style="background-image: url(<?= $sayfa->bg ?>)">
    <div class="container no-shadow">
        <h1 class="text-center"><?= $sayfa->baslik ?></h1>
        <p class="lead text-center"><?= $sayfa->minibaslik ?></p>
    </div>
</header>
<!-- END Site header -->


<!-- Main container -->
<main>



    <!-- About -->
    <section>
        <div class="container">
            <?= $sayfa->yazi ?>
        </div>
    </section>
    <!-- END About -->





</main>
<!-- END Main container -->
<?php $this->load->view('front/include/footer') ?>