<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiaranAndPers;

class SiaranAndPersController extends Controller
{
    // 
    public function siaranPersAdmin(){
        $siaranPers = SiaranAndPers::all();
        $jumlah     = SiaranAndPers::count();
        return view('admin.siaranpers.index', compact('siaranPers', 'jumlah'));
    }
    public function create(){
        return view('admin.siaranpers.create');
    }

    public function store(Request $request){
        $request->validate([
            'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);
        // dd($gambarName);
        $siaranPers = SiaranAndPers::create([
            'judul' => $request['judul'],
            'gambar' => $gambarName,
            'ringkasan' => $request['ringkasan'],
            'artikel' => $request['artikel'],
        ]);
        return redirect('/admin/siaran');
    }

    public function edit($id){
        $siaranPers = SiaranAndPers::find($id);
        return view('admin.siaranpers.edit', compact('siaranPers'));
    }

    public function update(Request $request, $id){

        if($request->hasFile('gambar')){
            // Remove Old Image
            $request->validate([
                'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
            ]);
            // Remove Old Image
            $siaranPers = SiaranAndPers::find($id);
            $image_path = public_path('/Template/images/'.$siaranPers->gambar);
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            // Upload New Image
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('/Template/images'), $gambarName);
            $siaranPers->judul = $request->judul;
            $siaranPers->gambar = $gambarName;
            $siaranPers->ringkasan = $request->ringkasan;
            $siaranPers->artikel = $request->artikel;
            $siaranPers->save();
            return redirect('/admin/siaran');

        }

        $siaranPers = SiaranAndPers::find($id);

        $siaranPers->judul = $request->judul;
        $siaranPers->ringkasan = $request->ringkasan;
        $siaranPers->artikel = $request->artikel;
        $siaranPers->save();
        return redirect('/admin/siaran');
    }

    public function destroy($id){
        // Remove Image
        $siaranPers =  SiaranAndPers::find($id);

        // Delete Image
        $image_path = public_path() . "/Template/images/".$siaranPers->gambar;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        $siaranPers->delete();
        return redirect('admin/siaran');
    }

    public function detail($id){
        $siaranpers = SiaranAndPers::find($id);

        return view('admin.siaranpers.detail', compact('siaranpers'));

    }
}
