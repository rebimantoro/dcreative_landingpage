<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TestimoniController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Layanan
Route::get('/admin/layanan', [LayananController::class, 'layananAdmin']);
Route::get('/admin/layanan/create', [LayananController::class, 'create']);
Route::post('/admin/layanan', [LayananController::class, 'store']);
Route::get('/admin/layanan/{layanan}/edit', [LayananController::class, 'edit']);
Route::post('/admin/layanan/{layanan}', [LayananController::class, 'update']);
Route::post('/admin/layanan/{layanan}/delete', [LayananController::class, 'destroy']);
//Faq
Route::get('/admin/faq', [FaqController::class, 'faqAdmin']);
Route::get('/admin/faq/create', [FaqController::class, 'create']);
Route::post('/admin/faq', [FaqController::class, 'store']);
Route::get('/admin/faq/{faq}/edit', [FaqController::class, 'edit']);
Route::post('/admin/faq/{faq}', [FaqController::class, 'update']);
Route::post('/admin/faq/{faq}/delete', [FaqController::class, 'destroy']);
//Testimoni
Route::get('/admin/testimoni', [TestimoniController::class, 'testimoniAdmin']);
Route::get('/admin/testimoni/create', [TestimoniController::class, 'create']);
Route::post('/admin/testimoni', [TestimoniController::class, 'store']);
Route::get('/admin/testimoni/{testimoni}/edit', [TestimoniController::class, 'edit']);
Route::post('/admin/testimoni/{testimoni}', [TestimoniController::class, 'update']);
Route::post('/admin/testimoni/{testimoni}/delete', [TestimoniController::class, 'destroy']);

// Competition And Event
// Competition 
Route::get('/admin/competitionevent/competition', [App\Http\Controllers\CompetitionController::class, 'competitionAdmin']);