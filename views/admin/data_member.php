
<div class="row">
    <div class="col-md-12">

    <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="page header"align="center"><i class="fa fa-table" > Daftar Member</i></h2>
    </div>
    <div class="panel-body">
        
        <div class="table-responsive">    
        <table class="table table-hover small">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Institusi</th>
            <th>Email</th>
            <th>Telp</th> 

            
        </tr>
        </thead>
        <tbody>

        <?php
        $no=1;
        if(isset($data_member)){
            foreach($data_member as $row){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->jenis_kelamin; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <td><?php echo $row->institusi; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->nomor_handphone; ?></td>  

                    <td>
                        <a class="btn btn-mini" href="<?php echo site_url('admin/member_detail/'.$row->id);?>" data-toggle="modal" data-target="#modal-detail"><i class="icon-pencil"></i> Detail</a>
                        <a class="btn btn-mini" href="<?php echo site_url('admin/hapus_member/'.$row->id);?>"
                           onclick="return confirm('Anda yakin?')"> <i class="icon-remove"></i> Hapus</a>
                    </td>

                </tr>

            <?php }
        }
        ?>

        </tbody>
    </table>
    </div>
    </div>
</div>
    </div>
</div>

<!-- ============ MODAL Detail MEMBER =============== -->
 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Detail Data Member</h4>
                </div>
                <div class="modal-body">                    
                    <form class="form-horizontal" action="<?php //echo site_url('Admin/member_detail')?>">
                        <div class="row">
                          
                        </div>                
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<!-- ============ MODAL Detail MEMBER =============== -->
 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Detail Data Member</h4>
                </div>
                <div class="modal-body">                    
                    <form class="form-horizontal" action="<?php //echo site_url('Admin/member_detail')?>">
                        <div class="row">
                <?php 
                   foreach($data_member as $u2){
                ?>
                    <div class=" col-md-9 col-lg-9 "> 
                                  <table class="table table-user-information">
                                    <tbody>
                                    <?php 
                                        foreach($data_member as $u2){
                                    ?>
                                      <tr>
                                        <td>ID User:</td>
                                        <td>: <?php echo $u2->id;?></td>
                                      </tr>
                                      <tr>
                                        <td>Nama Lengkap:</td>
                                        <td>: <?php echo $u2->nama;?></td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Identitas:</td>
                                        <td>: <?php echo $u2->jenis_identitas;?></td>
                                      </tr>
                                      <tr>
                                        <td>No Identitas:</td>
                                        <td>: <?php echo $u2->no_identitas;?></td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Daftar:</td>
                                        <td>: <?php echo $u2->date_time;?></td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>: <?php echo $u2->tgl_lahir;?></td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>: <?php echo $u2->jenis_kelamin;?></td>
                                      </tr>
                                      <tr>
                                        <td>Agama</td>
                                        <td>: <?php echo $u2->agama;?></td>
                                      </tr>
                                      <tr>
                                        <td>Alamat</td>
                                        <td>: <?php echo $u2->alamat;?></td>
                                      </tr>
                                      <tr>
                                        <td>Kelurahan</td>
                                        <td>: <?php echo $u2->kelurahan;?></td>
                                      </tr>
                                      <tr>
                                        <td>Kecamatan</td>
                                        <td>: <?php echo $u2->kecamatan;?></td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan</td>
                                        <td>: <?php echo $u2->pekerjaan;?></td>
                                      </tr>
                                      <tr>
                                        <td>Institusi</td>
                                        <td>: <?php echo $u2->institusi;?></td>
                                      </tr>
                                      <tr>
                                        <td>Alamat Lengkap Institusi</td>
                                        <td>: <?php echo $u2->alamat_institusi;?></td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan Lain</td>
                                        <td>: <?php echo $u2->pekerjaan_lain;?></td>
                                      </tr>
                                      <tr>
                                        <td>No Telepon</td>
                                        <td>: <?php echo $u2->nomor_handphone;?></td> 
                                      </tr>
                                      <tr>
                                        <td>Username</td>
                                        <td>: <?php echo $u2->username;?></td> 
                                      </tr>
                                      <?php
                                        }
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                <?php } ?>
                </div>  
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->





   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
    <script src="assets/js/main.js"></script>
</body>

</html>