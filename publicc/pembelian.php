<h2>Data Pembelian</h2>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Tanggal Pembelian</th>
		<th>Total Pembelian</th>
		<th>Aksi</th>
	</tr>
</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM t_pembelian JOIN t_pelanggan ON t_pembelian.id_pelanggan=t_pelanggan.id_pelanggan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['nama_pelanggan']; ?></td>
		<td><?php echo $pecah['tgl_pembelian']; ?></td>
		<td><?php echo $pecah['total_pembelian']; ?></td>
		<td>
			<a href="indexx.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn-info btn">Detail</a>
		</td>
	</tr>
	<?php $nomor++; ?>
	<?php } ?>
</tbody>
</table>