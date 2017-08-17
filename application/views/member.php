

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" id="main">

                    <div class="col-lg-12">
                        <!-- Section Admin 1 -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <i class="fa fa-user fa-3x"></i> <span class="counter pull-right">231</span>
                                    </div>
                                    <div class="panel-footer footer-primary"><a href="">Lihat Data</a></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-success">
                                    <div class="panel-body">
                                        <i class="fa fa-globe fa-3x"></i> <span class="counter pull-right">424</span></span>
                                    </div>
                                    <div class="panel-footer footer-success"><a href="">Lihat Data</a></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <i class="fa fa-newspaper-o fa-3x"></i> <span class="counter pull-right">21</span>
                                    </div>
                                    <div class="panel-footer footer-info"><a href="">Lihat Data</a></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel panel-warning">
                                    <div class="panel-body">
                                        <i class="fa fa-check-square fa-3x"></i> <span class="counter pull-right">145</span>
                                    </div>
                                    <div class="panel-footer footer-warning"><a href="">Lihat Data</a></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Section Admin 2 -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-area-chart"></i> Grafik Pendaftaran Peserta</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div width="100%" id="graph1"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart"></i> Kategori Paling Digamari</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div width="100%" id="graph2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <!-- Section Admin 3 -->
                        
                        <div id="container">
                            <h1>CodeIgniter with Highcharts <span style="float:right">Dida Nurwanda</span></h1>

                            <div id="body">
                                <div id="chart"></div>
                            </div>

                            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
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
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.7.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/highcharts.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/modules/exporting.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/themes/dark-green.js'); ?>"></script>
    <script type="text/javascript">
    jQuery(function(){
        new Highcharts.Chart({
            chart: {
                renderTo: 'chart',
                type: 'line',
            },
            title: {
                text: 'Daftar Peserta Per-Tahun',
                x: -20
            },
            subtitle: {
                text: 'http://didanurwanda.blogspot.com',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Peserta (Tahun)'
                }
            },
            series: [{
                name: 'Pendapatan (Juta)',
                data: <?php echo json_encode($data); ?>
            }]
        });
    }); 
    </script>
</body>

</html>