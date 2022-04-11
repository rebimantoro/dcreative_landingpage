<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function eventAdmin()
    {
        $event = Event::all();
        $jumlah = Event::count();
        return view('admin.event.index', compact('event', 'jumlah'));
    }

    public function create(){
        return view('admin.event.create');
    }

    public function store(Request $request){

        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('/Template/images'), $gambarName);

        $event = Event::create([
            'nama' => $request['nama'],
            'gambar' => $gambarName,
            'dimulai' => $request['dimulai'],
            'selesai' => $request['selesai'],
            'keterangan' => $request['keterangan'],
        ]);
        return redirect('/admin/event');
    }

    public function edit($id){
        $event = Event::find($id);
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, $id){

        // Jika gambar diganti
        if($request->hasFile('gambar')){
            // remove old image
            $event = Event::find($id);
            $image_path = public_path('/Template/images/'.$event->gambar);
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            // upload new image
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('/Template/images'), $gambarName);
            $event = Event::find($id);
            $event->nama = $request->nama;
            $event->gambar = $gambarName;
            $event->dimulai = $request->dimulai;
            $event->selesai = $request->selesai;
            $event->keterangan = $request->keterangan;

            $event->save();
            return redirect('/admin/event');

        }

        $event = Event::find($id);
        $event->nama = $request->nama;
        $event->dimulai = $request->dimulai;
        $event->selesai = $request->selesai;
        $event->keterangan = $request->keterangan;

        $event->save();
        return redirect('/admin/event');
    }


    public function destroy($id){
        $event = Event::find($id);
        // remove old image
        $image_path = public_path('/Template/images/'.$event->gambar);
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        
        $event->delete();
        return redirect('admin/event');
    }
}
