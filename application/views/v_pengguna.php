<script>
function edit(x) {
    if (x == 'add') {
        $('#staticBackdrop .modal-title').html('Tambah Pengguna');
        $('.pass-info-r').show();
        $('.pass-info').hide();
        $('[name="username"]').prop('readonly', false);
        $('[name="idpengguna"]').val("");
        $('[name="nama_lengkap"]').val("");
        $('[name="username"]').val("");
    } else {
        $('#staticBackdrop').modal('show');
        $('[name="username"]').prop('readonly', true);
        $('.pass-info-r').hide();
        $('.pass-info').show();
        $('#staticBackdrop .modal-title').html('Edit Pengguna');

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>user/view',
            dataType: 'json',
            success: function(data) {
                $('[name="idpengguna"]').val(data.idpengguna);
                $('[name="nama_lengkap"]').val(data.nama_lengkap);
                $('[name="username"]').val(data.username);
            }
        });
    }
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pengguna</h1>
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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="25">NO</th>
                        <th>NAMA PENGGUNA</th>
                        <th>USERNAME</th>
                        <th>LEVEL</th>
                        <th width="100">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($pengguna as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td><?= ucwords($row['nama_lengkap']); ?></td>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['level']; ?></td>
                        <td>
                            <?php if($row['username']!='admin'): ?>
                            <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Ubah Data" onclick="edit(<?=$row['idpengguna'];?>)"><i class="fas fa-edit"></i>
                            </a>
                            <a href="<?=base_url('user/hapus/');?><?=$row['idpengguna'];?>"
                                class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip" data-placement="top"
                                title="Hapus Data"><i class="fas fa-trash"></i> </a>
                            <?php else: ?>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i> No Action</a>
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
            <form action="<?=base_url('user/save');?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Pengguna <span class="text-danger">*</span></label>
                        <input type="hidden" name="idpengguna">
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="text-danger pass-info-r">*</span></label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="text-danger pass-info">Biarkan kosong jika tidak ingin mengubah password</small>
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