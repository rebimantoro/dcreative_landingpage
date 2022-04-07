<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Testimoni;
use App\Models\Faq;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_layanan = Layanan::count();
        $jumlah_faq = Faq::count();
        $jumlah_testimoni = Testimoni::count();
        return view('home', compact('jumlah_layanan', 'jumlah_faq', 'jumlah_testimoni'));
    }
}
