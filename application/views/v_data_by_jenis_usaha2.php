<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Informasi Perizinan Lingkungan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="float-left">Jenis Usaha :
                <b><?= strtoupper(namaJenisUsaha(decrypt_url($this->uri->segment(3)))); ?></b>
            </h3>
            <a href="<?=base_url('welcome');?>" class="btn btn-sm btn-secondary float-right"><span
                    class="fas fa-arrow-left"></span>
                Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm text-nowrap" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th width="25">NO</th>
                            <th>JENIS USAHA</th>
                            <th>NAMA TEMPAT</th>
                            <th>NAMA_PEMILIK</th>
                            <th>ALAMAT</th>
                            <th>LUAS LAHAN</th>
                            <th>TAHUN OPERASI</th>
                            <th>JENIS IZIN DIMILIKI</th>
                            <th>NOMOR IZIN</th>
                            <th>TANGGAL IZIN</th>
                            <th>INSTANSI PENERBIT IZIN</th>
                            <th>STATUS IZIN</th>
                            <th>FILE IZIN</th>
                            <th>FILE LOKASI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n=1; foreach($data_by_jenis_usaha as $row): ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= strtoupper($row['jenis_usaha']); ?></td>
                            <td><?= ucfirst($row['nama_tempat']); ?></td>
                            <td><?= ucfirst($row['nama_pemilik']); ?></td>
                            <td><?= ucfirst($row['alamat']); ?></td>
                            <td><?= $row['luas_lahan'].' Ha'; ?></td>
                            <td><?= $row['tahun_operasi']; ?></td>
                            <td><?= strtoupper($row['jenis_izin_dimiliki']); ?></td>
                            <td><?= strtoupper($row['nomor_izin']); ?></td>
                            <td><?= $row['tgl_izin']; ?></td>
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
                                    title="View/Download File"><i class="fas fa-eye"></i>
                                </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($row['file_lokasi']==''): ?>
                                <span class="badge badge-danger">File Kosong</span>
                                <?php else: ?>
                                <a href="<?=base_url();?>uploads/<?=$row['file_lokasi'];?>" target="_blank"
                                    class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="View/Download File"><i class="fas fa-eye"></i>
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
<!-- /.container-fluid -->