<?php

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

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/home', function () {
    return view('admin.kategori.index');
});
Route::get('/kain', function () {
    return view('admin.layout.app');
});
Route::get('/batik', function () {
    return view('admin_batik');
});
Route::get('/transaksi', function () {
    return view('admin_transaksi');
});
Route::get('/test', function () {
    return view('testview');
});
Route::get('/testadmin', function () {
    return view('testadmin');
});
