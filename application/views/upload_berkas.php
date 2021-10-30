<script>
function file(proposal_id, berkas_id) {
    $('#file').modal('show');

    $('[name="proposal_pendidikan_id"]').val(proposal_id);
    $('[name="berkas_id"]').val(berkas_id);
    // $('#ket').val(ket);
    // $.ajax({
    //     type: "POST",
    //     data: {
    //         proposal_id: proposal_id,
    //         berkas_id: berkas_id
    //     },
    //     url: '<?=base_url();?>proposal/view_pend',
    //     dataType: 'json',
    //     success: function(data) {
    //         $('[name="idproposal_pendidikan"]').val(data.idproposal_pendidikan);
    //         $('[name="file_izin"]').val(data.file_izin);
    //     }
    // });
}
</script>
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
                        <th width="100">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1;foreach($berkas as $row): ?>
                    <form action="<?=base_url('proposal/upload');?>" method="post" enctype="multipart/form-data">
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= ucwords($row['nama_berkas']); ?></td>
                            <td>
                                <?php var_dump(cek_berkas_status($this->uri->segment(2),$this->uri->segment(3),$row['idberkas']));?>
                                <?php if(!cek_berkas_status($this->uri->segment(2),$this->uri->segment(3),$row['idberkas'])): ?>
                                <a href="#" class="btn btn-primary btn-icon-split btn-sm" data-toggle="tooltip"
                                    data-placement="top" data-title="Unggah File"
                                    onclick="file(<?=$this->uri->segment(3);?>,<?=$row['idberkas'];?>)">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="text">Unggah</span>
                                </a>
                                <?php else: ?>
                                <a href="<?=base_url('berkas/hapus/');?><?=$row['idberkas'];?>"
                                    class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip" data-placement="top"
                                    data-title="Hapus File"><i class="fas fa-trash"></i> Hapus</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </form>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Upload File Izin -->
<div class="modal fade" id="file" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="fileIzinLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('proposal/up_file');?>" method="post" id="myForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileIzinLabel">Upload File Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="file">File Berkas <span class="text-danger">*</span></label>
                                <input type="text" name="proposal_pendidikan_id">
                                <input type="text" name="berkas_id">
                                <input type="file" class="form-control" id="file" name="file" value="" required>
                                <p id="ket"></p>
                                <span class="small text-danger">Type file yang diizinkan <b>.jpg .jpeg .png .pdf</b>.
                                    Ukuran maksimum file <b>2 MB</b>.</span>
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
                        Unggah File</button>
                </div>
            </form>
        </div>
    </div>
</div>