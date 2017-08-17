<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter User Registration Form Demo</title>
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<br><br><br>
<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Pendaftaran Akun</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "registrationform");
                echo form_open("user/register", $attributes);?>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input class="form-control" name="nama" type="text" value="<?php echo set_value('nama'); ?>" />
                    <span class="text-danger"><?php echo form_error('nama'); ?></span>
                </div>

                <div class="form-group">
                    <label for="name">Username</label>
                    <input class="form-control" name="username"  type="text" value="<?php echo set_value('username'); ?>" />
                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                </div>
                
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input class="form-control" name="email" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Password</label>
                    <input class="form-control" name="password"  type="password" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Confirm Password</label>
                    <input class="form-control" name="cpassword"  type="password" />
                    <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Daftar</button>
                    <button name="cancel" type="reset" class="btn btn-default">Batal</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
                <p>
             Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/home','di sini..'); ?>
             </p>
            </div>
            
        </div>
    </div>
</div>
</div>
</body>
</html>