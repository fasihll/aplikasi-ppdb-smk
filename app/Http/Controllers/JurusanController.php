<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurusanModel;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function index()
    {
        $data = [
            'jurusan' => DB::table('jurusan')->get()
        ];
        return view('backend.jurusan', $data);
    }
    public function tambah()
    {
        return view('backend.tambahJurusan');
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required',
            'kuota' => 'required',
            'rata_rata' => 'required',
        ]);
        $data = [
            'nama_jurusan' => $request->nama_jurusan,
            'kuota' => $request->kuota,
            'rata_rata' => $request->rata_rata,
        ];

        DB::table('jurusan')->insert($data);

        return redirect()->route('jurusan')->with('message', 'Data Berhasil Di Tambahkan!');
    }
    public function edit($id_jurusan)
    {
        $data = [
            'jurusan' => DB::table('jurusan')->where('id_jurusan', $id_jurusan)->first()
        ];
        return view('backend.editJurusan', $data);
    }
    public function update(Request $request, $id_jurusan)
    {
        $request->validate([
            'nama_jurusan' => 'required',
            'kuota' => 'required',
            'rata_rata' => 'required',
        ]);
        $data = [
            'nama_jurusan' => $request->nama_jurusan,
            'kuota' => $request->kuota,
            'rata_rata' => $request->rata_rata,
        ];

        DB::table('jurusan')->where('id_jurusan', $id_jurusan)->update($data);


        return redirect()->route('jurusan')->with('message', 'Data Berhasil Di ubah');
    }
    public function delete($id_jurusan)
    {
        DB::table('jurusan')->where('id_jurusan', $id_jurusan)->delete();

        return redirect()->route('jurusan')->with('message', 'Data Berhasil Di  Hapus');
    }
}
