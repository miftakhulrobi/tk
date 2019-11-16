<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Nilai Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
            <strong class="float-right"><?= $siswa->namasiswa ?></strong>
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-home-welcome">
                    <div class="card-body">
                        <h4 class="text-center">SEMESTER I</h4>
                    </div>
                    <div class="card-footer">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/7') ?>">Juli</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/8') ?>">Agustus</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/9') ?>">September</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/10') ?>">Oktober</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/11') ?>">November</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/12') ?>">Desember</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-home-welcome">
                    <div class="card-body">
                        <h4 class="text-center">SEMESTER II</h4>
                    </div>
                    <div class="card-footer">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/1') ?>">Januari</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/2') ?>">Februari</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/3') ?>">Maret</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/4') ?>">April</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/5') ?>">Mei</a></li>
                            <li class="list-group-item"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/6') ?>">Juni</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>