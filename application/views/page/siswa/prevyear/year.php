<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Tahun Ajaran
        </div>
    </div>
    <div class="card-body table-responsive">
        <?php if ($cyear) : ?>
            <table class="table table-bordered table-striped table-hover">
                <thead class="bg-warning text-white">
                    <tr>
                        <th>Tahun Ajaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($year as $y) : ?>
                        <tr>
                            <td><?= $y->yearname ?></td>
                            <td>
                                <a href="#" class="badge badge-danger btn-sm" disabled><?= $y->status ?></a>
                            </td>
                            <td>
                                <a href="<?= base_url('siswa/classesprevyear/' . $y->year_id) ?>" class="btn btn-info btn-sm">Kelas</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else : ?>
            <h3 class="text-center m-5">Tidak Ada Data!</h3>
        <?php endif ?>
    </div>
</div>