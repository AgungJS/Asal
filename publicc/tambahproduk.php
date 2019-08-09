
<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<input type="text" class="form-control" name="merk">
	</div>
	<div class="form-group">
		<label>Harga (RP)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Warna</label>
		<input type="text" class="form-control" name="warna">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save"> Simpan </button>
</form>

<?php 
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/".$nama);
	$koneksi->query("INSERT INTO t_produk_all 
		(nama_produk,merk_produk,harga_produk,warna_produk,foto_produk)
		VALUES('$_POST[nama]','$_POST[merk]','$_POST[harga]','$_POST[warna]',$nama");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=indexx.php?halaman=produk_honda'>";
}
 ?>