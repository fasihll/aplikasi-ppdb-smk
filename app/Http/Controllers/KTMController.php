<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KTMModel;
use Illuminate\Support\Facades\DB;

class KTMController extends Controller
{
    public function index()
    {
        $data = [
            'ktm' => DB::table('k_tidakmampu')->get()
        ];
        return view('backend.KTM', $data);
    }
    public function tambah()
    {
        return view('backend.tambahKTM');
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'nama_ktm' => 'required'
        ]);
        $data = [
            'nama_ktm' => $request->nama_ktm,
            'keterangan' => $request->keterangan
        ];

        DB::table('k_tidakmampu')->insert($data);

        return redirect()->route('KTM')->with('message', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id_ktm)
    {
        $data = [
            'ktm' => DB::table('k_tidakmampu')->where('id_ktm', $id_ktm)->first()
        ];
        return view('backend.editKTM', $data);
    }
    public function update(Request $request, $id_ktm)
    {
        $request->validate([
            'nama_ktm' => 'required'
        ]);
        $data = [
            'nama_ktm' => $request->nama_ktm,
            'keterangan' => $request->keterangan
        ];

        DB::table('k_tidakmampu')->where('id_ktm', $id_ktm)->update($data);
        return redirect()->route('KTM')->with('message', 'Data Berhasil Di Update!!');
    }

    public function delete($id_ktm)
    {
        DB::table('k_tidakmampu')->where('id_ktm', $id_ktm)->delete();

        return redirect()->route('KTM')->with('message', 'Data BErhasil Di  Hapus');
    }
}
