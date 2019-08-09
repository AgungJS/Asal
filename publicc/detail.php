<h2>Detail Pembelian</h2>

<?php
 $ambil=$koneksi->query("SELECT * FROM t_pembelian JOIN t_pelanggan ON t_pembelian.id_pelanggan=t_pelanggan.id_pelanggan WHERE t_pembelian.id_pembelian='$_GET[id]'");
 $detail = $ambil->fetch_assoc(); ?>

 <pre><?php print_r($detail); ?></pre>

 <strong><?php echo $detail['nama_pelanggan']; ?></strong> <br>
 <p>
 	<?php echo $detail['telepon_pelanggan']; ?> <br>
 	<?php echo $detail['email_pelanggan']; ?>
 </p>

 <p>
 	Tanggal	: <?php echo $detail['tgl_pembelian']; ?> <br>
 	Total 	: <?php echo $detail['total_pembelian']; ?>
 </p>

 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Produk</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subtotal</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM t_pembelian_produk JOIN t_produk_all ON t_pembelian_produk.id_produk=t_produk_all.id_produk WHERE t_pembelian_produk.id_pembelian='$_GET[id]'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
 		<tr>
 			<td><?php echo $nomor; ?></td>
 			<td><?php echo $pecah['nama_produk']; ?></td>
 			<td><?php echo $pecah['harga_produk']; ?></td>
 			<td><?php echo $pecah['jumlah']; ?></td>
 			<td>
 				<?php echo $pecah['harga_produk']*$pecah['jumlah']; ?>
 			</td>
 		</tr>
 		<?php $nomor++; ?>
		<?php } ?>
 	</tbody>
 </table>