</div>
</div>
</div>
<div class="footer fixed-bottom">
    <div class="text-center">
        <p>Copyright 2019 - by <span style="color:darkorange"><?= $this->auths->app()->by ?></span></p>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="<?= base_url('assets') ?>/js/jquery.3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    const success = '<?= $this->session->flashdata('success') ?>';
    const error = '<?= $this->session->flashdata('error') ?>';
    if (success) {
        toastr.success("<?= $this->session->flashdata('success') ?>")
    }
    if (error) {
        toastr.error("<?= $this->session->flashdata('error') ?>")
    }

    window.setTimeout('waktu()', 1000);

    function waktu() {
        var waktu = new Date();
        setTimeout('waktu()', 1000);
        document.getElementById('jam').innerHTML = waktu.getHours();
        document.getElementById('menit').innerHTML = waktu.getMinutes();
        document.getElementById('detik').innerHTML = waktu.getSeconds();
    }
</script>