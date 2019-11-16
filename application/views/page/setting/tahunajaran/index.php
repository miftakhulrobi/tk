<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Tahun Ajaran
            <a href="#" data-toggle="modal" data-target="#create" class="btn btn-info btn-sm float-right">Tambah Tahun Ajaran</a>
        </div>
    </div>
    <div class="card-body table-responsive">
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
                            <?php if ($y->status == 'Baru') : ?>
                                <a href="#" data-toggle="modal" data-target="#status" class="badge badge-primary btn-sm badge-update-status" year_id="<?= $y->year_id ?>" status="<?= $y->status ?>"><?= $y->status ?></a>
                            <?php elseif ($y->status == 'Aktif') : ?>
                                <a href="#" data-toggle="modal" data-target="#status" class="badge badge-success btn-sm badge-update-status" year_id="<?= $y->year_id ?>" status="<?= $y->status ?>"><?= $y->status ?></a>
                            <?php else : ?>
                                <a href="#" class="badge badge-danger btn-sm" disabled><?= $y->status ?></a>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="<?= base_url('setting/kelas/' . $y->year_id) ?>" class="btn btn-info btn-sm">Kelas</a>
                            <a href="#" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#edit" year_id="<?= $y->year_id ?>" yearname="<?= $y->yearname ?>"><i class="fas fa-edit"></i> Edit</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('setting/storetahunajaran') ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="yearname" class="form-control" placeholder="Tahun Ajaran" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('setting/updatetahunajaran') ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="year_id">
                        <input type="text" name="yearname" class="form-control" placeholder="Tahun Ajaran" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusLabel">Warning!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-3 text-danger">Status Baru tidak bisa di ubah ke status Selesai, hanya bisa di ubah ke status Aktif. Ketika status Aktif di ubah ke status Selesai maka tidak bisa di kembalikan lagi ke status Aktif.. Mohon lebih teliti!</p>
                <form action="<?= base_url('setting/updatestatustahunajaran') ?>" method="POST" id="target">


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>