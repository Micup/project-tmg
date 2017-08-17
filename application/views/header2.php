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
    <title>Krenova Template</title>
    
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
                <a class="navbar-brand" href="<?php echo site_url('member');?>">
                    <img src="<?php echo base_url();?>/assets/img/brand-3.png" alt="LOGO">
                </a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="<?php echo site_url('login/logout');?>"><i class="fa fa-fw fa-power-off"></i> Logout</a></b></a>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo site_url('member/member_detail');?>"><i class="fa fa-fw fa-users"></i>  Data Member</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('pendaftaran');?>"><i class="fa fa-fw fa-paper-plane-o"></i> Form Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </nav>