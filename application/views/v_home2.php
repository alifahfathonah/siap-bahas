<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <?php foreach(list_jenis_usaha() as $row): ?>
                <div class="col-md-6 mb-4">
                    <!-- Informasi -->
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="<?=base_url('assets/img/data.jpeg');?>" alt="Icon Menu" height="200">
                        </div>
                        <div class="card-footer bg-info text-center">
                            <a href="<?=base_url('welcome/view/'.encrypt_url($row['idjenis_usaha']));?>"
                                class="text-decoration-none">
                                <h4 class="text-white"><?= strtoupper($row['jenis_usaha']); ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->