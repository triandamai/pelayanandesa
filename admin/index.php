<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Halaman Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> HOME</a>
                        </li>
						 <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>DATA PENDUDUK</a>
						</li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>MANAJEMEN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="?module=skck">PENGANTAR SKCK</a>
                                </li>
                                <li>
                                    <a href="?module=belumpernahmenikah">KETERANGAN BELUM PERNAH MENIKAH</a>
                                </li>
								<li>
                                    <a href="?module=menikah">SURAT KETERANGAN UNTUK MENIKAH</a>
                                </li>
								 <li>
                                    <a href="?module=ijin_khajatan">PENGANTAR IJIN KHAJATAN</a>
                                </li>
								<li>
                                    <a href="?module=ijin_keramaian">IJIN KERAMAIAN</a>
                                </li>
								<li>
                                    <a href="?module=sktm">KETERANGAN TIDAK MAMPU</a>
                                </li>
								<li>
                                    <a href="?module=sktm_sekolah">SURAT SKTM SEKOLAH</a>
                                </li>
								<li>
                                    <a href="?module=domisili">SURAT KETERANGAN DOMISILI</a>
                                </li>
								<li>
                                    <a href="?module=usaha">SURAT KETERANGAN USAHA</a>
                                </li>
								<li>
                                    <a href="?module=kehilangan">SURAT KETERANGAN KEHILANGAN</a>
                                </li>
								
								<li>
                                    <a href="?module=pemohon_kk">SURAT PEMOHON KK</a>
                                </li>
								<li>
                                    <a href="?module=kelahiran">SURAT PENGANTAR AKTA KELAHIRAN</a>
                                </li>
								<li>
                                    <a href="?module=kematian">SURAT KEMATIAN</a>
                                </li>
								<li>
                                    <a href="?module=pindah_penduduk">SURAT KETERANGAN PINDAH PENDUDUK</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                        <li>
                            <a href="#"><i class="fa fa-book"> </i>LAPORAN<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
                                    <a href="?module=cetak_skck">CETAK SKCK</a>
                                </li>
								<li>
                                    <a href="?module=cetak_belumpernahmenikah">CETAK KETERANGAN BELUM PERNAH MENIKAH </a>
                                </li>
                                <li>
                                    <a href="?module=cetak_ijin_khajatan">CETAK IJIN KHAJATAN</a>
                                </li>
								<li>
                                    <a href="?module=cetak_ijin_hiburan">CETAK IJIN KERAMAIAN</a>
                                </li>
								<li>
                                    <a href="?module=cetak_sktm">CETAK KETERANGAN TIDAK MAMPU</a>
                                </li>
								<li>
                                    <a href="?module=cetak_sktm_sekolah">CETAK SKTM SEKOLAH</a>
                                </li>
								<li>
                                    <a href="?module=cetak_domisili">CETAK DOMISILI</a>
                                </li>
								<li>
                                    <a href="?module=cetak_usaha">CETAK KETERANGAN USAHA</a>
                                </li>
								<li>
                                    <a href="?module=cetak_kehilangan">CETAK KETERANGAN KEHILANGAN</a>
                                </li>
								<li>
                                    <a href="?module=cetak_pemohon_kk">CETAK PEMOHON KK</a>
                                </li>
								<li>
                                    <a href="?module=cetak_kelahiran">CETAK SURAT KELAHIRAN</a>
                                </li>
								<li>
                                    <a href="?module=cetak_kematian">CETAK SURAT KEMATIAN</a>
                                </li>
								<li>
                                    <a href="?module=cetak_pindah_penduduk">CETAK PINDAH PENDUDUK</a>
                                </li>
							</ul>
						</li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

		<?php include"pages/content.php"; ?>
        
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
