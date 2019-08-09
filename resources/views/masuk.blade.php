



<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","uas");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Pelanggan</title>
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
				<h2> Pelanggan : Login</h2>

				<h5>( Silahkan login untuk kembali berbelanja )</h5>
				<br />
			</div>
		</div>
		<form class="form-signin" method="post">
			<div class="panel periodic-login">
				
				<div class="form-group ">
					<span class="bar"></span>
					<label>Email</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group ">	
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>

				<a href="checkout" class="btn btn-primary ">Login</a>
				<a href="registeration2" class="btn btn-primary" >Daftar</a>
				
				<!-- <button class="btn btn-primary" name="login">Login</button> -->
			</div>
				 
		</form>
	</div>

	<!-- <?php
	//jika ada tombol simpan(tombo simpan ditekan)

	if (isset($_POST['login']))
	{ 
		$email = $_POST["email"];
		$password = $_POST["password"];
			// lakukan kuery ngecek akun di tabel pelanggan di db
		$ambil = $koneksi->query("SELECT * FROM t_pelanggan WHERE email_pelanggan = '$username' AND password_pelanggan = '$password' ");

			// ngitung akun yang terambil
		if( mysqli_num_rows($ambil) == 1){
			$row = mysqli_fetch_assoc($ambil);
			if (password_verify($password, $row["password"]) ) {
				header ("Location: home1");
				exit;
			}
		}

			//{
				//anda sudah login
			//	$akun = $emaul->fetch_assoc();
			//	$_SESSION["t_pelanggan"] = $akun;

			//	echo "<script>alert('anda berhasil login, periksa akun anda')</script>";
			//	echo "<script>location='home';</script>";
			//}
			//else
			//	echo "<script>alert('anda gagal login, periksa akun anda')</script>";
			//	echo "<script>location='login';</script>";
	}
	?>-->
</body>
</html>