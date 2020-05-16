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
        $siswa_list = Siswa::all()->sortByDesc('tanggal_lahir');
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index', compact('siswa_list','jumlah_siswa'));
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
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($this->request->all());
        return redirect('siswa');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
