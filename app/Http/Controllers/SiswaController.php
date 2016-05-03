<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;

class SiswaController extends Controller
{
    public function getIndex()
    {
      // $siswa = Siswa::paginate(10);
      return view('siswa.index', ['siswa' => Siswa::paginate(10)]);
    }

    public function getCreate()
    {
      return view('siswa.create');
    }

    public function postCreate(Request $r)
    {
      $siswa = $r->all();
      unset($siswa['_token']);

      // dd($siswa);
      $this->validate($r, [
        'nis' => 'required',
        'nama' => 'required',
        'kelas' => 'required'
      ]);

      Siswa::create($siswa);
      return redirect('siswa');
    }

    public function getEdit($id)
    {
      // $siswa = Siswa::find($id);
      return view('siswa.edit', ['siswa' => Siswa::find($id)]);
    }

    public function postEdit(Request $r)
    {
      $this->validate($r, [
        'nis' => 'required',
        'nama' => 'required',
        'kelas' => 'required'
      ]);

      $siswa = Siswa::find($r->id);
      $siswa->nis = $r->nis;
      $siswa->nama = $r->nama;
      $siswa->kelas = $r->kelas;
      $siswa->save();

      // dd($siswa);
      return redirect('siswa');
    }

    public function getDelete($id)
    {
      Siswa::find($id)->delete();
      return redirect('siswa');
    }
}
