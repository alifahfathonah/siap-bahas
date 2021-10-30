<!-- Page Title -->
<section class="page-title" style="background-image:url(<?=base_url('assets/website/');?>images/banner3.png)">
    <div class="auto-container">
        <div class="content-box">
            <h1>
                <b><?= strtoupper(namaKabupaten(decrypt_url($this->uri->segment(3)))); ?></b>
            </h1>
            <ul class="bread-crumb">
                <li><a class="home" href="<?=base_url();?>"><span class="fa fa-home"></span></a></li>
                <li>DAFTAR PROPOSAL</li>
            </ul>
        </div>
    </div>
</section>

<!-- Causes Section -->
<section class="causes-section style-two">
    <div class="auto-container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="float-left">
                    <?= ucwords(namaKabupaten(decrypt_url($this->uri->segment(3)))); ?>
                </h3>
                <a href="<?=base_url('welcome');?>" class="btn btn-sm btn-secondary float-right"><span
                        class="fa fa-arrow-left"></span>
                    Kembali</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm text-nowrap" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th width="25">NO</th>
                                <th>JENIS DOK LINGKUNGAN</th>
                                <th>JENIS USAHA/KEGIATAN</th>
                                <th>PEMRAKARSA/PENANGGUNG JAWAB</th>
                                <th>ALAMAT</th>
                                <th>LUAS LAHAN</th>
                                <th>TAHUN OPERASI</th>
                                <th>NO.IZIN/PERLING/Rekom SPPL</th>
                                <th>INSTANSI PENERBIT</th>
                                <th>STATUS PELAPORAN</th>
                                <th>FILE IZIN</th>
                                <th>FILE LOKASI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n=1; foreach($data_by_jenis_usaha as $row): ?>
                            <tr>
                                <td><?= $n++; ?></td>
                                <td><?= strtoupper($row['jenis_usaha']); ?></td>
                                <td>
                                    <a href="https://www.google.com/maps/place/<?=$row['latitude'].', '.$row['longitude'];?>"
                                        target="_blank">
                                        <?= ucfirst($row['nama_tempat']); ?>
                                    </a>
                                </td>
                                <td><?= ucfirst($row['nama_pemilik']); ?></td>
                                <td><?= ucfirst($row['alamat']); ?></td>
                                <td><?= $row['luas_lahan'].' Ha'; ?></td>
                                <td><?= $row['tahun_operasi']; ?></td>
                                <td><?= strtoupper($row['nomor_izin']); ?></td>
                                <td><?= strtoupper($row['instansi_penerbit_izin']); ?></td>
                                <td>
                                    <?php if($row['status_izin']=='Aktif'): ?>
                                    <span class="badge badge-success"><?= $row['status_izin']; ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-danger"><?= $row['status_izin']; ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($row['file_izin']==''): ?>
                                    <span class="badge badge-danger">File Kosong</span>
                                    <?php else: ?>
                                    <a href="<?=base_url();?>uploads/<?=$row['file_izin'];?>" target="_blank"
                                        class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="View/Download File"><i class="fa fa-eye"></i>
                                    </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($row['file_lokasi']==''): ?>
                                    <span class="badge badge-danger">File Kosong</span>
                                    <?php else: ?>
                                    <a href="<?=base_url();?>uploads/<?=$row['file_lokasi'];?>" target="_blank"
                                        class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="View/Download File"><i class="fa fa-eye"></i>
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>