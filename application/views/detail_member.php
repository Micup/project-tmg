
        <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
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
            </div>
        </div>
    </div>