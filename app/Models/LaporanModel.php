<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanModel extends Model
{
    use HasFactory;
    public function getRataRata()
    {
        return DB::select('SELECT siswa.foto, siswa.nisn, siswa.nama_lengkap, siswa.sekolah_asal, js.id_jurusan as id_jurusan1, jd.id_jurusan as id_jurusan2, js.nama_jurusan as nama_jurusan1, jd.nama_jurusan as nama_jurusan2, js.rata_rata as rata_rata1, jd.rata_rata as rata_rata2, ( AVG( raport.semester1 + raport.semester2 + raport.semester3 + raport.semester4 + raport.semester5 ) ) / 5 AS rata_rata FROM siswa JOIN raport ON raport.id_user = siswa.id_user JOIN jurusan js ON js.id_jurusan=siswa.id_jurusan1 JOIN jurusan jd ON jd.id_jurusan=siswa.id_jurusan2 GROUP BY raport.id_user');
    }
}
