<script>
function edit(x) {
    if (x == 'add') {
        $('#staticBackdrop .modal-title').html('Tambah Data Proposal Umum');
        document.getElementById("myForm").reset();
        $('[name="kabupaten_id"]').val("").trigger('change');
        $('[name="kategori_id"]').val("").trigger('change');
        // $('[name="paket_id"]').val("").trigger('change');
        // $('[name="kode"').prop('readonly', false);
        // $('[name="antrian"').prop('readonly', false);
    } else {
        $('#staticBackdrop').modal('show');
        $('#staticBackdrop .modal-title').html('Edit Data Proposal Umum');
        // $('[name="kode"').prop('readonly', true);
        // $('[name="antrian"').prop('readonly', true);

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>proposal/view_umum',
            dataType: 'json',
            success: function(data) {
                $('[name="idproposal_umum"]').val(data.idproposal_umum);
                $('[name="kabupaten_id"]').val(data.kabupaten_id).trigger('change');
                $('[name="kategori_id"]').val(data.kategori_id).trigger('change');
                $('[name="nama"]').val(data.nama);
                $('[name="pemohon"]').val(data.pemohon);
                $('[name="kegiatan"]').val(data.kegiatan);
            }
        });
    }
}

function status(x) {
    $('#status').modal('show');

    $.ajax({
        type: "POST",
        data: {
            id: x
        },
        url: '<?=base_url();?>proposal/view_umum',
        dataType: 'json',
        success: function(data) {
            $('[name="idproposal_umum"]').val(data.idproposal_umum);
            $('[name="status"]').val(data.status);
        }
    });
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Proposal Usaha</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#staticBackdrop"
            onclick="edit('add')">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </a>
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
                        <th width="100">AKSI</th>
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
                        <td class="text-center">
                            <?php if($this->session->userdata('level')=='Administrator' || ($this->session->userdata('level')=='User' && $row['status']=='Baru')): ?>
                            <a href="<?=base_url('proposal/uberkas/').$row['idproposal_umum'];?>"
                                class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Unggah Berkas"><i class="fas fa-upload"></i>
                            </a>
                            <?php if($this->session->userdata('level')=='Administrator'): ?>
                            <a href="#" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Ubah Status" onclick="status(<?=$row['idproposal_umum'];?>)"><i
                                    class="fas fa-sync"></i>
                            </a>
                            <?php endif; ?>
                            <?php if($this->session->userdata('level')=='Administrator' && ($row['status']=='Lolos' || $row['status']=='Pencairan')): ?>
                            <a href="<?=base_url('proposal/upload_bukti/').$row['idproposal_pendidikan'];?>"
                                class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Unggah Bukti Pengecekan"><i class="fas fa-upload"></i>
                            </a>
                            <?php endif; ?>
                            <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Ubah Data" onclick="edit(<?=$row['idproposal_umum'];?>)"><i
                                    class="fas fa-edit"></i>
                            </a>
                            <a href="<?=base_url('proposal/hapus_umum/');?><?=$row['idproposal_umum'];?>"
                                class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip" data-placement="top"
                                title="Hapus Data"><i class="fas fa-trash"></i> </a>
                            <?php else: ?>
                            <?php if($row['status']=='Lolos' || $row['status']=='Pencairan'): ?>
                            <a href="<?=base_url('proposal/bukti/').$row['idproposal_pendidikan'];?>"
                                class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Unduh Bukti Pengecekan"><i class="fas fa-download"></i>
                            </a>
                            <?php else: ?>
                            <span class="btn btn-sm btn-warning">Tidak Ada Action</span>
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('proposal/save_umum');?>" method="post" id="myForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Proposal Umum</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                Jika data kosong silahkan isi dengan <b>-</b> atau <b>0</b>.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kabupaten_id">Pilih Kabupaten</label>
                                <input type="hidden" name="idproposal_umum">
                                <select name="kabupaten_id" id="kabupaten_id" class="form-control select2"
                                    style="width=100%;">
                                    <?php foreach(list_kabupaten() as $row): ?>
                                    <option value="<?=$row['idkabupaten'];?>">
                                        <?=strtoupper($row['nama_kabupaten']);?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori_id">Pilih Kategori</label>
                                <select name="kategori_id" id="kategori_id" class="form-control select2"
                                    style="width=100%;">
                                    <?php foreach(list_kategori() as $row): ?>
                                    <option value="<?=$row['idkategori'];?>">
                                        <?=strtoupper($row['kode_kategori'].'-'.$row['nama_kategori']);?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Nama/Organisasi/Lembaga <span class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="nama" name="nama" value=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pemohon">Nama Pemohon</label>
                                <input type="text" class="form-control" id="pemohon" name="pemohon" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kegiatan">Nama Kegiatan</label>
                                <textarea name="kegiatan" id="kegiatan" cols="30" rows="3"
                                    class="form-control text-capitalize" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah Status -->
<div class="modal fade" id="status" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="statusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=base_url('proposal/update_status_umum');?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusLabel">Ubah Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="status">Pilih Status <span class="text-danger">*</span></label>
                                <input type="hidden" name="idproposal_umum">
                                <select name="status" id="status" class="form-control">
                                    <option value="Baru">Baru</option>
                                    <option value="Verifikasi">Verifikasi</option>
                                    <option value="Lolos">Lolos</option>
                                    <option value="Tidak Lolos">Tidak Lolos</option>
                                    <option value="Pencairan">Pencairan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-sync"></i>
                        Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>