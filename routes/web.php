<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', 'PagesController@homepage');
Route::get('about', 'PagesController@about');
Route::get('siswa', 'SiswaController@index');
Route::get('siswa/create', 'SiswaController@create');

Route::get('halaman-rahasia','RahasiaController@halamanRahasia')->name('secret');
Route::get('showmesecret', 'RahasiaController@showMeSecret');