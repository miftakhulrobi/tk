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
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $c) : ?>
                    <tr>
                        <td><?= $c->classname ?></td>
                        <td><a href="#" class="badge badge-danger btn-sm" disabled>Selesai</a></td>
                        <td>
                            <a href="<?= base_url('siswa/show/' . $c->class_id) ?>" class="btn btn-info btn-sm">Siswa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>