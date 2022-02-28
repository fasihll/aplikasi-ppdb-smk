<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RaportModel extends Model
{
    use HasFactory;
    protected $table = 'raport';
    public function getRaportByUser($id_user)
    {
        return DB::table('raport')
            ->join('mapel', 'mapel.id_mapel', '=', 'raport.id_mapel')
            ->where('id_user', $id_user)
            ->get();
    }
    public function getRaport()
    {
        return DB::table('raport')
            ->join('siswa', 'siswa.id_user', '=', 'raport.id_user')
            ->select('raport.id_user', 'siswa.nama_lengkap', 'siswa.nisn', DB::raw('COUNT(raport.id_mapel) as jumlah_mapel'))
            ->groupBy('raport.id_user')
            ->get();
    }
}
