<h2>hai</h2>

<table border='1'>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Deslripsi</th>
		<th>Foto</th>
	</tr>
	@foreach ($produk as $row)
	<tr>
		<td>{{ isset ($i) ? ++$i : $i = 1 }}</td>
		<td>{{ $row -> nama_produk }}</td>
		<td>{{ $row -> harga_produk }}</td>
		<td>{{ $row -> deskripsi_produk }}</td>
		<td>{{ $row -> foto_produk }}</td>
	</tr>
</table>