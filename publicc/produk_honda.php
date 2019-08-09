<h2>Data Produk</h2>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Merk</th>
		<th>Harga</th>
		<th>Warna</th>
		<th>Foto</th>
		<th>Aksi</th>
	</tr>
</thead>
	<tbody>
		<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("SELECT * FROM t_produk_all WHERE merk_produk LIKE 'honda' " ); ?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['nama_produk']; ?></td>
		<td><?php echo $pecah['merk_produk']; ?></td>
		<td><?php echo $pecah['harga_produk']; ?></td>
		<td><?php echo $pecah['warna_produk']; ?></td>
		<td>
			<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
		</td>
		<td>
			<a href="" class="btn-danger btn">Hapus</a>
			<a href="" class="btn btn-warning">Ubah</a>
		</td>
	</tr>
	<?php $nomor++; ?>
	<?php } ?>
</tbody>
</table>
<a href="indexx.php?halaman=tambahproduk" class="btn btn-primary"> Tambah </a>