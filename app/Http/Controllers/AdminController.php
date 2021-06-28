<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function tampilbarang()
    {
        $barangs = DB::table('barangs')->get();
        return view('barang',['barang' => $barangs]);
    }
    public function tambahbrg()
    {
	    return view('barang_tambah');
    }
    public function storebrg(Request $request)
    {
	DB::table('barangs')->insert([
		'id' => $request->id,
		'nama_barang' => $request->nama_barang,
        'gambar' => $request->gambar,
		'harga' => $request->harga,
        'stok' => $request->stok,
        'keterangan' => $request->keterangan,
	]);
	return redirect('/admin/barang');
    }
    public function editbrg($id)
{
	$barangs = DB::table('barangs')->where('id',$id)->get();
	return view('barang_edit',['barang' => $barangs]);
}
public function updatebrg(Request $request)
    {
	DB::table('barangs')->where('id',$request->id)->update([
		'id' => $request->id,
        'nama_barang' => $request->nama_barang,
		'gambar' => $request->gambar,
		'harga' => $request->harga,
        'stok' => $request->stok,
        'keterangan' => $request->keterangan,
	]);
	return redirect('/admin/barang');
    }
    public function hapusbrg($id)
{
	DB::table('barangs')->where('barangs',$id)->delete();
	return redirect('/admin/barang');
}
public function tampiluser()
    {
        $users = DB::table('users')->get();
        return view('user',['user' => $users]);
    }
    public function tambahusr()
    {
	    return view('user_tambah');
    }
    public function storeusr(Request $request)
    {
	DB::table('users')->insert([
		'id' => $request->id,
		'name' => $request->name,
        'email' => $request->email,
		'password' => $request->password,
        'alamat' => $request->alamat,
        'nohp' => $request->nohp,
	]);
	return redirect('/admin/user');
    }
    public function editusr($id)
{
	$users = DB::table('users')->where('id',$id)->get();
	return view('user_edit',['user' => $users]);
}
public function updateusr(Request $request)
    {
	DB::table('users')->where('id',$request->id)->update([
		'id' => $request->id,
		'name' => $request->name,
        'email' => $request->email,
		'password' => $request->password,
        'alamat' => $request->alamat,
        'nohp' => $request->nohp,
	]);
	return redirect('/admin/user');
    }
    public function hapususr($id)
{
	DB::table('users')->where('users',$id)->delete();
	return redirect('/admin/user');
}
}
