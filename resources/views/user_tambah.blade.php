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
		name <input type="text" name="name" required="required"> <br/>
		email <input type="text" name="email" required="required"> <br/>
		password <input type="text" name="password" required="required"> <br/>
		alamat <input type="text" name="alamat" required="required"> <br/>
		nohp <input type="text" name="nohp" required="required"> <br/>
		level <input type="text" name="level" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>