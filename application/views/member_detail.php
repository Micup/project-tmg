        <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                <?php 
                    foreach($data_member as $u2){
                ?>
                    <div class="col-sm-6 col-md-4">
                        <img src="<?php echo base_url();?>/assets/img/user.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $u2->nama;?></h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $u2->email;?>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Terdaftar : <?php echo $u2->date_time;?></p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <a href="<?php echo site_url('member/data_member');?>"><button type="button" class="btn btn-primary">DETAIL MEMBER</button></a>
                            <a href="<?php echo site_url('member/edit_member');?>"><button type="button" class="btn btn-primary">UBAH DATA MEMBER</button></a>
                        </div>
                    </div>
                <?php } ?>
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