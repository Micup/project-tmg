<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css' />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/admin.css">
     <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/> 
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/scripts.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/chosen.jquery.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>
    <title>ADMIN</title>
</head>

<body>

    <div id="noty-holder"></div>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="<?php echo site_url('admin');?>">
                    <img src="<?php echo base_url();?>/assets/img/brand-3.png" alt="LOGO">
                </a>
            </div>
            <ul class="nav navbar-right top-nav">
                <!--
                <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Notification"><i class="fa fa-bell-o"></i>
                </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="fa fa-angle-down"></b></a>                  
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-cog"></i> Password</a></li>
                        <li class="divider"></li>
                        -->
                        <li><a href="<?php echo site_url('login/logout');?>"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li>
                        <a href="<?php echo site_url('admin/index');?>"><i class="fa fa-fw fa-home"></i>  Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/data_admin');?>"><i class="glyphicon glyphicon-user"></i>  Data admin</a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('admin/data_member');?>"><i class="fa fa-fw fa-users"></i>  Data Peserta</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Penilaian <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="<?php echo site_url('admin/data_krenova');?>"><i class="fa fa-angle-double-right"></i> Administrasi</a></li>
                            <li><a href="<?php echo site_url('admin/data_substansi');?>"><i class="fa fa-angle-double-right"></i> Substansi</a></li>
                            <li><a href="<?php echo site_url('admin/data_pemaparan');?>"><i class="fa fa-angle-double-right"></i> Pemaparan</a></li>
                            <li><a href="<?php echo site_url('admin/data_survey');?>"><i class="fa fa-angle-double-right"></i> Survey</a></li>
                            <li><a href="<?php echo site_url('admin/data_pemenang');?>"><i class="fa fa-angle-double-right"></i> Pemenang</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>