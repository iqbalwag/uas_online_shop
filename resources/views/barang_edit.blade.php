<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Edit Barang</h3>
 
	<a href="/	admin/barang"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($barang as $brg)
	<form action="/admin/barang/updatebrg" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $brg->id }}"> <br/>
		nama <input type="text" required="required" name="nama_barang" value="{{ $brg->nama_barang }}"> <br/>
		gambar <input type="text" required="required" name="gambar" value="{{ $brg->gambar }}"> <br/>
		harga <input type="number" required="required" name="harga" value="{{ $brg->harga }}"> <br/>
		stok <input type="number" required="required" name="stok" value="{{ $brg->stok }}"> <br/>
		keterangan <input type="text" required="required" name="keterangan" value="{{ $brg->keterangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>