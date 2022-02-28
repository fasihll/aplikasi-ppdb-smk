<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataModel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    public function getBiodataByUser($id_user)
    {
        return DB::table('siswa')
            ->join('jurusan as jrs', 'jrs.id_jurusan', '=', 'siswa.id_jurusan1')
            ->join('jurusan as jrd', 'jrd.id_jurusan', '=', 'siswa.id_jurusan2')
            ->join('k_tidakmampu', 'k_tidakmampu.id_ktm', '=', 'siswa.id_ktm')
            ->select('*', 'jrs.nama_jurusan as jurusan1', 'jrd.nama_jurusan as jurusan2', 'jrs.kuota as kuota1', 'jrs.rata_rata as rata_rata1', 'jrd.kuota as kuota2', 'jrd.rata_rata as rata_rata2', 'jrs.id_jurusan as id_jurusan1', 'jrd.id_jurusan as id_jurusan2')
            ->where('siswa.id_user', $id_user)
            ->first();
    }
    public function getBiodata()
    {
        return DB::table('siswa')
            ->join('jurusan as jrs', 'jrs.id_jurusan', '=', 'siswa.id_jurusan1')
            ->join('jurusan as jrd', 'jrd.id_jurusan', '=', 'siswa.id_jurusan2')
            ->join('k_tidakmampu', 'k_tidakmampu.id_ktm', '=', 'siswa.id_ktm')
            ->select('*', 'jrs.nama_jurusan as jurusan1', 'jrd.nama_jurusan as jurusan2', 'jrs.kuota as kuota1', 'jrs.rata_rata as rata_rata1', 'jrd.kuota as kuota2', 'jrd.rata_rata as rata_rata2', 'jrs.id_jurusan as id_jurusan1', 'jrd.id_jurusan as id_jurusan2')
            ->get();
    }
    public function getKTM()
    {
        return DB::table('k_tidakmampu')->get();
    }
    public function getJurusan()
    {
        return DB::table('jurusan')->get();
    }

    public function simpan($data)
    {
        DB::table('siswa')->insert($data);
    }

    public function getBiodataByUserAndIdSiswa($id_user, $id_siswa)
    {
        return DB::table('siswa')
            ->join('jurusan as jrs', 'jrs.id_jurusan', '=', 'siswa.id_jurusan1')
            ->join('jurusan as jrd', 'jrd.id_jurusan', '=', 'siswa.id_jurusan2')
            ->join('k_tidakmampu', 'k_tidakmampu.id_ktm', '=', 'siswa.id_ktm')
            ->select('*', 'jrs.nama_jurusan as jurusan1', 'jrd.nama_jurusan as jurusan2', 'jrs.kuota as kuota1', 'jrs.rata_rata as rata_rata1', 'jrd.kuota as kuota2', 'jrd.rata_rata as rata_rata2', 'jrs.id_jurusan as id_jurusan1', 'jrd.id_jurusan as id_jurusan2')
            ->where('siswa.id_user', $id_user)
            ->where('siswa.id_siswa', $id_siswa)
            ->first();
    }
    public function updateById($data, $id_user, $id_siswa)
    {
        DB::table('siswa')->where('id_siswa', $id_siswa)->where('id_user', $id_user)->update($data);
    }
}
