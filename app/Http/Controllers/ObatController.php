<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function daftar()
    {
        $data_obat = Obat::orderBy('id', 'desc')->get();
        return view('obat.daftar', compact('data_obat'));
    }

    public function create()
    {
        return view('obat.tambah');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_obat' => 'required|max:100',
            'kategori'  => 'required|max:50',
            'sediaan'   => 'required|max:50',
            'pabrikan'  => 'required|max:100',
        ]);

        Obat::create($data);

        return redirect()->route('obat.daftar')->with('success', 'Data berhasil ditambahkan.');
    }
}