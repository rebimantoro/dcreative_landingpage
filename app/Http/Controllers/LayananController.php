<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function layananAdmin()
    {
        $layanan = Layanan::all();
        $jumlah = Layanan::count();
        return view('admin.layanan.index', compact('layanan', 'jumlah'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);

        $layanan = Layanan::create([
            'nama' => $request['nama'],
            'gambar' => $gambarName,
            'keterangan' => $request['keterangan'],
        ]);
        return redirect('/admin/layanan');
    }
    public function edit($id)
    {
        $layanan = Layanan::find($id);
        return view('admin.layanan.edit', compact('layanan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);
        $layanan = Layanan::find($id);
        $layanan->nama = $request->nama;
        $layanan->gambar = $gambarName;
        $layanan->keterangan = $request->keterangan;

        $layanan->save();
        return redirect('/admin/layanan');
    }
    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        return redirect('/admin/layanan');
    }
}
