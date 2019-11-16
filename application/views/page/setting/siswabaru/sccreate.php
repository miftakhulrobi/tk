<!-- <script src="<?= base_url('assets') ?>/js/sweetalert.min.js"></script> -->
<script>
    $('[name="namasiswa"]').keyup(function() {
        if (this.value.length < 5) {
            $('.namasiswa-danger').text('Minimal 5 karakter!');
            $('.namasiswa-success').text('');
            $('.btn-create-siswa').attr('disabled', 'disabled');
        } else {
            $('.namasiswa-danger').text('');
            $('.namasiswa-success').text('Nice');
            $('.btn-create-siswa').removeAttr('disabled');
        }
    })

    $('[name="tgllahir"]').keyup(function() {
        if (this.value.length < 8) {
            $('.tgllahir-danger').text('Minimal 8 karakter!');
            $('.tgllahir-success').text('');
            $('.btn-create-siswa').attr('disabled', 'disabled');
        } else {
            $('.tgllahir-danger').text('');
            $('.tgllahir-success').text('Nice');
            $('.btn-create-siswa').removeAttr('disabled');
        }
    })

    $('[name="noinduk"]').keyup(function() {
        $('.noinduk-warning').text('Jangan sampai salah memasukkan angka!');
    })

    $('[name="ayah"]').keyup(function() {
        $('.ayah-warning').text('Harus sesuai!');
    })

    $('[name="ibu"]').keyup(function() {
        $('.ibu-warning').text('Harus sesuai!');
    })

    $('[name="alamatortu"]').keyup(function() {
        $('.alamatortu-warning').text('Data alamat harus lengkap!');
    })
</script>