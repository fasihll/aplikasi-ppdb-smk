@extends('backend.template')
@section('title', 'Detail Biodata')
@section('content')
    <h2>Detail Biodata <small style="font-size: 15px">Master / Data PPDB / Detail</small></h2>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @if ($biodata)
                    <img src="{{ url('images/' . $biodata->foto . '') }}" alt="" class="img-fluid" width="150"><br>
                @endif
            </div>
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id=""
                    class="form-control @error('nama_lengkap')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->nama_lengkap }}"   disabled @endif>
                @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id=""
                    class="form-control @error('tempat_lahir')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->tempat_lahir }}"
                                                                                                                                                                                                                                        disabled @endif>
                @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id=""
                    class="form-control @error('tanggal_lahir')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->tanggal_lahir }}"  disabled @endif>
                @error('tanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" class="@error('jenis_kelamin')  is-invalid @enderror" id=""
                    value="laki-laki" @if ($biodata and $biodata->jenis_kelamin == 'laki-laki') checked @endif @if ($biodata) disabled
                @endif>
                Laki-Laki
                <input type="radio" name="jenis_kelamin" class="@error('jenis_kelamin')  is-invalid @enderror" id=""
                    value="perempuan" @if ($biodata and $biodata->jenis_kelamin == 'perempuan') checked @endif @if ($biodata) disabled
                @endif>
                Perempuan
                @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" id="" class="form-control @error('alamat')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->alamat }}"  disabled @endif>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Kecamatan</label>
                <input type="text" name="kecamatan" id="" class="form-control @error('kecamatan')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->kecamatan }}"  disabled @endif>
                @error('kecamatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Telepon</label>
                <input type="number" name="telepon" id="" class="form-control  @error('telepon')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->telepon }}"  disabled @endif>
                @error('telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" id=""
                    class="form-control @error('sekolah_asal')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->sekolah_asal }}"
                                                                                                                                                                                                                                 disabled @endif>
                @error('sekolah_asal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">NISN</label>
                <input type="number" name="nisn" id="" class="form-control @error('nisn')  is-invalid @enderror" @if ($biodata) value="{{ $biodata->nisn }}"  disabled @endif>
                @error('nisn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Keterangan Tidak Mampu</label>
                <select name="id_ktm" id="" class="form-control @error('id_ktm')  is-invalid @enderror" @if ($biodata) disabled @endif>
                    @if ($biodata)
                        <option value="{{ $biodata->id_ktm }}" selected hidden>{{ $biodata->nama_ktm }}</option>
                    @else
                        <option selected hidden>Pilih Keterangan tidak mampu</option>
                    @endif
                    @foreach ($ktm as $k)
                        <option value="{{ $k->id_ktm }}">{{ $k->nama_ktm }}</option>
                    @endforeach
                </select>
                @error('id_ktm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Jurusan 1</label>
                <select name="id_jurusan1" id="" class="form-control @error('id_jurusan1')  is-invalid @enderror" @if ($biodata) disabled @endif>
                    @if ($biodata)
                        <option value="{{ $biodata->id_jurusan1 }}" disabled selected hidden>
                            {{ $biodata->jurusan1 }}</option>
                    @else
                        <option disabled selected hidden>Pilih Jurusan 1</option>
                    @endif
                    @foreach ($jurusan as $j)
                        <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                    @endforeach
                </select>
                @error('id_jurusan1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Jurusan 2</label>
                <select name="id_jurusan2" id="" class="form-control @error('id_jurusan2')  is-invalid @enderror" @if ($biodata) disabled @endif>
                    @if ($biodata)
                        <option value="{{ $biodata->id_jurusan2 }}" disabled selected hidden>
                            {{ $biodata->jurusan2 }}</option>
                    @else
                        <option disabled selected hidden>Pilih Jurusan 2</option>
                    @endif
                    @foreach ($jurusan as $j)
                        <option value="{{ $j->id_jurusan }}" @if ($j->kuota < 1) disabled class="text-danger" @endif>
                            {{ $j->nama_jurusan }}</option>
                    @endforeach
                </select>
                @error('id_jurusan2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Upload Foto</label><br>
                <small>Ukuran foto 3x4 </small>
                <input type="file" name="foto" id="" class="form-control @error('foto')  is-invalid @enderror" @if ($biodata) disabled @endif>
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="{{ route('dataPPDB') }}" class="btn btn-danger">Back</a>
        </div>
    </div>



@endsection
