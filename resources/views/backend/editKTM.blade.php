@extends('backend.template')
@section('title', 'Tambah Jurusan')
@section('content')
    <h2>Edit Keterangan Tidak Mampu</h2>
    <form action="/editKTM/{{ $ktm->id_ktm }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="namajurusan">Keterangan Tidak Mampu</label>
                    <input type="text" name="nama_ktm" id="namajurusan"
                        class="form-control @error('nama_ktm') is-invalid @enderror" value="{{ $ktm->nama_ktm }}">
                    @error('nama_ktm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kuota">Keterangan</label>
                    <input type="number" name="keterangan" id="kuota"
                        class="form-control @error('keterangan') is-invalid @enderror" value="{{ $ktm->keterangan }}">
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('KTM') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>

    </form>
@endsection
