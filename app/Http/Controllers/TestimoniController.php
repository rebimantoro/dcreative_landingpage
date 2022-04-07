<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function testimoniAdmin()
    {
        $testimoni = testimoni::all();
        $jumlah = testimoni::count();
        return view('admin.testimoni.index', compact('testimoni', 'jumlah'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);
        $testimoni = testimoni::create([
            'nama' => $request['nama'],
            'gambar' => $gambarName,
            'umkm' => $request['umkm'],
            'keterangan' => $request['keterangan'],
        ]);
        return redirect('/admin/testimoni');
    }
    public function edit($id)
    {
        $testimoni = testimoni::find($id);
        return view('admin.testimoni.edit', compact('testimoni'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);
        $testimoni = Testimoni::find($id);
        $testimoni->nama = $request->nama;
        $testimoni->gambar = $gambarName;
        $testimoni->umkm = $request->umkm;
        $testimoni->keterangan = $request->keterangan;
        $testimoni->save();
        return redirect('/admin/testimoni');
    }
    public function destroy($id)
    {
        $testimoni = testimoni::find($id);
        $testimoni->delete();
        return redirect('/admin/testimoni');
    }
}
