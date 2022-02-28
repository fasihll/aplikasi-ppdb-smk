@extends('backend.template')
@section('title', 'Laporan Peserta')
@section('content')

    <h2>Laporan PPDB</h2>
    <table class="table table-hover" id="dataTable">
        <thead class="bg-white">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Sekolah Asal</th>
                <th>Rata-Rata</th>
                <th>Diterima Di</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($rata_rata as $r)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ url('images/' . $r->foto . '') }}" alt="" class="img-fluid" width="50"></td>
                    <td>{{ $r->nisn }}</td>
                    <td>{{ $r->nama_lengkap }}</td>
                    <td>{{ $r->sekolah_asal }}</td>
                    <td>{{ substr($r->rata_rata, 0, 2) }}</td>

                    <?php $rata = substr($r->rata_rata, 0, 2); ?>

                    @if ($rata >= $r->rata_rata1 and $rata >= $r->rata_rata2)
                        <td class="text-success">{{ $r->nama_jurusan1 }}</td>
                    @elseif($rata >= $r->rata_rata1 and $rata < $r->rata_rata2)
                            <td class="text-success">{{ $r->nama_jurusan1 }}</td>
                        @elseif($rata < $r->rata_rata1 and $rata >= $r->rata_rata2)
                                <td class="text-success">{{ $r->nama_jurusan2 }}</td>
                            @elseif($rata < $r->rata_rata1 and $rata < $r->rata_rata2)
                                        <td class="text-danger">{{ 'Tidak Lolos' }}</td>
                                    @else
                                        <td class="text-danger">{{ 'Tidak Lolos' }}</td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
