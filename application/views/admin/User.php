<div class="content">
    <div class="container-fluid">
        <?php if ($this->session->flashdata('flash') == 'ditambah') : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="close mt-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php elseif ($this->session->flashdata('flash') == 'dihapus') : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="close mt-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php elseif ($this->session->flashdata('flash') == 'diubah') : ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                Data berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="close mt-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif; ?>
        <!-- CARD FOR DATA BARANG MASUK & BARANG KELUAR -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Data User<button type="button" data-toggle="modal" data-target="#modalUser" class="btn btn-primary float-right">Tambah Data</button></h4>
                        <p class="card-category">
                           
                        </p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover" id="datatables">
                            <thead class="text-primary">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <!-- <th>Password</th> -->
                                <th>Jabatan</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                <?php if (!empty($user)) : $i = 1; foreach ($user as $value) : ?>
                                
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $value->nama; ?></td>
                                    <td><?= $value->username; ?></td>
                                    <td><?= $value->role; ?></td>
                                    <td>
                                        <a href="<?= site_url('admin/user/'.$value->user_id.'/view'); ?>" rel="tooltip" title="Edit Task" class="btn btn-primary">
                                            <i class="material-icons">Edit</i>
                                        </a>
                                        <a href="<?= site_url('admin/hapusUser/'.$value->user_id); ?>" rel="tooltip" title="Remove" class="btn btn-danger">
                                            <i class="material-icons">Hapus</i>
                                        </a>
                                    </td>
                                </tr>

                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal User -->
<!-- Modal -->
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('admin/tambahUser'); ?>" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Jabatan</label>
                        <!-- <input type="text" name="role" class="form-control" required> -->
                        <select class="selectpicker form-control" name="role" data-style="btn btn-link" data-live-search="true">
                            
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>                            
                        </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>