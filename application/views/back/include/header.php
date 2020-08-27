<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Kariyer Sitesi V1</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/back/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/back/css/bootstrap-responsive.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/back/css/matrix-style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/back/css/matrix-media.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/back/font-awesome/css/font-awesome.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/back/css/uniform.css') ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php $admin = session('oku', 'admininfo') ?>
<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Kariyer Sitesi V1</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="javascript:void(0)" data-target="#profile-messages" class="dropdown-toggle"> <span class="text">Hoşgeldiniz <?= $admin->adsoyad ?></span></a></li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Mesajlar</span> <span class="label label-important"><?= countto('mesajlar', ['okundumu' => 0]) ?></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> yeni mesaj yaz</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="<?= linkto('admin/gelenkutusu') ?>"><i class="icon-envelope"></i> gelen kutusu</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="<?= linkto('admin/ayarlar') ?>"><i class="icon icon-cog"></i> <span class="text">Site Ayarları</span></a></li>
        <li class=""><a title="" href="<?= linkto('admin/cikis') ?>"><i class="icon icon-share-alt"></i> <span class="text">Çıkış Yap</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li><a href="<?= linkto('admin') ?>"><i class="icon icon-home"></i> <span>Anasayfa</span></a> </li>
        <li><a href="<?= linkto('admin/bloglar') ?>"><i class="icon icon-folder-close"></i> <span>Bloglar</span></a> </li>
        <li><a href="<?= linkto('admin/menuler') ?>"><i class="icon icon-list"></i> <span>Menüler</span></a> </li>
        <li><a href="<?= linkto('admin/sayfalar') ?>"><i class="icon icon-book"></i> <span>Sayfalar</span></a> </li>

        <?php if (!session('oku', 'deletefunc')): ?>
            <li class="content"> <span>Silme Fonksiyonu Kapalı</span>
                <div class="progress progress-mini progress-danger active progress-striped">
                    <div style="width: 100%;" class="bar"></div>
                </div>
                <span class="percent">
                    <a href="<?= linkto('admin/deletefunction') ?>"><button class="btn btn-mini btn-success">Çalıştır</button></a>
                </span>
            </li>
        <?php else: ?>
            <li class="content"> <span>Silme Fonksiyonu Kapalı</span>
                <div class="progress progress-mini progress-success active progress-striped">
                    <div style="width: 100%;" class="bar"></div>
                </div>
                <span class="percent">
                    <a href="<?= linkto('admin/deletefunction') ?>"><button class="btn btn-mini btn-danger">Kapat</button></a>
                </span>
            </li>
        <?php endif; ?>
    </ul>
</div>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?= linkto('admin') ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a>
