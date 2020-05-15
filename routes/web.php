<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.homepage');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('siswa',function(){
    $siswa = ['Siswa A','Siswa B','Siswa C'];
    // return view('siswa.index', compact('siswa'));
    return view('siswa.index')->with('siswa', $siswa);
    // return view('siswa.index',['siswa' => $siswa]);
});