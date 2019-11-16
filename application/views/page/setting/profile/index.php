<div class="card mb-5">
    <div class="card-header">
        <div class="card-title">
            Profile Saya
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center card-profile-user">
                    <div class="card-body">
                        <img src="<?= base_url('assets') ?>/img/admin.jpg" class="img-thumbnail img-avatar-profile" alt="">
                    </div>
                    <div class="card-footer">
                        <h4><?= $this->auths->user()->nama ?></h4>
                        <p>Pengampu : <?= $this->auths->user()->pengampu ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-profile-user">
                    <div class="card-body">
                        <form action="<?= base_url('setting/updateprofile') ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-8 mt-2">
                                    <small>Nama Lengkap</small>
                                    <input type="text" name="nama" class="form-control" value="<?= $this->auths->user()->nama ?>" required>
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <small>Nama Panggilan</small>
                                    <input type="text" name="username" class="form-control" value="<?= $this->auths->user()->username ?>" readonly>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <small>Alamat</small>
                                    <textarea type="text" name="alamat" class="form-control" required><?= $this->auths->user()->alamat ?></textarea>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Tmp Tgl Lahir</small>
                                    <input type="text" name="tgllahir" class="form-control" value="<?= $this->auths->user()->tgllahir ?>" required>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Pendidikan Terakhir</small>
                                    <input type="text" name="pendidikanterakhir" class="form-control" value="<?= $this->auths->user()->pendidikanterakhir ?>" required>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Pengampu</small>
                                    <input type="text" name="pengampu" class="form-control" value="<?= $this->auths->user()->pengampu ?>" required>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Telepon</small>
                                    <input type="text" name="telepon" class="form-control" value="<?= $this->auths->user()->telepon ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info float-right">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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