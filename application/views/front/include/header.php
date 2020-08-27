<?php $config = siteconfig(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title><?= isset($title) ? $title . ' | ' . $config->baslik : $config->baslik ?></title>

    <!-- Styles -->
    <link href="<?= base_url('assets/front/assets/css/app.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/front/assets/css/custom.css') ?>" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="<?= $config->favicon ?>">
</head>

<body class="nav-on-header smart-nav">

<!-- Navigation bar -->
<nav class="navbar">
    <div class="container">

        <!-- Logo -->
        <div class="pull-left">
            <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

            <div class="logo-wrapper">
                <a class="logo" href="<?= linkto(); ?>"><img src="<?= $config->logo ?>" alt="logo"></a>
                <a class="logo-alt" href="<?= linkto(); ?>"><img src="<?= $config->logo ?>" alt="logo-alt"></a>
            </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
            <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
            <?php foreach (menuler() as $menu): ?>
                <li>
                    <a href="<?= linkto($menu->sef) ?>"><?= $menu->ad ?></a>
                    <?php if ($altmenuler = altmenu($menu->id)): ?>
                        <ul>
                            <?php foreach ($altmenuler as $altmenu): ?>
                                <li><a href="<?= linkto($altmenu->sef) ?>"><?= $altmenu->ad ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- END Navigation menu -->

    </div>
</nav>
<!-- END Navigation bar -->
