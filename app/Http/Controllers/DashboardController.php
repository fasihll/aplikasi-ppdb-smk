<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jumlah_peserta' => DB::table('siswa')->count()
        ];
        return view('backend.dashboard', $data);
    }
}
