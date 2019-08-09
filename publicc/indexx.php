<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","uas");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Tigreal Motor</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Admin &nbsp; <a href="login1.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/></li>
                    <li><a href="indexx.php"><i class="fa fa-dashboard fa-3x"></i> Home </a></li>
                    <li class="active ripple">
                        <a class="tree-toggle nav-header"><i class="fa fa-dashboard fa-3x"></i>
                        Produk <i class="fa-angle-right fa right-arrow text-right"></i>
                        </a>
                        <ul class="nav nav-list tree">
                            <li><a href="indexx.php?halaman=produk_honda"> Honda </a></li>
                            <li><a href="indexx.php?halaman=produk_yamaha">Yamaha</a></li>
                            <li><a href="indexx.php?halaman=produk_suzuki">Suzuki</a></li>
                            <li><a href="indexx.php?halaman=produk_kawasaki">Kawasaki</a></li>
                            <li><a href="indexx.php?halaman=produk_tvs">TVS</a></li>
                            <li><a href="indexx.php?halaman=produk_other">Other</a></li>
                        </ul>
                    </li>

                    <li><a href="indexx.php?halaman=pembelian"><i class="fa fa-dashboard fa-3x"></i> Pembelian </a></li>
                    <li><a href="indexx.php?halaman=pelanggan"><i class="fa fa-dashboard fa-3x"></i> Pelanggan </a></li>
                    <li><a href="login1.php"><i class="fa fa-dashboard fa-3x"></i> Logout </a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk_honda")
                    {
                        include 'produk_honda.php';
                    }
                    if ($_GET['halaman']=="produk_yamaha")
                    {
                        include 'produk_yamaha.php';
                    }
                    if ($_GET['halaman']=="produk_suzuki")
                    {
                        include 'produk_suzuki.php';
                    }
                    if ($_GET['halaman']=="produk_kawasaki")
                    {
                        include 'produk_kawasaki.php';
                    }
                    if ($_GET['halaman']=="produk_tvs")
                    {
                        include 'produk_tvs.php';
                    }
                    if ($_GET['halaman']=="produk_other")
                    {
                        include 'produk_other.php';
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
