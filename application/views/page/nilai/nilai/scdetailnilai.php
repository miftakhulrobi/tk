<script>
    $('[name="mb"]').click(function() {
        const id = $(this).attr('data-id');
        $.ajax({
            url: '<?= base_url('nilai/updatenilai/mb/' . $table . '/') ?>' + id,
            type: "GET",
            dataType: 'json',
            success: function() {
                toastr.success("Berhasil memasukan nilai!");
                setInterval(function() {
                    window.location.href = "";
                }, 600);
            }
        })
    })
    $('[name="bb"]').click(function() {
        const id = $(this).attr('data-id');
        $.ajax({
            url: '<?= base_url('nilai/updatenilai/bb/' . $table . '/') ?>' + id,
            type: "GET",
            dataType: 'json',
            success: function() {
                toastr.success("Berhasil memasukan nilai!");
                setInterval(function() {
                    window.location.href = "";
                }, 600);
            }
        })
    })
    $('[name="bsh"]').click(function() {
        const id = $(this).attr('data-id');
        $.ajax({
            url: '<?= base_url('nilai/updatenilai/bsh/' . $table . '/') ?>' + id,
            type: "GET",
            dataType: 'json',
            success: function() {
                toastr.success("Berhasil memasukan nilai!");
                setInterval(function() {
                    window.location.href = "";
                }, 600);
            }
        })
    })
    $('[name="bsb"]').click(function() {
        const id = $(this).attr('data-id');
        $.ajax({
            url: '<?= base_url('nilai/updatenilai/bsb/' . $table . '/') ?>' + id,
            type: "GET",
            dataType: 'json',
            success: function() {
                toastr.success("Berhasil memasukan nilai!");
                setInterval(function() {
                    window.location.href = "";
                }, 600);
            }
        })
    })

    $('.btn-create-catatan').click(function(e) {
        e.preventDefault();
        const siswa_id = '<?= $siswa->siswa_id ?>';
        const class_id = '<?= $classes->class_id ?>';
        const year_id = '<?= $year->year_id ?>';
        const semester = '<?= $semester ?>';
        const bulan = '<?= $bulan ?>';
        const table = '<?= $table ?>';
        const catatan = $('[name="catatan"]').val();

        $.ajax({
            url: '<?= base_url('nilai/createcatatanaspek') ?>',
            type: 'POST',
            data: {
                siswa_id: siswa_id,
                class_id: class_id,
                year_id: year_id,
                semester: semester,
                bulan: bulan,
                table: table,
                catatan: catatan
            },
            dataType: 'json',
            success: function() {
                toastr.success('Nilai siswa berhasil di input!');
                $('#catatan-nilai-siswa').css('display', 'none');
            }
        })
    })
</script>