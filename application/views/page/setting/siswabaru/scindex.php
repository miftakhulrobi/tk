<script>
    function showSiswa(data) {
        this.namasiswa = data.namasiswa;
        this.namapgln = data.namapgln;
        this.noinduk = data.noinduk;
        this.jk = data.jk;
        this.tgllahir = data.tgllahir;
        this.agama = data.agama;
        this.anakke = data.anakke;
        this.ayah = data.ayah;
        this.ibu = data.ibu;
        this.pekerjaanayah = data.pekerjaanayah;
        this.pekerjaanibu = data.pekerjaanibu;
        this.alamatortu = data.alamatortu;
        this.detail = function() {
            return `<table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>${this.namasiswa}</td>
                        </tr>
                        <tr>
                            <td>Nama Panggilan</td>
                            <td>:</td>
                            <td>${this.namapgln}</td>
                        </tr>

                        <tr>
                            <td>No. Induk</td>
                            <td>:</td>
                            <td>${this.noinduk}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>${this.jk}</td>
                        </tr>
                        <tr>
                            <td>Tmp Tgl Lahir</td>
                            <td>:</td>
                            <td>${this.tgllahir}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>${this.agama}</td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>:</td>
                            <td>${this.anakke}</td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td>${this.ayah}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td>${this.ibu}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ayah</td>
                            <td>:</td>
                            <td>${this.pekerjaanayah}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>:</td>
                            <td>${this.pekerjaanibu}</td>
                        </tr>
                        <tr>
                            <td>Alamat Ortu</td>
                            <td>:</td>
                            <td>${this.alamatortu}</td>
                        </tr>

                    </tbody>
                </table>`;
        }
    }

    const target = document.getElementById('target');
    $('.detail').click(function() {
        const id = $(this).attr('siswa_id');

        $.ajax({
            url: '<?= base_url('setting/getsiswaid/') ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                let siswa = new showSiswa(data);
                target.innerHTML = siswa.detail();
            }
        })
    })
</script>