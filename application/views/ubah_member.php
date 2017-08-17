<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                <form action="<?php echo base_url(). 'index.php/member/update_member'; ?>" method="post">
                                  <table class="table table-user-information">
                                    <tbody>
                                    <?php 
                                        foreach($edit_member as $u2){
                                    ?>
                                      <tr>
                                        <td>
                                          <div class="form-group">
                                              <input type="hidden" class="form-control" name="id" id="id" required data-validation-required-message="Username Tidak Boleh Kosong." value="<?php echo $u2->id;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Nama Lengkap:</td>
                                        <td>
                                           <div class="form-group">
                                              <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required data-validation-required-message="Nama Tidak Boleh Kosong." value="<?php echo $u2->nama;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Identitas:</td>
                                        <td><div class="form-group">
                                              <input type="text" class="form-control" name="jenis_identitas" id="jenis_identitas" required data-validation-required-message="Nama Tidak Boleh Kosong." value="<?php echo $u2->jenis_identitas;?>"/>
                                              <p class="help-block text-info">* KTP/SIM/PASPOR</p>
                                          </div></td>
                                      </tr>
                                      <tr>
                                        <td>No Identitas:</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="no_identitas" id="no_identitas" required data-validation-required-message="Nama Tidak Boleh Kosong." value="<?php echo $u2->no_identitas;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required data-validation-required-message="Nama Tidak Boleh Kosong." value="<?php echo $u2->tgl_lahir;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                          <div class="form-group">
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                              <option value="<?php echo $u2->jenis_kelamin;?>"><?php echo $u2->jenis_kelamin;?></option>
                                              <option value="Laki-Laki">Laki-Laki</option>
                                              <option value="Perempuan">Perempuan</option>
                                            </select>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Agama</td>
                                        <td>
                                          <div class="form-group">
                                            <select name="agama" id="agama" class="form-control">
                                              <option value="<?php echo $u2->agama;?>"><?php echo $u2->agama;?></option>
                                              <option value="ISLAM">ISLAM</option>
                                              <option value="KATHOLIK">KATHOLIK</option>
                                              <option value="PROTESTAN">PROTESTAN</option>
                                              <option value="HINDU">HINDU</option>
                                              <option value="BUDHA">BUDHA</option>
                                              <option value="KONGHUCU">KONGHUCU</option>
                                              <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                                            </select>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Alamat</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="alamat" id="alamat" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->alamat;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Kelurahan</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="kelurahan" id="kelurahan" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->kelurahan;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Kecamatan</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="kecamatan" id="kecamatan" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->kecamatan;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required data-validation-required-message="Pekerjaan Tidak Boleh Kosong." value="<?php echo $u2->pekerjaan;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Institusi</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="institusi" id="institusi" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->institusi;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Alamat Lengkap Institusi</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="alamat_institusi" id="alamat_institusi" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->alamat_institusi;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan Lain</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="pekerjaan_lain" id="pekerjaan_lain" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->pekerjaan_lain;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>No Telepon</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="nomor_handphone" id="nomor_handphone" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->nomor_handphone;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td> 
                                      </tr>
                                      <tr>
                                        <td>Username</td>
                                        <td>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="username" id="username" required data-validation-required-message="Alamat Tidak Boleh Kosong." value="<?php echo $u2->username;?>"/>
                                              <p class="help-block text-info"></p>
                                          </div>
                                        </td> 
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td>
                                          <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-block btn-xl">Simpan Perubahan</button>
                                          </div>
                                        </td>
                                      </tr>
                                      <?php
                                        }
                                      ?>
                                    </tbody>
                                  </table>
                                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
