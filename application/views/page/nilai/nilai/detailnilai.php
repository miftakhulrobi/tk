<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Nilai Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
            <strong class="float-right"><?= $siswa->namasiswa ?></strong>
        </div>
    </div>
    <div class="card-body table-responsive">
        Bulan : <?= $bulan ?>
        <table class="table table-bordered table-striped table-hover mt-2">
            <thead class="bg-warning text-white">
                <tr>
                    <th>#</th>
                    <th>Kemampuan</th>
                    <th>MB</th>
                    <th>BB</th>
                    <th>BSH</th>
                    <th>BSB</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($aspekpengembangan as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a->kemampuan ?></td>
                        <?php if ($a->mb != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" name="mb" value="<?= $a->mb ?>" data-id="<?= $a->id ?>" checked disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bb" value="<?= $a->bb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsh" value="<?= $a->bsh ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsb" value="<?= $a->bsb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                        <?php elseif ($a->bb != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" name="mb" value="<?= $a->mb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bb" value="<?= $a->bb ?>" data-id="<?= $a->id ?>" checked disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsh" value="<?= $a->bsh ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsb" value="<?= $a->bsb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                        <?php elseif ($a->bsh != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" name="mb" value="<?= $a->mb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bb" value="<?= $a->bb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsh" value="<?= $a->bsh ?>" data-id="<?= $a->id ?>" checked disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsb" value="<?= $a->bsb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                        <?php elseif ($a->bsb != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" name="mb" value="<?= $a->mb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bb" value="<?= $a->bb ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsh" value="<?= $a->bsh ?>" data-id="<?= $a->id ?>" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsb" value="<?= $a->bsb ?>" data-id="<?= $a->id ?>" checked disabled>
                            </td>
                        <?php else : ?>
                            <td class="text-center">
                                <input type="checkbox" name="mb" value="<?= $a->mb ?>" data-id="<?= $a->id ?>">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bb" value="<?= $a->bb ?>" data-id="<?= $a->id ?>">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsh" value="<?= $a->bsh ?>" data-id="<?= $a->id ?>">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="bsb" value="<?= $a->bsb ?>" data-id="<?= $a->id ?>">
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <form id="catatan-nilai-siswa">
            <div class="form-group">
                <label for="">Catatan :</label>
                <textarea name="catatan" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-info float-right btn-create-catatan">Simpan Nilai</button>
            </div>
        </form>
    </div>
</div>