<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    protected $request;

    public function __construct(Request $req)
    {
        $this->request = $req;
    }

    public function index(){
        $halaman = 'siswa';
        $siswa = ['Siswa A', 'Siswa B', 'Siswa C'];
        // return view('siswa.index', compact('siswa'));
        return view('siswa.index')->with('siswa', $siswa)->with('halaman', $halaman);
        // return view('siswa.index',['siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store()
    {
        $data = $this->request;
        $siswa = $data->all();
    }
}
