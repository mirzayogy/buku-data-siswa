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
    $halaman = '';
    return view('pages.homepage')->with('halaman', $halaman);
});

Route::get('about', function () {
    $halaman = 'about';
    return view('pages.about')->with('halaman', $halaman);
});

Route::get('siswa',function(){
    $halaman = 'siswa';
    $siswa = ['Siswa A','Siswa B','Siswa C'];
    // return view('siswa.index', compact('siswa'));
    return view('siswa.index')->with('siswa', $siswa)->with('halaman',$halaman);
    // return view('siswa.index',['siswa' => $siswa]);
});