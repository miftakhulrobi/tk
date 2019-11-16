<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
            <a href="<?= base_url('pdf/siswaall/' . $classes->class_id) ?>" target="_blank" class="btn btn-info btn-sm float-right">Cetak Data Siswa</a>
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
                            <a href="#" class="btn btn-info btn-sm detail" siswa_id="<?= $s->siswa_id ?>" data-toggle="modal" data-target="#detail"><i class="fas fa-info"></i> Detail</a>
                            <a href="<?= base_url('siswa/semester/' . $s->siswa_id . '/' . $classes->class_id . '/' . $year->year_id) ?>" class="btn btn-info btn-sm"><i class="fas fa-file"></i> Nilai</a>
                            <a href="<?= base_url('pdf/siswaid/' . $s->siswa_id) ?>" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Cetak</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <b><span class="float-right text-info">Jumlah Siswa : <?= $csiswa ?></span></b>
    </div>
</div>

<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailLabel">Detail Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="target">

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-primary">Okay</button>
            </div>
        </div>
    </div>
</div>