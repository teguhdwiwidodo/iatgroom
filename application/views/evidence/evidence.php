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
                <h4 class="modal-title" id="myModalLabel">Tambah Evidence</h4>
            </div>
            <div class="modal-body">
               <form id="tambah-evidence" method="POST">
                    <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" disabled>
                        </div>
                        <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" disabled>
                        </div>
                        <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" disabled>
                        </div>
                        <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" disabled>
                        </div>
                        <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" disabled>
                        </div>
                        <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" disabled>
                        </div>
                    <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-file"></i>
                      </span>
                      <input type="button" class="form-control" name="excel" aria-describedby="sizing-addon2" id="" value="Upload Foto Rapat" onclick="document.getElementById('imgrapat').click();" />
                        <input type="file" style="display:none;" onchange="previewImage();" id="imgrapat" name="image-rapat"/>
                    </div>
                    <div class="input-group form-group">
                        
                        <span class="input-group-addon" id="sizing-addon2">
                            <p >Foto Rapat :</p>
                        </span>
                        <img  id="pictrapat" alt="Foto Rapat" width="35%" height="25%" style="display: none;" />
                    </div>
                        
                      
                    <script >
                        function previewImage() {
                        document.getElementById("pictrapat").style.display = "block";
                        var oFReader = new FileReader();
                         oFReader.readAsDataURL(document.getElementById("imgrapat").files[0]);
                     
                        oFReader.onload = function(oFREvent) {
                          document.getElementById("pictrapat").src = oFREvent.target.result;
                        };
                      };
                    </script>

                    <div class="input-group form-group">
                      <span class="input-group-addon" id="sizing-addon2">
                        <i class="glyphicon glyphicon-file"></i>
                      </span>
                      <input type="button" class="form-control" name="excel" aria-describedby="sizing-addon2" id="" value="Upload Foto Absen" onclick="document.getElementById('imgabsen').click();" />
                        <input type="file" style="display:none;" onchange="previewImage1();" id="imgabsen" name="image-absen"/>
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon" id="sizing-addon2" >
                            <p>Foto Absen :</p>
                        </span>
                        <img  id="pictabsen"  alt="Foto Absen" width="35%" height="25%" style="display: none;" />
                    </div>
                    <script >
                        function previewImage1() {
                        document.getElementById("pictabsen").style.display = "block";
                        var oFReader = new FileReader();
                         oFReader.readAsDataURL(document.getElementById("imgabsen").files[0]);
                     
                        oFReader.onload = function(oFREvent) {
                          document.getElementById("pictabsen").src = oFREvent.target.result;
                        };
                      };
                    </script>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>