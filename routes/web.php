<?php

use App\Http\Controllers\Siswacontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

// untuk mengembalikan ke halaman
Route::get('/', function () {
    return view('welcome');
});

// 
Route::get('home/{nama?}', function (Request $request) {

    $nama = $request->nama;
    return view('home', compact('nama'));
})->name('home');

route::get('about', function(){
    return view('about');
})->name('about');

// mengakses data
Route::get('siswa', [Siswacontroller::class, 'index'])->name('siswa');
Route::get('add-siswa', [Siswacontroller::class, 'add'])->name('siswa.add');
Route::get('siswa/edit/{id}', [Siswacontroller::class, 'edit'])->name('siswa.edit');

// mengirim data
Route::post('add-siswa', [Siswacontroller::class, 'store'])->name('siswa.add.process');

// 
Route::delete('siswa/{id}', [Siswacontroller::class, 'destroy'])->name('siswa.delete');

// 
Route::put('siswa/edit/{id}', [Siswacontroller::class, 'update'])->name('siswa.update');





