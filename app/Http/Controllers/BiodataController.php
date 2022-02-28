<?php

namespace App\Http\Controllers;

use App\Models\BiodataModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->BiodataModel = new BiodataModel();
    }
    public function index()
    {
        $id_user = session('id_user');
        $data = [
            'biodata' => $this->BiodataModel->getBiodataByUser($id_user),
            'ktm' => $this->BiodataModel->getKTM(),
            'jurusan' => $this->BiodataModel->getJurusan()
        ];
        return view('backend.biodata', $data);
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:2000',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'telepon' => 'required',
            'sekolah_asal' => 'required',
            'nisn' => 'required',
            'id_jurusan1' => 'required',
            'id_jurusan2' => 'required',
        ]);
        $foto = $request->foto;
        $filename = Str::random(6) . '.' . $foto->extension();
        $foto->move(public_path('images'), $filename);

        $data = [
            'foto' => $filename,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'telepon' => $request->telepon,
            'sekolah_asal' => $request->sekolah_asal,
            'nisn' => $request->nisn,
            'id_ktm' => $request->id_ktm,
            'id_jurusan1' => $request->id_jurusan1,
            'id_jurusan2' => $request->id_jurusan2,
            'id_user' => session('id_user')
        ];

        $this->BiodataModel->simpan($data);

        return redirect()->route('biodata')->with('message', 'Data Telah Tersimpan !!');
    }
    public function edit(Request $request, $id_siswa)
    {
        $id_user = session('id_user');
        $data = [
            'biodata' => $this->BiodataModel->getBiodataByUserAndIdSiswa($id_user, $id_siswa),
            'ktm' => $this->BiodataModel->getKTM(),
            'jurusan' => $this->BiodataModel->getJurusan()
        ];
        return view('backend.editBiodata', $data);
    }
    public function update(Request $request, $id_siswa)
    {
        $id_user = session('id_user');
        if ($request->foto != "") {
            $request->validate([
                'foto' => 'required|mimes:jpg,png,jpeg|max:2000',
                'nama_lengkap' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'kecamatan' => 'required',
                'telepon' => 'required',
                'sekolah_asal' => 'required',
                'nisn' => 'required',
                'id_jurusan1' => 'required',
                'id_jurusan2' => 'required',
            ]);

            $data = $this->BiodataModel->getBiodataByUserAndIdSiswa($id_user, $id_siswa);
            if ($data->foto != "" || $data->foto != null) {
                unlink(public_path('images/' . $data->foto . ''));
            }

            $foto = $request->foto;
            $filename = Str::random(6) . '.' . $foto->extension();
            $foto->move(public_path('images'), $filename);

            $data = [
                'foto' => $filename,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'telepon' => $request->telepon,
                'sekolah_asal' => $request->sekolah_asal,
                'nisn' => $request->nisn,
                'id_ktm' => $request->id_ktm,
                'id_jurusan1' => $request->id_jurusan1,
                'id_jurusan2' => $request->id_jurusan2,
                'id_user' => session('id_user')
            ];
        } else {
            $request->validate([
                'nama_lengkap' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'kecamatan' => 'required',
                'telepon' => 'required',
                'sekolah_asal' => 'required',
                'nisn' => 'required',
                'id_jurusan1' => 'required',
                'id_jurusan2' => 'required',
            ]);

            $data = [
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'kecamatan' => $request->kecamatan,
                'telepon' => $request->telepon,
                'sekolah_asal' => $request->sekolah_asal,
                'nisn' => $request->nisn,
                'id_ktm' => $request->id_ktm,
                'id_jurusan1' => $request->id_jurusan1,
                'id_jurusan2' => $request->id_jurusan2,
                'id_user' => session('id_user')
            ];
        }

        $this->BiodataModel->updateById($data, $id_user, $id_siswa);

        return redirect()->route('biodata')->with('message', 'Data Telah Di Update !!');
    }
}
