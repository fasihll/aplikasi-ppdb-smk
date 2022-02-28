<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanModel;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->LaporanModel = new LaporanModel();
    }
    public function index()
    {


        $data = [
            'rata_rata' => $this->LaporanModel->getRataRata(),
        ];
        return view('backend.laporanPeserta', $data);
    }
}
