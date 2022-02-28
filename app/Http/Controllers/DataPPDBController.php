<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiodataModel;
use Illuminate\Support\Facades\DB;

class DataPPDBController extends Controller
{
    public function __construct()
    {
        $this->BiodataModel = new BiodataModel();
    }
    public function index()
    {
        $data = [
            'siswa' => $this->BiodataModel->getBiodata()
        ];
        return view('backend.dataPPDB', $data);
    }
    public function detail($id_user)
    {
        $data = [
            'biodata' => $this->BiodataModel->getBiodataByUser($id_user),
            'ktm' => $this->BiodataModel->getKTM(),
            'jurusan' => $this->BiodataModel->getJurusan()
        ];
        return view('backend.detailPPDB', $data);
    }
    public function delete($id_siswa)
    {
        $data = DB::table('siswa')->where('id_siswa', $id_siswa)->first();
        if ($data->foto != "" || $data->foto != null) {
            unlink(public_path('images/' . $data->foto . ''));
            DB::table('siswa')->where('id_siswa', $id_siswa)->delete();
        } else {
            DB::table('siswa')->where('id_siswa', $id_siswa)->delete();
        }
        return redirect()->route('dataPPDB')->with('message', 'Data Telah Di Hapus !!');
    }
}
