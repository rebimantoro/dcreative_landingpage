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
}
