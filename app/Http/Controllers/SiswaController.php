<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    protected $request;

    public function __construct(Request $req)
    {
        $this->request = $req;
    }

    public function index(){
        $halaman = 'siswa';
        $siswa_list = Siswa::all()->sortByDesc('tanggal_lahir');
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index', compact('halaman','siswa_list','jumlah_siswa'));
        // return view('siswa.index')->with('siswa', $siswa)->with('halaman', $halaman);
        // return view('siswa.index',['siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store()
    {
       Siswa::create($this->request->all());
       return redirect('siswa');
    }
    public function show($id)
    {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('halaman','siswa'));
    }
}
