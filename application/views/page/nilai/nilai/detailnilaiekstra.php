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
                    <th>Program</th>
                    <th>B</th>
                    <th>C</th>
                    <th>K</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($ekstrakulikuler as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a->program ?></td>
                        <?php if ($a->b != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" checked disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" disabled>
                            </td>
                        <?php elseif ($a->c != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" disabled>
                            </td>
                        <?php elseif ($a->k != null) : ?>
                            <td class="text-center">
                                <input type="checkbox" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" disabled>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked disabled>
                            </td>
                        <?php else : ?>
                            <td class="text-center">
                                <input type="checkbox" name="b" value="<?= $a->b ?>" data-id="<?= $a->id ?>">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="c" value="<?= $a->c ?>" data-id="<?= $a->id ?>">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="k" value="<?= $a->k ?>" data-id="<?= $a->id ?>">
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