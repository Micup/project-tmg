
<div class="row">
    <div class="col-md-12">

    <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="page header"align="center"><i class="fa fa-table" > Daftar Penelitian</i></h2>
    </div>
    <div class="panel-body">
        
        <div class="table-responsive">    
        <table class="table table-hover small">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul Penelitian</th>
            <th>Bidang </th>
            <th>Lokasi </th>
            <th>PenanggungJawab</th>
            <th>Mulai </th>            
            <th>Selesai </th>
            
        </tr>
        </thead>
        <tbody>

        <?php
        $no=1;
        if(isset($data_krenova)){
            foreach($data_krenova as $row){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->judul_penelitian; ?></td>
                    <td><?php echo $row->bidang_penelitian; ?></td>
                    <td><?php echo $row->lokasi_penelitian; ?></td>
                    <td><?php echo $row->penanggung_jawab; ?></td>
                    <td><?php echo $row->tanggal_mulai_penelitian; ?></td>
                    <td><?php echo $row->tanggal_selesai_penelitian; ?></td>

                    <td>
                        <a class="btn btn-mini" href="#modalDetailKrenova<?php //echo $row->id?>" data-toggle="modal"> 
                            <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-mini" href="<?php echo site_url('admin/update_pemaparan/'.$row->id);?>">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-mini" href="<?php echo site_url('admin/hapus_pemaparan/'.$row->id);?>" onclick="return confirm('Anda yakin?')"> 
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
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




<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
    <script src="assets/js/main.js"></script>
</body>

</html>