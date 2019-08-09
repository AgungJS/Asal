<h2>Data Pelanggan</h2>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Email Pelanggan</th>
		<th>Nama Pelanggan</th>
		<th>Telepon Pelanggan</th>
		<th>Aksi</th>
	</tr>
</thead>
	<tbody>
		<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("SELECT * FROM t_pelanggan"); ?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['email_pelanggan']; ?></td>
		<td><?php echo $pecah['nama_pelanggan']; ?></td>
		<td><?php echo $pecah['telepon_pelanggan']; ?></td>
		<td>
			<a href="" class="btn-danger btn">Hapus</a>
		</td>
	</tr>
	<?php $nomor++; ?>
	<?php } ?>
</tbody>
</table>