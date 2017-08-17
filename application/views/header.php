<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krenova Temanggung</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.6.0/introjs.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/favicon.png">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/krenova.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hover.css">


</head>

<body>

    <a class="btn btn-md btn-warning" style="position:fixed;z-index:10;bottom:0;right:10px;border-bottom-right-radius:0px !important;border-bottom-left-radius:0px !important;" href="javascript:void(0);" onclick="javascript:introJs().start();"><i class="fa fa-info-circle"></i> User Guide</a>

    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url();?>assets/img/brand-3.png" alt="Brand Krenova">
                        <img src="<?php echo base_url();?>assets/img/brand-4.png" alt="Brand Krenova">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('home');?>" class="hvr-sweep-to-top">HOME</a></li>
                        <li><a data-scroll href="#kategori" class="hvr-sweep-to-top">KATEGORI</a></li>
                        <li><a data-scroll href="#alur" class="hvr-sweep-to-top">ALUR</a></li>
                        <li><a href="<?php echo site_url('about');?>" class="hvr-sweep-to-top" data-step="6" data-intro="Lebih Dekat dengan Krenova" data-position='left'>ABOUT US</a></li>
                        <li><a data-scroll href="#news" class="hvr-sweep-to-top">NEWS</a></li>
                        <li class="dropdown" data-step="7" data-intro="Member Area" data-position='left'>
                            <a href="#" class="hvr-sweep-to-top dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEMBER AREA <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
                                <li><a href="<?php echo site_url('user/register');?>">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>