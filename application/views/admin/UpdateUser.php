<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Form Ubah Data User</h4>
                        <p class="card-category">
                            Form untuk mengubah data User
                        </p>
                    </div>
                    <div class="card-body table-responsive">
                        <form action="<?= site_url('admin/ubahUser'); ?>" method="post">
                             <div class="form-group">
                                <label class="bmd-label-floating">Nama Lengkap</label>
                                <input type="hidden" name="user_id" value="<?= $detail['user_id']; ?>">
                                <input type="text" name="nama" value="<?= $detail['nama']; ?>" class="form-control" required>
                            </div>
                             <div class="form-group">
                                <label class="bmd-label-floating">Username</label>
                                <input type="hidden" name="user_id" value="<?= $detail['user_id']; ?>">
                                <input type="text" name="username" value="<?= $detail['username']; ?>" class="form-control" required>
                            </div>
                             <div class="form-group">
                                <label class="bmd-label-floating">Password</label>
                                <input type="hidden" name="user_id" value="<?= $detail['user_id']; ?>">
                                <input type="password" name="password" value="<?= $detail['password']; ?>" class="form-control" required>
                            </div>
                             <div class="form-group">
                                <label class="bmd-label-floating">Jabatan</label>
                                <input type="hidden" name="user_id" value="<?= $detail['user_id']; ?>">
                                <input type="text" name="role" value="<?= $detail['role']; ?>" class="form-control" required>
                            </div>
                          
                            <a href="<?= site_url('admin/user'); ?>" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
                            <button type="submit" class="btn btn-primary">UBAH DATA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>