<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<h3>Edit Barang</h3>
 
	<a href="/admin/user"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($barang as $usr)
	<form action="/admin/user/updateusr" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $usr->id }}"> <br/>
		name <input type="text" required="required" name="name" value="{{ $usr->name }}"> <br/>
		email <input type="text" required="required" name="email" value="{{ $usr->email }}"> <br/>
		password <input type="text" required="required" name="password" value="{{ $usr->password }}"> <br/>
		alamat <input type="text" required="required" name="alamat" value="{{ $usr->alamat }}"> <br/>
		nohp <input type="text" required="required" name="nohp" value="{{ $usr->nohp }}"> <br/>
		level <input type="text" required="required" name="level" value="{{ $usr->level }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>