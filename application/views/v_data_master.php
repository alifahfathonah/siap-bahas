<script>
function edit(x) {
    if (x == 'add') {
        $('#staticBackdrop .modal-title').html('Tambah Data Master');
        document.getElementById("myForm").reset();
        $('[name="jenis_usaha_id"]').val("").trigger('change');
        // $('[name="paket_id"]').val("").trigger('change');
        // $('[name="kode"').prop('readonly', false);
        // $('[name="antrian"').prop('readonly', false);
    } else {
        $('#staticBackdrop').modal('show');
        $('#staticBackdrop .modal-title').html('Edit Data Master');
        // $('[name="kode"').prop('readonly', true);
        // $('[name="antrian"').prop('readonly', true);

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>datamaster/view',
            dataType: 'json',
            success: function(data) {
                $('[name="iddata_usaha"]').val(data.iddata_usaha);
                $('[name="jenis_usaha_id"]').val(data.jenis_usaha_id).trigger('change');
                $('[name="nama_tempat"]').val(data.nama_tempat);
                $('[name="nama_pemilik"]').val(data.nama_pemilik);
                $('[name="alamat"]').val(data.alamat);
                $('[name="longitude"]').val(data.longitude);
                $('[name="latitude"]').val(data.latitude);
                $('[name="luas_lahan"]').val(data.luas_lahan);
                $('[name="jml_kamar"]').val(data.jml_kamar);
                $('[name="jml_karyawan"]').val(data.jml_karyawan);
                $('[name="jenis_kegiatan"]').val(data.jenis_kegiatan);
                $('[name="tahun_operasi"]').val(data.tahun_operasi);
                $('[name="jenis_izin_dimiliki"]').val(data.jenis_izin_dimiliki);
                $('[name="nomor_izin"]').val(data.nomor_izin);
                $('[name="tgl_izin"]').val(data.tgl_izin);
                $('[name="instansi_penerbit_izin"]').val(data.instansi_penerbit_izin);
                $('[name="status_izin"]').val(data.status_izin);
                $('[name="status_kewajiban"]').val(data.status_kewajiban);
            }
        });
    }
}

function fileIzin(x) {
    $('#fileIzin').modal('show');

    $.ajax({
        type: "POST",
        data: {
            id: x
        },
        url: '<?=base_url();?>datamaster/view',
        dataType: 'json',
        success: function(data) {
            $('[name="iddata_usaha"]').val(data.iddata_usaha);
            $('[name="file_izin"]').val(data.file_izin);
        }
    });
}

function fileLokasi(x) {
    $('#fileLokasi').modal('show');

    $.ajax({
        type: "POST",
        data: {
            id: x
        },
        url: '<?=base_url();?>datamaster/view',
        dataType: 'json',
        success: function(data) {
            $('[name="iddata_usaha"]').val(data.iddata_usaha);
            $('[name="file_lokasi"]').val(data.file_lokasi);
        }
    });
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Master Usaha</h1>
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
                        <th width="170">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($all_data as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td><?= strtoupper($row['jenis_usaha']); ?></td>
                        <td><?= ucfirst($row['nama_tempat']); ?></td>
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
                            <a href="#" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Upload File" onclick="fileIzin(<?=$row['iddata_usaha'];?>)"><i
                                    class="fas fa-upload"></i>
                            </a>
                            <?php else: ?>
                            <a href="#" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Upload File" onclick="fileIzin(<?=$row['iddata_usaha'];?>)"><i
                                    class="fas fa-upload"></i>
                            </a>
                            <a href="<?=base_url();?>uploads/<?=$row['file_izin'];?>" target="_blank"
                                class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="View/Download File"><i class="fas fa-eye"></i>
                            </a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($row['file_lokasi']==''): ?>
                            <a href="#" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Upload File" onclick="fileLokasi(<?=$row['iddata_usaha'];?>)"><i
                                    class="fas fa-upload"></i>
                            </a>
                            <?php else: ?>
                            <a href="#" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Upload File" onclick="fileLokasi(<?=$row['iddata_usaha'];?>)"><i
                                    class="fas fa-upload"></i>
                            </a>
                            <a href="<?=base_url();?>uploads/<?=$row['file_lokasi'];?>" target="_blank"
                                class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="View/Download File"><i class="fas fa-eye"></i>
                            </a>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Ubah Data" onclick="edit(<?=$row['iddata_usaha'];?>)"><i class="fas fa-edit"></i>
                            </a>
                            <a href="<?=base_url('datamaster/hapus/');?><?=$row['iddata_usaha'];?>"
                                class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip" data-placement="top"
                                title="Hapus Data"><i class="fas fa-trash"></i> </a>
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
            <form action="<?=base_url('datamaster/save');?>" method="post" id="myForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Master</h5>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_usaha_id">Pilih Jenis Usaha</label>
                                <input type="hidden" name="iddata_usaha">
                                <select name="jenis_usaha_id" id="jenis_usaha_id" class="form-control select2"
                                    style="width=100%;">
                                    <?php foreach(list_jenis_usaha() as $row): ?>
                                    <option value="<?=$row['idjenis_usaha'];?>">
                                        <?=strtoupper($row['jenis_usaha']);?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nama_tempat">Nama Tempat Usaha <span class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="nama_tempat"
                                    name="nama_tempat" value="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_pemilik">Nama Pemilik Usaha <span class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="nama_pemilik"
                                    name="nama_pemilik" value="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">Alamat Lengkap <span class="text-danger">*</span></label>
                                <textarea name="alamat" id="alamat" cols="30" rows="3"
                                    class="form-control text-capitalize" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="longitude">Koord. Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude" value="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latitude">Koord. Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude" value="0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="luas_lahan">Luas Lahan <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" id="luas_lahan" name="luas_lahan" class="form-control"
                                    aria-describedby="basic-addon2" value="0" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Ha</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="jml_kamar">Jumlah Kamar <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="number" id="jml_kamar" name="jml_kamar" class="form-control"
                                    aria-describedby="basic-addon2" min="0" value="0" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Kamar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="jml_karyawan">Jumlah Karyawan <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="number" id="jml_karyawan" name="jml_karyawan" class="form-control"
                                    aria-describedby="basic-addon2" min="0" value="0" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Orang</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="jenis_kegiatan">Jenis Kegiatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="jenis_kegiatan"
                                    name="jenis_kegiatan" value="" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tahun_operasi">Tahun Operasi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="tahun_operasi" name="tahun_operasi"
                                    value="<?=date('Y');?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_izin_dimiliki">Jenis Izin Dimiliki <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="jenis_izin_dimiliki"
                                    name="jenis_izin_dimiliki" value="" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="nomor_izin">Nomor Izin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nomor_izin" name="nomor_izin" value=""
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl_izin">Tanggal Izin</label>
                                <input type="date" class="form-control" id="tgl_izin" name="tgl_izin" value="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="instansi_penerbit_izin">Instansi Penerbit Izin <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="instansi_penerbit_izin"
                                    name="instansi_penerbit_izin" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status_izin">Status Izin <span class="text-danger">*</span></label>
                                <select name="status_izin" id="status_izin" class="form-control" required>
                                    <option value="Nonaktif">Nonaktif</option>
                                    <option value="Aktif">Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status_kewajiban">Status Kewajiban <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control text-capitalize" id="status_kewajiban"
                                    name="status_kewajiban" value="" required>
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
<!-- Modal Upload File Izin -->
<div class="modal fade" id="fileIzin" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="fileIzinLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('datamaster/up_file_izin');?>" method="post" id="myForm"
                enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileIzinLabel">Upload File Izin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="file_izin">File Izin <span class="text-danger">*</span></label>
                                <input type="hidden" name="iddata_usaha">
                                <input type="hidden" name="file_izin_lama">
                                <input type="file" class="form-control" id="file_izin" name="file_izin" value=""
                                    required>
                                <span class="small text-danger">Type file yang diizinkan <b>.jpg .jpeg .png .pdf</b>.
                                    Ukuran
                                    maksimum file <b>2 MB</b>.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-upload"></i>
                        Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Upload File Lokasi -->
<div class="modal fade" id="fileLokasi" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="fileLokasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('datamaster/up_file_lokasi');?>" method="post" id="myForm"
                enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileLokasiLabel">Upload File Lokasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="file_lokasi">File Lokasi <span class="text-danger">*</span></label>
                                <input type="hidden" name="iddata_usaha">
                                <input type="hidden" name="file_lokasi_lama">
                                <input type="file" class="form-control" id="file_lokasi" name="file_lokasi" value=""
                                    required>
                                <span class="small text-danger">Type file yang diizinkan <b>.jpg .jpeg .png .pdf</b>.
                                    Ukuran
                                    maksimum file <b>2 MB</b>.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-upload"></i>
                        Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>