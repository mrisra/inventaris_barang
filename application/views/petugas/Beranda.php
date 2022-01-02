
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Barang Masuk</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $harianBM; ?> <b>Unit</b></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-box fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Barang Keluar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $harianBK; ?> <b>Unit</b></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-box-open fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Barang
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlBarang; ?> <b>Unit</b></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-boxes fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Partner</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPartner; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-handshake fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- CARD FOR DATA BARANG MASUK & BARANG KELUAR -->
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose">
                            <h4 class="card-title">Barang Masuk</h4>
                            <p class="card-category">
                               
                            </p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover" id="datatables">
                                <thead class="text-danger">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Supplier</th>
                                    <th>Masuk</th>
                                </thead>
                                <tbody>
                                    <?php if (!empty($barang_masuk)) : $i = 1; foreach ($barang_masuk as $value) : ?>
                                    
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value->namaBarang; ?></td>
                                        <td><?= $value->nama_kategori; ?></td>
                                        <td><?= $value->nama_supplier; ?></td>
                                        <td><?= $value->stok_masuk; ?></td>
                                    </tr>

                                    <?php endforeach; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">Barang Keluar</h4>
                            <p class="card-category">
                               
                            </p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover" id="datatables2">
                                <thead class="text-warning">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Tujuan</th>
                                    <th>Keluar</th>
                                </thead>
                                <tbody>
                                    <?php if (!empty($barang_keluar)) : $i = 1; foreach ($barang_keluar as $value) : ?>
                                    
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value->namaBarang; ?></td>
                                        <td><?= $value->nama_kategori; ?></td>
                                        <td><?= $value->nama_perusahaan; ?></td>
                                        <td><?= $value->stok_keluar; ?></td>
                                    </tr>

                                    <?php endforeach; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        
    

        
        

    </div>
    <!-- /.container-fluid -->


</div>
<!-- End of Main Content -->