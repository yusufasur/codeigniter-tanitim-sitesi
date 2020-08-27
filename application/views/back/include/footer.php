
<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> <?= date('Y') ?> &copy; Tüm Hakları Saklıdır.<a href="http://simetrireklam.com"> Simetri Reklam Bünyesine Aittir. </a> </div>
</div>

<!--end-Footer-part-->

<script src="<?= base_url('assets/back/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/back/js/jquery.ui.custom.js') ?>"></script>
<script src="<?= base_url('assets/back/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/back/js/matrix.js') ?>"></script>
<script src="<?= base_url('assets/back/js/jquery.uniform.js') ?>"></script>
<script src="<?= base_url('assets/back/js/matrix.form_common.js') ?>"></script>
<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
crossorigin="anonymous"></script>
<script src="<?= base_url('assets/back/ckeditor/ckeditor.js') ?>"></script>
<script>
    $(function () {
        $('#siralama').sortable({
            handle: '.handle',
            update: function () {
                var yeniliste = $('#siralama').sortable('serialize');
                $('#sonuc').load('menusirasi?'+yeniliste);
                /*$('#sonuc').load('menusirasi?'+yeniliste);*/
                /*$.get(<?= linkto('admin/menusirasi') ?>, {$data: yeniliste});*/
            }
        });
        $('#altsiralama').sortable({
            handle: '.handlem',
            update: function () {
                var yeniliste = $('#altsiralama').sortable('serialize');
                $('#sonuc2').load('menusirasi?'+yeniliste);
                /*$('#sonuc').load('menusirasi?'+yeniliste);*/
                /*$.get(<?= linkto('admin/menusirasi') ?>, {$data: yeniliste});*/
            }
        });

        CKEDITOR.replace( 'editor' );
    });
</script>
</body>
</html>
