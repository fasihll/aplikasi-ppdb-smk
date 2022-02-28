<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaportModel;
use Illuminate\Support\Facades\DB;

class DataRaportController extends Controller
{
    public function __construct()
    {
        $this->RaportModel = new RaportModel();
    }
    public function index()
    {
        $data = [
            'raport' => $this->RaportModel->getRaport()
        ];
        return view('backend.dataRaport', $data);
    }
    public function detail($id_user, $nama_lengkap)
    {
        $data = [
            'raport' => $this->RaportModel->getRaportByUser($id_user),
            'mapel' => DB::table('mapel')->get(),
            'nama' => $nama_lengkap
        ];
        return view('backend.detailRaport', $data);
    }
}
