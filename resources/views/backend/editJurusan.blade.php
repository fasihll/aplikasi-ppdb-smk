@extends('backend.template')
@section('title', 'Edit Jurusan')
@section('content')
    <h2>Edit Jurusan</h2>

    <form action="/editJurusan/{{ $jurusan->id_jurusan }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="namajurusan">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" id="namajurusan"
                        class="form-control @error('nama_jurusan') is-invalid @enderror"
                        value="{{ $jurusan->nama_jurusan }}">
                    @error('nama_jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kuota">Kuota</label>
                    <input type="number" name="kuota" id="kuota" class="form-control @error('kuota') is-invalid @enderror"
                        value="{{ $jurusan->kuota }}">
                    @error('kuota')
                        <div class=" invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ratarata">Rata Rata Raport</label>
                    <input type="number" name="rata_rata" id="ratarata"
                        class="form-control @error('rata_rata') is-invalid @enderror" value="{{ $jurusan->rata_rata }}">
                    @error('rata_rata')
                        <div class=" invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('jurusan') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>

    </form>
@endsection
