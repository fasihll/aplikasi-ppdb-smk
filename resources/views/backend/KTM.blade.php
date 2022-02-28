@extends('backend.template')
@section('title', 'Jurusan')
@section('content')
    <h2>Keterangan Tidak Mampu</h2>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ route('tambahKTM') }}" class="btn btn-primary px-5 p-2 m-2"><span class="fa fa-plus"></span>
        Tambah</a>

    <table class="table table-hover" id="dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Keterangan Tidak Mampu</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($ktm as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->nama_ktm }}</td>
                    <td>{{ $k->keterangan }}</td>
                    <td class="d-flex">
                        <a href="/editKTM/{{ $k->id_ktm }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                        <a href="/deleteKTM/{{ $k->id_ktm }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda Yakin?')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
