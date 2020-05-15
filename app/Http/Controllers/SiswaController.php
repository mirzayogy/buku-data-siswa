<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $halaman = 'siswa';
        $siswa = ['Siswa A', 'Siswa B', 'Siswa C'];
        // return view('siswa.index', compact('siswa'));
        return view('siswa.index')->with('siswa', $siswa)->with('halaman', $halaman);
        // return view('siswa.index',['siswa' => $siswa]);
    }
}
