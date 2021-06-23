<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller\Admin_userController;
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
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth']);

Route::get('/', function () {
    return view('index');
});

Route::get('admin/libri/elenco_libri', function () {
    return view('admin.libri.elenco_libri');
})->middleware(['auth']);

Route::get('admin/utenti/elenco_utenti', function () {
    return view('admin.utenti.elenco_utenti');
})->middleware(['auth']);

Route::get('admin/prestiti/elenco_prestiti', function () {
    return view('admin.prestiti.elenco_prestiti');
})->middleware(['auth']);

Route::get('admin/editori/elenco_editori', function () {
    return view('admin.editori.elenco_editori');
})->middleware(['auth']);

Route::get('admin/autori/elenco_autori', function () {
    return view('admin.autori.elenco_autori');
})->middleware(['auth']);

Route::resource('admin/utenti/elenco_utenti', Admin_userController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

Auth::routes();

