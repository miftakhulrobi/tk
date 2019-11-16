<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Tahun Ajaran <?= $year->yearname ?>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="bg-warning text-white">
                <tr>
                    <th>#</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($classes as $c) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $c->classname ?></td>
                        <td>
                            <a href="<?= base_url('setting/siswa/' . $c->class_id) ?>" class="btn btn-info btn-sm">Siswa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>