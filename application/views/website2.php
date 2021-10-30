<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Perizinan Lingkungan</title>
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
    <link rel="stylesheet" href="<?=base_url('assets/');?>vendor/chart/morris.css">
    <link rel="stylesheet" href="<?=base_url('assets/');?>vendor/chart/prettify.min.css">
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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow"
                    style="background-color:teal;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <h1 style="color:white;" class="d-none d-sm-block">Sistem Informasi Perizinan Lingkungan</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <div class="nav-link text-white" id="tanggal"></div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-link text-white" id="jam"></div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item d-none d-sm-block">
                            <a href="<?=base_url('login');?>" class="nav-link text-white">LOGIN</a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?= $this->load->view($content); ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Informasi Perizinan Lingkungan <?= date('Y'); ?></span>
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
    <script src="<?=base_url('assets/');?>vendor/chart/morris.js"></script>
    <script src="<?=base_url('assets/');?>vendor/chart/prettify.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/chart/raphael.min.js"></script>
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
                document.location.href = "<?=base_url('admin/keluar');?>";
            }
        })
    }
    </script>
</body>

</html>