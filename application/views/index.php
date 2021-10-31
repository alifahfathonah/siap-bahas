<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAP BAHAS</title>
    <style>
    .uppercase {
        text-transform: uppercase;
    }

    #graph {
        width: 100%;
        height: 450px;
        margin: 20px auto 0 auto;
    }
    </style>
    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=base_url();?>assets/vendor/select2/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url('assets/');?>vendor/select2bootstrap4/select2.css">
    <link rel="stylesheet" href="<?=base_url('assets/');?>vendor/select2bootstrap4/select2-bootstrap4.min.css">
    <link href="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php if($this->session->flashdata('success')):?>
    <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
    <?php endif;?>
    <?php if($this->session->flashdata('error')):?>
    <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
    <?php endif;?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion bg-primary" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?=base_url('assets/img/');?>unipa.png" alt="Logo" height="50" width="50">
                </div> -->
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIAP <sup>BAHAS</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?=isset($mDashboard)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Daftar Menu
            </div>
            <?php if($this->session->userdata('level')=='Administrator'): ?>
            <!-- Nav Item - Kabupaten -->
            <li class="nav-item <?=isset($mKabupaten)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu/kabupaten');?>">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Kabupaten</span></a>
            </li>
            <!-- Nav Item - Kategori -->
            <li class="nav-item <?=isset($mKategori)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu/kategori');?>">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Nav Item - Berkas -->
            <li class="nav-item <?=isset($mBerkas)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu/berkas');?>">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Berkas Persyaratan</span></a>
            </li>
            <?php endif; ?>
            <!-- Nav Item - Proposal Pendidikan -->
            <li class="nav-item <?=isset($mProposalPend)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu/proposal_pendidikan');?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Proposal Pendidikan</span></a>
            </li>
            <!-- Nav Item - Proposal Umum -->
            <li class="nav-item <?=isset($mProposalUmum)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu/proposal_umum');?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Proposal Umum</span></a>
            </li>
            <?php if($this->session->userdata('level')=='Administrator'): ?>
            <!-- Nav Item - Pengguna -->
            <li class="nav-item <?=isset($mPengguna)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('menu/pengguna');?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pengguna</span></a>
            </li>
            <?php endif; ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-primary">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3 text-white">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item d-none d-sm-block">
                            <div class="nav-link text-white" id="tanggal"></div>
                        </li>
                        <li class="nav-item d-none d-sm-block">
                            <div class="nav-link text-white" id="jam"></div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-4 d-lg-inline text-white text-uppercase"><?= $this->session->fullname; ?></span>
                                <!-- <img class="img-profile rounded-circle" src="<?=base_url('assets/img/');?>mhs.png"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#changepasswordModal">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="exit()">
                                    <i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php $this->load->view($content); ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIAP AMANDEMEN <?= date('Y'); ?></span>
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
    <div class="modal fade" id="changepasswordModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <form action="<?=base_url('menu/ubah_password');?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="hidden" name="id" value="<?=$this->session->userdata('id');?>">
                            <input type="password" class="form-control" id="password" name="password"
                                aria-describedby="importInfo" required>
                            <!-- <small id="importInfo" class="form-text text-muted">Tipe foto yang di izinkan <b>.xlsx</b>,
                            Ukuran maksimum file <b>2 MB</b>.</small> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary float-left" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Ganti Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin ingin keluar dari aplikasi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-danger" href="<?=base_url('menu/logout');?>">Iya, Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/');?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/');?>js/demo/datatables-demo.js"></script>
    <script src="<?=base_url();?>assets/vendor/select2/js/select2.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/jquery-mask/jquery-mask.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/sweet-alert.js"></script>
    <script type="text/javascript">
    const sekarang = new Date();
    const tgl = sekarang.getDate();
    var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    namabulan = namabulan.split(" ");
    const bln = sekarang.getMonth();
    const thn = sekarang.getFullYear();
    document.getElementById("tanggal").innerHTML = tgl + " " + namabulan[bln] + " " + thn;

    // 1 detik = 1000
    window.setTimeout("waktu()", 1000);

    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal
            .getSeconds();
    }
    </script>

    <script>
    $(document).ready(function() {
        $('.uang').mask('000.000.000.000.000', {
            reverse: true
        });
        $('.angka').mask('000000000000000', {
            reverse: true
        });
        // $('.select2').select2({
        //     theme: "classic",
        // });
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('[data-toggle="tooltip"]').tooltip();
    })

    function exit() {
        Swal.fire({
            title: 'Konfirmasi Keluar',
            text: "Anda yakin ingin keluar dari aplikasi ?",
            icon: 'warning',
            allowOutsideClick: false,
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Iya, Keluar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "<?=base_url('menu/logout');?>";
            }
        })
    }
    </script>
</body>

</html>