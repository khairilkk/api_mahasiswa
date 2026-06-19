<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return Mahasiswa::all();
    }

    public function store(Request $request)
    {
        $data = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        return response()->json($data);
    }

    public function show($id)
    {
        return Mahasiswa::findOrFail($id);
    }

    public function update(Request $request,$id)
    {
        $mhs = Mahasiswa::findOrFail($id);

        $mhs->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'jurusan'=>$request->jurusan
        ]);

        return response()->json($mhs);
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);

        return response()->json([
            'message'=>'Data berhasil dihapus'
        ]);
    }
}


####