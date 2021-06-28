<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h3>Data Barang</h3>
	<div>
	<a href="/admin"> Back</a>
	</div>
	<a href="/admin/barang/barang_tambah"> + Tambah Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>gambar</th>
			<th>harga</th>
			<th>stok</th>
			<th>keterangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($barang as $brg)
		<tr>
			<td>{{ $brg->id }}</td>
			<td>{{ $brg->nama_barang }}</td>
			<td>{{ $brg->gambar }}</td>
			<td>{{ $brg->harga }}</td>
			<td>{{ $brg->stok }}</td>
			<td>{{ $brg->keterangan }}</td>
			<td>
			<a href="/admin/barang/barang_edit/{{ $brg->id }}">Edit</a>
				|
				<a href="/admin/barang/hapusbrg/{{ $brg->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>