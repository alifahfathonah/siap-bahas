<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Unggah Berkas</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <p style="color:red;">Silahkan unggah berkas satu per satu. Jika unggah berkas berhasil maka tombol akan
            berubah menjadi tombol hapus</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="25">NO</th>
                        <th>NAMA BERKAS</th>
                        <th>KETERANGAN</th>
                        <th width="100">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1;foreach($berkasby as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td><?= ucwords($row['nama_berkas']); ?></td>
                        <td>
                            <input type="text"
                                name="<?=$this->uri->segment(2)=='pberkas'?'proposal_pendidikan_id':'proposal_umum_id';?>"
                                value="<?=$row['proposal_pendidikan_id'];?>">
                            <input type="text" name="berkas_id" value="<?=$row['idberkas'];?>">
                            <input type="file" name="berkas" class="form-control">
                            <span class="text-muted" style="font-size:9pt;"><?= ucfirst($row['keterangan']); ?></span>
                        </td>
                        <td>
                            <?php if($row['status']=='Belum'): ?>
                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip"
                                data-placement="top" data-title="Unggah File"><i class="fas fa-upload"></i>
                                Unggah</button>
                            <?php else: ?>
                            <a href="<?=base_url('berkas/hapus/');?><?=$row['idberkas'];?>"
                                class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip" data-placement="top"
                                data-title="Hapus File"><i class="fas fa-trash"></i> Hapus</a>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=base_url('berkas/add');?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_berkas">Kode Berkas <span class="text-danger">*</span></label>
                        <select name="kode_berkas" id="kode_berkas" class="form-control">
                            <option value="P">Proposal Pendidikan</option>
                            <option value="U">Proposal Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_berkas">Nama Berkas <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_berkas" name="nama_berkas" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
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