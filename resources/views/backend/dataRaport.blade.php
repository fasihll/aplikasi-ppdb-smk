@extends('backend.template')
@section('title', 'Laporan Peserta')
@section('content')

    <h2>Data Raport <small style="font-size: 15px">Master / Data Raport</small></h2>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-hover" id="dataTable">
        <thead class="bg-white">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Jumlah Mapel yang Terkumpul</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($raport as $r)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $r->nisn }}</td>
                    <td>{{ $r->nama_lengkap }}</td>
                    <td>{{ $r->jumlah_mapel }}</td>
                    <td>
                        <a href="/detailRaport/{{ $r->id_user }}-{{ $r->nama_lengkap }}" class="btn btn-white"><span
                                class="fa fa-eye"></span></a>
                        <a href="/deleteRaport/{{ $r->id_user }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda Yakin?')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
