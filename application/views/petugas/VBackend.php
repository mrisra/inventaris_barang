<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Petugas</title>


    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="<?=base_url()?>asset/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?=base_url()?>asset/DataTables/datatables.min.css" rel="stylesheet">

</head>

<body id="page-top">

    
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
             <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <!-- <div class="sidebar-brand-text mx-3">INVENTARIS BARANG</div> -->
                <Sdiv class="sidebar-brand-text mx-3">HALO <?= $this->session->userdata("role"); ?></Sdiv>
                
            </a>


            <!-- Sidebar Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading mt-3">
                <h6><b>Menu Pilihan</b></h6>
            </div>

            <li class="nav-item active">
                <a class="nav-link"href="<?= site_url('petugas/index'); ?>"> 
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href=<?= site_url('petugas/kategori') ?>>
                    <i class="fas fa-stream"></i>
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('petugas/supplier'); ?>">
                    <i class="fas fa-user-friends"></i>
                    <span>Supplier</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('petugas/perusahaan'); ?>">
                    <i class="fas fa-building"></i>
                    <span>Perusahaan</span></a>
            </li>

            <!-- Nav Item - Barang Collapse Menu -->
            <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBarang"
                aria-expanded="true" aria-controls="collapseBarang">
                <i class="fas fa-archive"></i>
                <span>Barang</span>
            </a>
            <div id="collapseBarang" class="collapse" aria-labelledby="headingBarang"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Barang:</h6>
                    <a class="collapse-item" href="<?= base_url('petugas/barang'); ?>">Barang</a>
                    <a class="collapse-item" href="<?= base_url('petugas/barang_masuk') ?>">Barang Masuk</a>
                    <a class="collapse-item" href="<?= base_url('petugas/barang_keluar') ?>">Barang Keluar</a>
                </div>
            </div>
        </li>


            

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- Akhir Sidebar Menu -->


       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

           <!-- Main Content -->
           <div id="content">

               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   <!-- Sidebar Toggle (Topbar) -->
                   <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                       <i class="fa fa-bars"></i>
                   </button>

                 

                   <!-- Topbar Navbar -->
                   <ul class="navbar-nav ml-auto">

                       <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       <li class="nav-item dropdown no-arrow d-sm-none">
                           <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-search fa-fw"></i>
                           </a>
                           <!-- Dropdown - Messages -->
                           <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                               aria-labelledby="searchDropdown">
                               <form class="form-inline mr-auto w-100 navbar-search">
                                   <div class="input-group">
                                       <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                       <div class="input-group-append">
                                           <button class="btn btn-primary" type="button">
                                               <i class="fas fa-search fa-sm"></i>
                                           </button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </li>

                      

                       

                       <div class="topbar-divider d-none d-sm-block"></div>

                       <!-- Nav Item - User Information -->
                       <li class="nav-item dropdown no-arrow">
                           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo <b><?= $this->session->userdata("nama"); ?></b></span>
                               <img class="img-profile rounded-circle"
                                   src="<?=base_url() ?>asset/img/undraw_profile.svg">
                           </a>
                           <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                               aria-labelledby="userDropdown">
                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Logout
                               </a>
                           </div>
                       </li>

                   </ul>

               </nav>
               <!-- End of Topbar -->
            


            <!-- Main Data -->
            <?php $this->load->view($content); ?>
            <!-- End of Main Data -->

                      <!-- Footer -->
                      <footer class="sticky-footer  fixed-bottom">
                          <div class="container my-auto">
                              <div class="copyright text-center my-auto">
                                  <span>Copyright &copy; Inventaris Barang 2021 By <b> Muhamad Isra </b></span>
                              </div>
                          </div>
                      </footer>
                      <!-- End of Footer -->

                  </div>
                  <!-- End of Content Wrapper -->

              </div>
              <!-- End of Page Wrapper -->

              <!-- Scroll to Top Button-->
              <a class="scroll-to-top rounded" href="#page-top">
                  <i class="fas fa-angle-up"></i>
              </a>

              <!-- Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                          </div>
                         <div class="modal-body">Pilih Tombol Logout jika anda ingin keluar.</div>
                          <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                              <a class="btn btn-success" href="<?= site_url('petugas/logout') ?>">Logout</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Bootstrap core JavaScript-->
              <script src="<?=base_url()?>asset/vendor/jquery/jquery.min.js"></script>
              <script src="<?=base_url()?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Core plugin JavaScript-->
              <script src="<?=base_url()?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

              <!-- Custom scripts for all pages-->
              <script src="<?=base_url()?>asset/js/sb-admin-2.min.js"></script>

              <!-- Page level plugins -->
              <script src="<?=base_url()?>asset/vendor/chart.js/Chart.min.js"></script>

              <!-- Page level custom scripts -->
              <script src="<?=base_url()?>asset/js/demo/chart-area-demo.js"></script>
              <script src="<?=base_url()?>asset/js/demo/chart-pie-demo.js"></script>
              <script src="<?=base_url()?>asset/DataTables/datatables.min.js"></script>
              <script>
                $(document).ready( function () {
                    $('#datatables').DataTable();
                } );
              </script>
              <script>
                $(document).ready( function () {
                    $('#datatables2').DataTable();
                } );
              </script>

          </body>

          </html>