<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
            <span class="float-right">Perbarui Data Siswa</span>
        </div>
    </div>
    <div class="card-body table-responsive">
        <form action="<?= base_url('setting/updatesiswa') ?>" method="POST">
            <input type="hidden" name="class_id" value="<?= $siswa->class_id ?>">
            <input type="hidden" name="siswa_id" value="<?= $siswa->siswa_id ?>">
            <small>Nama Siswa</small>
            <div class="form-group row">
                <div class="col-md-8 mt-2">
                    <input type="text" name="namasiswa" class="form-control" placeholder="Nama Lengkap" value="<?= $siswa->namasiswa ?>" required>
                    <small class="text-success namasiswa-success"></small>
                    <small class="text-danger namasiswa-danger"></small>
                </div>
                <div class="col-md-4 mt-2">
                    <input type="text" name="namapgln" class="form-control" placeholder="Nama Panggilan" value="<?= $siswa->namapgln ?>" required>
                </div>
            </div>
            <small>Data Siswa</small>
            <div class="form-group row">
                <div class="col-md-8 mt-2">
                    <input type="text" name="noinduk" class="form-control" placeholder="No. Induk" value="<?= $siswa->noinduk ?>" required>
                    <small class="text-warning noinduk-warning"></small>
                </div>
                <div class="col-md-4 mt-2">
                    <select name="jk" class="form-control" required>
                        <option value="L">Laki-laki</option>
                        <option value="P" <?= $siswa->jk == 'P' ? 'selected' : null ?>>Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="tgllahir" class="form-control" placeholder="Tempat Tgl Lahir" value="<?= $siswa->tgllahir ?>" required>
                    <small class="text-success tgllahir-success"></small>
                    <small class="text-danger tgllahir-danger"></small>
                </div>
                <div class="col-md-3 mt-2">
                    <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= $siswa->agama ?>" required>
                </div>
                <div class="col-md-3 mt-2">
                    <input type="number" name="anakke" class="form-control" placeholder="Anak Ke" value="<?= $siswa->anakke ?>" required>
                </div>
            </div>
            <small>Orang Tua</small>
            <div class="form-group row">
                <div class="col-md-6 mt-2">
                    <input type="text" name="ayah" class="form-control" placeholder="Ayah" value="<?= $siswa->ayah ?>" required>
                    <small class="text-warning ayah-warning"></small>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="ibu" class="form-control" placeholder="Ibu" value="<?= $siswa->ibu ?>" required>
                    <small class="text-warning ibu-warning"></small>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="pekerjaanayah" class="form-control" placeholder="Pekerjaan Ayah" value="<?= $siswa->pekerjaanayah ?>" required>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="pekerjaanibu" class="form-control" placeholder="Pekerjaan Ibu" value="<?= $siswa->pekerjaanibu ?>" required>
                </div>
                <div class="col-md-12 mt-2">
                    <textarea type="text" name="alamatortu" class="form-control" placeholder="Alamat Orang Tua" required><?= $siswa->alamatortu ?></textarea>
                    <small class="text-warning alamatortu-warning"></small>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-create-siswa">Update</button>
            </div>
        </form>
    </div>
</div>