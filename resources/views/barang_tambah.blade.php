<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Data barang</h3>
 
	<a href="/admin/barang"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/admin/barang/storebrg" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		nama_barang <input type="text" name="nama_barang" required="required"> <br/>
		gambar <input type="text" name="gambar" required="required"> <br/>
		harga <input type="number" name="harga" required="required"> <br/>
		stok <input type="number" name="stok" required="required"> <br/>
		keterangan <input type="text" name="keterangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>