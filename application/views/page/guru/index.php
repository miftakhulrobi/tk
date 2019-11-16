<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Data Guru
            <a href="<?= base_url('pdf/guruall') ?>" target="_blank" class="btn btn-info btn-sm float-right">Cetak Data Guru</a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="bg-warning text-white">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($guru as $g) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $g->nama ?></td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#show" data-guru="<?= $g->user_id ?>" class="btn btn-info btn-sm show-guru"><i class="fas fa-info"></i> Detail</a>
                            <a href="<?= base_url('pdf/guruid/' . $g->user_id) ?>" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Cetak</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showLabel">Keterangan Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="target">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Okay</button>
            </div>
        </div>
    </div>
</div>