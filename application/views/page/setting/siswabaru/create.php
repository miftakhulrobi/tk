<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
            <span class="float-right">Tambah Siswa</span>
        </div>
    </div>
    <div class="card-body table-responsive">
        <form action="<?= base_url('setting/storesiswa') ?>" method="POST">
            <input type="hidden" name="class_id" value="<?= $classes->class_id ?>">
            <input type="hidden" name="year_id" value="<?= $year->year_id ?>">
            <small>Nama Siswa</small>
            <div class="form-group row">
                <div class="col-md-8 mt-2">
                    <input type="text" name="namasiswa" class="form-control" placeholder="Nama Lengkap" required>
                    <small class="text-success namasiswa-success"></small>
                    <small class="text-danger namasiswa-danger"></small>
                </div>
                <div class="col-md-4 mt-2">
                    <input type="text" name="namapgln" class="form-control" placeholder="Nama Panggilan" required>
                </div>
            </div>
            <small>Data Siswa</small>
            <div class="form-group row">
                <div class="col-md-8 mt-2">
                    <input type="text" name="noinduk" class="form-control" placeholder="No. Induk" required>
                    <small class="text-warning noinduk-warning"></small>
                </div>
                <div class="col-md-4 mt-2">
                    <select name="jk" class="form-control" required>
                        <option value="">-Jenis Kelamin-</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="tgllahir" class="form-control" placeholder="Tempat Tgl Lahir" required>
                    <small class="text-success tgllahir-success"></small>
                    <small class="text-danger tgllahir-danger"></small>
                </div>
                <div class="col-md-3 mt-2">
                    <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                </div>
                <div class="col-md-3 mt-2">
                    <input type="number" name="anakke" class="form-control" placeholder="Anak Ke" required>
                </div>
            </div>
            <small>Orang Tua</small>
            <div class="form-group row">
                <div class="col-md-6 mt-2">
                    <input type="text" name="ayah" class="form-control" placeholder="Ayah" required>
                    <small class="text-warning ayah-warning"></small>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="ibu" class="form-control" placeholder="Ibu" required>
                    <small class="text-warning ibu-warning"></small>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="pekerjaanayah" class="form-control" placeholder="Pekerjaan Ayah" required>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="pekerjaanibu" class="form-control" placeholder="Pekerjaan Ibu" required>
                </div>
                <div class="col-md-12 mt-2">
                    <textarea type="text" name="alamatortu" class="form-control" placeholder="Alamat Orang Tua" required></textarea>
                    <small class="text-warning alamatortu-warning"></small>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-create-siswa">Tambah</button>
            </div>
        </form>
    </div>
</div>