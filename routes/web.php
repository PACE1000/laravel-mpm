<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tabelmahasiswa;
use App\Http\Controllers\tabelkelas;
use App\Http\Controllers\tabelmatakuliah;

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

Route::get('/', function () {return view('Dashboard');});
Route::get('/tabel-mahasiswa', [tabelmahasiswa::class, 'tabelmahasiswa'])->name('tabelmahasiswa');
Route::get('/About-us', function () {return view('Aboutus');});
Route::get('/tabel-kelas',[tabelkelas::class, 'tabelkelas'])->name('tabelkelas');
Route::get('/tabel-matakuliah',[tabelmatakuliah::class,'tabelmatakuliah'])->name('tabelmatakuliah');

Route::post('/tabelmahasiswa/store', [tabelmahasiswa::class, 'store'])->name('tabelmahasiswa.store');
Route::get('/tabelmahasiswa/create', [tabelmahasiswa::class, 'create'])->name('tabelmahasiswa.create');
Route::get('/tabelmahasiswa/{id}/edit', [tabelmahasiswa::class, 'edit'])->name('tabelmahasiswa.edit');
Route::put('/tabelmahasiswa/{id}', [tabelmahasiswa::class, 'update'])->name('tabelmahasiswa.update');
Route::delete('/tabelmahasiswa/{id}', [tabelmahasiswa::class, 'destroy'])->name('tabelmahasiswa.destroy');

Route::post('/tabelmatakuliah/store', [tabelmatakuliah::class, 'store'])->name('tabelmatakuliah.store');
Route::get('/tabelmatakuliah/create', [tabelmatakuliah::class, 'create'])->name('tabelmatakuliah.create');
Route::get('/tabelmatakuliah/{id}/edit', [tabelmatakuliah::class, 'edit'])->name('tabelmatakuliah.edit');
Route::put('/tabelmatakuliah/{id}', [tabelmatakuliah::class, 'update'])->name('tabelmatakuliah.update');
Route::delete('/tabelmatakuliah/{id}', [tabelmatakuliah::class, 'destroy'])->name('tabelmatakuliah.destroy');

Route::post('/tabelkelas/store', [tabelkelas::class, 'store'])->name('tabelkelas.store');
Route::get('/tabelkelas/create', [tabelkelas::class, 'create'])->name('tabelkelas.create');
Route::get('/tabelkelas/{id}/edit', [tabelkelas::class, 'edit'])->name('tabelkelas.edit');
Route::put('/tabelkelas/{id}', [tabelkelas::class, 'update'])->name('tabelkelas.update');
Route::delete('/tabelkelas/{id}', [tabelkelas::class, 'destroy'])->name('tabelkelas.destroy');