<?php
$koneksi = new mysqli("localhost","root","","uas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TIGREAL MOTOR</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/js.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="mimin" class="dashboard">
    <!-- start: Header -->
    <nav class="navbar navbar-default header navbar-fixed-top">
      <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
          <div class="opener-left-menu is-open">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
          <a href="index.html" class="navbar-brand"> 
           <b>TIGREAL MOTOR</b>
         </a>

         <ul class="nav navbar-nav search-nav">
          <li>
           <div class="search">
            <span class="fa fa-search icon-search" style="font-size:23px;"></span>
            <div class="form-group form-animate-text">
              <input type="text" class="form-text" required>
              <span class="bar"></span>
              <label class="label-search">Type anywhere to <b>Search</b> </label>
            </div>
          </div>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="dropdown agung-dropdown">
         <ul class="dropdown-menu user-dropdown">
           <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
           <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
           <li role="separator" class="divider"></li>
           <li class="more">
            <ul>
              <li><a href=""><span class="fa fa-cogs"></span></a></li>
              <li><a href=""><span class="fa fa-lock"></span></a></li>
              <li><a href=""><span class="fa fa-power-off "></span></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li ><a href="#" class="opener-right-menu"><span class="fa fa-heart"></span></a></li>
    </ul>
  </div>
</div>
</nav>
<!-- end: Header -->

<div class="container-fluid mimin-wrapper">

  <!-- start:Left Menu -->
  <div id="left-menu">
    <div class="sub-left-menu scroll">
      <ul class="nav nav-list">
        <li><div class="left-bg"></div></li>
        <li class="time">
          <h1 class="animated fadeInLeft">21:00</h1>
          <p class="animated fadeInRight">Sat,October 1st 2029</p>
        </li>

        <li><a href="home1"><span class="fa-home fa"></span>Home</a></li>
        <li><a href="produk"><span class="fa fa-qrcode fa "></span> Produk </a></li>
        <li><a href="keranjang"><span class="fa fa-table fa"></span> Keranjang </a></li>
        <li><a href="login"><span class="fa fa-laptop fa"></span>Login </a></li>
        <li><a href="checkout"><span class="fa fa-bolt fa"></span>Checkout </a></li>
      </ul>
    </div>
  </div>
  <!-- end: Left Menu -->


  <!-- start: content -->
  <div id="content">
    <div class="panel">
      <div class="panel-body">
        <div class="col-md-6 col-sm-12">
          <h3 class="animated fadeInLeft">Customer Service</h3>
          <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Cipeundeuy,Indonesia</p>
          <ul class="nav navbar-nav">
            <li><a href="honda" >Honda</a></li>
            <li><a href="yamaha">Yamaha</a></li>
            <li><a href="suzuki">Suzuki</a></li>
            <li><a href="kawasaki">Kawasaki</a></li>
            <li><a href="tvs">TVS</a></li>
            <li><a href="other">Other</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
            <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Bandung </h3>
            <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
          </div>
          <div class="col-md-6 col-sm-6">
           <div class="wheather">
            <div class="stormy rainy animated pulse infinite">
              <div class="shadow">

              </div>
            </div>
            <div class="sub-wheather">
              <div class="thunder">

              </div>
              <div class="rain">
                <div class="droplet droplet1"></div>
                <div class="droplet droplet2"></div>
                <div class="droplet droplet3"></div>
                <div class="droplet droplet4"></div>
                <div class="droplet droplet5"></div>
                <div class="droplet droplet6"></div>
              </div>
            </div>
          </div>
        </div>                   
      </div>
    </div>                    
  </div>

  <div class="col-md-12" style="padding:20px;">
    <div class="col-md-12 padding-0">
      <div class="col-md-8 padding-0">
        <div class="col-md-12 padding-0">


          <center><h2>Daftar Semua Produk</h2>

          <table border="4">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Warna</th>
                
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1; ?>
              <?php $ambil=$koneksi->query("SELECT * FROM t_produk_all " ); ?>
              <?php while($pecah = $ambil->fetch_assoc()){ ?>
                <tr>
                  <td><?php echo $nomor; ?></td>
                  <td><?php echo $pecah['nama_produk']; ?></td>
                  <td><?php echo $pecah['merk_produk']; ?></td>
                  <td><?php echo $pecah['harga_produk']; ?></td>
                  <td><?php echo $pecah['warna_produk']; ?></td>
                </tr>
                <?php $nomor++; ?>
              <?php } ?>
            </tbody>
          </table></center>