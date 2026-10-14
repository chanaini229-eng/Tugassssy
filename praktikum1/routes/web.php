<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mhasiswa', function () {
    return view('welcome');
});

route::get('/mahasiswa',function(){
    return ('halo aku mahasiswa');
});

route::get('/mahasiswa/{nim}',function($nim){
    return 'NiM mahasiswa adalah' . $nim;
});

route::get('/profil/{nama}',function($nama = 'tamu'){
    return 'nama mahasiswa adalah' . $nama;
});

route::get('/data-mahasiswa',
[MahasiswaController::class, 'index']);