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
                        <td>
                            <?php if ($a->b != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->b ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($a->c != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->c ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($a->k != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->k ?>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php if ($ccatatan) : ?>
            <span><b>Catatan:</b></span><span class="float-right">Di input oleh: <?= $catatan->penginput ?></span>
            <p class="mt-3"><?= $catatan->catatan ?></p>
        <?php endif ?>
        <a target="_blank" href="<?= base_url('pdf/nilaiekstra/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/' . $table . '/' . $join) ?>" class="btn btn-info mt-4">Cetak Nilai</a>
    </div>
</div>