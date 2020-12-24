<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use Input;
use redirect;

class SiswaController extends Controller
{
    //lihat data
    public function getDataSiswa()
    {
        $siswa = DB::table('tbsiswa')->paginate(10);
        return view('siswa', ['siswa' => $siswa]);
    }

    public function tambahSiswa()
    {
        return view('siswa.tambah-data');
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama_siswa' => 'required',
            'kelas' => 'required'
        ]);
        
        DB::table('tbsiswa')->insert([
            'id' => $request->id,
            'username' => $request->username,
            'password' => $request->password,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas
        ]);

        return redirect('/siswa')->with('status', 'Data Siswa Berhasil Disimpan');
    }
}
