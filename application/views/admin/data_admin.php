
<div class="row">
    <div class="col-md-12">

    <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="page header"align="center"><i class="fa fa-table" > Daftar Admin</i></h2>
    </div>
    <div class="panel-body">
        
        <div class="table-responsive">    
        <table class="table table-hover small">
        <thead>      
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Level</th>
            
        </tr>
        </thead>
        <tbody>

        <?php
        $no=1;
        if(isset($data_admin)){
            foreach($data_admin as $row){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->level; ?></td>


                    <td>
                        <a class="btn btn-mini" href="<?php echo site_url('admin/edit_admin/'.$row->id);?>" data-toggle="modal" data-target="#modal-detail"><i class="icon-pencil"></i> Edit</a>
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


<!-- ============ MODAL EDIT Admin COBA =============== -->
 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal-detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Detail Admin</h4>
                </div>
                <div class="modal-body">      
                    <?php foreach($data_admin as $u){ ?>              
                    <form class="form-horizontal" action="<?php echo site_url('admin/update_data_admin')?>">
                        
                        <div class="row">
                          <div class="control-group">
                        <label class="control-label">ID Admin</label>
                        <div class="controls">
                            <input name="id" type="text" value="<?php echo $row->id; ?>" class="form-control" readonly="true">
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Nama Admin</label>
                            <div class="controls">
                                <input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Username</label>
                            <div class="controls">
                                <input type="text" name="username" value="<?php echo $u->username ?>" class="form-control" required>
                            </div>
                        </div>
<!--
                        <div class="control-group">
                            <label class="control-label" >Username</label>
                            <div class="controls">
                                <td><input type="text" name="email" value="<?php echo $u->username ?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Password</label>
                            <div class="controls">
                                <input name="password" type="password" value="<?php //echo $row->password?>"class="form-control" required>
                            </div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label">Level</label>
                            <div class="controls">
                                <select name="level" id="level">
                                    <?php //if($row->level == 'Admin'){?>
                                        <option value="Admin" selected="selected">Admin</option>                                    
                                        <option value="Member" selected="selected">Member</option>
                                    <?php //}else{ ?>
                                        
                                    <?php //}?>
                                </select>
                            </div>
                        </div> -->
                            </div>                
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                </form>
                
                <?php } ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<!-- ============ MODAL EDIT Admin =============== -->
 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modal-detail1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Detail Admin</h4>
                </div>
                <div class="modal-body">                    
                    <form class="form-horizontal" action="<?php echo site_url('Admin/update_admin')?>">
                        
                        <div class="row">
                          <div class="control-group">
                        <label class="col-sm-2 control-label">ID Admin</label>
                        <div class="controls">
                            <input name="id" type="text" value="<?php echo $row->id; ?>" class="form-control" readonly="true">
                        </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Nama</label>
                            <div class="controls">
                                <input name="nama" type="text" value="<?php echo $row->nama?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Username</label>
                            <div class="controls">
                                <input name="username" type="text" value="<?php echo $row->username?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" >Password</label>
                            <div class="controls">
                                <input name="password" type="password" value="<?php //echo $row->password?>"class="form-control" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Level</label>
                            <div class="controls">
                                <select name="level" id="level">
                                    <?php //if($row->level == 'Admin'){?>
                                        <option value="Admin" selected="selected">Admin</option>                                    
                                        <option value="Member" selected="selected">Member</option>
                                    <?php //}else{ ?>
                                        
                                    <?php //}?>
                                </select>
                            </div>
                        </div>
                            </div>                
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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