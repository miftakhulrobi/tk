<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="bg-warning text-white">
                <tr>
                    <th>#</th>
                    <th>Nama Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($siswa as $s) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $s->namasiswa ?></td>
                        <td>
                            <a href="<?= base_url('nilai/semester/' . $s->siswa_id . '/' . $classes->class_id . '/' . $year->year_id) ?>" class="btn btn-info btn-sm"><i class="fas fa-file"></i> Nilai</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <b><span class="float-right text-info">Jumlah Siswa : <?= $csiswa ?></span></b>
    </div>
</div>