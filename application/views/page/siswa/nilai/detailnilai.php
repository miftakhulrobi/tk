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
                        <td>
                            <?php if ($a->mb != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->mb ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($a->bb != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->bb ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($a->bsh != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->bsh ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($a->bsb != null) : ?>
                                <i class="fas fa-check"></i>
                            <?php else : ?>
                                <?= $a->bsb ?>
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
        <a target="_blank" href="<?= base_url('pdf/nilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/' . $table . '/' . $join) ?>" class="btn btn-info mt-4">Cetak Nilai</a>
    </div>
</div>