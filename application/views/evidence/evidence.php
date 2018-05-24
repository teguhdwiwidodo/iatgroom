<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-danger">
    <div class="box-header">
        <div class="col-md-3" style="padding: 0;">
            <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pegawai"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Evidence</button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="list-data" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Nama Rapat</th>
                <th>Nama Ruangan</th>
                <th>Ketua Tim</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
            </thead>
            </tbody>
        </table>
    </div>
</div>