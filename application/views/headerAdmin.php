<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/ubold_2.1/dark_leftbar/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2016 02:52:09 GMT -->
<head>
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>ubold/assets/images/favicon_1.ico">

    <title>Ar Printing</title>

    <!-- DataTables -->
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


    <link href="<?php echo base_url(); ?>ubold/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <script src="<?php echo base_url(); ?>ubold/assets/js/modernizr.min.js"></script>
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
        </script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url('beranda');?>" class="logo"><i class="ion-ios7-world icon-c-logo"></i><span>Ar Printing</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="<?php echo base_url(); ?>ubold/assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="<?php echo base_url(); ?>ubold/assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <ul class="nav navbar-nav navbar-right pull-right">
                             <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>ubold/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url().'logincontroller/logout'?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>   
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Menu Utama</li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('admin/welcome'); ?>" class="waves-effect"><i class="ti-home"></i>
                                 <span> Beranda </span> <span></span></a>
                               
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-dashboard"></i> <span> Master</span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url('/admin/ProdukController'); ?>">Produk</a></li>
                                    <li><a href="<?php echo base_url('/admin/UserController'); ?>">User</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('/admin/TransaksiController'); ?>"class="waves-effect"><i class="ti-money"></i>  Transaksi Penjualan</a>

                            </li>

                            <li class="has_sub">
                                 <a href="<?php echo base_url('/admin/LaporanController'); ?>" class="waves-effect"><i class="ti-file"></i>  Laporan Penjualan</a>
                                
                            </li>

                            
                            </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
    <!-- Left Sidebar End -->
            <div class="container">
      