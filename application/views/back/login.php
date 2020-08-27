<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <title>Kariyer Sitesi V1</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/back/') ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/back/') ?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/back/') ?>css/matrix-login.css" />
    <link href="<?= base_url('assets/back/') ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
    <form id="loginform" class="form-vertical" action="<?= base_url('auth/loginto') ?>" method="post">
        <?= flashread() ?>
        <div class="control-group normal_text"> <h3><img src="<?= base_url('assets/back/') ?>img/logo.png" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="kadi" required placeholder="Kullanıcı Adı" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="sifre" required placeholder="Şifre" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Şifremi Unuttum</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success"> Giriş</button></span>
        </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
        </div>
    </form>
</div>

<script src="<?= base_url('assets/back/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/back/') ?>js/matrix.login.js"></script>
<script src="<?= base_url('assets/back/js/excanvas.min.js') ?>"></script>
<script src="<?= base_url('assets/back/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/back/js/jquery.ui.custom.js') ?>"></script>
<script src="<?= base_url('assets/back/js/bootstrap.min.js') ?>"></script>
</body>

</html>
