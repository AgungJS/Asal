<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","uas");
$keyword = $_GET["keyword"];

$semuadata=array();
$ambil = $koneksi->query("SELECT * FROM t_produk_all WHERE nama_produk LIKE %$keyword% OR warna_produk LIKE %$keyword%");
while($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

echo "<pre>";
print_r ($semuadata);
echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	hallo
</body>
</html>