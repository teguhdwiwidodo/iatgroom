<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box box-danger">
    <div class="box-header">
        <div class="col-md-3" style="padding: 0;">
            <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-evidence"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Evidence</button>
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


<!-- Modal -->
<div class="modal fade" id="tambah-evidence" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>