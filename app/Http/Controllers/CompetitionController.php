<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competitions;

class competitionController extends Controller {
    public function competitionAdmin() {
        $competition = Competitions::all();
        $jumlah = Competitions::count();
        return view('admin.competition.index', compact('competition', 'jumlah'));
    }

    public function create(){
        return view('admin.competition.create');
    }
    public function store(Request $request){
        $request->validate([
            'gambar' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);

        $competition = Competitions::create([
            'nama' => $request['nama'],
            'gambar' => $gambarName,
            'dimulai' => $request['dimulai'],
            'selesai' => $request['selesai'],
            'keterangan' => $request['keterangan'],
        ]);
        return redirect('/admin/competition');
    }
    public function edit($id){
        $competition = Competitions::find($id);
        return view('admin.competition.edit', compact('competition'));
    }
    public function update(Request $request, $id){

        
        // JIKA GAMBAR TIDAK SAMA MAKA
        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,svg',
            ]);
            // Remove old image
            $competition = Competitions::find($id);
            $image_path = public_path('/Template/images/' . $competition->gambar);
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
            // Upload new image
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('/Template/images'), $gambarName);

            $competition = Competitions::find($id);
            $competition->nama = $request->nama;
            $competition->gambar = $gambarName;
            $competition->dimulai = $request->dimulai;
            $competition->selesai = $request->selesai;
            $competition->keterangan = $request->keterangan;
            $competition->save();
            return redirect('/admin/competition');
        }
        // JIKA GAMBAR SAMA MAKA
    
        $competition = Competitions::find($id);
        $competition->nama = $request->nama;
        $competition->dimulai = $request->dimulai;
        $competition->selesai = $request->selesai;
        $competition->keterangan = $request->keterangan;

        $competition->save();
        return redirect('/admin/competition');
    }

    public function destroy($id){
        $competition = Competitions::find($id);

        // Deleted the image from the server
        $image_path = public_path() . "/Template/images/" . $competition->gambar;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        
        $competition->delete();
        return redirect('/admin/competition');
    }

}
