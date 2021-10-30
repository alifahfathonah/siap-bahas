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
                    Proposal Pendidikan <?= ucwords(namaKabupaten(decrypt_url($this->uri->segment(3)))); ?>
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
                                <th>KAB.</th>
                                <th>KATEGORI</th>
                                <th>NAMA LENGKAP</th>
                                <th>TTL</th>
                                <th>INSTITUSI</th>
                                <th>FAKULTAS</th>
                                <th>JURUSAN</th>
                                <th>PRODI</th>
                                <th>STATUS</th>
                                <th width="170">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n=1; foreach($all_data as $row): ?>
                            <tr>
                                <td><?= $n++; ?></td>
                                <td><?= strtoupper($row['nama_kabupaten']); ?></td>
                                <td><?= strtoupper($row['kode_kategori']); ?></td>
                                <td><?= ucwords($row['nama_lengkap']); ?></td>
                                <td><?= $row['tmp_lahir'].', '.date('d F Y',strtotime($row['tgl_lahir'])); ?></td>
                                <td><?= ucwords($row['institusi']); ?></td>
                                <td><?= ucwords($row['fakultas']); ?></td>
                                <td><?= ucwords($row['jurusan']); ?></td>
                                <td><?= ucwords($row['prodi']); ?></td>
                                <td align="center">
                                    <?php if($row['status']=='Baru'): ?>
                                    <span class="badge badge-secondary"><?= $row['status']; ?></span>
                                    <?php elseif($row['status']=='Verifikasi'): ?>
                                    <span class="badge badge-primary"><?= $row['status']; ?></span>
                                    <?php elseif($row['status']=='Lolos'): ?>
                                    <span class="badge badge-success"><?= $row['status']; ?></span>
                                    <?php elseif($row['status']=='Pencairan'): ?>
                                    <span class="badge badge-warning"><?= $row['status']; ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-danger"><?= $row['status']; ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?=base_url('proposal/pberkas/').$row['idproposal_pendidikan'];?>"
                                        class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Unggah Berkas"><i class="fas fa-upload"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Ubah Data" onclick="edit(<?=$row['idproposal_pendidikan'];?>)"><i
                                            class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?=base_url('proposal/hapus_pend/');?><?=$row['idproposal_pendidikan'];?>"
                                        class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip"
                                        data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i> </a>
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
<!-- Causes Section -->
<section class="causes-section style-two">
    <div class="auto-container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="float-left">
                    Proposal Umum<?= ucwords(namaKabupaten(decrypt_url($this->uri->segment(3)))); ?>
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
                                <th>KAB.</th>
                                <th>KATEGORI</th>
                                <th>NAMA</th>
                                <th>PEMOHON</th>
                                <th>KEGIATAN</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n=1; foreach($all_data as $row): ?>
                            <tr>
                                <td><?= $n++; ?></td>
                                <td><?= strtoupper($row['nama_kabupaten']); ?></td>
                                <td><?= strtoupper($row['kode_kategori']); ?></td>
                                <td><?= ucwords($row['nama']); ?></td>
                                <td><?= ucwords($row['pemohon']); ?></td>
                                <td><?= ucfirst($row['kegiatan']); ?></td>
                                <td align="center">
                                    <?php if($row['status']=='Baru'): ?>
                                    <span class="badge badge-secondary"><?= $row['status']; ?></span>
                                    <?php elseif($row['status']=='Verifikasi'): ?>
                                    <span class="badge badge-primary"><?= $row['status']; ?></span>
                                    <?php elseif($row['status']=='Lolos'): ?>
                                    <span class="badge badge-success"><?= $row['status']; ?></span>
                                    <?php elseif($row['status']=='Pencairan'): ?>
                                    <span class="badge badge-warning"><?= $row['status']; ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-danger"><?= $row['status']; ?></span>
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