<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        $halaman = '';
        return view('pages.homepage')->with('halaman', $halaman);
    }
    public function about(){
        $halaman = 'about';
        return view('pages.about')->with('halaman', $halaman);
    }
}
