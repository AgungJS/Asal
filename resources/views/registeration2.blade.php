



<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","uas");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pelanggan</title>
	<!-- start: Css -->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

	<!-- plugins -->
	<link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
	<link href="asset/css/style.css" rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href="asset/img/logomi.png">
</head>
<body>
	<div class="container">
		<div class="row text-center ">
			<div class="col-md-12">
				<br /><br />
				<h2> Pelanggan : Daftar</h2>

				<h5>( Silahkan daftar terlebih dahulu )</h5>
				<br />
			</div>
		</div>
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <form role="form">
            <br/>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
              <input type="text" class="form-control" placeholder="Nama Lengkap" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">@</span>
              <input type="text" class="form-control" placeholder="Email Anda" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
              <input type="password" class="form-control" placeholder="Masukan Password" />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
              <input type="password" class="form-control" placeholder="Konfirmasi Password" />
            </div>

            <center><a href="masuk" class="btn btn-success ">Daftar</a></center>
            <hr />
          </form></div></div>
        </div>
      </body>
      </html>