<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis'           => 'required|size:8',
            'nama'          => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => '',
        ]);

        Siswa::create($validateData);
        return "data berhasil di input ke database";
    }

    public function show($siswa)
    {
        $result = Siswa::find($siswa);
        return view('siswa.show', ['siswa' => $result]);
    }
}
