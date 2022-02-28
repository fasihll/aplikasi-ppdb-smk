@extends('backend.template')
@section('title', 'Laporan Peserta')
@section('content')

    <h2>Biodata PPDB <small style="font-size: 15px">Master / Data PPDB</small>
    </h2>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <table class="table table-hover" id="dataTable">
        <thead class="bg-white">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Sekolah Asal</th>
                <th>Tanggal Daftar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ url('images/' . $s->foto . '') }}" alt="" class="img-fluid" width="50"></td>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->nama_lengkap }}</td>
                    <td>{{ $s->tanggal_lahir }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>{{ $s->sekolah_asal }}</td>
                    <td>{{ $s->created_at }}</td>
                    <td class="d-flex">
                        <a href="/detailBiodata/{{ $s->id_user }}" class="btn btn-white"><span
                                class="fa fa-eye"></span></a>
                        <a href="/deleteBiodata/{{ $s->id_siswa }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda Yakin?')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
