<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class faqController extends Controller
{
    public function faqAdmin()
    {
        $faq = Faq::all();
        $jumlah = Faq::count();
        return view('admin.faq.index', compact('faq', 'jumlah'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $faq = Faq::create([
            'judul' => $request['judul'],
            'penjelasan' => $request['penjelasan'],
        ]);
        return redirect('/admin/faq');
    }
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }
    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);
        $faq->judul = $request->judul;
        $faq->penjelasan = $request->penjelasan;

        $faq->save();
        return redirect('/admin/faq');
    }
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/admin/faq');
    }
}
