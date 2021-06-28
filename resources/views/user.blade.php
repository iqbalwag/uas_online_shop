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
			<th>email</th>
			<th>password</th>
			<th>alamat</th>
			<th>no hp</th>
			<th>level</th>
			<th>Opsi</th>
		</tr>
		@foreach($user as $usr)
		<tr>
			<td>{{ $usr->id }}</td>
			<td>{{ $usr->name }}</td>
			<td>{{ $usr->email }}</td>
			<td>{{ $usr->password }}</td>
			<td>{{ $usr->alamat }}</td>
			<td>{{ $usr->nohp }}</td>
			<td>{{ $usr->level }}</td>
			<td>
			<a href="/admin/user/user_edit/{{ $usr->id }}">Edit</a>
				|
				<a href="/admin/user/hapususr/{{ $usr->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>