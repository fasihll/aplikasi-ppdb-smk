<?php

namespace App\Http\Controllers;

use App\Models\RaportModel;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RaportController extends Controller
{
    public function __construct()
    {
        $this->RaportModel = new RaportModel();
    }
    public function index()
    {
        $id_user = session('id_user');
        $data = [
            'raport' => $this->RaportModel->getRaportByUser($id_user),
            'mapel' => DB::table('mapel')->get(),
            'row' => DB::table('raport')->where('id_user', $id_user)->count()
        ];
        return view('backend.raport', $data);
    }
    public function simpan(Request $request)
    {
        $id_user = session('id_user');
        $request->validate([
            "pendidikan_agama1" => "required",
            "pendidikan_kewarganegaraan1" => "required",
            "bahasa_indonesia1" => "required",
            "matematika1" => "required",
            "ilmu_pengetahuan_alam1" => "required",
            "ilmu_pengetahuan_sosial1" => "required",
            "seni_budaya_dan_keterampilan1" => "required",
            "pendidikan_olahraga1" => "required",
            "bahasa_madura1" => "required",
            "bahasa_inggris1" => "required",
            "pendidikan_agama2" => "required",
            "pendidikan_kewarganegaraan2" => "required",
            "bahasa_indonesia2" => "required",
            "matematika2" => "required",
            "ilmu_pengetahuan_alam2" => "required",
            "ilmu_pengetahuan_sosial2" => "required",
            "seni_budaya_dan_keterampilan2" => "required",
            "pendidikan_olahraga2" => "required",
            "bahasa_madura2" => "required",
            "bahasa_inggris2" => "required",
            "pendidikan_agama3" => "required",
            "pendidikan_kewarganegaraan3" => "required",
            "bahasa_indonesia3" => "required",
            "matematika3" => "required",
            "ilmu_pengetahuan_alam3" => "required",
            "ilmu_pengetahuan_sosial3" => "required",
            "seni_budaya_dan_keterampilan3" => "required",
            "pendidikan_olahraga3" => "required",
            "bahasa_madura3" => "required",
            "bahasa_inggris3" => "required",
            "pendidikan_agama4" => "required",
            "pendidikan_kewarganegaraan4" => "required",
            "bahasa_indonesia4" => "required",
            "matematika4" => "required",
            "ilmu_pengetahuan_alam4" => "required",
            "ilmu_pengetahuan_sosial4" => "required",
            "seni_budaya_dan_keterampilan4" => "required",
            "pendidikan_olahraga4" => "required",
            "bahasa_madura4" => "required",
            "bahasa_inggris4" => "required",
            "pendidikan_agama5" => "required",
            "pendidikan_kewarganegaraan5" => "required",
            "bahasa_indonesia5" => "required",
            "matematika5" => "required",
            "ilmu_pengetahuan_alam5" => "required",
            "ilmu_pengetahuan_sosial5" => "required",
            "seni_budaya_dan_keterampilan5" => "required",
            "pendidikan_olahraga5" => "required",
            "bahasa_madura5" => "required",
            "bahasa_inggris5" => "required",
        ]);
        $data = [
            [
                'id_mapel' => '1',
                'semester1' => $request->pendidikan_agama1,
                'semester2' => $request->pendidikan_agama2,
                'semester3' => $request->pendidikan_agama3,
                'semester4' => $request->pendidikan_agama4,
                'semester5' => $request->pendidikan_agama5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '2',
                'semester1' => $request->pendidikan_kewarganegaraan1,
                'semester2' => $request->pendidikan_kewarganegaraan2,
                'semester3' => $request->pendidikan_kewarganegaraan3,
                'semester4' => $request->pendidikan_kewarganegaraan4,
                'semester5' => $request->pendidikan_kewarganegaraan5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '3',
                'semester1' => $request->bahasa_indonesia1,
                'semester2' => $request->bahasa_indonesia2,
                'semester3' => $request->bahasa_indonesia3,
                'semester4' => $request->bahasa_indonesia4,
                'semester5' => $request->bahasa_indonesia5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '4',
                'semester1' => $request->matematika1,
                'semester2' => $request->matematika2,
                'semester3' => $request->matematika3,
                'semester4' => $request->matematika4,
                'semester5' => $request->matematika5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '5',
                'semester1' => $request->ilmu_pengetahuan_alam1,
                'semester2' => $request->ilmu_pengetahuan_alam2,
                'semester3' => $request->ilmu_pengetahuan_alam3,
                'semester4' => $request->ilmu_pengetahuan_alam4,
                'semester5' => $request->ilmu_pengetahuan_alam5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '6',
                'semester1' => $request->ilmu_pengetahuan_sosial1,
                'semester2' => $request->ilmu_pengetahuan_sosial2,
                'semester3' => $request->ilmu_pengetahuan_sosial3,
                'semester4' => $request->ilmu_pengetahuan_sosial4,
                'semester5' => $request->ilmu_pengetahuan_sosial5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '7',
                'semester1' => $request->seni_budaya_dan_keterampilan1,
                'semester2' => $request->seni_budaya_dan_keterampilan2,
                'semester3' => $request->seni_budaya_dan_keterampilan3,
                'semester4' => $request->seni_budaya_dan_keterampilan4,
                'semester5' => $request->seni_budaya_dan_keterampilan5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '8',
                'semester1' => $request->pendidikan_olahraga1,
                'semester2' => $request->pendidikan_olahraga2,
                'semester3' => $request->pendidikan_olahraga3,
                'semester4' => $request->pendidikan_olahraga4,
                'semester5' => $request->pendidikan_olahraga5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '9',
                'semester1' => $request->bahasa_madura1,
                'semester2' => $request->bahasa_madura2,
                'semester3' => $request->bahasa_madura3,
                'semester4' => $request->bahasa_madura4,
                'semester5' => $request->bahasa_madura5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '10',
                'semester1' => $request->bahasa_inggris1,
                'semester2' => $request->bahasa_inggris2,
                'semester3' => $request->bahasa_inggris3,
                'semester4' => $request->bahasa_inggris4,
                'semester5' => $request->bahasa_inggris5,
                'id_user' =>  $id_user
            ]
        ];

        DB::table('raport')->insert($data);
        return redirect()->route('raport')->with('message', 'Data Telah Tersimpan');
    }
    public function edit(Request $request, $id_user)
    {
        $data = [
            'raport' => $this->RaportModel->getRaportByUser($id_user),
        ];
        return view('backend.editRaport', $data);
    }
    public function update(Request $request, $id_user)
    {

        $request->validate([
            "pendidikan_agama1" => "required",
            "pendidikan_kewarganegaraan1" => "required",
            "bahasa_indonesia1" => "required",
            "matematika1" => "required",
            "ilmu_pengetahuan_alam1" => "required",
            "ilmu_pengetahuan_sosial1" => "required",
            "seni_budaya_dan_keterampilan1" => "required",
            "pendidikan_olahraga1" => "required",
            "bahasa_madura1" => "required",
            "bahasa_inggris1" => "required",
            "pendidikan_agama2" => "required",
            "pendidikan_kewarganegaraan2" => "required",
            "bahasa_indonesia2" => "required",
            "matematika2" => "required",
            "ilmu_pengetahuan_alam2" => "required",
            "ilmu_pengetahuan_sosial2" => "required",
            "seni_budaya_dan_keterampilan2" => "required",
            "pendidikan_olahraga2" => "required",
            "bahasa_madura2" => "required",
            "bahasa_inggris2" => "required",
            "pendidikan_agama3" => "required",
            "pendidikan_kewarganegaraan3" => "required",
            "bahasa_indonesia3" => "required",
            "matematika3" => "required",
            "ilmu_pengetahuan_alam3" => "required",
            "ilmu_pengetahuan_sosial3" => "required",
            "seni_budaya_dan_keterampilan3" => "required",
            "pendidikan_olahraga3" => "required",
            "bahasa_madura3" => "required",
            "bahasa_inggris3" => "required",
            "pendidikan_agama4" => "required",
            "pendidikan_kewarganegaraan4" => "required",
            "bahasa_indonesia4" => "required",
            "matematika4" => "required",
            "ilmu_pengetahuan_alam4" => "required",
            "ilmu_pengetahuan_sosial4" => "required",
            "seni_budaya_dan_keterampilan4" => "required",
            "pendidikan_olahraga4" => "required",
            "bahasa_madura4" => "required",
            "bahasa_inggris4" => "required",
            "pendidikan_agama5" => "required",
            "pendidikan_kewarganegaraan5" => "required",
            "bahasa_indonesia5" => "required",
            "matematika5" => "required",
            "ilmu_pengetahuan_alam5" => "required",
            "ilmu_pengetahuan_sosial5" => "required",
            "seni_budaya_dan_keterampilan5" => "required",
            "pendidikan_olahraga5" => "required",
            "bahasa_madura5" => "required",
            "bahasa_inggris5" => "required",
        ]);
        $data = [
            [
                'id_mapel' => '1',
                'semester1' => $request->pendidikan_agama1,
                'semester2' => $request->pendidikan_agama2,
                'semester3' => $request->pendidikan_agama3,
                'semester4' => $request->pendidikan_agama4,
                'semester5' => $request->pendidikan_agama5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '2',
                'semester1' => $request->pendidikan_kewarganegaraan1,
                'semester2' => $request->pendidikan_kewarganegaraan2,
                'semester3' => $request->pendidikan_kewarganegaraan3,
                'semester4' => $request->pendidikan_kewarganegaraan4,
                'semester5' => $request->pendidikan_kewarganegaraan5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '3',
                'semester1' => $request->bahasa_indonesia1,
                'semester2' => $request->bahasa_indonesia2,
                'semester3' => $request->bahasa_indonesia3,
                'semester4' => $request->bahasa_indonesia4,
                'semester5' => $request->bahasa_indonesia5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '4',
                'semester1' => $request->matematika1,
                'semester2' => $request->matematika2,
                'semester3' => $request->matematika3,
                'semester4' => $request->matematika4,
                'semester5' => $request->matematika5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '5',
                'semester1' => $request->ilmu_pengetahuan_alam1,
                'semester2' => $request->ilmu_pengetahuan_alam2,
                'semester3' => $request->ilmu_pengetahuan_alam3,
                'semester4' => $request->ilmu_pengetahuan_alam4,
                'semester5' => $request->ilmu_pengetahuan_alam5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '6',
                'semester1' => $request->ilmu_pengetahuan_sosial1,
                'semester2' => $request->ilmu_pengetahuan_sosial2,
                'semester3' => $request->ilmu_pengetahuan_sosial3,
                'semester4' => $request->ilmu_pengetahuan_sosial4,
                'semester5' => $request->ilmu_pengetahuan_sosial5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '7',
                'semester1' => $request->seni_budaya_dan_keterampilan1,
                'semester2' => $request->seni_budaya_dan_keterampilan2,
                'semester3' => $request->seni_budaya_dan_keterampilan3,
                'semester4' => $request->seni_budaya_dan_keterampilan4,
                'semester5' => $request->seni_budaya_dan_keterampilan5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '8',
                'semester1' => $request->pendidikan_olahraga1,
                'semester2' => $request->pendidikan_olahraga2,
                'semester3' => $request->pendidikan_olahraga3,
                'semester4' => $request->pendidikan_olahraga4,
                'semester5' => $request->pendidikan_olahraga5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '9',
                'semester1' => $request->bahasa_madura1,
                'semester2' => $request->bahasa_madura2,
                'semester3' => $request->bahasa_madura3,
                'semester4' => $request->bahasa_madura4,
                'semester5' => $request->bahasa_madura5,
                'id_user' =>  $id_user
            ],
            [
                'id_mapel' => '10',
                'semester1' => $request->bahasa_inggris1,
                'semester2' => $request->bahasa_inggris2,
                'semester3' => $request->bahasa_inggris3,
                'semester4' => $request->bahasa_inggris4,
                'semester5' => $request->bahasa_inggris5,
                'id_user' =>  $id_user
            ]
        ];
        foreach ($data as $d) {
            RaportModel::where('id_user', $id_user)->where('id_mapel', $d['id_mapel'])->update($d);
        }
        return redirect()->route('raport')->with('message', 'Data Telah Di Update');
    }
}
