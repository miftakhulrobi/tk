<script>
    function showGuru(data) {
        this.nama = data.nama;
        this.username = data.username;
        this.tgllahir = data.tgllahir;
        this.alamat = data.alamat;
        this.pendidikanterakhir = data.pendidikanterakhir;
        this.mulaimengajar = data.mulaimengajar;
        this.pengampu = data.pengampu;
        this.telepon = data.telepon;

        this.detailGuru = function() {
            return `<table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>${data.nama}</td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>:</td>
                            <td>${data.username}</td>
                        </tr>

                        <tr>
                            <td>Tmp Tgl Lahir</td>
                            <td>:</td>
                            <td>${data.tgllahir}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>${data.alamat}</td>
                        </tr>
                        <tr>
                            <td>Pend. terakhir</td>
                            <td>:</td>
                            <td>${data.pendidikanterakhir}</td>
                        </tr>
                        <tr>
                            <td>Mulai Mengajar</td>
                            <td>:</td>
                            <td>${data.mulaimengajar}</td>
                        </tr>
                        <tr>
                            <td>Pengampu</td>
                            <td>:</td>
                            <td>${data.pengampu}</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td>${data.telepon}</td>
                        </tr>

                    </tbody>
                </table>`;
        }
    }

    const target = document.querySelector('#target');

    $('.show-guru').click(function(e) {
        e.preventDefault();
        const id = $(this).attr('data-guru');
        $.ajax({
            url: '<?= base_url('guru/showid/') ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let namaguru = new showGuru(data);
                target.innerHTML = namaguru.detailGuru();
            }
        })
    })
</script>